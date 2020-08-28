<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewController extends Controller
{
    public function list(Request $request)
    {
        $news      = News::query();
        $condition = [];
        if ($request->has('start') && $request->has('end')) {
            array_push($condition, ['created_at', '>', $request->start]);
            array_push($condition, ['created_at', '<=', $request->end]);
        }
        if ($request->has('Status')) {
            if ($request->Status != "All") {
                array_push($condition, ['Status', '=', $request->Status]);
            }
        }
        if ($request->has('keyword')) {
            array_push($condition, ['Title', 'Like', '%' . $request->keyword . '%']);
        }
        if ($request->has('orderBy')) {
            $news->orderBy('created_at', $request->orderBy);
        } else {
            $news->orderBy('created_at', "DESC");
        }
        $news = $news->where($condition)->paginate(5)->appends($request->query());
//        dd($news);
        return view('admin.news.list', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'Title' => 'required',
                'Content' => 'required',
                'Author' => 'required',
                'thumbnails' => 'required',
            ]
        );
        $new = DB::transaction(function () use ($request) {
            $new           = new News($request->all());
            $new['Status'] = 1;
            $new['Slug']   = to_slug($request->input('Title'));
            foreach ($request->thumbnails as $thumb) {
                $new['Thumbnails'] .= $thumb . ",";
            }
            $new->save();
            $new['Slug'] = to_slug($new['id'] . ' ' . $request->input('Title'));
            $new->update();
            return $new;
        });
        return redirect(route('admin_new_list'));
    }

    public function edit($id)
    {
        $new = News::find($id);
//        dd($pet);

        if (isset($new)) {
            return view('admin.news.edit', compact('new'));
        }

        return redirect(route('admin_404'));
    }

    public function update($id, Request $request)
    {
        $new = News::find($id);
        if (isset($new)) {
            $new->Title = $request->Title;
            $new->Content = $request->Content;
            $new->Account_id = $request->Account_id;
            $new->Pet_id = $request->Pet_id;
            $new->Status = $request->Status;
            $new->update();
//            dd("updateSuccess");
            return redirect(route('admin_new_list'));
        }
        return redirect(route('admin_404'));
    }

//    public function detail($id)
//    {
//        $new = News::where('id', '=', $id)->first();
//        $account = Account::find($new->Account_id);
//        $pet = Pet::find($new->Pet_id);
//        if (isset($new) && $new != null) {
//            return view('admin.news.detail', compact('new', 'account', 'pet'));
//        }
//        return view('admin.404-admin');
//    }

    public function deactive($id, Request $request)
    {
        $new = News::find($id);
        if (isset($new) && $new != null) {
            News::where('id', '=', $id)->update(['status' => 0]);
            return redirect(route('admin_new_list'));
        }
        return redirect(route('admin_404'));
    }

    public function deactive_multi(Request $request)
    {
        $ids_array = new Array_();
        $ids = $request->ids;
        $ids_array = explode(',', $ids);
        if (isset($ids_array) && $ids_array != null) {
            News::whereIn('id', $ids_array)->update(['status' => 0]);
            return response()->json(['success' => "Post Deactive successfully."]);
        }
        return response()->json(['error' => "Post Deactive unsuccessfully."]);
    }

    public function active(Request $request)
    {
        $id = $request->id;
        $new = News::find($id);
        if (isset($new) && $new != null) {
            News::where('id', '=', $id)->update(['status' => 1]);
            return redirect(route('admin_new_list'));
        }
        return redirect(route('admin_404'));
    }

    public function active_multi(Request $request)
    {
        $ids_array = new Array_();
        $ids = $request->ids;
        $ids_array = explode(',', $ids);
//        return response()->json(['success'=>$ids_array]);
        if (isset($ids_array) && $ids_array != null) {
            News::whereIn('id', $ids_array)->update(['status' => 1]);
            return response()->json(['success' => "Post Active successfully."]);
        }
        return response()->json(['error' => "Account Active unsuccessfully."]);
    }

    public function news_list_data()
    {
        $news = News::where('Status', '=', 1)->paginate(3);
        return view('user.blog.news', compact('news'));
    }
}

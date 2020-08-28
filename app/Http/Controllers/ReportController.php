<?php

namespace App\Http\Controllers;

use App\Pet;
use App\Report;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Array_;

class ReportController extends Controller
{
    public function list(Request $request)
    {
        $reports   = Report::query();
        $condition = [];
        if ($request->has('start') && $request->has('end')) {
            array_push($condition, ['created_at', '>=', $request->start]);
            array_push($condition, ['created_at', '<=', $request->end]);
        }
        if ($request->has('Status')) {
            if ($request->Status != "All") {
                array_push($condition, ['Status', '=', $request->Status]);
            }
        }
        if ($request->has('keyword')) {
            array_push($condition, ['FullName', 'Like', '%' . $request->keyword . '%']);
        }
        if ($request->has('orderBy')) {
            $reports->orderBy('created_at', $request->orderBy);
        } else {
            $reports->orderBy('Status', "ASC");
        }
        $reports = $reports->where($condition)->paginate(5)->appends(request()->query());
//        $reports = Report::where('Status', '=', '3')->get();
//        dd($reports);
        return view('admin.reports.list', compact('reports'));
    }

    public function create()
    {
        return view('admin.reports.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'FullName'    => 'required',
            'Content'     => 'required',
            'Address'     => 'required',
            'PhoneNumber' => 'required',
            'thumbnails'  => 'required',

        ]);
        $report               = $request->all();
        $report['Status']     = 0;
        $report['Thumbnails'] = null;
        foreach ($request->thumbnails as $thumb) {
            $report['Thumbnails'] .= $thumb . ",";
        }
        $report['Thumbnails'] = substr($report['Thumbnails'], 0, -1);
        Report::create($report);

        return redirect(route('admin_report_list'));
    }

    public function edit($id)
    {
        $report        = Report::find($id);
        $report_pet_id = collect($report->Pets)->map(function ($item) {
            return $item->id;
        });
        if (isset($report) && $report != null) {
            $pets = Pet::where('Status', '=', '1')->get();
            return view('admin.reports.edit', compact('report', 'pets', 'report_pet_id'));
        }
        return redirect(route('admin_404'));
    }

    public function detail($id)
    {
        $report = Report::find($id);
        if (isset($report) && $report != null) {
            return view('admin.reports.edit', compact('report'));
        }
        return redirect(route('admin_404'));
    }

    public function update(Request $request, $id)
    {
//        dd($request);
        $request->validate([
            'FullName'    => 'required',
            'Content'     => 'required',
            'Address'     => 'required',
            'PhoneNumber' => 'required',
            'thumbnails'  => 'required',
        ]);
        $report               = $request->all();
        $report['Thumbnails'] = null;
        foreach ($request->thumbnails as $thumb) {
            $report['Thumbnails'] .= $thumb . ",";
        }
        $report['Thumbnails'] = substr($report['Thumbnails'], 0, -1);
        Report::find($id)->update($report);
        return redirect(route('admin_report_list'));
    }

    public function pet_update(Request $request, $id)
    {
        $request->validate([
            'PetIds' => 'required',
        ]);
        $report = Report::find($id);
//        dd($report);
        if (isset($report) && $report != null) {
            $report->Pets()->detach();
            $report->Pets()->attach($request->PetIds);
            return redirect(route('admin_report_edit', $id));
        }
        return redirect(route('admin_404'));
    }

    public function handle($id)
    {
        $report = Report::find($id);
        if (isset($report) && $report != null) {
            $report->update(['Status' => '1']);
            return back();
        }
        return redirect(route('admin_404'));
    }

    public function done($id)
    {
        $report = Report::find($id);
        if (isset($report) && $report != null) {
            $report->update(['Status' => '2']);
            return back();
        }
        return redirect(route('admin_404'));
    }

    public function done_multi(Request $request)
    {
        $ids_array = new Array_();
        $ids       = $request->ids;
        $ids_array = explode(',', $ids);
        Report::where('Status', '=', '1')->whereIn('id', $ids_array)->update(['Status' => 2]);
        return response()->json(['success' => "Hoàn thành chuyển đổi trạng thái."]);
    }

    public function decline_multi(Request $request)
    {
        $ids_array = new Array_();
        $ids       = $request->ids;
        $ids_array = explode(',', $ids);
        Report::where('Status', '=', '0')->whereIn('id', $ids_array)->update(['Status' => 3]);
        return response()->json(['success' => "Hoàn thành chuyển đổi trạng thái."]);
    }

    public function acept_multi(Request $request)
    {
        $ids_array = new Array_();
        $ids       = $request->ids;
        $ids_array = explode(',', $ids);
        Report::where('Status', '=', '0')->whereIn('id', $ids_array)->update(['Status' => 1]);
        Report::where('Status', '=', '3')->whereIn('id', $ids_array)->update(['Status' => 1]);
        return response()->json(['success' => "Hoàn thành chuyển đổi trạng thái."]);
    }
}

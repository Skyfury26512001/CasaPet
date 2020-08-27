<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function sendMail(Request $request)
    {
        $data = array('name' => "$request->name", 'contact_message' => "$request->contact_message", 'transaction' => 'as');
        Mail::send('user.contact.email', $data, function ($message) use ($request) {
            $message->to("$request->email", "$request->name")->subject("$request->subject");
            $message->from("petscasavn@gmail.com", "Pet Casa");
        });
        return redirect(route('success'));
    }

    public function report_send(Request $request)
    {
//        dd($request);
        $report = DB::transaction(function () use ($request) {
            $request->validate([
                'Messenger'   => 'required',
                'FullName'    => 'required',
                'PhoneNumber' => 'required|numeric',
                'Address'     => 'required',
                'thumbnails'  => 'required',
            ]);
            $report            = new Report($request->all());
            $report['Content'] = $request->Messenger;
            foreach ($request->thumbnails as $thumb) {
                $report['Thumbnails'] .= $thumb . ",";
            }
            $report['Status'] = 0;
            $report->save();

            $data = array('name' => "$request->FullName", 'contact_message' => "$request->Messenger", 'transaction' => 'as');
            Mail::send('user.contact.email', $data, function ($message) use ($request) {
                $message->to("petscasavn@gmail.com", "Pet Casa")->subject("Báo cáo yêu cầu hỗ trợ");
                $message->from("t1908e@gmail.com", "$request->FullName");
            });

            $contentTele     = "\n + Tại khu vực : $request->Address " . "\n + Họ và tên : $request->FullName " . "\n + Số điện thoại : $request->PhoneNumber" . "\n + Nội dung : $request->Messenger";
            $contentTeleSend = urlencode("Báo cáo mới \n- Từ: $request->FullName  \n- Nội dung: " . $contentTele);
            $roomId          = -1001421358819;
            $bot_token       = "bot1325493252:AAHl6t46WUA-xB2Q6VeqC8CPb-vRmqcy4DI";
//            $url = "https://api.telegram.org/bot1325493252:AAHl6t46WUA-xB2Q6VeqC8CPb-vRmqcy4DI/sendMessage?chat_id=-1001421358819&text='Xin Chào'";
            $url     = "https://api.telegram.org/$bot_token/sendMessage?chat_id=$roomId&text=$contentTeleSend";
            $urldone = file_get_contents($url);
            return $report;
        });
        dd($report);
    }
}

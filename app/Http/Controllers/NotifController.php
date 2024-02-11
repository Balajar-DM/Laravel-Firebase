<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Messaging\CloudMessage;

class NotifController extends Controller
{
    public function index(Request $request)
    {
        $messaging = app('firebase.messaging');
        //Isi dengan device token
        $deviceToken = "eq4WT9yjQPeYE-HHTxphfP:APA91bHcQskNeLvsZ0HHBYa_VRw8q93oT5aKvaEIGCPXX1OFyTVXTTQyT5GswvDg2-8VbfJ2wNaQNeUoEfUjrEP-DgrJcmU4nwdxMrfBghb7pOlV39S6mQg7itlKU4cy3Ia553ZIRMTX";


        $message = CloudMessage::withTarget('token', $deviceToken)
            ->withNotification([
                'title' => $request->judul,
                'body'  => $request->isi,
            ]);
        $messaging->send($message);
        return response()->json(['sending succesfuly']);
    }
}

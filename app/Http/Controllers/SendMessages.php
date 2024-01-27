<?php

namespace App\Http\Controllers;

use Kreait\Firebase\Messaging\CloudMessage;

class SendMessages extends Controller
{

    public function index()
    {
        return view('form');
    }

    public function sending()
    {
        $topic = 'a-topic';
        $notification = ['title' => 'Notification title', 'body' => 'Notification body'];

        $message = CloudMessage::withTarget('topic', $topic)
            ->withNotification($notification) // optional
        ;

        $messaging->send($message);
    }
}

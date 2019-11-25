<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class MeetingController extends Controller
{
    
    public function index()
    {
    
    }

    public function store(Request $request)
    {
        $title = $request->input('title');
        $description = $request->input('description');
        $time = $request->input('time');
        $user_id = $request->input('user_id');
        $meeting = [
            'title' => $title,
            'description' => $description,
            'time' => $time,
            'user_id' => $user_id,
            'view_meeting' => [
                'href' => 'api/v1/meeting/1',
                'method' => 'GET'
            ]
        ];
        $response = [
            'msg' => 'Meeing Created',
            'data' => $meeting
        ];
        return response()->json($response);
    }
}
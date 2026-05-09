<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\NotificationService;

class NotificationController extends Controller
{
    public function send(Request $request, NotificationService $service)
    {
        $data = $request->validate([
            'type' => 'required|string',
            'recipient' => 'required|string',
            'message' => 'required|string',
        ]);

        return response()->json(
            $service->send($data)
        );
    }
}
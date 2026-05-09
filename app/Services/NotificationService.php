<?php
namespace App\Services;

use App\Models\Notification;

class NotificationService
{
    public function send(array $data)
    {
        $notification = Notification::create([
            'type' => $data['type'],
            'recipient' => $data['recipient'],
            'message' => $data['message'],
            'status' => 'pending'
        ]);

        try {
            // SIMPLE MOCK SEND LOGIC
            // Later replace with real SMS/email APIs

            $notification->update([
                'status' => 'sent'
            ]);

        } catch (\Exception $e) {
            $notification->update([
                'status' => 'failed'
            ]);
        }

        return $notification;
    }
}
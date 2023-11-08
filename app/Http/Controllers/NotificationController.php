<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\student;
use Illuminate\Support\Facades\Notification;

use App\Notifications\NewUserNotification;

class NotificationController extends Controller
{
    //



    public function index(){
        $student = student::find(1); // Change 1 to the student's ID you want to notify.

        if ($student) {
            // Send the notification to the student.
            $student->notify(new NewUserNotification);
    
            // You can also pass additional data to the notification if needed.
            // $student->notify(new NewUserNotification($additionalData));
    
            return 'Notification sent to the student.';
        } else {
            return 'Student not found.';
        }
    }
}

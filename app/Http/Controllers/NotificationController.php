<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\student;
use Illuminate\Support\Facades\Notification;

use App\Notifications\NewUserNotification;

class NotificationController extends Controller
{
    //



    public function usingNotify(){
        $student = student::find(1); // Change 1 to the student's ID you want to notify.

        if ($student) {
            // Send the notification to the student.
            $student->notify(new NewUserNotification);
    
            // You can also pass additional data to the notification if needed.
            // $student->notify(new NewUserNotification($additionalData));
    
            echo 'Notification sent to the student.',$student;
        } else {
            return 'Student not found.';
        }
    }

    public function usingFacade(){
        $student = student::find(1); // Change 1 to the student's ID you want to notify.

        if ($student) {
            // Send the notification to the student.
            Notification::send($student,new NewUserNotification);
    
            // You can also pass additional data to the notification if needed.
            // $student->notify(new NewUserNotification($additionalData));
    
            echo 'Notification sent to the student.',$student;
        } else {
            return 'Student not found.';
        }
    }
}

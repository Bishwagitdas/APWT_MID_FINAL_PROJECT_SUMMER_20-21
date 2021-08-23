<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
     public function viewAppointment(){
        return view('doctor.appointment');
     }
 
}

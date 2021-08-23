<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentdetailsController extends Controller
{
     public function viewAppointmentdetails(){
        return view('doctor.appointmentdetails');
     }
 
}

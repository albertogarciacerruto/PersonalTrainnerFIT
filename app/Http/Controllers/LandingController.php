<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Area;
use App\Contact;
use App\Plan;
use App\About;
use Mail;

class LandingController extends Controller
{
    public function about()
    {
        $about = \DB::table('abouts')->where('id', 1)->first();
        return view('about', compact('about'));
    }

    public function work()
    {
        return view('work');
    }

    public function contact()
    {
        $contact = \DB::table('contacts')->where('id', 1)->first();
        return view('contact', compact('contact'));
    }

    public function send(Request $request)
    {
        $name = $request->name;
        $phone = $request->phone;
        $email = $request->email;
        $description = $request->description;

        $subject = "Pregunta via Web";
        $for = "albertogarciacerruto@gmail.com";
        \Mail::send('email',$request->all(), function($msj) use($subject,$for){
            $msj->from("noreply-tcfit@gmail.com","TCFIT");
            $msj->subject($subject);
            $msj->to($for);
        });

        $contact = \DB::table('contacts')->where('id', 1)->first();
        return view('contact', compact('contact'));

    }
}

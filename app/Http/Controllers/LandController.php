<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Plan;
use App\Area;
use App\Offer;

class LandController extends Controller
{
    public function slides()
    {
        $slides = \DB::table('slides')->get();
        return view('list_slide', compact('slides'));
    }

    public function slide()
    {
        return view('slide');
    }

    public function register_slide(Request $request)
    {
        $title = $request->title;
        $subtile = $request->subtitle;

        $slide = Slide::orderBy('id', 'desc')->first();

        if (is_null($slide)) {
            $nuevo = Slide::create([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
            ]);
        
            if ($request->hasFile('image'))
            {
                $photo = $request->file('image')->store('public');
                $image = \DB::table('slides')->where('id','=', $nuevo->id)->update(['image' => $photo]);
            }
        }
        elseif($title === $slide->title && $subtitle === $slide->subtitle){
        return $this->slides();
        }
        else {
            $nuevo = Slide::create([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
            ]);

            if ($request->hasFile('image'))
            {
                $photo = $request->file('image')->store('public');
                $image = \DB::table('slides')->where('id','=', $nuevo->id)->update(['image' => $photo]);
            }      
        }

        return redirect('slides');
    }

    public function destroy_slide($id_slide)
    {
        $slide = \DB::table('slides')->where('id', '=', decrypt($id_slide))->delete();
        return redirect('slides');
    }


    //PARA LOS PLANES

    public function plans()
    {
        $plans = \DB::table('plans')->get();
        return view('list_plan', compact('plans'));
    }

    public function plan()
    {
        return view('plan');
    }

    public function register_plan(Request $request)
    {
        $title = $request->title;
        $body = $request->body;

        $plan = Plan::orderBy('id', 'desc')->first();

        if (is_null($plan)) {
            $nuevo = Plan::create([
                'title' => $request->title,
                'body' => $request->body,
            ]);
        
            if ($request->hasFile('image'))
            {
                $photo = $request->file('image')->store('public');
                $image = \DB::table('plans')->where('id','=', $nuevo->id)->update(['image' => $photo]);
            }
        }
        elseif($title === $plan->title && $body === $plan->body){
        return $this->plans();
        }
        else {
            $nuevo = Plan::create([
                'title' => $request->title,
                'body' => $request->body,
            ]);

            if ($request->hasFile('image'))
            {
                $photo = $request->file('image')->store('public');
                $image = \DB::table('plans')->where('id','=', $nuevo->id)->update(['image' => $photo]);
            }      
        }

        return redirect('plans');
    }

    public function destroy_plan($id_plan)
    {
        $plan = \DB::table('plans')->where('id', '=', decrypt($id_plan))->delete();
        return redirect('plans');
    }

    //PARA COMO SUSCRIBIRSE - SECCION 3

    public function areas()
    {
        $areas = \DB::table('areas')->get();
        return view('list_area', compact('areas'));
    }

    public function area()
    {
        return view('area');
    }

    public function register_area(Request $request)
    {
        $title = $request->title;
        $body = $request->body;

        $area = Area::orderBy('id', 'desc')->first();

        if (is_null($area)) {
            $nuevo = Area::create([
                'title' => $request->title,
                'body' => $request->body,
            ]);
        
            if ($request->hasFile('image'))
            {
                $photo = $request->file('image')->store('public');
                $image = \DB::table('areas')->where('id','=', $nuevo->id)->update(['image' => $photo]);
            }
        }
        elseif($title === $area->title && $body === $area->body){
        return $this->plans();
        }
        else {
            $nuevo = Area::create([
                'title' => $request->title,
                'body' => $request->body,
            ]);

            if ($request->hasFile('image'))
            {
                $photo = $request->file('image')->store('public');
                $image = \DB::table('areas')->where('id','=', $nuevo->id)->update(['image' => $photo]);
            }      
        }

        return redirect('areas');
    }

    public function destroy_area($id_area)
    {
        $area = \DB::table('areas')->where('id', '=', decrypt($id_area))->delete();
        return redirect('areas');
    }

    //PARA COMO OFERTAS- SECCION 4

    public function offers()
    {
        $offers = \DB::table('offers')->get();
        return view('list_offer', compact('offers'));
    }

    public function offer()
    {
        return view('offer');
    }

    public function register_offer(Request $request)
    {
        $title = $request->title;
        $body = $request->body;

        $offer = Offer::orderBy('id', 'desc')->first();

        if (is_null($offer)) {
            $nuevo = Offer::create([
                'title' => $request->title,
                'body' => $request->body,
            ]);
        
            if ($request->hasFile('image'))
            {
                $photo = $request->file('image')->store('public');
                $image = \DB::table('offers')->where('id','=', $nuevo->id)->update(['image' => $photo]);
            }
        }
        elseif($title === $offer->title && $body === $offer->body){
        return $this->plans();
        }
        else {
            $nuevo = Offer::create([
                'title' => $request->title,
                'body' => $request->body,
            ]);

            if ($request->hasFile('image'))
            {
                $photo = $request->file('image')->store('public');
                $image = \DB::table('offers')->where('id','=', $nuevo->id)->update(['image' => $photo]);
            }      
        }

        return redirect('offers');
    }

    public function destroy_offer($id_offer)
    {
        $offer = \DB::table('offers')->where('id', '=', decrypt($id_offer))->delete();
        return redirect('offers');
    }

    //PARA COMO ABOUTS US 

    public function about()
    {
        $about = \DB::table('abouts')->where('id', 1)->first();
        return view('about_page', compact('about'));
    }

    public function update_about(Request $request)
    {
        $id = $request->id;
        $title = $request->title;
        $body = $request->body;
        $image = $request->image;
        $subtitle = $request->subtitle;
        $photo = $request->photo;
        $name = $request->name;

        $data = \DB::table('abouts')->where('id','=', $id)->update(['title' => $title, 'body' => $body, 'subtitle' => $subtitle, 'name' => $name]);
        if ($request->hasFile('image'))
        {
            $photo = $request->file('image')->store('public');
            $image = \DB::table('abouts')->where('id','=', $id)->update(['image' => $photo]);
        }
        if ($request->hasFile('photo'))
        {
            $photo = $request->file('photo')->store('public');
            $image = \DB::table('abouts')->where('id','=', $id)->update(['photo' => $photo]);
        }

        return redirect('about');
    }

    //PARA COMO CONTACT US 

    public function contact()
    {
        $contact = \DB::table('contacts')->where('id', 1)->first();
        return view('contact_page', compact('contact'));
    }

    public function update_contact(Request $request)
    {
        $id = $request->id;
        $title = $request->title;
        $image = $request->image;
        $subtitle = $request->subtitle;
        $address = $request->address;
        $email = $request->email;
        $phone = $request->phone;

        $data = \DB::table('contacts')->where('id','=', $id)->update(['title' => $title, 'subtitle' => $subtitle, 'address' => $address, 'phone' => $phone, 'email' => $email]);
        if ($request->hasFile('image'))
        {
            $photo = $request->file('image')->store('public');
            $image = \DB::table('contacts')->where('id','=', $id)->update(['image' => $photo]);
        }

        return redirect('contact');
    }

    //PARA USUARIOS

    public function users()
    {
        $users = \DB::table('users')->get();
        return view('list_user', compact('users'));
    }

    public function destroy_user($id_user)
    {
        $user = \DB::table('users')->where('id', '=', decrypt($id_user))->delete();
        return redirect('users');
    }

}

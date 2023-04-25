<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\industry;
use App\Models\Foriegn;
use App\Models\category;
use App\Models\primaryEvent;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Session\Session;

class UserLoginController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        $userlogin = User::where('email', $request->email)->where('password', $request->password);
        return view('dashboard');
        // if (Auth::attempt($credentials)) {
        //     dd('login');
        //     return redirect()->intended('dashboard')
        //                 ->withSuccess('Signed in');
        // }
        // dd('no');
        // return redirect("custsom-login")->withSuccess('Login details are not valid');
    }

    public function industry(Request $request)
    {
        $request->validate([
            'name'  => 'required',
        ]);

        $add_ind = new industry();
        $add_ind->name = $request->name;
        $add_ind->save();
        return redirect()->route('show-industry')->with('success', 'add successfully');
    }
    public function AddCategory(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'industry' => 'required',
        ]);

        $add_category = new category();
        $add_category->name = $request->name;
        $add_category->industry_id = $request->industry;
        $add_category->save();
        return redirect()->route('show-category')->with('success', 'add category successfully');
    }

    public function Showindustry()
    {
        $all_industry = industry::all();
        return view('showindustry', compact('all_industry'));
    }

    public function industryform()
    {
        return view('industry');
    }
    public function CategoryForm()
    {
        $all_industry = industry::all();
        return view('category', compact('all_industry'));
    }

    public function ShowCategory()
    {
        $all_category = category::all();
        return view('show-category', compact('all_category'));
    }
    public function PrimaryForm()
    {
        $all_category = category::All();
        $all_industry = industry::all();
        return view('primaryevent', compact('all_category', 'all_industry'));
    }
    public function AddPrimary(Request $request)
    {
        $request->validate([
            'code'   => 'required',
            'event_date'   => 'required',
            'name'   => 'required',
            'industry_id'   => 'required',
            'category_id'   => 'required',
        ]);

        $add_primary = new primaryEvent();
        $add_primary->code = $request->code;
        $add_primary->date = $request->event_date;
        $add_primary->name = $request->name;
        $add_primary->industry_id = $request->industry_id;
        $add_primary->category_id = $request->category_id;
        $add_primary->save();
        return redirect()->route('show-primary')->with('success', 'add primary successfully ');
    }
    public function ShowPrimary()
    {
        $all_priamry = primaryEvent::all();
        return view('show-primary', compact('all_priamry'));
    }
    public function AddForiegn($id)
    {
        $primary_id = $id;
        $all_category = category::all();
        $all_industry = industry::all();
        return view('add-foriegn', compact('primary_id', 'all_category', 'all_industry'));
    }
    public function AddForiegnData(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'code'  => 'required',
            'r_event_date'  => 'required',
            'e_event_name'  => 'required',
            'industry_id'  => 'required',
            'category_id'  => 'required',
        ]);
        $all_foriegn = new Foriegn();
        $all_foriegn->code = $request->code;
        $all_foriegn->r_event_date = $request->r_event_date;
        $all_foriegn->e_event_name = $request->e_event_name;
        $all_foriegn->industry_id = $request->industry_id;
        $all_foriegn->category_id = $request->category_id;
        $all_foriegn->primary_id = $request->primary_id;
        $all_foriegn->save();
        return redirect()->route('show-foriegn', $request->primary_id)->with('success', 'foriegn add successfully');
    }

    public function ShowForiegn($id)
    {
        $show_foriegn = Foriegn::where('primary_id', $id)->get();
        return view('forigenevent', compact('show_foriegn'));
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}

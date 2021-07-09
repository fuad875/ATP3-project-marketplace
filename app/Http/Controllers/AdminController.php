<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //echo "mesba";
       return view('admin.create_manager');
    }
     public function submit(Request $req)
    {
         $user = new User;

        $user->username = $req->username;
        $user->email = $req->email;
        $user->phone = $req->phone;
        $user->adress = $req->adress;
        $user->type = "1";
        $user->password =$req->password;
        $user->image="";
        $user->save();
       return view('admin.create_manager');
    }
    public function dash()
    {
        echo "mesba";
      // return view('admin.dashboard');
    }
    public function profile()
    {
        //echo "mesba";
       return view('admin.profile');
    }
    public function projectlist()
    {
        //echo "mesba";
       return view('admin.projectlist');
    }
    public function contestlist()
    {
        //echo "mesba";
       return view('admin.contestlist');
    }
    public function payment()
    {
        //echo "mesba";
       return view('admin.create_manager');
    }
    public function sellerlist()
    {
        $users = User::all();
        // redirect()->route('/protfolio')->with('user',$user);
         return view('admin.sellerlist')->with('users',$users);
       //return view('admin.sellerlist');
    }
    public function buyerlist()
    {
        $users = User::all();
       return view('admin.buyerlist')->with('users',$users);
    }

public function managerlist()
    {
        $users = User::all();
       return view('admin.managerlist')->with('users',$users);
    }
    public function managerdetails($id)
    {  
        $user = User::find($id);
       return view('admin.managerdetails')->with('user',$user);
    }
     public function buyerdetails($id)
    {  
        $user = User::find($id);
       return view('admin.managerdetails')->with('user',$user);
    }
     public function sellerdetails($id)
    {  
        $user = User::find($id);
       return view('admin.managerdetails')->with('user',$user);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo "mesba";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin $admin)
    {
        //
    }
}

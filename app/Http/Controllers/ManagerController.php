<?php

namespace App\Http\Controllers;

use App\Models\manager;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manager.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    
    public function create()
    {
        //echo "mesba";
       return view('manager.create_manager');
    }
    public function dash()
    {
        echo "mesba";
      // return view('admin.dashboard');
    }*/
    public function profile()
    {
        //echo "mesba";
       return view('manager.profile');
    }
    public function projectlist()
    {
        //echo "mesba";
       return view('manager.projectlist');
    }
    public function contestlist()
    {
        //echo "mesba";
       return view('manager.contestlist');
    }
    public function payment()
    {
        //echo "mesba";
       return view('manager.create_manager');
    }
    public function sellerlist()
    {
        //echo "mesba";
       return view('manager.sellerlist');
    }
    public function buyerlist()
    {
        //echo "mesba";
       return view('manager.buyerlist');
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

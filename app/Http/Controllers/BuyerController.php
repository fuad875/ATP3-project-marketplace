<?php

namespace App\Http\Controllers;

use App\Models\buyer;
use Illuminate\Http\Request;

class BuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req){
       
         return view('buyer.index');
             }
  public function dashboard(Request $req){
       
 return view('buyer.index');
             
   }
   
    
    public function profile(Request $req){
        
        return view('buyerProfile.index');
             
   }

     public function postProject(Request $req){
       
        return view('buyer.postproject');
             
   }

     public function postContest(Request $req){
       
        return view('buyer.postcontest');
             
   }


          
   public function bidlist(Request $req){
       
     return view('buyer.bidlist');
          
   }
   public function contestlist(Request $req){
       
     return view('buyer.contestlist');
          
   }

   /* public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  /*  public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     /*public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    /* public function show(buyer $buyer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\buyer  $buyer
     * @return \Illuminate\Http\Response
     */
     /*public function edit(buyer $buyer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\buyer  $buyer
     * @return \Illuminate\Http\Response
     */
   /*  public function update(Request $request, buyer $buyer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\buyer  $buyer
     * @return \Illuminate\Http\Response
     */
   /*  public function destroy(buyer $buyer)
    {
        //
    }
    */
}

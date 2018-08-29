<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->middleware('AgeMiddleware');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function queries() {

        //DB query to get a count of all users from database who are currently active and their age is above 25
        $query1 = User::where('active',1)->where('age','>',25)->count();

        //DB query to get all users from database with select only 3 fields from the row, id, username, name and no other fields 
        $query2 = User::all('id','username','name');

        // DB query to get all users from database where the age is greater than 30 or where id is less than 10
        $query3 = User::where('age','>',30)->orWhere('id','<',10)->get();

        //DB query to get 10 active users with age between 20 to 30 from database but get the 10 users after skipping the first 15 users
        $query4 = User::where('age','>','20')->where('age','<',30)->skip(15)->take(10);
    }
}

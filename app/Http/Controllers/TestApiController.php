<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Api;
class TestApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return "Responce from Controller";
        return ["name" =>"amaar", "email" => "amaar@gmail.com"];
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
        //dd($request->all());
         $api = new api;
     $api->name = $request->name;
         $api->email = $request->email;
         $api->file=$request->file->store('appppppdoc');
        
         $api->save();
        
         return response([
             "status" => true,
             "message" => "data has been added",
         ], 200 );
       

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        if ($request->search) {
            $api = api::where("name" , $request->search)->first();
        }else{
            $api = Api::all();
           
        }
        return response([
            "status" => true,
            'message' => "show data",
             'api' => $api,
        ],200);
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        //dd($request->all());
    //     $result=$request->file('file')->store('apidoc');
    //    // dd($result);
    //     return ["result" =>$result];
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
}

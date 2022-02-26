<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inhous;

class InhouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        return view('index');
    }

    public function serch(Request $req)
    {
        $lang = $req->lang;
        $inhouse = new Inhous;
        $results = $inhouse->simpleSerch($lang);

        if($results == null){
            return "言語に一致した条件がありませんでした。";  
        }

 
        return view('result',['results' =>$results]);
    }

    // public function serch(Request $req)
    // {
    //     // var_dump($req);
    //     // exit;

    //     // $inhouse = new Inhous;
    //     // $result = $inhouse->simpleSerch($req);
        
 
    //     return view('hello.result');
    // }

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
        //
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
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inhous;
use App\Http\Livewire\Counter;

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

        return view('result',['results' =>$results]);
    }

   public function overview(Request $req)
    {
        $id = $req->id;
        $inhouse = new Inhous;
        $results = $inhouse->overview($id);
        
        return view("overview",['result' =>$results]);
        
    }

    public function freesearch(Request $req)
    {
        $word = $req->where;
        $type = $req->Radios;
        $inhouse = new Inhous;
        $results = $inhouse->freesearch($word,$type);
        
        return view("result",['results' =>$results]);
        
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

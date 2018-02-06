<?php

namespace App\Http\Controllers;

use App\Zupanija;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ZupanijaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
         $z= Zupanija::all();
        return view("zupanija.index",['z' => $z]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * Ovo vraća samo JEDNU županiju i sve njene detalje
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
           $z= Zupanija::find($id);
        return view("zupanija.show",['z' => $z]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}

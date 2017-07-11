<?php

namespace App\Http\Controllers\Morador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Morador\Morador;
use App\User;

class MoradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     private $morador;
     private $user;

     public function __construct()
     {
         $this->middleware('auth');
     }


    public function index()
    {
        $title = ' - Moradores';
        $moradores = $this->morador->all();
        $users = $this->user->all();
        return view('Morador.index',compact('title','moradores','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = ' - Cadastro Morador';
        $types = ['admin','morador','sindico','funcionario'];
        return view('admin.register',compact('title','types'));
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

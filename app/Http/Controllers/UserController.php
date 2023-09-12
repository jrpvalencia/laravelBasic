<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Rol;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();

        return view('user.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rol = Rol::all();
       
        return view('user.create',['rol'=> $rol]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name=$request->name;
        $user->lastName=$request->lastName;
        $user->typeDocument=$request->typeDocument;
        $user->document=$request->document;
        $user->phone=$request->phone;
        $user->idRol=$request->idRol;
        $user->email=$request->email;
        $user->password=$request->password;

        $user->save();

        return Redirect()->route('user.index',$user);
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
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->name = $request->name;
        $user->lastName = $request->lastName;
        $user->typeDocument = $request->typeDocument;
        $user->document = $request->document;
        $user->idRol = $request->idRol;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();

        return redirect()->route('user.index', $user);
    }
    public function edit(User $user){

        $rol = Rol::all();

        return view('user.edit', compact('user', 'rol'));

       
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('succes','Registro eliminado correctamente');
    }
}

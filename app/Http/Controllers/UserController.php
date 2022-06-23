<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $users=User::orderBy('id');
        return view('user.edit',compact('users'));
    }
    public function edit($id)
    {
        //
        $user=user::find($id);
        return view('user.edit',compact('users'));

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
        $this->validate($request,[ 'nombre'=>'required', 'email'=>'required', 'paterno'=>'required', 'materno'=>'required', 'fecha_nac'=>'required', 'id_membresia'=>'required' ]);

        user::find(Auth::user()->id)->update($request->all());
        return redirect()->route('user.edit')->with('success','Registro actualizado satisfactoriamente');

    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}

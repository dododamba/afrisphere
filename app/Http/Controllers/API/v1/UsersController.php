<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::orderBy('created_at','desc')->get();

        defaultLog(User::class);
        return response()->json([
            'items' => $data
        ]);
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
    public function storeTech(Request $request)
    {
        $data =  [
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => bcrypt('@cpsmart2020'),
            'role' => 2,
            'slug'  => 'cp-smart-item-'.str_randomize(25),
            'remember_token' => 'adghhdyyyfkj8ds9e8ea8s9rrf6633qeeg',
            'confirm_token' => 'ad87123yyyfkj8ds9e8ea8s9rrf6633qeeg',
            'reset_token' => "adghhdyyyfkj8ds9e8ea8s9rrf6633qeeg",
        ];

        if (User::create($data)) {
            return response()->json([
                'message' => 'Technicie, enregistré avec succès !',
                'status' => true
            ],200);
        }

        return response()->json([
            'message' => 'Erreur d\'enregistrement !',
            'status' => false
        ],422);
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

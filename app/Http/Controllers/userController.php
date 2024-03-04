<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $petugas=User::all();
        $katakunci=$request->katakunci;
        $jumlahbaris=4;
        if(strlen($katakunci)){
            $data = User::where('id','like',"%$katakunci%")
            ->orWhere("nama","like","%$katakunci%")
            ->paginate($jumlahbaris);
        }else{


        $data = User::orderBy('id','desc')->paginate(5);
        }
        return view('user.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create')->with('success','Berhasil Menambahkan Data');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([

                'nama'=> 'required',
                'email'=> 'required',
                'role'=> 'required',
                'password'=> 'required',

        ]




        );

        $data['password']= Hash::make($data['password']);

        User::create($data);
        return redirect('/user');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = User::where('id', $id)->first();
        return view('user.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([

            'nama'=>'required',
            'email'=>'required',
            'password'=>'required',
            'role'=>'required',
        ],[

            'nama.required'=>'nama wajib diisi',
            'role.required'=>'role wajib diisi',
        ]
        );


        $data = [

            'nama'=> $request->nama,
            'email'=> $request->email,
            'password'=> $request->password,
            'role'=> $request->role,
        ];
        if ($request->has('password')){
            $data['password'] = Hash::make($request->input('password'));
        }

        User::where('id',$id)->update($data);
        return redirect()->to('user')->with('success','Berhasil Mengubah Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::where('id',$id)->delete();
        return redirect()->to('user')->with('success', 'Berhasil Menghapus Data');
    }
}

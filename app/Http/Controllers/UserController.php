<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'type_user' => 'required',
        ];

        $messages = [
            'name.required' => 'Nama User wajib diisi.',
            'email.required' => 'Email pilih kategori.',
            'email.email' => 'Email tidak valid.',
            'email.unique' => 'Email yang dimasukkan sudah terdaftar.',
            'type_user.required' => 'Wajib memilih tipe user.',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        if ($request->input('password')) {
            $password = bcrypt($request->password);
        } else {
            $password = bcrypt('password');
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'type_user' => $request->type_user,
            'password' => $password,
        ]);

        return redirect()->back()->with('user_store', 'User berhasil ditambahkan');
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
        $user = User::findOrFail($id);
        return view('admin.user.edit', compact('user'));
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
        $rules = [
            'name' => 'required',
            'type_user' => 'required',
        ];

        $messages = [
            'name.required' => 'Nama User wajib diisi.',
            'type_user.required' => 'Wajib memilih tipe user.',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'type_user' => 'required',
        ]);

        if ($request->input('password')) {
            $user_data = [
                'name' => $request->name,
                'type_user' => $request->type_user,
                'password' => bcrypt($request->password),
            ];
        } else {
            $user_data = [
                'name' => $request->name,
                'type_user' => $request->type_user,
            ];
        }

        $user = User::findOrFail($id);
        $user->update($user_data);

        return redirect()->route('user.index')->with('user_update', 'User berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back()->with('user_delete', 'User berhasil dihapus');
    }
}

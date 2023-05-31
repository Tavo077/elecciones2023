<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;


class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:usuarios.index');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.usuarios.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $user = User::create($request->only('name', 'email', 'dpi') + [
            'password' => bcrypt($request->input('password'))
        ]);

        return redirect()->route('usuarios.index')->with('info', 'El usuario a sido registrado');
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
    public function edit(User $usuario)
    {
        $roles= Role::all();
        return view('admin.usuarios.edit', compact('usuario', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $usuario)
    {
        $data = $request->only("name", "email", "dpi");
        if (trim($request->password) == '') {
            $data = $request->except('password');
        } else {
            $data = $request->all();
            $data['password'] = bcrypt($request->password);
        }

        $usuario->roles()->sync($request->roles);
        $usuario->update($data);

        return redirect()->route('usuarios.index')->with('info', 'Se actualizo la información del usuario exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

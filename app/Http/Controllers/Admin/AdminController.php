<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Contact::all();
        return view('admin.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'primeiro_nome' => ['required', 'string', 'max:100'],
            'segundo_nome' => ['required', 'string', 'max:100'],
            'data_nascimento' => ['required', 'date'],
            'endereco' => ['required', 'string', 'max:255'],
            'telefone' => ['required', 'integer'],
            'complemento' => ['required', 'string', 'max:60'],
            'cidade' => ['required', 'string', 'max:255'],
            'estado' => ['required', 'string', 'max:2'],
        ]);
        
        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator);
        }

        $user = new Contact();
        $user->primeiro_nome = $request->primeiro_nome;
        $user->segundo_nome = $request->segundo_nome;
        $user->data_nascimento = $request->data_nascimento;
        $user->endereco = $request->endereco;
        $user->telefone = $request->telefone;
        $user->complemento = $request->complemento;
        $user->cidade = $request->cidade;
        $user->estado = $request->estado;

        $credencialsUser = new User();
        $credencialsUser->name = $user->primeiro_nome . ' '. $user->segundo_nome;
        $credencialsUser->user_name = Str::lower($user->primeiro_nome) . Str::lower($user->segundo_nome);

        if ($user->save() && $credencialsUser->save()) {

            return redirect()->route('admin.user.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $user)
    {
        return view('admin.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $user)
    {
        return view('admin.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $user)
    {
        $validator = Validator::make($request->all(), [
            'primeiro_nome' => ['required', 'string', 'max:100'],
            'segundo_nome' => ['required', 'string', 'max:100'],
            'data_nascimento' => ['required', 'date'],
            'endereco' => ['required', 'string', 'max:255'],
            'telefone' => ['required', 'integer'],
            'complemento' => ['required', 'string', 'max:60'],
            'cidade' => ['required', 'string', 'max:255'],
            'estado' => ['required', 'string', 'max:2'],
            'password' => ['required', 'confirmed'],
        ]);
        
        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator);
        }
        
        $user->primeiro_nome = $request->primeiro_nome;
        $user->segundo_nome = $request->segundo_nome;
        $user->data_nascimento = $request->data_nascimento;
        $user->endereco = $request->endereco;
        $user->telefone = $request->telefone;
        $user->complemento = $request->complemento;
        $user->cidade = $request->cidade;
        $user->estado = $request->estado;

        $credencialsUser = new User();
        $credencialsUser->nome = $user->primeiro_nome . ' '. $user->segundo_nome;
        $credencialsUser->usuario = Str::lower($user->primeiro_nome) . Str::lower($user->segundo_nome);
        $credencialsUser->senha = Hash::make($request->password);


        if ($user->save() && $credencialsUser->save()) {

            return redirect()->route('admin.user.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $user)
    {
        if ($user->delete()) {
            return redirect()->route('admin.user.index');
        }
    }
}

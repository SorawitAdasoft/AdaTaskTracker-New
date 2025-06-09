<?php

namespace Modules\Auth\Http\Controllers;

use App\Http\Controllers\ModuleController;
use Illuminate\Http\Request;

class AuthController extends ModuleController
{
    public function index()
    {
        return $this->render('auth::index', [
            'title' => 'Login',
            'theme' => 'light'
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function submit(Request $request) {}

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('auth::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('auth::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) {}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) {}
}

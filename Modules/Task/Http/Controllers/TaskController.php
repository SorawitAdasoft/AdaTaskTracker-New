<?php

namespace Modules\Task\Http\Controllers;

use App\Http\Controllers\ModuleController;
use Illuminate\Http\Request;

class TaskController extends ModuleController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->render('task::index', [
            'title' => 'Task Tracker',
            'theme' => 'light'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('task::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {}

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('task::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('task::edit');
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

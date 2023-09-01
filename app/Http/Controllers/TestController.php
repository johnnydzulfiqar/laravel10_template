<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $test = Test::all();
        return view('test.index', compact('test'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('test.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Test::create($request->all());
        return redirect()->route('test.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Test $test)
    {
        return view('test.show', compact('test'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Test $test)
    {
        return view('test.edit', compact('test'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Test $test)
    {
        $test->fill($request->all())->save();
        return redirect()->route('test.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Test $test)
    {
        $test->delete();
        return redirect()->route('test.index');
    }
}

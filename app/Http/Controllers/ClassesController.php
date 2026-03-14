<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Http\Requests\StoreClassesRequest;
use App\Http\Requests\UpdateClassesRequest;
use App\Models\Staff;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classes = Classes::query()->get();

        return view('classes.index', compact('classes'));
    }

    public function create()
    {
        $staffs = Staff::query()->get();

        return view('classes.create', compact('staffs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClassesRequest $request)
    {
        $validated = $request->validated();

        $class = Classes::query()->create([
            'name' => $validated['name'],
            'morning' => (int) ($validated['morning'] ?? 0),
            'afternoon' => (int) ($validated['afternoon'] ?? 0),
            'full_time' => (int) ($validated['full_time'] ?? 0),
        ]);

        $class->staff()->sync($validated['staff_ids']);

        return to_route('class.index')->with('success', 'Turma cadastrada com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Classes $classes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Classes $class)
    {
        return view('classes.edit', compact('class'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClassesRequest $request, Classes $class)
    {
        $class->update($request->validated());

        return to_route('class.index')->with('success', 'Turma editada com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Classes $class)
    {
        $class->delete();

        return to_route('class.index');
    }
}

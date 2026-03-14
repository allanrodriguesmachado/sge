<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Http\Requests\StoreStaffRequest;
use App\Http\Requests\UpdateStaffRequest;

class StaffController extends Controller
{
    public function index()
    {
        $staffs = Staff::query()->get();

        return view('staff.index', compact('staffs'));
    }

    public function create()
    {
        return view('staff.create');
    }

    public function store(StoreStaffRequest $request)
    {
        Staff::create($request->validated());

        return view('staff.create')->with('success', 'Staff member created successfully.');
    }

    public function show(Staff $staff)
    {
        dd($staff);
    }

    public function edit(Staff $staff)
    {
        return view('staff.edit', compact('staff'));
    }

    public function update(UpdateStaffRequest $request, Staff $staff)
    {
        $staff->update($request->validated());

        return to_route('staff.index')->with('success', 'Staff member updated successfully.');
    }

    public function destroy(Staff $staff)
    {
        $staff->delete();

        return to_route('staff.index')->with('success', 'Staff member deleted successfully.');
    }
}

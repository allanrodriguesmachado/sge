<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Support\Facades\Schema;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $stats = [
            'total' => 0,
            'morning' => 0,
            'afternoon' => 0,
            'full' => 0,
        ];

        $latestStaff = collect();

        if (Schema::hasTable('staff')) {
            $stats = [
                'total' => Staff::query()->count(),
                'morning' => Staff::query()->where('work_shift', 'morning')->count(),
                'afternoon' => Staff::query()->where('work_shift', 'afternoon')->count(),
                'full' => Staff::query()->where('work_shift', 'full')->count(),
            ];

            $latestStaff = Staff::query()
                ->latest()
                ->limit(5)
                ->get(['id', 'name', 'email', 'work_shift', 'created_at']);
        }

        return view('dashboard.index', compact('stats', 'latestStaff'));
    }
}

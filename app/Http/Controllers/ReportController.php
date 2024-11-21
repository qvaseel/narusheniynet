<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Status;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ReportController extends Controller
{
    public function index() {
        $reports = Report::where('user_id', Auth::user()->id)->get();
        $statuses = Status::all();
        $userId = Auth::id();
        return view('report.index', compact('reports', 'userId', 'statuses'));
    }

    public function destroy(Report $report) {
        $report->delete();
        return redirect()->back();
    }

    public function create() {
        return view('report.create');
    }

    public function store(Request $request): RedirectResponse {
        $request->validate([
            'number' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string']
        ]);

        Report::create([
            'number' => $request->number,
            'description' => $request->description,
            "user_id" => Auth::user()->id,
            "status_id" => 1,
        ]);

        return redirect()->route('dashboard');
    }

    public function show(Report $report){
        $statuses = Status::all();
        return view('report.show', compact('report','statuses'));
    }

    public function update(Request $request, Report $report){
        $data = $request -> validate([
            'number' => 'string',
            'description' => 'string',
            "status_id" => ""
        ]);

        $report->update($data);
        return redirect()->back();
    }
}

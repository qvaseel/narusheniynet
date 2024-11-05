<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function index() {
        $reports = Report::all();
        $statuses = Status::all();
        $userId = Auth::id();
        return view('report.index', compact('reports', 'userId', 'statuses'));
    }

    public function destroy(Report $report) {
        $report->delete();
        return redirect()->back();
    }

    public function store(Request $request, Report $report) {
        $data = $request -> validate([
            'number' => 'string',
            'description' => 'string',
            "user_id" => "",
            "status_id" => "",
        ]);

        $report->create($data);
        return redirect()->back();
    }

    public function show(Report $report){
        return view('report.show', compact('report'));
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

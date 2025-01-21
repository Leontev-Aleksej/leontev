<?php

namespace App\Http\Controllers;
use App\Models\Report;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index() {
        $reports = Report::where('user_id', Auth::user()->id)->get();
        $services = Service::all();
        $userId = Auth::id();
        return view('reports.index', compact('reports', 'userId', 'services'));
    }

    public function create() {
        $services = Service::all();
        $reports = Report::all();
        return view('reports.create', compact('services', 'reports'));
    }

    public function store(Request $request): RedirectResponse {
        $request->validate([
            'address' => ['required', 'string', 'max:255'],
            'contact' => ['required', 'string'],
            'date' => ['required', 'date'],
            'payment' => ['required', 'string'],
        ]);

        Report::create([
            'address' => $request->address,
            'contact' => $request->contact,
            'date' => $request->date,
            'time'=>$request->time,
            'payment'=>$request->payment,
            "user_id" => Auth::user()->id,
            "service_id" => $request->service,
        ]);

        return redirect()->route('dashboard');
    }

}
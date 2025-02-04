<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Report;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::where('user_id', Auth::user()->id)->get();
        $services = Service::all();
        $userId = Auth::id();
        return view('reports.index', compact('reports', 'userId', 'services'));
    }
    public function create()
    {
        $services = Service::all();
        $reports = Report::all();
        return view('reports.create', compact('services', 'reports'));
    }
    public function store(Request $request): RedirectResponse 
    {
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
            "status" => "Новая",
        ]);

          return redirect()->route('dashboard');
    }
    public function update(Request $request)
    {
        $request->validate([
            'status' => ['required'],
            'id' => ['required']
          ]);

          Report::where('id', $request->id)->update([
            'status' => $request->status,
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     $report = Report::find($id);
    //     return view('reports.show', compact('reports'));
    // }

    /**
     * Update the specified resource in storage.
     */

    /**
     * Remove the specified resource from storage.
     */


   
}

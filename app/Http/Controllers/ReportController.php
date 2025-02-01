<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reports = Report::where('user_id', Auth::user()->id)->get();
        return view('reports.index', compact('reports'));
    }

    /**
     * Store a newly created resource in storage.
     */
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
        ]);

          return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $report = Report::find($id);
        return view('reports.show', compact('reports'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'status' => 'required',
            'id' => 'required',
          ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $report = Report::find($id);
        $report->delete();
        return redirect()->route('reports.index')
            ->with('success', 'Report deleted successfully');
    }

    public function create()
    {
      $reports = Report::all();
      return view('reports.create', compact('reports'));
    }
}

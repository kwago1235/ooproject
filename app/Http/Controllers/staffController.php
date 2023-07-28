<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\staff;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class staffController extends Controller
{

    /**
     * Visit Staff page
     */
    public function staffDashboard()
    {
        return view ('staff.index');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userdata = Auth::User();
        $staffData = staff::where('user_id', $userdata->id)->orderBy('id', 'desc')->get();
        return view('staff.index', compact('userdata','staffData'));
    }

    /**
     * Display a listing of the resource.
     */
    public function countDataStaff()
    {
        $userdata = Auth::User();
        $staffData = staff::where('user_id', $userdata->id)->get();
        return view('dashboard', compact('userdata','staffData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('staff.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $recorded = staff::create($request->all());
        return redirect('/staff');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $record = staff::find($id);

        $record->delete();
        return redirect('/staff');
    }
}

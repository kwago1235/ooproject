<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\product;
use App\Models\staff;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class productController extends Controller
{
    /**
     * Visit the Product Page
     */
    public function productDashboard()
    {
        return view ('product.index');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userdata = Auth::User();
        $productData = product::where('user_id', $userdata->id)->orderBy('id', 'desc')->get();
        return view('product.index', compact('userdata','productData'));
    }

    /**
     * Count a listing of the resource.
     */
    public function countProductData()
    {
        $userdata = Auth::User();
        $productData = product::where('user_id', $userdata->id)->get();
        $staffData = staff::where('user_id', $userdata->id)->get();
        return view('dashboard', compact('staffData','productData'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $recorded = product::create($request->all());
        return back()->with('success', 'Important Notes has been added!');
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
        $productData = product::find($id);
        return view('product.edit')->with('productData', $productData);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = product::find($id);
        $input = $request->all();
        $product->update($input);
        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $record = product::find($id);

        $record->delete();
        return redirect('/product');
    }
}

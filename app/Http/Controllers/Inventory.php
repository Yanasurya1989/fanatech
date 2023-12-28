<?php

namespace App\Http\Controllers;

use App\Models\Inventories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class Inventory extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventory = Inventories::all();
        return view('backend.inventory.index', compact('inventory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('backend.inventory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'code' => 'required',
            'name' => 'required',
            'price' => 'required',
            'stock' => 'required',
        ]);

        if($validator->fails()){
            return back()->withErrors($validator->messages());
        }

        $data = [
            'code' => $request->code,
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
        ];

        $inventory = Inventories::create($data);

        if($inventory){
            return Redirect()->to('/inventory')->withSuccess('Succes');
        }else{
            return back()->withErrors('failed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventories  $inventories
     * @return \Illuminate\Http\Response
     */
    public function show(Inventories $inventories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventories  $inventories
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventories $inventories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inventories  $inventories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventories $inventories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventories  $inventories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventories $inventories)
    {
        $inventories = $inventories->delete();

        if($inventories){
            return back()->withSuccess('Success');
        }else{
            return back()->withErrors('failed');
        }
    }
}

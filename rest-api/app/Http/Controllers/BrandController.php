<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function index(){
        $brands = Brand::all();
        return view('brands.index',['brands'=>$brands]);
        return view('brands.index');
    }

    public function create(){
        return view('brands.create');
    }

    public function store(Request $request){
        $data  = $request->validate([
            
        'brand_name'  => 'required',
        'brand_active' => 'required | numeric',
        'brand_status' => 'required | numeric'

        ]);

        $new_data  = Brand::create($data);

        return redirect(route('brand.index'));

    }

    public function edit(Brand $brand){
        return view('brands.edit',['brand' => $brand]);
    }

    public function update(Brand $brand,Request $request){
        $data  = $request->validate([
            
            'brand_name'  => 'required',
            'brand_active' => 'required | numeric',
            'brand_status' => 'required | numeric'
    
            ]);

            $brand->update($data);
            return redirect(route('brand.index'))->with('succes','Uspjesno uredjen');
            
    }

    public function destroy(Brand $brand){
        $brand->delete();
        return redirect(route('brand.index'))->with('succes','Uspjesno izbrisan');
        
    }
}

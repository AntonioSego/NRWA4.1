<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();

        if($categories->count() > 0){
            return response()->json([
                'status' => 200,
                'products' => $categories
            ],200);
        }else{
            return response()->json([
                'status' => 404,
                'message' => 'No records found'
            ],404);
        }
        
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(),[
            'category_name'=> 'required',
            'category_active' => 'required',
            'category_status' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ],422);
        }else{

            $category = Category::create([
                'category_name'=> $request->category_name,
                'category_active' => $request->category_active,
                'category_status' => $request->category_status,
            ]);

            if($category){
                return response()->json([
                    'status' => 200,
                    'message' => 'Category created successfully'
                ],200);
            }else{
                return response()->json([
                    'status' => 500,
                    'message' => 'Something went wrong :('
                ],500);
            }
        }
    }

    public function show($id){
        $category = Category::find($id);
        if($category){
            return response()->json([
                'status' => 200,
                'product' => $category
            ],200);
        }else{
            return response()->json([
                'status' => 404,
                'message' => 'No category found :('
            ],404);
        }
    }

    public function edit($id){
        $category = Category::find($id);
        if($category){
            return response()->json([
                'status' => 200,
                'product' => $category
            ],200);
        }else{
            return response()->json([
                'status' => 404,
                'message' => 'No category found :('
            ],404);
        }
    }

    public function update(Request $request,int $id){
        $validator = Validator::make($request->all(),[
            'category_name'=> 'required',
            'category_active' => 'required',
            'category_status' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ],422);
        }else{

            $category = Category::find($id);
            
            if($category){
                $category->update([
                    'category_name'=> $request->category_name,
                    'category_active' => $request->category_active,
                    'category_status' => $request->category_status,
                ]);
                return response()->json([
                    'status' => 200,
                    'message' => 'Category updated successfully'
                ],200);
            }else{
                return response()->json([
                    'status' => 404,
                    'message' => 'No such category found :('
                ],404);
            }
        }
    }

    public function destroy($id){

        $category = Category::find($id);
        if($category){
            $category->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Category deleted successfully'
            ],200);
        }else{
            return response()->json([
                'status' => 404,
                'message' => 'No such category found :('
            ],404);
        }
    }
}

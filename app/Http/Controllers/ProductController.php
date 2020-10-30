<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // responsible for fetching all products 
        $products = Products::all();
        $response = APIHelpers::createAPIResponse(false, 200, '' , $products);
        return response()->json($response, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // storing request within product object
        $products = new Product();
        $products->name = $request->name;
        $products->description = $request->description;
        $products->price = $request->price;
        $product_save = $products->save(); // saves to database (( references .env  )) // returns bool

        if($product_save){
            $response = APIHelpers::createAPIResponse(false, 201, 'Product added successfully' , null);
            return response()->json($response, 201);
        } else {
            $response = APIHelpers::createAPIResponse(true, 400, 'Product creation failed' , null);
            return response()->json($response, 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // find product by id ( or single product )
        $product = Product::find($id);
        $response = APIHelpers::createAPIResponse(false, 200, '' , $products);
        return response()->json($response, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
        {

    

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->desccription = $request->description;
        $product->price = $request->price;
        $product_update = $product->save(); // returns bool 

        if ($product_update){
            $response = APIHelpers::createAPIResponse(false, 200, 'Product successfully updated' , null);
        return response()->json($response, 200);
        } else {
            $response = APIHelpers::createAPIResponse(true, 400, 'Product update failed' , null);
        return response()->json($response, 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product_delete = $product->delete();

        if ($product_delete){
            $response = APIHelpers::createAPIResponse(false, 200, 'Product successfully deleted' , null);
        return response()->json($response, 200);
        } else {
            $response = APIHelpers::createAPIResponse(true, 400, 'Product update failed' , null);
        return response()->json($response, 400);
        }
    }
}

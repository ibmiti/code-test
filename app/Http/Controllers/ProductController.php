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
        return $products;
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
        $products->save(); // saves to database (( references .env  ))
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
        {

    
    //     $this->validate($request, [

    //         'title'=> 'max:140',
    //         'brand'=> 'max:140',
    //         'price'=> 'max:10',
    //         'product_image'=> 'max:140',

    //     ]);

        
    //     $update = Auth::user()->products()->create([
    //         'business_id' => auth()->user()->id,
    //         'title' => $request->title,
    //         'brand' => $request->brand,
    //         'price' => $request->price,
    //         'product_image' => $request->product_image,
            
    //     ]);

    //     if($request->hasFile('product_image')){

    //         $business = Auth::user();
    //         $image   = $request->file('product_image');         
    //         $filename = time() . '.' . $image->getClientOriginalExtension();            
    //         $location = public_path('uploads/business/products/'. $filename );          
    //         Image::make($image)->resize(812, null, function ($constraint){$constraint->aspectRatio();})->save($location);
            
    //         $business->product_image = $filename;
    //         $business->save();  
        


    //     return redirect()
    //         ->route('products.create')
    //         ->with('info', 'Your product has been created.');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

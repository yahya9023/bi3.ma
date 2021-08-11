<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $myProduct = Auth::user()->product;
        return view('product.index')->with('myProduct',$myProduct);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'old_price' => $request->old_price,
            'quantite' => $request->quantite,
            'size' => $request->size,
            'color' => $request->color,
            'category_id'=>$request->category_id,
            'user_id'=>Auth::user()->id,
            'image'=>$request->image->store('images','public'),

        ]);
        return redirect('/');

        dd($request->all());
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('product.show')->with('products', $product);       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        // return view('product.edit')->with('product', $product);
        return view('product.edit')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        
        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'old_price' => $request->old_price,
            'quantite' => $request->quantite,
            'size' => $request->size,
            'color' => $request->color,
            'image'=>$request->image->store('images','public'),
        ]);
        return redirect('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('product');
    }
}

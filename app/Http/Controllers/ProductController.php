<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;  

use App\Http\Controllers\Controller;
use App\Models\User;

class ProductController extends Controller
{

    public function welcome()
    { 
        $products = Product::all(); 
        $users = User::all(); 
        return view("welcome",["users" => $users, "products" => $products]);
       // return view('welcome',  ['products' => $products] );
    }

    public function index()
    { 
        $products = Product::all(); 
        return view('products.index',  ['products' => $products] );
    }

    public function create()
    {
        return view('products.create');
    }
 

    public function store(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:2',
            'description' => 'nullable',
        ]);

        $newProduct = Product::create($data);
        return redirect(route('product.index')); 
    }


    public function edit(Product $product)
    {
        return view('products.edit',  ['product' => $product] );
    }

    public function update(Product $product, Request $request)
    {  

        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:2',
            'description' => 'nullable',
        ]);

        $product->update( $data);
        return redirect(route('product.index'))->with('success','product updated'); 

    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route('product.index'))->with('success','product deleted'); 
    }


}

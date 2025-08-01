<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         
        // $products = Product::with(['category', 'user'])->get();
        //not getting all the products but geting the products belonging to this user. 
        $products= Auth::user()->products; 

        return view('products.index', [
            'products'=> $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories= Category::all(); 

        return view('products.create', [
            'categories'=> $categories
        ]); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request['category_id']); we receive the actual id value 
        //Product is created by a user with a user_id and belongs to a category of category_id. 
         $attributes= $request->validate([
            'name'=> ['required', 'unique:products'], 
            'description'=> ['required'], 
            'price'=> ['required'], 
            'category_id'=> ['required', 'exists:categories,id'], 
            'active'=> ['accepted'], 
        ]); 

        
        $user= Auth::user(); 
        $user->products()->create($attributes); 

        

        return redirect('/products');


    }
//to display all the products and send it for admin view only 
    public function showAll(){
        $products= Product::with('user')->get(); 

        return view('admin.all-products', [
            'products'=> $products
        ]); 

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
        
        return view('products.show', [
            'product'=> $product, 
            
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    $categories= Category::all(); 
        return view('products.edit', [
            'product'=> $product, 
            'categories'=> $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //

        //adding the rule here to allow the same product to be edited. else it doesnt allow and says 'name has been taken' since we set name as unique. 
         $attributes= $request->validate([
            'name'=> ['required', Rule::unique('products')->ignore($product->id)], 
            'description'=> ['required'], 
            'price'=> ['required'], 
            'category_id'=> ['required', 'exists:categories,id'], 
            'active'=> ['accepted'], 
        ]); 

        $product->update($attributes);

        return redirect('/products');



    }

    /**
     * Remove the specified resource from storage.
     * To delete a product -> from admins view 
     */
    public function destroy(Product $product)
    {
        //

        $product->delete(); 
        return redirect('/all-products'); 
    }
}

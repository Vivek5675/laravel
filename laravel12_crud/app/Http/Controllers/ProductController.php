<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;
use Illuminate\Support\Facades\File;

class ProductController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $product = Product::all();
        return view('products/index', ['products' => $product]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view('products/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'sku' => 'required | unique:products,sku',
            'price' => 'required | numeric',
            'status' => 'required',
            'image' => 'image | mimes:jpeg,png,jpg |max:2048',
        ]);
        if ($validator->fails()) {
            // return redirect()->back()->withErrors($validator)->withInput();
            return redirect(route('products.create'))->withErrors($validator)->withInput();
        }

        $product = new Product();
        $product->name = $request->name;
        $product->sku = $request->sku;
        $product->price = $request->price;
        $product->status = $request->status;
        $product->save();

        if ($request->hasFile('image')) {
            $image = $request->image;
            $imageName = time() . '.' . $image->getClientOriginalExtension(); //1245456.jpg
            $image->move(public_path('uploads/products'), $imageName);
            $product->image = $imageName;
            $product->save();
        }

        return redirect(route('products.index'))->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id) {
        $product = Product::findOrFail($id);
        return view('products.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) {
        $product = Product::findOrFail($id);
        $oldImage = $product->image;

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'sku' => 'required | unique:products,sku,' . $id,
            'price' => 'required | numeric',
            'status' => 'required',
            'image' => 'image | mimes:jpeg,png,jpg |max:2048',
        ]);
        if ($validator->fails()) {
            return redirect(route('products.edit', $product->id))->withErrors($validator)->withInput();
        }

        $product->name = $request->name;
        $product->sku = $request->sku;
        $product->price = $request->price;
        $product->status = $request->status;
        $product->save();

        if ($request->hasFile('image')) {
            if ($oldImage != null) {
                $oldImagePath = public_path('uploads/products/' . $oldImage);

                if (File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }
            }
            $image = $request->image;
            $imageName = time() . '.' . $image->getClientOriginalExtension(); //1245456.jpg
            $image->move(public_path('uploads/products'), $imageName);
            $product->image = $imageName;
            $product->save();
        }

        return redirect(route('products.index'))->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) {
        $product = Product::findOrFail($id);

        if ($product->image != null) {
            $imagePath = public_path('uploads/products/' . $product->image);

            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }
        $product->delete();
        return redirect(route('products.index'))->with('success', 'Product deleted successfully.');
    }
}

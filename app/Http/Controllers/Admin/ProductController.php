<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    public function showFormAddProduct()
    {
        $categories = Category::all();
        return view('admin.pages.product-add', compact('categories'));
    }

    public function addProduct(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            // 'images' => 'required|array',
            'images.*' => 'image',
            // |mimes:jpeg,png,jpg,gif,svg|max:2048
        ]);

        $slug = Str::slug($request->name) . '-' . time();

        // Create product
        $product = Product::create([
            'name' => $request->name,
            'slug' => $slug,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock ?? 0,
            'unit' => $request->unit ?? 'kg',
            'status' => 'in_stock',
        ]);

        // Handle images upload
        if($request->hasFile('images')) {
            foreach($request->file('images') as $image) {
                $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
                $path = "uploads/products/" . $imageName;

                $resizedImage = Image::make($image)->resize(600, 600)->encode();

                Storage::disk('public')->put($path, $resizedImage);

                ProductImage::create([
                    'product_id' => $product->id,
                    'image' => $path,
                ]);
            }
            
        }

        return redirect()->route('admin.product.add')->with('success', 'Thêm sản phẩm thành công!');
    }

    public function index()
    {
        $products = Product::with('category', 'images')->get();

        return view('admin.pages.products', compact('products'));
    }
}

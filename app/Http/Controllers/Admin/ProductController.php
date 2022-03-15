<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\SubImage;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $subCategories;
    protected $product;

    public function addProduct ()
    {
        return view('admin.product.add', [
            'categories' => Category::all(),
            'subCategories' => SubCategory::all(),
            'brands'     => Brand::all(),
            'units'      => Unit::all(),
        ]);
    }

    public function getSubCategoryId ()
    {
        $this->subCategories = SubCategory::where('category_id', $_GET['id'])->get();
        return json_encode($this->subCategories);
    }

    public function newProduct (Request $request)
    {
        $this->product = Product::newProduct($request);
        SubImage::newSubImage($request, $this->product);
        return redirect()->back()->with('message', 'Product created successfully..');
    }


}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    protected $brands;
    protected $brand;

    public function addBrand()
    {
        return view('admin.brand.add-brand');
    }

    public function newBrand(Request $request)
    {
        Brand::newBrand($request);
        return redirect()->back()->with('message', 'Brand Created Successfully');
    }

    public function manageBrand(){
        $this->brands = Brand::all();
        return view('admin.brand.manage-brand', ['brands' => $this->brands]);
    }
    public function editBrand($id){
        $this->brand = Brand::find($id);
        return view('admin.brand.edit-brand', ['brand'=>$this->brand]);
    }
    public function updateBrand(Request $request){
        Brand::updateBrand($request);
        return redirect('/manage-brand')->with('message', 'Brand Updated Successfully');
    }
    public function deleteBrand($id){
        $this->brand = Brand::find($id);
        if (file_exists($this->brand->image)){
            unlink($this->brand->image);
        }
        $this->brand->delete();
        return redirect()->back()->with('message', 'Brand Deleted Successfully');
    }
}

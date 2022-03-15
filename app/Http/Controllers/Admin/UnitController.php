<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    protected $units;
    protected $unit;

    public function addUnit()
    {
        return view('admin.unit.add-unit');
    }

    public function newUnit(Request $request)
    {
        Unit::newUnit($request);
        return redirect()->back()->with('message', 'Unit Created Successfully');
    }

    public function manageUnit(){
        $this->units = Unit::all();
        return view('admin.unit.manage-unit', ['units' => $this->units]);
    }
    public function editUnit($id){
        $this->unit = Unit::find($id);
        return view('admin.unit.edit-unit', ['unit'=>$this->unit]);
    }
    public function updateUnit(Request $request){
        Unit::updateUnit($request);
        return redirect('/manage-unit')->with('message', 'Unit Updated Successfully');
    }
    public function deleteUnit($id){
        $this->unit = Unit::find($id);
        $this->unit->delete();
        return redirect()->back()->with('message', 'Unit Deleted Successfully');
    }
}

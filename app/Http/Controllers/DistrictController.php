<?php

namespace App\Http\Controllers;

use App\District;
use App\Division;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function showDistrict(){
        $districts = District::orderBy('name','asc')->get();
        return view('admin.district.index')->with('districts',$districts);
    }
    public function createDistrict(){
        $divisions = Division::orderBy('priority','asc')->get();
        return view('admin.district.district-create',compact('divisions'));
    }
    public function districtStore(Request $request){
        $district = new District();
        $district->name = $request->name;
        $district->division_id = $request->division_id;
        $district->save();
        return redirect()->route('district.create')->with('text','District has added successfully');

    }
    public function editDistrict($id){
        $divisions = Division::orderBy('priority','asc')->get();
        $district = District::find($id);
        return view('admin.district.edit-district',compact('district','divisions'));
    }
    public function updateDistrict(Request $request, $id){
        $district =  District::find($id);
        $district->name = $request->name;
        $district->division_id = $request->division_id;
        $district->save();
        return redirect()->route('district.create')->with('text','District has Updated successfully');
    }
    public function deleteDistrict($id){
        $district = District::find($id);
        if(!is_null($district)){
            $district->delete();
        }
        session()->flash('success','District has deleted successfully!!');
        return back();
    }
}

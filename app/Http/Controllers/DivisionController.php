<?php

namespace App\Http\Controllers;

use App\District;
use App\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function showDivision(){
        $divisions = Division::orderBy('priority','asc')->get();
        return view('admin.division.index')->with('divisions',$divisions);
    }
    public function createDivision(){
        return view('admin.division.division-create');
    }
    public function divisionStore(Request $request){
        $division = new Division();
        $division->name = $request->name;
        $division->priority = $request->priority;
        $division->save();
        return redirect()->route('division.create')->with('text','Division has added successfully');

    }
    public function editDivision($id){
        $division = Division::find($id);
        return view('admin.division.edit-division',compact('division'));
    }
    public function updateDivision(Request $request, $id){
        $division =  Division::find($id);
        $division->name = $request->name;
        $division->priority = $request->priority;
        $division->save();
        return redirect()->route('division.create')->with('text','Division has Updated successfully');
    }
    public function deleteDivision($id){
        $division = Division::find($id);
        if(!is_null($division)){
            //delete all districts under this division
            $districts = District::where('division_id',$division->id)->get();
            foreach ($districts as $district){
                $district->delete();
            }
            $division->delete();
        }
        session()->flash('success','Division has deleted successfully!!');
        return back();
    }
}

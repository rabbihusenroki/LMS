<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;
use App\Models\Feature;
use Illuminate\Support\Carbon;

class NoticeController extends Controller
{
    public function AllNotice(){
        $notices = Notice::latest()->get();
        return view('admin.contents.notice.notice', compact('notices'));

    }
    
    public function AddNotice(){

        return view('admin.contents.notice.create_notice');

    }
    public function StoreNotice(Request $request){
        $validatedData = $request->validate([
    
            'event_date' => 'required',
            'description' => 'required|min:5',
            ],
            [
            'event_date.required' => 'Please select event date',
            'description.required' => 'Description name field does not empty',
            'description.min' => 'Description length minimum 5',
            ]);
            Notice::insert([
                'event_date' => Carbon::parse($request->event_date),
                'description' => $request->description,
                'created_at' => Carbon::now()
                ]);
        return Redirect()->back()->with('success', 'Notice inserted successfully!');

    }

    public function EditNotice($id){

        $notice_edit = Notice::find($id);
        return view('admin.contents.notice.notice_edit',compact('notice_edit'));
    
    }
    public function UpdateNotice(Request $request, $id){

        $validatedData = $request->validate([

            'event_date' => 'required|max:255',
            ],
            [
            'event_date.required' => 'Notice title name field does not empty',
        
            ]);

            Notice::find($id)->update([
        
            'event_date' => Carbon::parse($request->event_date),
            'description' => $request->description,
            'created_at' => Carbon::now(),
            ]);
            return Redirect()->route('all.notice')->with('success', 'Notice updated successfully!');
    }



    public function DeleteNotice($id){

    Notice::find($id)->Delete();
    return Redirect()->back()->with('success','Notice Permanently Deleted!');
    }






    //Features Controller

    public function AllFeature(){
        $features = Feature::latest()->get();
        return view('admin.contents.feature.feature', compact('features'));

    }
    
    public function AddFeature(){

        return view('admin.contents.feature.create_feature');

    }
    public function StoreFeature(Request $request){
        $validatedData = $request->validate([
    
            'name' => 'required|min:5',
            'description' => 'required|min:5',
            ],
            [
            'name.min' => 'Name minimum length minimum 5',
            'name.required' => 'Please select event date',
            'description.required' => 'Description name field does not empty',
            'description.min' => 'Description length minimum 5',
            ]);
            Feature::insert([
                'name' => $request->name,
                'description' => $request->description,
                'created_at' => Carbon::now()
                ]);
        return Redirect()->back()->with('success', 'Feature inserted successfully!');

    }
    public function EditFeature($id){

        $feature_edit = Feature::find($id);
        return view('admin.contents.feature.edit_feature',compact('feature_edit'));
    
    }

    public function UpdateFeature(Request $request, $id){

        $validatedData = $request->validate([

            'name' => 'required|max:255',
            ],
            [
            'name.required' => 'Feature title name field does not empty',
        
            ]);

            Feature::find($id)->update([
        
            'name' => $request->name,
            'description' => $request->description,
            'created_at' => Carbon::now(),
            ]);
            return Redirect()->route('all.feature')->with('success', 'Feature updated successfully!');
    }



    public function DeleteFeature($id){

    Feature::find($id)->Delete();
    return Redirect()->back()->with('success','Feature Permanently Deleted!');
    }

}

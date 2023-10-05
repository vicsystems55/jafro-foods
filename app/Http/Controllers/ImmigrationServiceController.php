<?php

namespace App\Http\Controllers;

use App\Models\ImmigrationService;
use Illuminate\Http\Request;

class ImmigrationServiceController extends Controller
{
    //

    public function page(){

        $services = ImmigrationService::get();

        return view('create', compact('services'));
    }


    public function store(Request $request){

        $request->validate([
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:4048',
            'title' => 'required',
            'cover_image' => 'required',
        ]);


            # code...
            $doc = $request->file('cover_image');

            $new_name = rand().".".$doc->getClientOriginalExtension();

            $doc->move(public_path('imms_covers'), $new_name);


            ImmigrationService::create([
                'cover_image' => $new_name,
                'title' => $request->title,
                'external_url' => $request->external_url,
            ]);

        return back()->with('msg', 'Immigration Service Created.');
    }


    public function update(Request $request){

        if ($request->update_cover_image) {
            # code...

            // return 234;

        $request->validate([
            'update_cover_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:4048',
            'update_title' => 'required',
            'update_cover_image' => 'required',
        ]);


            # code...
            $doc = $request->file('update_cover_image');

            $new_name = rand().".".$doc->getClientOriginalExtension();

            $doc->move(public_path('imms_covers'), $new_name);


            ImmigrationService::find($request->service_id)->update([
                'cover_image' => $new_name,
                'title' => $request->update_title,
                'external_url' => $request->update_external_url,
            ]);

        return back()->with('update_msg', 'Immigration Service Updated.');



        }else{

            // return 234234;

            $request->validate([
                'update_title' => 'required',
                'update_external_url' => 'required',
            ]);



                ImmigrationService::find($request->service_id)->update([
                    'title' => $request->update_title,
                    'external_url' => $request->update_external_url,
                ]);

            return back()->with('update_msg', 'Immigration Service Updated.');



        }

        return $request->all();

        // $request->validate([
        //     'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:4048',
        //     'title' => 'required',
        //     'cover_image' => 'required',
        // ]);


        //     # code...
        //     $doc = $request->file('cover_image');

        //     $new_name = rand().".".$doc->getClientOriginalExtension();

        //     $doc->move(public_path('imms_covers'), $new_name);


        //     ImmigrationService::create([
        //         'cover_image' => $new_name,
        //         'title' => $request->title,
        //         'external_url' => $request->external_url,
        //     ]);

        // return back()->with('msg', 'Immigration Service Created.');
    }


    public function activate(Request $request){

        // return $request->all();

        $service = ImmigrationService::find($request->service_id_id);


        if ($service->status == 'enabled') {
            # code...
            $service->update([
                'status' => 'disabled'
            ]);
        }

        if ($service->status == 'disabled') {
            # code...
            $service->update([
                'status' => 'enabled'
            ]);
        }

        return back()->with('update_msg', 'Immigration Service Updated.');





    }

    public function updatedescription(Request $request){

        $desc = ImmigrationService::first()->update([
            'description' => $request->description
        ]);


        return back()->with('des_msg', 'Description updated');
    }


}

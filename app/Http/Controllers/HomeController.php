<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [];
        $data['ads'] = Ad::leftJoin('users as creator', 'creator.id', 'ads.created_by')
            ->leftJoin('users as updator','updator.id','ads.updated_by' )
            ->select(
                'ads.*',
                'creator.name as creator_name',
                'updator.name as updator_name'
            )
            ->whereNull('ads.deleted_at')
            ->paginate(10);  
    
        return view('home', $data);
    }
    public function create(Request $request)
    {
        $form_input = $request->all();
        $user_id = auth()->user()->id;
        $from_date = $form_input['start_date'];
        $to_date = $form_input['end_date'];
        $image_name = $form_input['image_name'];
        $ad_placement = $form_input['ad_placement'];
        $re_link = $form_input['re_link'];

        $createAd  = new Ad([
            'from_date' => $from_date,
            'to_date' => $to_date,
            'image_name' => $image_name,
            'ad_placement' => $ad_placement,
            'ad_placement' => $ad_placement,
            // 'file_path' => 'storage/ads/' . $file_name, 
            'link' => $re_link,
            'created_by' => $user_id,
        ]);

        // Get the uploaded file
        $file = $form_input['ad_image'];
        $file_extension = $file->getClientOriginalExtension();
        $file_name = "$createAd->id." . $file_extension;
        $file->storeAs('ads', $file_name, 'public');

        $createAd->file_path = 'storage/ads/' . $file_name;
        $createAd->save();

        return redirect()->back()->with('successUpload', ' Successfully Uploaded Image!');
    }
    
    public function delete($id)
    {
        $user = Ad::withTrashed()->find($id);
        $user->delete();
        return true;
    }

    public function view($id)
    {
        $adInfo = Ad::where('id',$id)
        ->first();

        return $adInfo;
    }
    
    public function update(Request $request, string $id)
    {
        $user_id = auth()->user()->id;
        $updateAd = Ad::find($id);
    
        // Check if a file is uploaded
        if ($request->hasFile('ad_image')) {
            $file = $request->file('ad_image');
            $image_name = $request->input('image_name');
            $file_extension = $file->getClientOriginalExtension();
            $file_name = "$id." . $file_extension;
            // Store the file
            $file->storeAs('ads', $file_name, 'public');
            // Update the file path
            $file_path = 'storage/ads/' . $file_name;
            // Update the ad with the new image details
            $updateAd->update([
                'file_path' => $file_path,
            ]);
        }
        $updateAd->update([
            'from_date' => $request->input('start_date'),
            'to_date' => $request->input('end_date'),
            'image_name' => $request->input('image_name'),
            'ad_placement' => $request->input('ad_placement'),
            'link' => $request->input('re_link'),
            'updated_by' => $user_id,
            'updated_at' => now(),
        ]);
    
        return redirect()->back()->with('successEdit', 'Update Successfully');
    }
    

}

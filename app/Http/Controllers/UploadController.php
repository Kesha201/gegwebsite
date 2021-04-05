<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\ItemDetails;

use Illuminate\Http\Request;


class UploadController extends Controller
{
    public function uploadForm(){
        return view('Upload_form');
    }
    public function uploadSubmit(Request $request){
        $this->validate($request, [
            'name' => 'required|unique:posts|max:50',
            'surname' => 'required',
            'email' => 'required',
            'photos' => 'required',
        ]);

        if($request->hasFile('photos')){
            $allowedfileExtension=['pdf', 'jpg', 'png', 'docx'];
            $files = $request->file('photos');
            foreach($files as $file){
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check = in_array($extension, $allowedfileExtension);
                if($check){
                    $items = Item::create($request->except('name'));
                    foreach ($request->photos as $photo){
                        $filename = $photo->store('photos');
                        ItemDetails::create([
                            'item_id' => $items->id,
                            'filename' => $filename
                        ]);
                    }
                    echo "Upload Successfully";
                }
                else{
                    echo '<div class="alert alert-warning"><strong>Warning!</strong>Sorry only upload png, jpg</div>';
                }
            }
        }
    }
}

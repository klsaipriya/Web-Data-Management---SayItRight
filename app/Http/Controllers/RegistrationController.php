<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Register;
use Illuminate\Support\Facades\DB;

class RegistrationController extends Controller
{
    //
    /*function save(Request $req){
        /*$data = $req->input();
        $regdata = new Register();
        $regdata->username = $data['username'];
        $regdata->email= $data['email'];
        $regdata->save();
        return view('aboutus');*/
        //print_r($req->input())
        /*$data=$req->input();
        $req->audiofile->store('product','public');
        $uname=$data['username'];
        $email=$data['email'];
        $file=$req->audiofile->hashName();
        $regdata=new Register();
        $regdata->username=$uname;
        $regdata->email=$email;
        $regdata->filename=$req->filename->hashName();
        $regdata->save();
        
    }*/
    /*public function store(Request $request)
    {
        

        // ensure the request has a file before we attempt anything else.
        

            // Save the file locally in the storage/public/ folder under a new folder named /produ
            $request->audiofile->store('css', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.
            $regdata = new Register([
                "username" => $request->get('username'),
                "email" => $request->get('email'),
                "filename" => $request->audiofile->hashName()
            ]);
            $regdata->save(); // Finally, save the record.
        return view('aboutus');
    }*/

    public function store(Request $req){
        $req->validate([
            'file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
            ]);
    
            $fileModel = new Register;
    
            if($req->file()) {
                $fileName = time().'_'.$req->file->getClientOriginalName();
                $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');
    
                //$fileModel->name = time().'_'.$req->file->getClientOriginalName();
                $uname=$req->username;
                $fileModel->username=$req->username;
                $fileModel->email=$req->email;
                $fileModel->filename = '/storage/' . $filePath;
                $fileModel->save();
                //$req->session()->put('username','$uname');
                return view('studentlogin');
            }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Master;

class Admin extends Controller
{
    public function index()
    {
        return view('admin/home');
    }

    public function add_master()
    {
        return view('admin/addmaster');
    }
    public function  save_master(Request $request)
    {
        $nomprenom = $request->input('nom');
        $fonction = $request->input('fonction');
        $lienfacebook = $request->input('lface');
        $lientwitter = $request->input('ltwit');
        $liengithub = $request->input('lgithub');
        $lieninstagram = $request->input('linsta');
        $lienlinkedin = $request->input('llink');
        $image ="";
        if($request->hasfile('image')){
            $image = $request->file('image');
            $newname = $input['imagename'] = time(). '.' . $image->getClientOriginalname();
            $destination = public_path('/image');
            $image->move($destination, $input['imagename']);   
        }
        $masters = DB::table('masters')
        ->insert(['name' => $nomprenom, 
                 'fonction' => $fonction,
                 'facebook' => $lienfacebook,
                  'twitter' => $lientwitter,
                  'github' => 'github',
                  'instagram' => $lieninstagram,
                  'linkedin' => $lienlinkedin,
                  'image' => $newname]);

    }

    public function add_workshop()
    {
        $masters = Master::get();
        return view('admin/addworkshop', ['masters' => $masters]);
    }
}

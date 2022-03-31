<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class FileController extends Controller
{
    public function create()
    {
        return view('create');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'filenames' => 'required',
                'filenames.*' => 'required'
        ]);
  
    //    $files = []; 
       // $file_old=[];
        if($request->hasfile('filenames'))
         {
            foreach($request->file('filenames') as $file)
            {
                //suformuojamas naujas atsitiktinis pavadinimas 
                    $name = time().rand(1,100).'.'.$file->extension();
                //sufomuojamas originalus (pradinis) failo pavadinimas
                     // $name=$file->getClientOriginalName();
                //perkeliamas failas į norimą vietą
                $file->move(public_path('files'), $name);  
                
                //išsaugojamas senasis pavadinimas
                $file_old=$file->getClientOriginalName();
                $files = $name;  

                //įrašas į db abie bylą
                $file= new File();
                $file->filenames = $files;
                $file->filenames_orig = $file_old;
                $file->save();
            }
         }
        
  
        return back()->with('success', 'Duomenys įkelti');
    }
}

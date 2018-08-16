<?php

namespace App\Http\Controllers\admin;

use App\lecture;
use Illuminate\Support\Facades\Storage;
use App\file;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FilesController extends Controller
{
    function index(){
        $files = file::paginate(10);
        $data=array('files'=>$files);
        return view('admin\files', $data);
    }

    function addFiles(Request $request){


        foreach ($request->failai as $file) {
            $failas = new file();
            $path = $file->store('public/files');
            $failas->file_url = $path;
            $nameonly=preg_replace('/\..+$/', '', $file->getClientOriginalName());
            $failas->name = $nameonly;
            $failas->save();
        }

        return redirect()->route('files');
    }

    public function deleteFile($id)
    {
        $files = file::find($id);
        Storage::delete($files->file_url);
        $files->delete();
        return redirect()->route('files');
    }

    public function toggleShow($id){
        $files = file::find($id);
        if($files->show == 1){
            $files->show = 0;
        }else {
            $files->show=1;
        }
        $files->save();
        return redirect()->back();
    }

    function getFile($id){
        $file= file::find($id);
        $lectures=lecture::all();
        $lecId = array();
        foreach ($file->lectures as $lecture) {
            $lecId[] = $lecture->id;
        }
        $data=array('file'=>$file,'lectures'=>$lectures,'id'=>$lecId);
        return view('admin\edit_file',$data);
    }

    function updateFile(Request $request,$id){
        $file= file::find($id);
        $file->lectures()->sync($request->name);
        return redirect()->route('files');
    }


}

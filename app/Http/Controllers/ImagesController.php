<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class ImagesController extends Controller
{
    public function __construct() {
       // $this->midleware();
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
            $imgs = DB::table('image')->get();
            return view('image.list', ['imgs'=>$imgs]); 
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('image.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $title = $request->input('im_title');
        $alt = $request->input('im_alt');
        $file = $request->file('im_file');
        $path = $file->store('public');
        $url = str_replace('public/', '/storage/', $path);
        DB::table('image')->insertGetId([
            'title' => $title,
            'url' => $url,
            'filename' => $path,
            'alt' => $title . '(' . $alt . ')'
        ]);
        //var_dump($file);
        //return view('image.form');
        return redirect('/image-manager');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $image = DB::table('image')->find($id);
        return view('image.show', [
            'img'=>$image
        ] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $ed_im = DB::table('image')->find($id);
        return view('image.EDform', [
            'img'=>$ed_im
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $img = DB::table('image')->find($id);
        $path = $img->filename;
        $url = $img->url;
        $title = $request->input('im_title');
        $alt = $request->input('im_alt');

        if($request->hasFile('im_file')){
            Storage::delete($path);
            $file = $request->file('im_file');
            $path = $file->store('public');
            $url = str_replace('public/', '/storage/', $path);
        }

        DB::table('image')->where('id','=',$id)->update([
            'title' => $title,
            'alt' => $alt,
            'url' => $url,
            'filename' => $path
        ]);

        return redirect ('/image-manager');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $image = DB::table('image')->find($id);
        $flname = $image->filename;
        Storage::delete($flname);
        DB::table('image')
            ->where('id','=',$id)
            ->delete();
        return redirect('/image-manager');
        
    }
}

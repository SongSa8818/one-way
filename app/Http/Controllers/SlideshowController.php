<?php

namespace App\Http\Controllers;

use App\DeleteImage;
use App\SlideshowImage;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class SlideshowController extends Controller
{

    private $no_image;

    public function __construct()
    {
        $this->no_image = 'NO_PICTURE.png';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        //
        //return view('admin.slideshows.list');
        $slideshow = SlideshowImage::paginate(10);
        return view('admin.slideshows.list')->with('slideshows', $slideshow);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.slideshows.create');
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
        $file = $request->file('image');
        if(in_array($file->getClientMimeType(), array('image/jpeg','image/jpg','image/png'))){
            $imageName = $request->file('image')->getClientOriginalName();
            $image = new SlideshowImage();
            $image->image = $imageName;
            if($image->save()) {
                $file->move(public_path('/uploads/slideshows'), $imageName);
            }
            return redirect(route('slideshow.list'));
        } else {
            return redirect(route('slideshow.list'));
        }
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
        {
            $slideshow = SlideshowImage::findOrFail($id);
            $deleteFile = new DeleteImage();
            $deleteFile->deleteImage(public_path('/uploads/slideshows'), $slideshow->img);
            SlideshowImage::destroy($id);
            return redirect(route('slideshow.list', $slideshow->slideshow_id));
        }
    }
}

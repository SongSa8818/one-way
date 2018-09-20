<?php

namespace App\Http\Controllers;

use App\RequestInfo;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RequestController extends Controller
{
    private $no_image;

    public function __construct()
    {
        $this->no_image = 'NO_IMAGE.png';
    }

    //
    public function index()
    {
        return view('pages.request');
    }

    public function list()
    {
        $request_info = RequestInfo::List();
        //dd($request_info);
        return view('admin.requests.list')->with('request_infos', $request_info);

    }

//    protected function validator(array $data)
//    {
//        return Validator::make($data, [
//            'customer_id' => 'required|string|max:10',
//            'service_type' => 'required|string|max:255',
//            'property_type' => 'required|string|max:255',
//            'business_purpose' => 'required|string|max:255',
//            'location' => 'required|string|max:255',
//            'zone' => 'required|string|max:255',
//            'minsize_area' => 'required|string|max:255',
//            'maxsize_area' => 'required|string|max:255',
//            'min_budget' => 'required|string|max:255',
//            'max_budget' => 'required|string|max:255',
//            'bank_loan_service' => 'required|string|max:255',
//            'bank_statement' => 'required|string|max:255',
//            'description' => 'required|string|max:255',
//        ]);
//    }

    public function store(Request $request)
    {
        // $this->validator($request->all())->validate();

        $request_info = new RequestInfo();
        $request_info->customer_id = $request->customer_id;
        $request_info->service_type = $request->service_type;
        $request_info->property_type = $request->property_type;
        $request_info->business_purpose = $request->business_purpose;
        $request_info->location = $request->location;
        $request_info->zone = $request->zone;
        $request_info->minsize_area = $request->minsize_area;
        $request_info->maxsize_area = $request->maxsize_area;
        $request_info->min_budget = $request->min_budget;
        $request_info->max_budget = $request->max_budget;
        $request_info->bank_loan_service = $request->bank_loan_service;
        $request_info->bank_statement = $request->bank_statement;
        $request_info->description = $request->description;

        $file = $request->file('image');
        if (in_array($file->getClientMimeType(), array('image/jpeg', 'image/jpg', 'image/png'))) {
            $imageName = $request->file('image')->getClientOriginalName();
            $request_info->image = $imageName;
            $file->move(public_path('/uploads/requests'), $imageName);
            $image = Image::make(public_path('/uploads/requests/' . $imageName));
            $image->resize(100, 100);
            $image->save(public_path('/uploads/requests/' . $imageName));
        } else {
            return redirect(route('request.index'));
        }
        $request_info->save();
        return redirect(route('request.index'));
    }


//        $image = $request->file('image');
//        if(in_array($image->getClientMimeType(), array('image/jpeg','image/jpg','image/png'))){
//            $imageName = $request->file('image')->getClientOriginalName();
//            $image = new RequestInfo();
//            $request_info->image = $imageName;
//            if($request_info->save()) {
//                $image->move(public_path('/uploads/requests'), $imageName);
//            }
//            return redirect(route('page.request'));
//        } else {
//            return redirect(route('page.request'));
//        }

        //$request_info->save();
        //return redirect(route('request.index'));
  //  }

    public function edit($id)
    {

    }

    public function show($id)
    {
        $request_info = RequestInfo::findOrFail($id);
        return view('admin.requests.show')->with(array('request_infos' => $request_info));
    }


    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {
        RequestInfo::destroy($id);
        return redirect('request-list');
    }
}

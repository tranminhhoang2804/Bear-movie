<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list= Banner::all();
        return view('admincp.banner.index',compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admincp.banner.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        $banner = new Banner();
        $banner->title=$data['title'];
        $get_image = $request -> file('image');
        if($get_image){ 
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,9999).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('uploads/banner/',$new_image);
            $banner->image = $new_image;
        }
        $banner->description=$data['description'];
        $banner->status=$data['status'];
        $banner->save();
        toastr()->success('Thành công!','Thêm bản tin thành công!');
        return redirect()->route('banner.index');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner=Banner::find($id);
        return view('admincp.banner.form',compact('banner'));
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
        $data=$request->all();
        $banner = Banner::find($id);
        $banner->title=$data['title'];
        $get_image = $request->file('image');

        if($get_image){
            if(file_exists('uploads/banner/'.$banner->image)){
                unlink('uploads/banner/'.$banner->image);
            }
            
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,9999).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('uploads/banner/',$new_image);
            $banner->image = $new_image;
            
        }
        
        $banner->description=$data['description'];
        $banner->status=$data['status'];
        $banner->save();
        toastr()->success('Cập nhật!','Cập nhật bản tin thành công!');
        return redirect()->route('banner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::find($id);
        if(file_exists('uploads/banner/'.$banner->image)){
            unlink('uploads/banner/'.$banner->image);
        }
        $banner->delete();
        toastr()->success('Thành công!','Xóa bản tin thành công!');
        return redirect()->back();
    }
}

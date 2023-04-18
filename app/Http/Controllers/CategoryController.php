<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list= Category::all();
        return view('admincp.category.index',compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admincp.category.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'title' => 'required|unique:categories|max:255',
                'slug' => 'required|unique:categories|max:255',
                'description' => 'required|max:255',
                'status' => 'required',
            ],
            [
                'title.unique' => 'Tên danh mục này đã có, vui lòng điền tên khác!',
                'slug.unique' => 'Đường dẫn đã có , vui lòng điền đường dẫn khác!',
                'title.required'=>'Vui lòng điền tên danh mục!',
                'slug.required'=>'Vui lòng điền đường dẫn!',
                'description.required'=>'Vui lòng điền mô tả!',
                'status.required'=>'Vui lòng chọn trạng thái!',
            ]
        );
        $category = new Category();
        $category->title=$data['title'];
        $category->slug=$data['slug'];
        $category->description=$data['description'];
        $category->status=$data['status'];
        $category->save();
        toastr()->success('Thành công!','Thêm danh mục thành công!');
        return redirect()->route('category.index');
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
        $category=Category::find($id);
        return view('admincp.category.form',compact('category'));
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
        $category = Category::find($id);
        $category->title=$data['title'];
        $category->slug=$data['slug'];
        $category->description=$data['description'];
        $category->status=$data['status'];
        $category->save();
        toastr()->warning('Thành công!','Cập nhật danh mục thành công!');
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::find($id)->delete();
        toastr()->info('Thành công!','Xóa danh mục thành công!');
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = User::all();
        return view('admincp.user.index',compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admincp.user.form');
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
        $user = new User();
        $user->name=$data['name'];
        $user->email=$data['email'];
        $user->password= bcrypt($data['password']);
        $user->role=$data['role'];
        $user->phone=$data['phone'];
        $user->created_at = Carbon::now('Asia/Ho_Chi_Minh');
        $user->updated_at = Carbon::now('Asia/Ho_Chi_Minh');
        $user->save();
        toastr()->success('Thành công!','Thêm người dùng thành công!');
        return redirect()->route('user.index');
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
        $user=User::find($id);
        return view('admincp.user.form',compact('user'));
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
        $user = User::find($id);
        $user->name=$data['name'];
        $user->email=$data['email'];
        $user->password=bcrypt($data['password']);
        $user->role=$data['role'];
        $user->phone=$data['phone'];
        $user->updated_at = Carbon::now('Asia/Ho_Chi_Minh');
        $user->save();
        toastr()->success('Thành công!','Cập nhật người dùng thành công!');
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        toastr()->success('Thành công!','Xóa người dùng thành công!');
        return redirect()->back();
    }
}

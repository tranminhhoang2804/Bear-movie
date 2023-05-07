<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Movie;

class CommentController extends Controller
{
    public function index()
    {
        $list= Comment::all();
        return view('admincp.comment',compact('list'));
    }

    public function store(Request $request){
        if(Auth::check())
        {
            $validator = Validator::make($request->all(),[
                'comment_body' => 'required|string'
            ]);

            if($validator->fails())
            {
                return redirect()->back()->with('message','Yêu cầu nhập đúng ký tự!');
            }

            $movie = Movie::where('slug',$request->movie_slug)->where('status','1')->first();
            if($movie)
            {
                Comment::create([
                    'movie_id' => $movie->id,
                    'user_id' => Auth::user()->id,
                    'comment_body' => $request->comment_body
                ]);
                return redirect()->back()->with('message','Đã gửi bình luận!');
            }
            else
            {
                return redirect()->back()->with('message','Không tìm thấy đường dẫn phim');
            }
        }
        else
        {
            return redirect('login')->with('message','Đăng nhập trước khi bình luận');
        }
    }

    public function destroy($id)
    {
        Comment::find($id)->delete();
        toastr()->info('Thành công!','Xóa danh mục thành công!');
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;
class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $data['comments'] = DB::table('comments')
        ->join('news', 'comments.post_id_comment', '=', 'news.uuid')
        ->join('users', 'comments.user_id_comment', '=', 'users.uuid')
        ->select('comments.*', 'news.title', 'users.email')
        ->get();

        return view('admin.modules.comment.index',$data);
    }

    /**
     * Show the form for status a new resource.
     */
    public function unActive_news($id){

        Comment::where('uuid',$id)->update(['status_comment'=>1]);

        return redirect()->back()->with('success', 'Kích hoạt comment thành công');
    }
    public function active_news($id){

        Comment::where('uuid',$id)->update(['status_comment'=>0]);

        return redirect()->back()->with('success', 'Tắt kích hoạt comment thành công');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comment = Comment::join('news', 'comments.post_id_comment', '=', 'news.uuid')
        ->join('users', 'comments.user_id_comment', '=', 'users.uuid')
        ->select('comments.*', 'news.title', 'users.email')
        ->where('comments.uuid', $id)
        ->first();
        if ($comment->exists()) {
            $data['comment'] = $comment;
     
            return view('admin.modules.comment.edit',$data);
        } else {
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $new = DB::table('comments')->where('id',$id);

        if ($new->exists()) {
            $new->delete();
            return back()->with('success', 'Xóa comments thành công');
        } else {
            abort(404);
        }
    }

}

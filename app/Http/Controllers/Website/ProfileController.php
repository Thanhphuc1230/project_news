<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class ProfileController extends Controller
{
    public function profile($uuid){
        $data['profile'] = User::where('uuid',$uuid)->first();
        if (!$data['profile']) {
            return response()->view('website.modules.error.index', [], 404);
        }
        $data['comments'] = DB::table('comments')
        ->join('news', 'comments.post_id_comment', '=', 'news.uuid')
        ->select('news.uuid','news.title','comments.uuid as Cuuid','comments.comment','comments.status_comment','comments.created_at')
        ->where('comments.user_id_comment',$uuid)
        ->get();
        $data['history'] = DB::table('history')
        ->join('news', 'history.id_post', '=', 'news.uuid')
        ->select('news.uuid','news.title','history.created_at','history.uuid as Huuid')
        ->where('history.user_id',$uuid)
        ->get();
        return view('website.modules.account.profile',$data);
    }

    public function deleteHistory($uuid_history){
        $history_user =  Db::table('history')
            ->where('uuid', $uuid_history);

        if ($history_user->exists()) {
            $history_user->delete();
            return redirect()->back()->with('success', 'Xoá lịch sử xem bài viết thành công');
        } else {
            abort(404);
        }
    }

    public function editComment($uuid){
        $data['comment_user'] = DB::table('comments')
        ->join('news', 'comments.post_id_comment', '=', 'news.uuid')
        ->select('news.uuid','news.title','comments.uuid as Cuuid','comments.comment','comments.status_comment','comments.created_at')
        ->where('comments.uuid',$uuid)
        ->first();
        return view('website.modules.account.edit_profile',$data);
    }

    public function updatedComment(Request $request,$uuid){
        $data = [
            'comment' => $request->input('comment'),
            'updated_at' => new \DateTime(),
        ];

        DB::table('comments')->where('uuid', $uuid)->update($data);

       return redirect('/profile/'.Auth::user()->uuid)->with('success', 'Chỉnh sửa comment thành công.');
    }

    public function updatedProfile(Request $request,$uuid){
        $user_current = User::where('uuid', $uuid)->first();
        $data = $request->except('_token',);
        $data['updated_at'] = new \DateTime();
        
        if (empty($request->avatar)) {
            $data['avatar'] = $user_current->avatar; 
        } else {
            $image_path = public_path('images/users') . "/" . $user_current->avatar;
            $imageName = time().'-'.$request->avatar->getClientOriginalName();  
            $request->avatar->move(public_path('images/users'), $imageName);
            $data['avatar'] = $imageName;
        }
        User::where('uuid', $uuid)->update($data);

       return redirect('/profile/'.Auth::user()->uuid)->with('success', 'Chỉnh sửa thông tin thành công.');
    }

    public function updatedPassword(Request $request,$uuid){
        $user = User::where('uuid', $uuid)->first();

        // Check if old password is correct
        if (!Hash::check($request->old_password, $user->password)) {
            return redirect()->back()->with('error', 'Mật khẩu cũ sai');
        }

        // Check if new password and confirm password match
        if ($request->password != $request->password_confirm) {
            return redirect()->back()->with('error', 'Mật khẩu mới không khớp nhau');
        }

        if (strlen($request->password) < 6) {
            return redirect()->back()->with('error', 'Mật khẩu mới phải có ít nhất 6 ký tự');
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/profile/'.Auth::user()->uuid)->with('success', 'Password updated successfully.');
    }

}

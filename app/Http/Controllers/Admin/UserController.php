<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\Admin\UserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $data['users'] = User::select('uuid','fullname','email','created_at','level','status_user')->get();
        return view('admin.modules.user.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $data = $request->except('_token', 'password_confirmation');
        $data['password'] = bcrypt($request->password);
        $data['created_at'] = new \DateTime();
        $data['uuid'] = Uuid::uuid4()->toString();
        $data['status_user'] = '1';
        $imageName = time().'-'.$request->avatar->getClientOriginalName();  
        $request->avatar->move(public_path('images/users'), $imageName);
        $data['avatar'] = $imageName;

        User::insert($data);

        return redirect()->back()->with('success', 'Thêm thành viên thành công');
    }

    public function active_user($id){

        DB::table('users')->where('uuid',$id)->update(['status_user' => 0]);

        return redirect()->back()->with('success', 'Người dùng đã bị chặn đăng nhập');
     }
     public function unactive_user($id){
 
        DB::table('users')->where('uuid',$id)->update(['status_user' => 1]);

        return redirect()->back()->with('success', 'Người dùng được hoạt động');
     }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::where('uuid', $id);
        if ($user->exists()) {
            $data['user'] = $user->first();
            return view('admin.modules.user.edit',$data);
        } else {
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, string $id)
    {
        $user_current = User::where('uuid', $id)->first();
        $data = $request->except('_token', 'password_confirmation');
        $data['updated_at'] = new \DateTime();

        if (empty($request->password)) {
            $data['password'] = $user_current->password; 
        } else {
            $request->validate([
                'password' => 'min:8'
            ], [
                'password.min' => 'Mật khẩu ít nhất 8 ký tự'
            ]);
            $data['password'] = bcrypt($request->password);
        }
        if (empty($request->avatar)) {
            $data['avatar'] = $user_current->avatar; 
        } else {
            $image_path = public_path('images/users') . "/" . $user_current->avatar;
            $imageName = time().'-'.$request->avatar->getClientOriginalName();  
            $request->avatar->move(public_path('images/users'), $imageName);
            $data['avatar'] = $imageName;
        }

        User::where('uuid', $id)->update($data);
        return redirect()->route('admin.users.index')->with('success', 'Successfully updated');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

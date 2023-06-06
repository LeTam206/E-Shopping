<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use DB;
use Auth;
use Session;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('customer.create_user');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255|email|unique:users',
            'password' => 'required|min:6|max:255|confirmed',
            'phone' => 'required|max:255|',
            'role' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:255',
        ]);
        //move image
        $image = $request->file('image');
        $storedPath = $image->move('public/imageUser/', $image->getClientOriginalName());
        $data = $request->all();
        $check = $this->create($data);
        return redirect("/trang-chu")->with("status", "Đăng ký thành công")->with("alert", "Ok bạn đã đăng ký thành công");
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],
            'role' => $data['role'],
            'image' => $data['image']->getClientOriginalName(),
        ]);
    }
    public function updatePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);
        $userId = session('user')->id;
        $user = User::find($userId);
        if (!Hash::check($request->old_password, $user->password)) {
            return back()->with("error", "Mật khẩu cũ không đúng");
        }
        $user->password = Hash::make($request->new_password);
        $user->save();
        return back()->with("status", "Đã đổi mật khẩu");
    }
    public function viewall()
    {
        $all['user'] = DB::table('users')->paginate(5);
        return view('customer.users', $all);
        // $user = User::latest()->paginate(5);
        // return view('customer.users',compact('user'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function register()
    {
        return view('customer.cus_register');
    }
    public function loginUser()
    {
        return view('customer.cus_login');
    }
    public function userLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        $user = User::where('email', $credentials['email'])->first();
        if ($user && Hash::check($credentials['password'], $user->password)) {
            session(['user' => $user]);
            return redirect()->route('index', ['user' => $user->id])->withSuccess('Đăng nhập thành công');
        }
        return redirect("cus_login")->with('status', 'Thông tin sai rồi !!!!!!!')->with('alert', 'error');
    }
    public function viewEdit(User $user)
    {
        return view('customer.editUser', compact('user'));
    }
    public function destroy1(User $user)
    {
        $user->delete();
        return redirect("users")->withSuccess('Xóa thành công');
    }
    public function show(User $user)
    {
        return view('customer.showUser', compact('user'));
    }
    public function signOut()
    {
        Session::flush();
        return redirect('trang-chu');
    }
    public function search()
    {
        $search = $_GET['query'];
        $user = User::where('name', 'like', $search)
            ->orWhere('email', 'like', $search)
            ->orWhere('id', 'like', $search)
            ->get();
        $message = '';
        if ($user->isEmpty()) {
            $message = 'Không tìm thấy User';
        }
        return view('customer.search', compact('user', 'message'));
    }
    public function fix(User $user)
    {
        return view('customer.fix_user', compact('user'));
    }
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'required|max:255',
            'role' => 'required|max:255',
        ]);
        $input = $request->all();
        $user->update($input);
        return view('customer.showUser', compact('user'));
    }
}

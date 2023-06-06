<?php
namespace App\Http\Controllers;
use App\Models\User;
use Hash;
use http\Params;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB; /* Sử dụng Facades để làm việc với database */
use Session;


//Unknow
class CustomAuthController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }
//    public function userCan($action, $option = NULL){
//        $user = Auth::user();
//        return Gate::forUser($user)->allows($action,$option);
//    }
    public function registration()
    {
        return view('admin.registration');
    }
    public function detail(){
        return view('admin.detail');
    }
    /* Duyệt dữ liệu từ database */
    public function allUsers(){
        $users = DB::select('SELECT id,name,Age FROM users');
        return view('admin.users',['users' => $users]);
    }
    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'age' => 'required',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
        var_dump($data);
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'age' => $data['age'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}

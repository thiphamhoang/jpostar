<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Model\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

    public function get_regis( ){
        return view('regis');
    }


 
    public function create (Request $request){
                $this -> validate($request,
                    [
                        'email' => 'required|unique:users,email',
                        'tel' => 'required|unique:users,tel',
                        'password' => 'required|min:6|max:38',
                        'password_again' => 'required|same:password',
                    ],
                    [
                        'email.required' => 'Bạn chưa nhập email thành viên',
                        'email.unique' => 'Tên thành viên đã tồn tại',
                        'email.email' => 'Bạn phải nhập đúng định dạng email ví dụ: info@webux.vn',
        
                        'tel.required' => 'Bạn chưa nhập số điện thoại thành viên',
                        'tel.unique' => 'Số điện thoại thành viên đã tồn tại',
                        'tel.number' => 'Bạn phải nhập đúng định dạng số điện thoại',
        
                        'password.required' => 'Ban chưa nhập mật khẩu',
                        'password.min' => 'Mật khẩu phải từ 6 đến 38 ký tự',
                        'password.max' => 'Mật khẩu phải từ 6 đến 38 ký tự',
        
                        'name.required' => 'Bạn chưa nhập họ tên',
                        'name.min' => 'Họ tên quá ngắn, họ tên từ 2 - 38 ký tự',
                        'name.max' => 'Họ tên quá dài, họ tên từ 2 - 38 ký tự',
        
                        'password_again.required' => 'Ban chưa nhập lại mật khẩu',
                        'password_again.same' => 'Mật khẩu nhập lại chưa khớp',
                    ]);
        
                $user = new User;
                $user -> email = $request -> email;
                $user -> password = bcrypt($request -> password);
                $user -> user_type_id = 4;
                $user -> remember_token = $request -> _token;
                $user -> name = $request -> name;
                $user -> tel = $request -> tel;
                $user -> status = 'on';
                
                $user -> save();

            return redirect('admin/login') -> with('alert','Đăng ký thành viên thành công, đăng nhập tài khoản vừa đăng ký');
         
    }
}

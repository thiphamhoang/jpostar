<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Hash;
use Auth;
use Mail;
use App\Model\User;
use Validator;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

  
    public function get_login(Request $request){
        if (Auth::check()) {
            // nếu đăng nhập thàng công thì 
            return redirect('admin/dashboard');
        } else {
            return view('login');
        }
    }

    
    public function post_login(LoginRequest $request) {
        $login = [
            'email' => $request-> email,
            'password' => $request-> password,
            'status' => 'on',
        ];
        
        if (Auth::attempt($login)) {
            if(Auth::user()->user_type_id == 4){
                return redirect('');
            }else{
                return redirect('admin/dashboard');
            }
        } else {
            return redirect()->back()->with('alert', 'Email hoặc Password không chính xác');
        }
    }

    public function get_logout(){
        Auth::logout();
        return redirect('');
    }
    public function reset_password(Request $request){
       
        // check uesr
        $user_check = User::where('email',$request->email)->first();
        if($user_check -> email != ''){
            // gui mail 
            $title_mail = '[Webbox.vn]Thông tin tài khoản website mới';
            $data = [
                'web_account'=> $user_check -> email,
                'web_pass'=> substr(md5(mt_rand()), 0, 6),
                'title_mail' => $title_mail,
                'domain_account' => '',
                'domain_pass' => '',
                'domaincheck' => '',
            ];
  
            // email he thong gui di
            $email_send = 'info@webbox.vn';
            $email_customer = $user_check -> email;
  
            // gui mail den cho quan tri
            Mail::send('V_email/V_account',$data,function($msg) use ($email_send,$email_customer,$title_mail){
            $msg -> from($email_send,'[Tài khoản Webbox.vn]');
            $msg -> to($email_customer,'Hệ thống Website')->bcc('info@webbox.vn')-> subject($title_mail);
            });   
  
            return redirect('')->with('alert', 'Tài khoản và mật khẩu đã gửi đến email của bạn');
        }else{
            return redirect('')->with('alert', 'Email không tồn tại');
        }
    }
}

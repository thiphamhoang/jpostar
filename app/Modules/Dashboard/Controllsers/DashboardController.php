<?php
namespace App\Modules\Dashboard\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\M_user_type;
use App\Model\M_type_permission;
use App\Model\M_permission;

use App\Model\User;
use Auth;

class DashboardController extends Controller{

    public function index(Request $request){
       
        
        return view('Dashboard::dashboard',['title'=>'Hệ thống quản lý Webux.vn']);
    }
  
}
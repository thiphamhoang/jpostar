<?php
namespace App\Modules\Api\Controllers;

use App\Http\Controllers\Controller;
use App\Model\M_website;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class ConfigController extends Controller
{
    public function website(Request $request){
        return M_website::where('name',$request->name)->first(); 
    }
   
}

<?php

namespace App\Http;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Model\M_website;
use App\Model\M_data;
use App\Model\M_orders;
use Illuminate\Support\Facades\Http;
use Illuminate\Routing\Controller as BaseController;
use Auth;
use Carbon\Carbon;


trait PayTrait {

    public function pay($SECURE_SECRET,$virtualPaymentClientURL,$order){

        $vpcURL = $virtualPaymentClientURL . "?";
        unset($virtualPaymentClientURL); 
        $_POST['AgainLink']=urlencode($_SERVER['HTTP_REFERER']);
        $md5HashData = "";
        ksort($_POST);
        $appendAmp = 0;
        foreach($_POST as $key => $value) {
            if (strlen($value) > 0){
                if ($appendAmp == 0) {
                    $vpcURL .= urlencode($key) . '=' . urlencode($value);
                    $appendAmp = 1;
                } else {
                        $vpcURL .= '&' . urlencode($key) . "=" . urlencode($value);
                }
                if ((strlen($value) > 0) && ((substr($key, 0,4)=="vpc_") || (substr($key,0,5) =="user_"))) {
                    $md5HashData .= $key . "=" . $value . "&";
                }
            }
        }
        $md5HashData = rtrim($md5HashData, "&");
        if (strlen($SECURE_SECRET) > 0) {
            $vpcURL .= "&vpc_SecureHash=" . strtoupper(hash_hmac('SHA256', $md5HashData, pack('H*',$SECURE_SECRET)));
        }
        
        $order -> status = '2_onepay';
        $order -> save();
   
        echo header("Location: ".$vpcURL);
        return redirect($vpcURL);

    }
}
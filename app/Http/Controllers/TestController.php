<?php
/**
 * Created by PhpStorm.
 * User: MorBro
 * Date: 2020/4/21
 * Time: 13:42
 * Desc: description is here
 */

namespace App\Http\Controllers;


use Wythe\Logistics\Logistics;

class TestController extends Controller
{
    public function index()
    {
        $logistics = new Logistics();
        $code = '1Z7V267F0307369482';
        $company = 'ups';
        $channels = ['kuaidi100'];
        $res = $logistics->query($code,$channels,$company);
        echo json_encode($res);die;

    }
}
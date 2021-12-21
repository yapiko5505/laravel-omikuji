<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OmikujiController extends Controller
{
    public function draw(Request $request) {
        $draw = rand(1, 5);
        switch($draw) {
            case 1:
                $result = "大吉";
                $result_img = "omikuji_daikichi.png";
                break;
            case 2: 
                $result = "中吉";
                $result_img = "omikuji_chuukichi.png";
                break;
            case 3: 
                $result = "吉";
                $result_img = "omikuji_kichi.png";
                break;
            case 4:
                $result = "末吉";
                $result_img = "omikuji_suekichi.png";
                break;
            case 5:
                $result = "凶";
                $result_img = "omikuji_kyou.png";
                break;
        }

        return view('result',['result'=>$result, 'result_img'=>$result_img]);
    }
}

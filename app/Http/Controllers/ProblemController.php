<?php namespace App\Http\Controllers;
/**
 * Created by PhpStorm.
 * User: it
 * Date: 2016/11/16
 * Time: 10:13
 */
use Illuminate\Http\Request;
use App\Models\Problem;

class ProblemController extends Controller
{
    public function ProblemCommit(Request $request){
        $res['msg'] = "提交成功";
        $name=$request->get('name');
        $email=$request->get('email');
        $mobile=$request->get('mobile');
        $content= $request->get('content');

        if($name==""){
            $res['msg']="姓名不能为空";
            return $res;
        }

        if($email==""){
            $res['msg']="邮箱不能为空";
            return $res;
        }

        if($content==""){
            $res['msg']="内容不能为空";
            return $res;
        }

        $problem = new Problem;
        $problem ->name = $name;
        $problem ->email = $email;
        $problem ->mobile = $mobile;
        $problem ->content = $content;
        $problem ->IP = $request->ip();
        $problem->save();
        return $res;
    }
}
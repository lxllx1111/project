<?php
/**
 * @Author: Li xinle
 * @Date:   2021-04-18 14:57:32
 * @Last Modified by:   Li xinle
 * @Last Modified time: 2021-04-18 16:37:42
 */
namespace App\Http\Controllers\Admin; //名称空间 层次结构 类所处的位置

use App\Http\Controllers\Controller;

use Illuminate\Http\Request; //引用Request

class UserController //类名
extends Controller //继承父类
{
	public //公共的 
	function index //方法名
	(Request $request,$name) {
		$age = $request->age;
		$sex = $request->sex;
		$money = $request->money;

		return view('test',['name' => $money,'age' => $age]);
	}
}
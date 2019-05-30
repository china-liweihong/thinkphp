<?php

namespace app\home\validate;

use think\DB;
use think\Validate;

class Test extends Validate
{
    /**
     * 定义验证规则
     * 格式：'字段名'	=>	['规则1','规则2'...]
     *
     * @var array
     */	
	protected $rule = [
	    'username' => 'require|max:25|checkName:用户名不能为123',
        'sex'      => 'require',
        'password' => 'require'
    ];
    
    /**
     * 定义错误信息
     * 格式：'字段名.规则名'	=>	'错误信息'
     *
     * @var array
     */	
    protected $message = [
        'username.require' => '姓名不能为空',
        'username.max'     => '姓名长度最大为25',
        'sex.require'      => '性别不能为空',
        'password.require' => '密码不能为空'
    ];

    // 自定义验证规则
    protected function checkName($value,$rule,$data=[],$name,$description){
        if ($value == '123'){
            return $rule;
        }else{
            return true;
        }
    }
}

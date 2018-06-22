<?php
namespace app\console\validate;

use think\Validate;

class ManagerLog extends Validate
{
    protected $rule = [
        "manager_id|管理员id" => "require",
        "module|模块" => "require",
        "controller|控制器" => "require",
        "action|方法" => "require",
        "param|参数" => "require",
        "ip|ip" => "require",
    ];
}

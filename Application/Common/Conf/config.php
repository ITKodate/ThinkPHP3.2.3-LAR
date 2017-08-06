<?php
return array(
	//'配置项'=>'配置值'
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => '127.0.0.1', // 服务器地址
    'DB_NAME'   => 'tklardb', // 数据库名
    'DB_USER'   => 'tklardb', // 用户名
    'DB_PWD'    => '123456', // 密码
    'DB_PORT'   => 3306, // 端口
    'DB_PARAMS' =>  array(), // 数据库连接参数
    'DB_PREFIX' => 'tk_', // 数据库表前缀
    'DB_CHARSET'=> 'utf8', // 字符集
    'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
    //后台公共文件路径
    'TMPL_PARSE_STRING' =>  array(
        '__PUBLIC__' => __ROOT__.'/Public/Admin'
    ),
    'TMPL_EXCEPTION_FILE' => './Public/Admin/error.html',


);
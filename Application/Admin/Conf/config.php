<?php
return array(
	//'配置项'=>'配置值'
    'USER_AUTH_ON'        =>True,              // 是否需要认证
    'USER_AUTH_TYPE'	  =>1,		           // 默认认证类型 1 登录认证 2 实时认证
    'USER_AUTH_KEY'		  =>'authId',	       // 用户认证识别号
    'ADMIN_AUTH_KEY'	  =>'administrator',   // 管理员认证识别号
    'USER_AUTH_MODEL'	  =>'User',	           // 默认验证数据表模型
    'AUTH_PWD_ENCODER'	  =>'md5',	           // 用户认证密码加密方式
    'USER_AUTH_GATEWAY'	  =>'/Public/login',   // 默认认证网关
    'NOT_AUTH_MODULE'	  =>'Public',		   // 默认无需认证模块
    'REQUIRE_AUTH_MODULE' =>'',		           // 默认需要认证模块
    'NOT_AUTH_ACTION'	  =>'',		           // 默认无需认证操作
    'REQUIRE_AUTH_ACTION' =>'',		           // 默认需要认证操作
    'GUEST_AUTH_ON'       =>False,             // 是否开启游客授权访问
    'GUEST_AUTH_ID'       =>'0',               // 游客的用户ID
    'RBAC_ROLE_TABLE'     =>'think_role',      // 角色表名称
    'RBAC_USER_TABLE'	  =>'think_role_user', // 用户表名称
    'RBAC_ACCESS_TABLE'   =>'think_access',    // 权限表名称
    'RBAC_NODE_TABLE'	  =>'think_node',      // 节点表名称
);
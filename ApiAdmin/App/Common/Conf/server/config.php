<?php
defined('THINK_PATH') or exit();

return array(
	//'配置项'=>'配置值'
	'SHOW_PAGE_TRACE'         => false,    //调试配置
	'APP_USE_NAMESPACE'       => true,

	'DEFAULT_MODULE'          => 'Mshop',
	'MODULE_DENY_LIST'	      => array('Common', 'Runtime'),
	'MODULE_ALLOW_LIST'       => array('Admin', 'Mshop', 'Plant'), //支持的目录名称
	'GOODS_MODEL'          	  => '',//商品属性模块
	'HOST_NAME'          	  => 'n.xiongdada.com.cn',//配置域名
	'ERROR_MSG'          	  => '/Mshop/errormsg/index',//错误提示页面
	
	
	//'URL_MODULE_MAP'			=> array('manage'=>'admin'), //隐藏真实后台入口地址，开启后需要在MODULE_ALLOW_LIST中替换对应块名

	/* 数据库设置 */
	'DB_TYPE'                 => 'mysqli',      // 数据库类型
	'DB_HOST'                 => '10.160.2.208',  // 服务器地址
	'DB_NAME'                 => 'tbyy',         // 数据库名
	'DB_USER'                 => 'usertbyy',        // 用户名
	'DB_PWD'                  => 'D1W3@2#6$8%9D0U7!O2W7o3', // 密码
	'DB_PORT'                 => '3306',       // 端口
	'DB_PREFIX'               => 'mp_',      // 数据库表前缀
	
	/* URL配置 */
	'URL_CASE_INSENSITIVE'  => true,        // 默认false 表示URL区分大小写 true则表示不区分大小写
	'URL_MODEL'             => 0,            // URL模式
	'URL_PATHINFO_DEPR'     => '/',            // PATHINFO URL分割符
	'URL_ROUTER_ON'         => false,       // 是否开启URL路由
	'URL_ROUTE_RULES'       => array(),     // 默认路由规则 针对模块
	
	/* 日志设置 */
	'LOG_RECORD'                    => true,          // 默认不记录日志
	'LOG_FILE_SIZE'                   => 2097152,	    // 日志文件大小限制
	'LOG_EXCEPTION_RECORD'  => true,          // 是否记录异常信息日志
	
	'TMPL_L_DELIM'          => '{',           // 模板引擎普通标签开始标记
	'TMPL_R_DELIM'          => '}',          // 模板引擎普通标签结束标记
	
	/* 文件上传全局配置 */

	'FILE_UPLOAD_TYPE'         => 'Local',         //上传驱动
	'FILE_UPLOAD_CONFIG'       => array(
		'mimes'      		   => '',                                  //允许上传的文件MiMe类型
		'maxSize'   	       => 5*1024*1024,                 //上传的文件大小限制 (0-不做限制)
		'exts'          => array('jpg','gif','png','jpeg','zip','rar','tar','gz','7z', 'pdf', 'doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx','txt','xml','swf','avi'), //允许上传的文件后缀
		'autoSub'    => true,                             //自动子目录保存文件
		'subName'  => array('date', 'Y/m/d'),     //子目录创建方式，[0]-函数名，[1]-参数，多个参数使用数组
		'rootPath'   => UPLOAD_PATH,              //保存根路径
		'savePath'   => '',                                  //保存路径
		'saveName' => array('uniqid', ''),           //上传文件命名规则，[0]-函数名，[1]-参数，多个参数使用数组
		'saveExt'     => '',                                  //文件保存后缀，空则使用原后缀
		'replace'     => false,                            //存在同名是否覆盖
		'hash'         => false,                            //是否生成hash编码
		'callback'    => false,                            //检测文件是否存在回调函数，如果存在返回文件信息数组
	),
	
	/* 模板解析设置 */
	'TMPL_PARSE_STRING' => array(
		'./Public/upload' => SCRIPT_DIR . '/Public/upload',
		'__PUBLIC__'        => SCRIPT_DIR . '/Public',
		'__STATIC__'        => SCRIPT_DIR . '/Public/static',
		'__LIBS__'        => SCRIPT_DIR . '/Public/static/libs',
		'__UEEDIT__'        => SCRIPT_DIR . '/Public/static/Ueedit',
		'__MSHOP__'        => SCRIPT_DIR . '/Public/static/Mshop',
		'__DEMO__'        => SCRIPT_DIR . '/Public/demo/move_h5',
		'__SITE__'        => SCRIPT_DIR . '/Public/static/lp',
		'__MANAGE__'        => SCRIPT_DIR . '/Public/static/manage_v1',
		
	),
	'VAR_FILTERS'=>'htmlspecialchars,stripslashes,strip_tags'
);

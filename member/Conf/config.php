<?php
$common_config = include './Public/config.public.php';
$app_config = array(
  'USER_AUTH_KEY' => 'member_mid',
  //默认错误跳转对应的模板文件
  'TMPL_ACTION_ERROR' => 'Public:error',
  //默认成功跳转对应的模板文件
  'TMPL_ACTION_SUCCESS' => 'Public:success',
  'USER_AUTH_GATEWAY' => 'public/login',
);
return array_merge($common_config, $app_config);
?>

<?php
$common_config = include './Public/config.public.php';
$app_config = array(
  'USER_AUTH_KEY' => 'admin_uid',
  'USER_AUTH_GATEWAY' => '/Public/login'//验证网关
);
return array_merge($common_config, $app_config);
?>


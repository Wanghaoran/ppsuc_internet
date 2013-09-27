<?php
$common_lang = include './Public/lang.public.php';

$app_lang = array(
  'REGISTER_SUCCESS' => '注册成功,现在跳转到登陆页面',
  'REGISTER_ERROR' => '注册失败,请检查数据合理性',
  'EMAIL_EMPTY_ERROR' => '电子邮件不能为空！',
  'PASSWORD_EMPTY_ERROR' => '密码不能为空',
  'TELPHONE_EMPTY_ERROR' => '联系手机不能为空！',
  'EMAIL_REPORT_ERROR' => '此邮箱已注册！',
  'PASSWORD_REPORT_ERROR' => '两次密码输入不一致！',
  'MEMBER_LOGIN_SUCCESS' => '登陆成功，欢迎光临！',
  'MEMBER_LOGIN_ERROR' => '登陆失败，用户名或密码错误！',
  'LOGOUT_SUCCESS' => '退出成功！您现在为游客身份',
  'LOGOUT_ERROR' => '退出失败！您还未登陆',
  'NOT_LOGIN' => '您还未登录!请先登录!',
);

return array_merge($common_lang, $app_lang);

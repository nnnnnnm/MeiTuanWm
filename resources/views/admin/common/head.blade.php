<!DOCTYPE html>
<!--
Copyright(c)2016 All rights reserved.
@Licenced  http://www.w3.org
@Author  liutian<1538731090@qq.com> liutian_jiayi
@Create on 2016-6-21 10:03:53
@Version 1.0
-->
<html>
	<head>
		<title>TODO supply a title</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link type="text/css" rel="stylesheet" href="{{ asset('/css/admin/base.css') }}" />
		<script src="{{ asset('/js/jquery-1.8.3.min.js') }}" type="text/javascript"></script>
	</head>
	<body>
		<div class="header w100pc">
			<div class="w1000px">你好，<a href="">{{ Session::get("userData")->nickname }}</a>，欢迎来到本站！<a href="{{ url('/logout') }}">退出</a></div>
		</div>
		<div class="main w1000px">
			<div class="main_left fl">
				<ul>
					<li>用户管理<ul class="submenu">
							<li><a href="">用户列表</a></li>
							<li><a href="">添加用户</a></li>
						</ul></li>
					<li>分组管理<ul class="submenu">
							<li><a href="">分组列表</a></li>
							<li><a href="">添加分组</a></li>
						</ul></li>
					<li>权限管理<ul class="submenu">
							<li><a href="">所有权限</a></li>
							<li><a href="">添加权限</a></li>
						</ul></li>
				</ul>
			</div>
			<div class="main_right fl">


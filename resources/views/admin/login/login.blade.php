<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>世尊综合管理系统</title>
<link rel="stylesheet" type="text/css" href="admin/css/index.css">
<link rel="stylesheet" type="text/css" href="admin/css/login_index.css">
</head>
    {{ session("info") }}
<body style="background:#000;">
    <form method="post" action="/logTodo" name="login">
        <input type="hidden" name="_token" value="{{ $data['_token'] or csrf_token() }}" />
        
            <div class="png login_logo"><img src="admin/images/logo_03.png" alt=""></div>
            <div class="login">
              <div class="login_1"><input name="uname" type="text"  value="{{ $data['uname'] or '' }}" /></div>
              <div class="login_2"><input name="password" type="password" /></div>
              <!--<div class="login_3"><input name="" type="checkbox" value="" /></div>-->
              <div class="login_3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="code" type="text" value="{{ $data['code'] or '' }}" size="9" onfocus="dis(this);"/></div> 
              <div class="login_4"></div>
			  <div class="login_5"><input type="submit" value="登录"/></div>
			  <img src="{{ url('/captcha')."/". rand() }}" id="code" onclick="this.src = this.src.replace(/\d+$/, '') + Math.random();" align="top"/>
            </div>
  </form>
	<script src="{{ asset('/Admin/js/login_index.js') }}"></script>

</body>
</html>
			

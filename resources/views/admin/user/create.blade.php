<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http//www.w3.org/1999/xhtml">
<head>
    <title>无标题页</title>
    <link rel="stylesheet" type="text/css" href="../css/index.css" />
</head>
<body class="mian_bj">
    <div class="mian_top_01">
        <div class="mian_top_r">
        </div>
        <div class="mian_top_l">
        </div>
        <div class="mian_top_c">
            <ul>
                <li><a href="/admin/index1.php">
                    <p>
                        后台首页</p>
                </a></li>
                <li><a href="RSEventApply.html">
                    <p>
                        招聘申请</p>
                </a></li>
                <li><a href="RSEventApply.html">
                    <p>
                        职位调整申请</p>
                </a></li>
                <li><a href="RSEventApply.html">
                    <p>
                        离职申请</p>
                </a></li>
                <li><a href="RSEventApply.html">
                    <p>
                        培训申请</p>
                </a></li>
                <li><a href="ExaAppdocument.html">
                    <p>
                        公文审批</p>
                </a></li>
            </ul>
        </div>
        <div class="mian_b">
          
          
            <form name="add" method="post" action="/Admin/user/store" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <table width="100%" border="0" cellpadding="0" cellspacing="0" class="mian_b_bg_xz">
                    <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
                        <td align="right" valign="middle" class="borderright borderbottom bggray">用户名：</td>
                        <td align="left" valign="middle" class="borderright borderbottom main-for">
                        <input type="text" name="userName" value="" class="text-word">
                        </td>
                    </tr>
                    <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
                        <td align="right" valign="middle" class="borderright borderbottom bggray">昵称：</td>
                        <td align="left" valign="middle" class="borderright borderbottom main-for">
                        <input type="text" name="nickname" value="" class="text-word">
                        </td>
                    </tr>
                     <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
                        <td align="right" valign="middle" class="borderright borderbottom bggray">性别：</td>
                        <td align="left" valign="middle" class="borderright borderbottom main-for">
                        <input type="radio" name="sex" id="male" value="男" checked /><label for="male">男</label>、<label for="female">女</label><input type="radio" name="sex" id="female" value="女" />
                        </td>
                    </tr>
                    
                    <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
                        <td align="right" valign="middle" class="borderright borderbottom bggray">用户密码：</td>
                        <td align="left" valign="middle" class="borderright borderbottom main-for">
                            <input type="password" name="password" value="" class="text-word">
                        </td>
                    </tr>
                    <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
                        <td align="right" valign="middle" class="borderright borderbottom bggray">确认密码：</td>
                        <td align="left" valign="middle" class="borderright borderbottom main-for">
                            <input type="password" name="repassword" value="" class="text-word">
                        </td>
                    </tr>
                    <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
                        <td align="right" valign="middle" class="borderright borderbottom bggray">用户权限：</td>
                        <td align="left" valign="middle" class="borderright borderbottom main-for">
                        <select name="auth" id="level">
                            <option value="1" >&nbsp;&nbsp;信息录入员</option>
                            <option value="2" >&nbsp;&nbsp;一般管理员</option>
                            <option value="3" >&nbsp;&nbsp;超级管理员</option>
                        </select>
                        </td>
                     </tr>
                    <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
                        <td align="right" valign="middle" class="borderright borderbottom bggray">&nbsp;</td>
                        <td align="left" valign="middle" class="borderright borderbottom main-for">
                        <input name="" type="submit" value="添加" class="borderright borderbottom main-for">
                        <input name="" type="reset" value="重置" class="borderright borderbottom main-for">

                         </td>
                    </tr>
             </table>
            </form> 
            <div class="fl">
	@if(session("info"))
	<ul>
		<li>{{session("info")}}<li>
	</ul>
	@endif 
	@if (count($errors) > 0)
	<ul>
		@foreach($errors->all() as $tmp)
		<li>{{$tmp}}</li>
		@endforeach
	</ul>
	@endif
</div>   
            
        </div>
    </div>
</body>
</html>

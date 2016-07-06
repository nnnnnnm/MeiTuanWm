<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http//www.w3.org/1999/xhtml">
<head>
    <title>无标题页</title>
    <link rel="stylesheet" type="text/css" href="/admin/css/index.css" />
    <link type="text/css" rel="stylesheet" href="{{asset('/admin/css/bootstrap.min.css')}}" />
    <script language="javascript" type="text/javascript">
function click1(num){

if(document.getElementById(num).style.display=="block")
{
 document.getElementById(num).style.display="none";
}
else
{
 document.getElementById(num).style.display="block";

}

}
    </script>

</head>
<body class="mian_bj">
    <div class="mian_top_01">
  <div class="mian_top_r"></div>
  <div class="mian_top_l"></div>
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
                <li><a href="ExaAppdocument.html">
                    <p>
                        公文审批</p>
                </a></li>
                <!--<li><a href="RecruiterApply.html">
                    <p>
                        事假申请</p>
                </a></li>
                <li><a href="RecruiterApply.html">
                    <p>
                        报销申请</p>
                </a></li>
                <li><a href="RecruiterApply.html">
                    <p>
                        用车申请</p>
                </a></li>
                <li><a href="RecruiterApply.html">
                    <p>
                        办公用品采购申请</p>
                </a></li>
                <li><a href="RecruiterApply.html">
                    <p>
                        会议室申请</p>
                </a></li>
                <li><a href="RecruiterApply.html">
                    <p>
                        因公外出申请</p>
                </a></li>
                <li><a href="RecruiterApply.html">
                    <p>
                        考勤补签申请</p>
                </a></li>-->
            </ul>
        </div>
        <form method="post" action="{{url('/Admins/user')}}">
        <div class="mian_b">
            <div class="mian_b1">
                <a href="{{url('/Admin/user/create')}}" title="添加">
                    <p class="mian_b1_a1">
                    </p>
                </a><a href="#" title="删除">
                    <p class="mian_b1_a2">
                    </p>
                </a>
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <p class="mian_b1_sousuo"><input type="text" name="keyword" value="{{$keyword}}" placeholder="请输入账号或昵称" />
		
                </p>
                <p class="mian_b1_chazhao"><input type="submit" value="搜查" />
                    </p>
            </div>
            
            </form>
            {{session("info")}}    
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="mian_b_bg">
                  
                    <th align="center" valign="middle" class="borderright">序号</th>
                    <th align="center" valign="middle" class="borderright">编号</th>
                    <th align="center" valign="middle" class="borderright">帐号</th>
                    <th align="center" valign="middle" class="borderright">性别</th>
                    <th align="center" valign="middle" class="borderright">昵称</th>
                    <th align="center" valign="middle" class="borderright">创建时间</th>
                    <th align="center" valign="middle">操作</th>
                  </tr>
                  @foreach ($users as $tmp)
                <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
                    <td align="center" valign="middle" class="borderright borderbottom"><input name="" type="checkbox" value=""/></td>
                    <td align="center" valign="middle" class="borderright borderbottom">{{$tmp->id}}</td>
                    <td align="center" valign="middle" class="borderright borderbottom">{{$tmp->userName}}</td>
                    <td align="center" valign="middle" class="borderright borderbottom">{{$tmp->sex}}</td>
                    <td align="center" valign="middle" class="borderright borderbottom">{{$tmp->nickname}}</td>
                    <td align="center" valign="middle" class="borderright borderbottom">{{$tmp->login_time}}</td>
                       <td width="5%" class="mian_b_icon_01">
                        <a href="/Admin/user/edit/{{$tmp->id}}">编辑</a>
                        </td>
                        <td width="5%" class="mian_b_icon_02">
                            <a href="NoticeClassDetail.html">查看</a>
                        </td>
                  </tr>
                @endforeach
            </table>
              <p>
	{!!$users->appends(['keyword' => $keyword])->render()!!}
</p>
  <script src="{{asset("/admin/js/user_index.js")}}"></script>
        </div>
    </div>

  
</body>
</html>

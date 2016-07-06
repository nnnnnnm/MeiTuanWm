<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http//www.w3.org/1999/xhtml">
<head>
    <title>无标题页</title>
    <link rel="stylesheet" type="text/css" href="../css/index.css" />

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
        <form method="post" action="{{url('/Admin/user')}}">
        <div class="mian_b">
            <div class="mian_b1">
                <a href="AddEmploylee.php" title="添加">
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
<!--                <p class="mian_b1_sousuo">
                    <input name="" type="text" name="keyword" value="{{$keyword}}" placeholder="请输入账号或昵称"/></p>
                <a href="#" title="搜索">
                    <p class="mian_b1_a3">
                    </p>
                </a>
                <p class="mian_b1_a9">
                    <a href="#" onclick="click1('search')">高级搜索>></a></p>-->
                <a href="#" title="最后">
                    <p class="mian_b1_a4">
                    </p>
                </a><a href="#" title="下一页">
                    <p class="mian_b1_a5">
                    </p>
                </a>
                <p class="mian_b1_list">
                    1 2 3 4……</p>
                <a href="#" title="上一页">
                    <p class="mian_b1_a6">
                    </p>
                </a><a href="#" title="最前">
                    <p class="mian_b1_a7">
                    </p>
                </a>
            </div>
            </form>
                
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="mian_b_bg">
                  
                    <th align="center" valign="middle" class="borderright">序号</th>
                    <th align="center" valign="middle" class="borderright">编号</th>
                    <th align="center" valign="middle" class="borderright">管理帐号</th>
                    <th align="center" valign="middle" class="borderright">权限</th>
                    <th align="center" valign="middle" class="borderright">锁定</th>
                    <th align="center" valign="middle" class="borderright">最后登录</th>
                    <th align="center" valign="middle">操作</th>
                  </tr>
                    
                <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
                    <td align="center" valign="middle" class="borderright borderbottom"><input name="" type="checkbox" value=""/></td>
                    <td align="center" valign="middle" class="borderright borderbottom">{{$tmp->id}}</td>
                    <td align="center" valign="middle" class="borderright borderbottom">{{$tmp->userName}}</td>
                    <td align="center" valign="middle" class="borderright borderbottom">{{$tmp->auth}}</td>
                    <td align="center" valign="middle" class="borderright borderbottom">{{$tmp->status}}</td>
                    <td align="center" valign="middle" class="borderright borderbottom">{{$tmp->login_time}}</td>
                       <td width="5%" class="mian_b_icon_01">
                        <a href="AddNoticeClass.html">编辑</a>
                        </td>
                        <td width="5%" class="mian_b_icon_02">
                            <a href="NoticeClassDetail.html">查看</a>
                        </td>
                  </tr>
                
            </table>
        </div>
    </div>

  
</body>
</html>

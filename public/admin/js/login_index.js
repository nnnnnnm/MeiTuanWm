/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//显示图片位置
function dis(obj) {
	var ix = obj.offsetLeft;
	var iy = obj.offsetTop;
	document.getElementById("code").style.display = "block";
	document.getElementById("code").style.left = ix + "px";
	document.getElementById("code").style.top = (iy + 140) + "px";
}
document.login.onsubmit = function(){
	
	var uname = this.uname.value;
	var password = this.password.value;
	var code = this.code.value;
	//验证值
	var result = new Array();
	if(uname.match(/^\s*$/)){
		result["uname"] = "账号未填写";
	}else{
		result["uname"] = "";
	}
	
	if(password.length < 6 || password.length > 15){
		result["password"] = "密码长度应为6-15位";                                                                    
	}else{
		result["password"] = "";
	}
	
	if(code.length != 5){
		result["code"] = "验证码不合法";
	}else{
		result["code"] = "";
	}
	
	var flag = true;
	for(var key in result){
		if(result[key]) flag = false;
		var span = this[key].nextSibling || document.createElement("span");
		span.innerHTML = result[key];
		this[key].parentNode.appendChild(span);
	}
	
	return flag;
}


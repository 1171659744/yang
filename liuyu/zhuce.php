<?php
 include("conn.php");
		if(isset($_POST["submit2"])){
		$name=$_POST["name"];
		$pwd=$_POST["pwd"];
		$sex=$_POST["sex"];
		$num=$_POST["num"];
		$aihao=$_POST["aihao"];
		$sql="insert into user(uname,upwd,sex,unum,aihao) values('$name','$pwd','$sex','$num','$aihao')";
			$zhisql=mysql_query($sql);
			if(!$zhisql){
				die("注册失败".mysql_error());
			}else{
				echo "<script>alert('注册成功，请登录');window.location.href='denglu.php';</script>";
			}
		}
		
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
		<style type="text/css">
			.zhu{width: 100%; margin: 0 auto;border:1px solid black;}
			header{width: 100%; float: left; height:300px ;border: 1px solid black; background-image: url(img/tou.png);background-size: cover;}
			nav{width: 100%; height: 40px;float: left;background: url(img/nav2.png) no-repeat;background-size: cover;  border: 1px solid black; margin-top: 10px;}
			.ar1{width: 25%;height: 600px;float: left;border: 1px solid black; background: url(img/cei.png)no-repeat; background-size: cover;}
			.ar2{width: 74%;height: 600px;float: right;   border: 1px solid black;   background:url(img/zhuce.png) no-repeat;background-size: cover;}
			footer{width: 100%;height: 100px;float: left;margin-top: 10px; border: 1px solid;background: url(img/foot.png) no-repeat; background-size: cover;}
			nav li{float: left; list-style-type: none; font-size: 20px;line-height: 40px; width: 260px; text-align: center;color: azure; text-decoration: none;}
			nav ul{padding: 0px; margin: 0px;}
			nav ul li a{text-decoration: none;color:black;}
			.xinwen{width: 100%; height: 20px;float: left;background:url(img/xinwen.png) no-repeat; background-size: cover;}
			.arv1{width: 90%; height: 150px;float left; margin-left: 15px; margin-top: 10px;border: 1px solid black; }
			.arv2{width: 90%; height:250px;float: left; margin-left:15px ; margin-top: 20px;border: 1px solid black;  }
			.fp1{float: left;padding: 0; margin: 0; margin-left: 10px; line-height: 100px;color: azure;font-weight: 700;}
			.fp2{float: right;padding: 0; margin: 0; line-height: 100px;color: azure;font-weight: 700;}
			.arv1 ul{padding: 0px;margin: 0px;margin-left: 15px;}
			.arv1 ul li{font-size: 10px;line-height:35px;list-style-type: none;}
			.arv2 ul{list-style-type: none; padding: 0px;margin: 0px;margin-left: 15px;}
			.arv2 ul li{font-size: 10px;line-height: 28px;list-style-type: none;}
		</style>
	</head>
	<body>
		<div class="zhu">
			<header></header>
			<nav>
				<ul>
					<li><a href="index.php">>>首页</a></li>
					<li><a href="denglu.php">>>登录</a></li>
					<li><a href="zhuce.php">>>注册</a></li>
					<li><a href="liuyan.php">>>留言</a></li>
					<li><a href="xinxi.php">>>留言信息</a></li>
				</ul>
			</nav>
			<div class="xinwen">
				<marquee>
					<span>最新热点:&nbsp;&nbsp;从2009月份开始至2010年年底，宇哥公司将全面启动全国性的品牌宣传推广活动。</span>
				</marquee>
			</div>
			<article class="ar1">
				<div class="arv1">
					<ul>
						<li style="font-size: 20px; border-bottom: 2px solid red; height: 35px;">联系我们</li>
						<li>联系我们</li>
						<li>下载链接</li>
						<li style="color: red;">投诉意见</li>
					</ul>
				</div>
				<div class="arv2">
					<ul>
						<li style="font-size: 20px; border-bottom: 2px solid lightgrey;height: 35px;">联系我们</li>
						<li>宇哥大显通讯有限公司</li>
						<li>电话：0411-872777</li>
						<li>地址：大连市双D港辽河东</li>
						<li>路2号</li>
						<li>服务热线：<span style="color: red;">0411-8732777</span></li>
						<li>E-mail：sales@daxiante</li>
						<li>lecom.com</li>
						
					</ul>
				</div>
			</article>
			<article class="ar2">
				<form method="post" action="zhuce.php">
					<table align="center" style="margin-top:30px ;">
						<tr>
							<td>用户名：</td>
							<td><input type="text" name="name"/></td>
						</tr>
						<tr>
							<td>密码：</td>
							<td><input type="password" name="pwd" /></td>
						</tr>
						<tr>
							<td>性别：</td>
							<td style="text-align: left;"><input type="radio" name="sex" value='1'/>男<input type="radio" name="sex" value='0'/>女</td>
						</tr>
						<tr>
							<td>年龄：</td>
							<td><input type="number" name="num" /></td>
						</tr>
						<tr>
							<td>兴趣爱好：</td>
							<td><textarea cols="21" rows="8" name="aihao" ></textarea></td>
						</tr>
						<tr>
							<td></td>
							<td>
								<input type="submit" name="submit2" value="注册" />
							</td>
							
						</tr>
					</table>
				</form>
			</article>
			<footer>
				<p class="fp1">
					宇哥大显通讯技术股份有限公司&nbsp;&nbsp;邮箱:518000
				</p>
				<p class="fp2">
					加入收藏&nbsp;|&nbsp;联系我们&nbsp;|&nbsp;版权信息
				</p>
			</footer>
		</div>
	</body>
</html>

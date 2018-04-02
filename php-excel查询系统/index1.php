<?php
header("Content-type:text/html;charset=gb2312");
header("Cache -Control: no-store, no-cache , must-revalidate");
session_start();
?>
<html>
<head>
<link href="inc1/index.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div class="sub_top">
		某某中学查询系统
	</div>
	<div class="sub_main">
		<form method="POST" action="index2.php" >
			<div class="select"id="select">
				<select id="sl" name="sl">
					<option value="2012年12月_改了题目_工资查询" selected>工资查询</option>
					<option value="2014学年_某年级_6项_工资">成绩查询</option>
					<option value="none">别删我</option>
				</select>
			</div>
			<div class="input_name">
				<input type="text"  placeholder="请输入姓名" id="name" class="placeholder" onfocus="st('name',0)" value="" onblur="st('name',3)" name="name" />
			</div>
			<div class="input_verification">
				<input type="text" placeholder="请输入验证码" id="code" class="placeholder" onfocus="st('code',1)" onblur="st('code',4)" name="code" / >
				<span><image src="./code.php?" onclick="this.src='./code.php'"/></span>
			</div>
			<div class="input_submit">
				<input type="submit" value="查询" onclick="return sg()" />
			</div>
			<div class="input_submit">
				说明:【姓名+验证码】都输入正确才显示相应结果。
			</div>
		</form>
	</div>
	<div class="sub_foot">
		<div>
			2017  <span>某某中学</span>
		</div>
	</div>
</body>
</html>
<script type="text/javascript" src="./inc/js/js1.js"></script>
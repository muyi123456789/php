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
		ĳĳ��ѧ��ѯϵͳ
	</div>
	<div class="sub_main">
		<form method="POST" action="index2.php" >
			<div class="select"id="select">
				<select id="sl" name="sl">
					<option value="2012��12��_������Ŀ_���ʲ�ѯ" selected>���ʲ�ѯ</option>
					<option value="2014ѧ��_ĳ�꼶_6��_����">�ɼ���ѯ</option>
					<option value="none">��ɾ��</option>
				</select>
			</div>
			<div class="input_name">
				<input type="text"  placeholder="����������" id="name" class="placeholder" onfocus="st('name',0)" value="" onblur="st('name',3)" name="name" />
			</div>
			<div class="input_verification">
				<input type="text" placeholder="��������֤��" id="code" class="placeholder" onfocus="st('code',1)" onblur="st('code',4)" name="code" / >
				<span><image src="./code.php?" onclick="this.src='./code.php'"/></span>
			</div>
			<div class="input_submit">
				<input type="submit" value="��ѯ" onclick="return sg()" />
			</div>
			<div class="input_submit">
				˵��:������+��֤�롿��������ȷ����ʾ��Ӧ�����
			</div>
		</form>
	</div>
	<div class="sub_foot">
		<div>
			2017  <span>ĳĳ��ѧ</span>
		</div>
	</div>
</body>
</html>
<script type="text/javascript" src="./inc/js/js1.js"></script>
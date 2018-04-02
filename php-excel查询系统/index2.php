<?php
header('Content-type:text/html;charset=gb2312');
session_start();
error_reporting(0);
include "inc1/excel.php";
$sl=$_POST['sl'];
$name=$_POST['name'];
$code=$_POST['code'];
$files=iconv('gb2312','gb2312','shujukufangzheli'."/".$sl.'.xls');

if(!file_exists($files)){
	echo '数据库不存在';
}else{
	$data = new Spreadsheet_Excel_Reader();
	$data->setOutputEncoding('gb2312');
	$data->read($files);

?>
<html>
<head>
<link href="inc1/index2.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div class="sub_top">
		某某中学
	</div>
	<div class="sub_main">
		<table border="1px">
		<caption><?php echo $sl;?></br>查询结果</caption>
		<?php
		
		if($code==$_SESSION['code']){
			echo "<tbody><tr>";
			for($j=1;$j<$data->sheets[0]['numCols'];$j++){
				$f=$data->sheets[0]['cells'][1][$j];
				echo "<td>$f</td>";
			}
			echo "</tr>";
			for($i=1;$i<$data->sheets[0]['numRows'];$i++){
				if($data->sheets[0]['cells'][$i][1]==$name){
					echo "<tr>";
					for($j=1;$j<$data->sheets[0]['numCols'];$j++){
						echo "<td>";
						$a=$data->sheets[0]['cells'][$i][$j];
						echo $a;
						echo "</td>";
						$x++;
					}
					echo "</tr>";
				}
			}
			if($x<=1){echo '<tr><td colspan='.$j.' class="s">姓名不存在</td></tr>';}
			echo "</tbody>";
		}else{
			echo '<tr><td class="s">验证码'.$code.'错误</td></tr>';
		}
		}
		?>
		</table>
	</div>
	
	<div class="sub_foot">
		<div>
			2017  <span>某某中学</span>
		</div>
	</div>
</body>
</html>
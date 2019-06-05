<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tìm số nguyên tố</title>
</head>
<body>
	<form method="POST" action="">
		<table>
		<input type="text" name="num" placeholder="Nhập 2 số có dạng a-b">
		<input type="submit" name="check" >
		</table>
	</form>

	<?php
	if(isset($_POST['check'])){
		$string=$_POST["num"];
		check_input($string);
	}
	function check_input($str){
		$arr = explode(',', $str);
		foreach ($arr as $key ) {
			$arr_2= explode('-', $key);
			$k = $arr_2[0];
			$l = $arr_2[1];
	 	if (!isset($arr) || !is_numeric($k) || !is_numeric($l)) {
	 		echo "Nhập sai định dạng";
	 		die();
			}
		if($k > $l)
		{
			echo "<b>Số thứ nhất phải nhỏ hơn số thứ 2</b>";
			die();
		}
		if ($k <= 0 && $l <= 0) {
			echo "<b>Số nhập vào phải >0</b>";
			die();
		}
		else outPut($k,$l);
		}
	}
	function checkPrime($num){
		if ($num < 2) {
			return false;
		}
		for($i = 2; $i <= sqrt ( $num ); $i ++) {
			if ($num % $i == 0) {
				return false;
			}
		}
		return $num;		
	}
	function outPut($a,$b){
		$array=[];
		for($i= $a; $i<= $b; $i++){
			$numPrime=checkPrime($i);
			if($numPrime!=""){
				array_push($array,$i);
			}
		}
		if($array==null){
			echo "<br><b>Từ $a đến $b không có số nguyên tố nào</b>";
		}
		else{
			echo "<br><b>số nguyên tố trong khoảng từ $a đến $b là => </b> ";
			foreach ($array as $key) {
				echo $key." ";
			}
		}
	}
	?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tìm số nguyên tố</title>
</head>
<body>
	<?php
	if(isset($_POST['check'])){

		$primes = [];
		$string=$_POST["num"];
		if ($string == '') {
			echo "Vui lòng nhập";
		}
		
		$arr = explode(',', $string);
		foreach ($arr as $key ) {
			$arr_2= explode('-', $key);
			if((!isset($arr_2[0]) || !is_numeric($arr_2[0])) || (!isset($arr_2[1]) || !is_numeric($arr_2[1]))){
            echo ' Vui lòng nhập đúng định dạng';
            die();
        }
			$k= $arr_2[0];
			$l= $arr_2[1];
			if($k >= $l){
            echo 'Số trước phải nhỏ hơn số sau';
            die();
        }
        for($i = $k; $i <= $l; $i ++) {
            if (checkPrime($i)) {
                array_push($primes, $i);
            }
        }
    }
	    if(count($primes) > 0){
	        echo "Các số nguyên tố cần tìm là : ";
	        foreach ($primes as $item){
	            echo ($item . " ");
	        }
	    }
	    if (count($primes) == 0){
	        echo 'không có số thỏa mãn';
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

	?>
	<form method="POST" action="">
		<table>
		<input type="text" name="num" placeholder="Nhập 2 số có dạng a-b">
		<input type="submit" name="check" >
		</table>
	</form>
</body>
</html>

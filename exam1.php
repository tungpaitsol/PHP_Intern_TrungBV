<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Giải phương trình bậc 2</title>
</head>
<body>
	<?php
    if (isset ( $_POST ['a'] )) {
        $a = $_POST ['a'];
    }
    if (isset ( $_POST ['b'] )) {
        $b = $_POST ['b'];
    }
    if (isset ( $_POST ['c'] )) {
        $c = $_POST ['c'];
    }
	// Validate
    if ($a == '')
    {
        if ($b == '' && $c == '') {
            echo "Vui lòng nhập vào dữ liệu";
            die();
        }
        elseif ($b != '' && $c != '')
        {
            echo "Vui lòng nhập vào a";
            die();
        }
        elseif ($b == '' && $c != '') {
            echo "Vui lòng nhập vào a và b";
            die();
        }
        elseif ($b != '' && $c == '') {
            echo "Vui lòng nhập vào a và c";
            die();
        }
    }
    else {
        if ($b == '' && $c != '') {
            echo "Vui lòng nhập vào b";
            die();
        }
        elseif ($b == '' && $c == ''){
            echo "Vui lòng nhập vào b và c";
            die();
        }
        elseif ($b != '' && $c == '') {
            echo "Vui lòng nhập vào c";
            die();
        }
    }
    function giaiPTB2($a, $b, $c) {
        $result = '';
    // kiểm tra biến đầu vào
        if ($a == "")
            $a = 0;
        if ($b == "")
            $b = 0;
        if ($c == "")
            $c = 0;
        echo "<b>"."Phương trình: " . $a . "x <sup>2</sup> +" . $b . "x + " . $c . " = 0"."<b>";
    // kiểm tra các hệ số
        if ($a == 0) {
            if ($b == 0) {
               $result = " Phương trình vô nghiệm!";
            } else {
                $result = (" Phương trình có một nghiệm: " . "x = " . (- $c / $b));
            }
            return $result ;
        }
    // tính delta
        $delta = $b * $b - 4 * $a * $c;
        $x1 = "";
        $x2 = "";
    // tính nghiệm
        if ($delta > 0) {
            $x1 = (- $b + sqrt ( $delta )) / (2 * $a);
            $x2 = (- $b - sqrt ( $delta )) / (2 * $a);
            $result = (" có 2 nghiệm là: " . "x1 = " . $x1 . " và x2 = " . $x2);
        } else if ($delta == 0) {
            $x1 = (- $b / (2 * $a));
            $result = (" có nghiệm kép: x1 = x2 = " . $x1);
        } else {
            $result = (" vô nghiệm rồi !");
        }
        return $result;
    }
    ?>
    <form action="#" method="post" class="frm">
        <table>
            <tr>
                <td>Nhập vào a</td>
                <td><input type="text" name="a" value="" /></td>
            </tr>
            <tr>
                <td>Nhập vào b</td>
                <td><input type="text" name="b" value="" /></td>
            </tr>
            <tr>
                <td>Nhập vào c</td>
                <td><input type="text" name="c" value="" /></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Kết quả"></td>
            </tr>
        </table>
    </form>
    <br>
    <?php
    if (is_numeric ($a) && is_numeric ($b) 
        && is_numeric ($c)) {
        echo giaiPTB2 ( $a, $b, $c);
    } else {
        echo ("Giá trị input không hợp lệ!");
    }
?>
</body>
</html>


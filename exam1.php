<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Giải phương trình bậc 2</title>
</head>
<body>
     <form action="#" method="post" class="frm">
        <table>
            <tr>
                <td>Nhập vào a</td>
                <td><input type="number" name="a" value="" /></td>
            </tr>
            <tr>
                <td>Nhập vào b</td>
                <td><input type="number" name="b" value="" /></td>
            </tr>
            <tr>
                <td>Nhập vào c</td>
                <td><input type="number" name="c" value="" /></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="pt" value="Kết quả"></td>
            </tr>
        </table>
    </form>
    <br>
	<?php
        if (isset($_POST['pt'])) {
        $a = $_POST ['a'];
    
        $b = $_POST ['b'];
    
        $c = $_POST ['c'];

    function giaiPTB2($a, $b, $c) {

        $result = '';
        if ($a == 0) {
            if ($b == 0) {
               $result = " Phương trình vô nghiệm!";
            } else {
                $result = (" Phương trình có một nghiệm: " . "x = " . (- $c / $b));
            }
            return $result ;
        }
            $delta = $b * $b - 4 * $a * $c;
            $x1 = "";
            $x2 = "";
        if ($delta > 0) {
            $x1 = (- $b + sqrt ( $delta )) / (2 * $a);
            $x2 = (- $b - sqrt ( $delta )) / (2 * $a);
            $result = ("<b>Phương trình: " . $a . "x <sup>2</sup> +" . $b . "x + " . $c . " = 0 có 2 nghiệm là x1 = " . $x1 . " và x2 = " . $x2."</b>");
        } else if ($delta == 0) {
            $x1 = (- $b / (2 * $a));
            $result = (" <b>Phương trình: " . $a . "x <sup>2</sup> +" . $b . "x + " . $c . " = 0 có nghiệm kép x1 = " . $x1);
        } else {
            $result = ("<b>Phương trình: " . $a . "x <sup>2</sup> +" . $b . "x + " . $c . " = 0 vô nghiệm rồi !");
        }
        return $result;
    }
    if (!empty($a) && !empty ($b) 
        && !empty ($c)) {
        echo giaiPTB2 ( $a, $b, $c);
    } else {
        echo ("<b>Vui lòng nhập vào</b>");
    }
}
?>
</body>
</html>


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

    function giaiPTB2($a, $b, $c) {
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
                echo ("Phương trình vô nghiệm!");
            } else {
                echo ("Phương trình có một nghiệm: " . "x = " . (- $c / $b));
            }
            return;
        }
    // tính delta
        $delta = $b * $b - 4 * $a * $c;
        $x1 = "";
        $x2 = "";
    // tính nghiệm
        if ($delta > 0) {
            $x1 = (- $b + sqrt ( $delta )) / (2 * $a);
            $x2 = (- $b - sqrt ( $delta )) / (2 * $a);
            echo (" có 2 nghiệm là: " . "x1 = " . $x1 . " và x2 = " . $x2);
        } else if ($delta == 0) {
            $x1 = (- $b / (2 * $a));
            echo (" có nghiệm kép: x1 = x2 = " . $x1);
        } else {
            echo (" vô nghiệm rồi !");
        }
    }
    ?>
    <form action="#" method="post" class="frm">
        <table>
            <tr>
                <td>Nhập vào a</td>
                <td><input type="text" name="a" value="<?=$a?>" /></td>
            </tr>
            <tr>
                <td>Nhập vào b</td>
                <td><input type="text" name="b" value="<?=$b?>" /></td>
            </tr>
            <tr>
                <td>Nhập vào c</td>
                <td><input type="text" name="c" value="<?=$c?>" /></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Kết quả"></td>
            </tr>
        </table>
    </form>
    <br>
    <?php
// Hàm giải phương trình
    if (is_numeric ( $GLOBALS ['a'] ) && is_numeric ( $GLOBALS ['b'] ) 
        && is_numeric ( $GLOBALS ['b'] )) {
        giaiPTB2 ( $GLOBALS ['a'], $GLOBALS ['b'], $GLOBALS ['c'] );
} else {
    echo ("Giá trị input không hợp lệ!");
}
?>
</body>
</html>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài 3</title>
</head>
<body>
<?php session_start();
    if (isset($_POST['create'])) {
    $array = [];
    $random = [];
    $a = isset($_POST['a']) ? ($_POST['a']) : '';
    if ($a == '') {
        echo 'Vui lòng nhập vào dữ liệu';
        die();
    }
    if (!ctype_digit($a)) {
        echo 'Nhập sai định dạng';
        die();
    }
    if ($a < 0 || $a == 0) {
        echo 'Nhập vào số lớn hơn 0';
        die();
    }
    for ($i = 1; $i <= $a; $i++) {
        $random = [randNumber($a), randString($a)];
        $x = array_rand($random, 1);
        array_push($array, $random[$x]);
    }
    if (count($array) > 0) {
        var_dump($array);
    }
    $_SESSION['name'] = $array;
}
    if (isset($_POST['split'])) {
    $a = isset($_POST['a']) ? ($_POST['a']) : '';
    if ($a == '') {
        echo 'Vui lòng nhập vào dữ liệu';
        die();
    }
    if (!is_numeric($a)) {
        echo 'Nhập sai định dạng';
        die();
    }
    if ($a < 0 || $a == 0) {
        echo 'Nhập vào số lớn hơn 0';
        die();
    }
    if (isset($_SESSION['name'])) {
        $arrayA = [];
        $arrayB = [];
        foreach ($_SESSION['name'] as $k) {
            if (is_numeric($k)) {
                array_push($arrayA, $k);
            } else {
                array_push($arrayB, $k);
            }
        }
        var_dump($arrayA);
        var_dump($arrayB);
    }
}
    function randNumber($length):int {
        $keys = '0123456789';
        $x= ceil($length/4); 
        $y= ceil(3*$length/4);
        $key = "";
        for($i=0; $i < rand($x,$y); $i++) {
            $key .= $keys[rand(0, strlen($keys) - 1)];
        }
        return $key;
    }
    function randString($length):string {
        $keys = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $x= ceil($length/4);
        $y= ceil(3*$length/4);
        $key = "";
        for($i=0; $i < rand($x,$y); $i++) {
            $key .= $keys[rand(0, strlen($keys) - 1)];
        }
        return $key;
    }
?>

<form method="post" action="">
    <table>
        <tr><input type="text" name="a" value="<?php echo isset($a) ? $a : '' ?>"></tr>
        <td><input type="submit" name="create" value="Tạo mảng"/></td>
        <td><input type="submit" name="split" value="Chia mảng"/></td>
    </table>
</form>
</body>
</html>
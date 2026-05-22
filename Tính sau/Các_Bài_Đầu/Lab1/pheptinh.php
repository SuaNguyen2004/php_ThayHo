<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <script>
        function vali() {
            var canh1 = document.getElementById('canh1');
            if (canh1.value == "") {
                alert('Cạnh 1 phải nhập');
                canh1.focus();
                return false;
            }
            var canh2 = document.getElementById('canh2');
            if (canh2.value == "") {
                alert('Cạnh 2 phải nhập');
                canh2.focus();
                return false;
            }
            return true;
        }
    </script>
</head>

<body>

    <h2 class="tieude">Nhập chiều dài, chiều rộng</h2>
    <form action="pheptinh.php" method="post">
        <label for="canh1">Nhập a</label>
        <input type="text" name="a" id="canh1" /><br />
        <label for="canh2">Nhập b</label>
        <input type="text" name="b" id="canh2" /><br />
        <input type="submit" onclick="return vali()" name="kq" value="Kết quả" />
    </form>
    <?php

    if ((isset($_POST['kq'])) && ($_POST['kq'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        if (is_numeric($a) && is_numeric($b) && $a > 0 && $b > 0) {
            if ($a == $b) {
                $kq1 = 'Hình vuông';
            } else {
                $kq1 = 'Hình chữ nhật';
            }
            $kq = '<div class="outcome">
                    <h2 class="tieude">Tính diện tích</h2>
                    <p>
                        a: <span>' . $a . '</span>
                    </p>
                    <p>
                        b: <span>' . $b . '</span></p>
                    <h3 class="kq1">' . $kq1 . '</h3>
                    </div>';
            echo $kq;
        } else {
            echo '<h2 class="tieude">Dữ liệu k tính toán được</h2>';
        }
    }
    ?>
</body>

</html>
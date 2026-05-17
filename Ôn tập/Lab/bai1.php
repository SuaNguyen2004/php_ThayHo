<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />
    <script>
        function kiemtra() {
            var mssv = document.getElementById('mssv');
            if (mssv.value == '') {
                alert('Chưa nhập mssv');
                mssv.focus();
                return false;
            }
            return true;
        }
    </script>
</head>

<body>
    <form action="bai1sub.php" method="post">
        <input type="text" name="mssv" id="mssv" /><br />
        <input type="text" name="ten" id="" /><br />
        <input type="text" name="mon1" id="" /><br />
        <input type="text" name="mon2" id="" /><br />
        <input type="submit" onclick="return kiemtra()" name="hienthi" value="Hiển thị kết quả" />
        <input type="reset" value="Nhập lại" />
    </form>
    <br>

    <!-- <table class="table table-hover table-primary">
        <tr>
            <th>MSSV</th>
            <th>Tên</th>
            <th>Môn 1</th>
            <th>Môn 2</th>
            <th>ĐTB</th>
            <th>Xếp loại</th>
            <th>Thưởng</th>
        </tr>

        <tr>
            <td>MSSV</td>
            <td>Tên</td>
            <td>Môn 1</td>
            <td>Môn 2</td>
            <td>ĐTB</td>
            <td>Xếp loại</td>
            <td>thưởng</td>
        </tr>
    </table> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>
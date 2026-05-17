<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kết quả tìm kiếm</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <?php
  $name = "HOTB";
  $mssv = "ps1234";
  $email = "hotb@gmail.com";
  $clss = "WER1";
  echo '<h2 class="tieude">Kết quả tìm kiếm</h2>
          <p>
              Tên: <span>' . $name . '</span>
          </p>
          <p>
              MSSV: <span>' . $mssv . '</span>
          </p>
          <p>
              Email: <span>' . $email . '</span>
          </p>
          <p>
              Lớp: <span>' . $clss . '</span>
          </p>';
  ?>

</body>

</html>
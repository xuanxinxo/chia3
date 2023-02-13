<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <form action="" method="post">
        <div class="mb-3">
          <label for="" class="form-label">So a: </label>
          <input type="text"
            class="form-control" name="a" id="" aria-describedby="helpId" placeholder="">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">So b: </label>
          <input type="text"
            class="form-control" name="b" id="" aria-describedby="helpId" placeholder="">
        </div>

        <button type="submit" class="btn btn-primary" name="sub">Submit</button>
    </form>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

    <?php
      if (isset($_POST['a']) && isset($_POST['b'])) {
        $a = $_POST['a'];
        $b = $_POST['b']; 
      }
      if (isset($_POST['sub'])) {
        $min = 0;$max =0;$c="";
        if ($a>$b) {
          $min = $b;
          $max = $a;
        } else {
          $min = $a;
          $max = $b;
        }

        for ($i = (int)$min; $i <$max; $i++) {
          if ($i%3 == 0) {
            $c = $c. $i . " ";
          }
        }
        echo "cac so chia het cho 3 trong khoang $min va $max la: $c";
      }
    
    ?>
</body>

</html>
<?php
$angka = [2,8,14,20,26];
$angka2 = [32,38,44,50,56];
$angka3 = [62,68,74,80,86];
?>

<!DOCTYPE html>
<html>
  <head>
    <title>2</title>
    <style>
        .box {
            width: 50px;
            height: 50px;
            background-color: grey;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

          .clear {
            clear: both;
          }
    </style>
  </head>
  <body>

    <?php for( $i = 0; $i < 5; $i++ ) { ?>
    <div class="box"><?php echo $angka[$i]; ?></div>
  <?php } ?>
  <div class="clear"></div>
    <?php for( $i = 0; $i < 5; $i++ ) { ?>
      <div class="box"><?php echo $angka2[$i]; ?></div>
  <?php } ?>
  <div class="clear"></div>
    <?php for( $i = 0; $i < 5; $i++ ) { ?>
      <div class="box"><?php echo $angka3[$i]; ?></div>
  <?php } ?>
  </body>
</html>

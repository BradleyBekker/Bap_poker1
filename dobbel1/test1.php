<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form  action="test1.php" method="post">
<input type="submit" name="" value="roll">
    </form>
  </body>
</html>

<?php
echo " halloo B, hier dobbul<br>";
//test
$worp = rand(1,6);


for ($i=0; $i < 5; $i++) {
  $worp = rand(1,6);
  print($worp);
worp($worp);
print "<img src=image$worp.png?".date("U").">";

}




function worp($worp){
        $im = @imagecreate(200, 200) or die("Cannot Initialize new GD image stream");
        $background_color = imagecolorallocate($im, 0, 255, 0);   // yellow

        $red = imagecolorallocate($im, 255, 0, 0);                  // red
        $blue = imagecolorallocate($im,255, 0, 255);






        if ($worp > 1) {
          // stip 1
          imagefilledellipse($im, 50, 50, 40, 40, $blue); // stip 1  // code...
          }

        if($worp > 3){
        // stip 2
        imagefilledellipse($im, 150, 50, 40, 40, $blue); // stip 2
        }
        if($worp == 6){
        // stip 3
        imagefilledellipse($im, 50, 100, 40, 40, $blue); // stip 3
      }
        if($worp == 1 || $worp == 3 || $worp == 5){
        // stip 4
        imagefilledellipse($im, 100, 100, 40, 40, $blue); // stip 4
        }

        if ($worp == 6) {
        // stip 5
        imagefilledellipse($im, 150, 100, 40, 40, $blue); // stip 5
        }
        if ($worp >3) {
        // stip 6
        imagefilledellipse($im, 50, 150, 40, 40, $blue); // stip 6
      }
      if ($worp > 1) {
        // stip 7
        imagefilledellipse($im, 150, 150, 40, 40, $blue); // stip 7
      }

        imagepng($im,"image$worp.png");
        imagedestroy($im);
}
?>

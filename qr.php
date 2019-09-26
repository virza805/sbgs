<?php 
require_once 'phpqrcode/qrlib.php';

$path = 'images/';
$file = $path.uniqid().".png";

// Text to output

// if(isset($_GET['viewt'])){
//     $query = " SELECT * FROM smark  where REGNO='{$_GET["rno"]}' ";
//     $view = $db->query($query);
//     if($view){
//       while($r = $view->fetch_assoc()) {
        
// $text = $r["NAME"]."; "."Class = ".$r["CLASS"] ." and roll = ".$r["CRNO"];
// }}}
$text = ", Exam = 2ndSemestar "; //. $etype
$text .= ", Totall Mark = 95 "; //.$total
$text .= " & GPA = A+"; //. $g_point
//$qr_grad = include "qr_grade.php";
$text .= ", [{('www.tanvir.gq')}]";

QRcode::png($text, $file, 'M', 10, 2);

echo "<center><img src='".$file."' class='img-thumbnail ' width='200' height='200'> </center> ";
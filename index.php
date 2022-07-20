<?php
include_once('./calculate.php');


//if(!empty($_GET['fname']) && !empty($_GET['sname']))
{
  $n1 = $_GET['fname'];
  $n2 = $_GET['sname'];

  $percentage = lovecalc($n1,$n2);
  
  $data = [
    "fname"=> $n1,
    "sname"=> $n2,
    "percentage"=> $percentage
  ];
  echo json_decode($data);
//} else {
 //echo json_decode(['status'=>false,'message'=>'Please provide all details']); 
//}
exit;

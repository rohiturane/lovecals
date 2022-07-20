<?php
include_once('./calculate.php');

if(!empty($_GET['sname']) && !empty($_GET['fname']))
{
  echo 'hi'; exit;
  $n1 = $_GET['fname'];
  $n2 = $_GET['sname'];
  $percentage = lovecalc($n1,$n2);
  
  $data = [
    "fname": $n1,
    "sname": $n2,
    "percentage": $percentage
  ];
  echo json_encode($data);
} else {
 echo json_encode(['status'=>false,'message'=>'Please provide all details']); 

}

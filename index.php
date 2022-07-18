<?php
include_once('calculate.php');
if(!empty($_GET['sname']) && !empty($_GET['fname']))
{
  $n1 = $_GET['fname'];
  $n2 = $_GET['sname'];
   echo lovecalc($n1,$n2);
}

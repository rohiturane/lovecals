<?php
function lovecalc($n1,$n2)
{
  $lovername=strtolower(preg_replace("/ /", "", strip_tags(trim($n1 . $n2))));
  $narray     =count_chars($lovername);
  for ($i=97; $i <= 122; $i++)
  {
     if ($narray[$i] != false)
     {
      $answer=strlen($narray[$i]);
         if ($answer < 2)
         {
              $cal[]=$narray[$i];
         }
         else
         {
           for ($a=0; $a < $answer; $a++)
           {
             $cal[]=substr($narray[$i], $a, 1);
           }
         }
     }
  }
  while (($answord=count($cal)) > 2)
  {
    $letter = ceil($answord / 2);
    for ($i=0; $i < $letter; $i++)
    {
        $add = array_shift($cal) + array_shift($cal);
        $answer =strlen($add);
        if ($answer < 2)
           {
            $calculation[]=$add;
           }
        else
           {
            for ($a=0; $a < $answer; $a++)
                {
                $calculation[]=substr($add, $a, 1);
                }
           }
    }
    $answerc=count($calculation);
    for ($b=0; $b < $answerc; $b++)
    {
        $cal[]=$calculation[$b];
    }
    array_splice($calculation, 0);
  }
  return $cal[0] . $cal[1]."%";
}

?>

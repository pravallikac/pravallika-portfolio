// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A, $B) {
    // write your code in PHP7.0
// $A=sort($A);
// $B=sort($B);
    $c=array();
    
if(count($A)==count($B))
{
 for($x=0;$x<count($A);$x++)
 {
     $c[$x]=$A[$x]+($B[$X]/1000000);
 }
  $cnt=0;
  for($i=0;$i<count($c)-1;$i++)
  {
      for($j=$i+1;$j<count($c);$j++)
      {
          $N=count($c);
          if($i>=0 && $i<$j && $j<$N)
          {
             $mulresult=$c[$i]*$c[$j];
             $addresult=$c[$i]+$c[$j];
      
             if($mulresult>=$addresult)
              {
                 $cnt=$cnt+1;
             }
          } 
      }
  }
  if($cnt>1000000000)
  {
      return 1000000000;
  }
  else return $cnt;
} 
}
// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A, $B) {
 $divider = 1000000;

		$aLength = count($A);
		$bLength = count($B);
		
		if($aLength != $bLength) {
			return -1;
		}
		
		if($aLength == 0 || $bLength == 0) {
			return -1;
		}
		
		$c=array();
		
		for ($i=0; $i<$aLength; $i++) {
			$c[$i] = $A[$i] + $B[$i] / $divider;
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
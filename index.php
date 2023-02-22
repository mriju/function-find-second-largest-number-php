<?php
  function secondLargestValue($data){
  	rsort($data); // SORT ARRAY IN DESCENDING ORDER
    $largestData = $data[0]; // IN DESCENDING ORDER THE LARGEST ELEMENT IS ALWAYS THE FIRST ELEMENT
    
    for($i=0; $i <= count($data); $i++){
    	$secondLargestData = $data[$i]; // KEEP UPDATING THE VARIABLE WITH THE VALUE UNTIL IT RECEIVES THE FIRST ELEMENT WHICH IS DIFFERENT FROM THE LARGEST VALUE
        
        if($data[$i] != $largestData){
        	break; // BREAK OUT OF THE LOOP AS SOON AS THE VALUE IS DIFFERENT THAN THE LARGEST ELEMENT
        }
    }
    return $data[$i]; // NOW RETURN THE SECOND LARGEST ELEMENT
  }
  $numbers=array(4,6,2,22,10,15,17,19);
  echo secondLargestValue($numbers);
?>

<?php
include ('server.php') ;
 $mobile_number = $_SESSION['mobile_number'];
$voltage = 0.0;
$batc = 0;
    $time = $now->format('H');
    $minute = $now->format('i');
    
    $found2 = $collection4->find(array('mobile_number' => $mobile_number));
    if($found2){
        foreach ($found2 as $document2) {
            $voltage = $document2["voltage"];
        }
    }
    
if ($voltage <3.6){               
  	$batC = 0;                     
    }          
 
if($voltage > 3.5 && $voltage < 3.7){   
  $batC = 2;
  }
 
if ($voltage > 3.6 && $voltage < 3.8){ 
  $batC = 12;
  }
 
if ($voltage > 3.7 && $voltage <3.9){   
  $batC = 42;
  }
 
if ($voltage > 3.8 && $voltage < 4.0){  
  $batC = 62;
   }
 
if ($voltage > 3.9 && $voltage < 4.1){ 
  $batC = 79;
   }
 
if ($voltage > 4.0 && $voltage < 4.2){  
  $batC = 81;
   }
 
if ($voltage > 4.19){               
  $batC = 100;
   }

  echo "Current Charge - ", $batC, "%";
?>
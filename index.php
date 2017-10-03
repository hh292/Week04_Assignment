<?php
$obj = new main();

class main{


public function __construct()
{

	
  $date =  date('Y-m-d', time());
  echo "Solution 1: ";
  echo "The value of \$date: ".$date."</br>";

  $tar = "2017/05/24";
  echo "The value of \$tar: ".$tar."</br>";


  $year = array("2012", "396", "300","2000", "1100", "1089");
  echo "The value of \$year: </br>";
  print_r($year);               // sol 1
  tag::space();
  
  $date_1 = strfun::rep($date);   // sol 2
  tag::space();
  
  strfun::cmp($date,$tar);  // sol 3
  tag::space();
  
  $count = strfun::delimit($date_1); // sol 4 
  tag::space();
 
  strfun::num_count($date); // sol 5
  tag::space();
  
  strfun::str_len($date); // sol 6
  tag::space();
  
  strfun::ASCII($date); // sol 7
  tag::space();
  
  strfun::last_chr($date,$count); // sol 8
  tag::space();

  strfun::an_array($date_1); // sol 9 
  tag::space();
  
  strfun::leap_year($year); // sol 10 A
  tag::space();
  
  strfun::leap_year_do($year); // sol 10 B

}

}

class strfun{

 // 2. Replace string   ...hh292

           static public function rep($date_1)

           {

               $date_1 = str_replace('-','/',$date_1);
               //echo"<hr>";
               echo" </br>Solution 2: ";
               echo "</br>Output after replacing --->".$date_1."\r";
               //echo "<hr>";
               return $date_1;
           }

          
 // 3. compare $date with $tar  ...hh292

           public static function cmp($date_1,$tar_1)
        
           {
           	 echo"</br>Solution 3:";
              
   		        if (strcmp($date_1, $tar) > 0) 

    	        {
      		         echo '</br>the future'."\r";
                }

        	         elseif (strcmp($date_1, $tar) < 0)
            
                    {
	                    echo '</br>the past';
                    }

        		     elseif (strcmp($date_1, $tar) == 0)
            	    {

               		echo "</br>Output ---- >Oops"."\r";
            	    }
                //echo"<hr>";
   	        }

    // 4. Search '/' if more then one '/' delimit with ' '  ...hh292

   	        public static function delimit($date)
            {
               echo"</br>Solution 4:";
               $num = 0;
               $look = "/";
               $pst = array();
                   
                    for($i = 0; $i<strlen($date); $i++)
                    {
                       $pos = strpos($date, $look, $num);
                         if($pos == $num)

                         {
                            $pst[] = $pos;
                         }
               
               $num++;
             
                    }
               
                 foreach ($pst as $place) {
                 echo '</br> Position found -->' . $place . "</br>";
            }

              
                 $domain = str_replace('/'," ", $date);
                 echo "</br> After Replace -->".$domain;
                // echo'<hr>';
            }

    //5. Count the number of words in $date     ..hh292
            public static function num_count($date)
            {        
            
                $domain = str_word_count($date);
                echo "</br>Solution 5: ";

                echo'</br>Number of words --> '.$domain."\r"; 
                //echo '<hr>';
            }

    //6. Return the length of string      ...hh292

            public static function str_len($date)
            {        
            
                $count = strLen($date);
				echo"Solution 6: ";
				echo'</br>length of string--> '.$count."\r"; 
            //echo '<hr>';
            }

    //7. Retrun the ASCII value of first string      ...hh292
  
            public static function ASCII($date)
            {

            
				$domain = ord($date);
				echo "Solution 7: ";
				echo '</br>Output --->'.$domain."\r";
            //echo '<hr>';
            }        

    //8. Return the last 2 character of string     ...hh292

			public static function last_chr($date,$count)
            {
                $characters="2";
                $start = $count - $characters  ;   
            	$domain_1 = substr($date , $start ,$characters); 
            	echo "Solution 8: ";
                echo '</br>Input --->'.$date."\r";
            	echo "Output--->".$domain_1."\r";
             //echo '<hr>';
            }        

    //9. Break $date into an array and set “separator parameter as "/"   ...hh292  
    
			public static function an_array($date) 
            { 
				echo 'Solution 9 :';
				echo '</br>Input --->'.$date."\r";
				$domain = explode("/", $date);
			//echo'</br>Output --->'."\r";
				print_r($domain);
           //echo '<hr>';
            }	

    //10 A. leap year foreach/switch ...hh292

			public static function leap_year($year)
			{
				echo "Solution 10 :</br>";
				echo "Using foreach - Switch loop : </br>"."\r";
				foreach($year as $yr)
					{
						echo "</br>";
				// echo "Year --> ".$yr."\r";
            
			$yer = ((($yr % 4) == 0) && ((($yr % 100) != 0) || (($yr % 400) == 0)));
  
            switch ($yer) {
            	
            	case '1':
            		echo" Year--> ".$yr."  True"."\r";
            		break;

            	
            	default:
            	    echo" Year--> ".$yr."  False  "."\r";
            		break;
                    }
            }


}   //10 B. leap year foreach/switch ...hh292

			public static function leap_year_do($year)
			{

				$domain = count($year);
				echo "</br>Using Do while - Switch loop : </br>";
   		
					$i = 0;
				
				do {
   
					$yr = $year[$i];
   			 
					echo '</br>';
			 //echo "Year - ".$yr;

   			 //echo "output-->".$domain; 

             $yer = ((($yr % 4) == 0) && ((($yr % 100) != 0) || (($yr % 400) == 0)));
            // echo "string".$yer;
            	 
            switch ($yer) {
            	
            	case 1:
            	echo "Year --> ".$yr."  True"."\r";
            		 //echo"true  "."\r";
            		break;
            	
            	default:
            	    echo"Year --> ".$yr."  False"."\r";
            		break;
            }

             $i ++ ;

             //echo "do".$domain."\r";
       } while ($i < $domain);

	}

}
  
class tag {

    static public function space() {
      echo '<hr>';
      echo '<br>';
    }

}

?>

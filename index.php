<?php
$obj = new main();

class main{

private $html;

public function __construct()
{

	
  $date =  date('Y-m-d', time());
  echo "Solution 1: ";
  echo "The value of \$date: ".$date."</br>";

  $tar = "2017/05/24";
  echo "The value of \$tar: ".$tar."</br>";


  $year = array("2012", "396", "300","2000", "1100", "1089");
  echo "The value of \$year: </br>";
  print_r($year);

  $date_1 = strfun::rep($date);
  htmlTags::horizontalRule();
  echo '</br>';
  strfun::cmp($date,$tar);
  htmlTags::horizontalRule();
  echo '</br>';
  $count = strfun::delimit($date_1);
  htmlTags::horizontalRule();
  echo '</br>';
  strfun::num_count($date);
  htmlTags::horizontalRule();
  echo '</br>';
  strfun::str_len($date);
  htmlTags::horizontalRule();
  echo '</br>';
  strfun::ASCII($date);
  htmlTags::horizontalRule();
  echo '</br>';
  strfun::last_chr($date,$count);
  htmlTags::horizontalRule();
  echo '</br>';
  strfun::an_array($date_1);
  htmlTags::horizontalRule();
  echo '</br>';
  strfun::leap_year($year);
  htmlTags::horizontalRule();
  echo '</br>';
  strfun::leap_year_do($year);

}

}

class strfun{

 // 2. Replace string   ...hh292

           static public function rep($date_1)

           {

               $date_1 = str_replace('-','/',$date_1);
               echo"<hr>";
               echo" </br>Solution 2: ";
               echo "</br>Output after replacing --->".$date_1."\r";
               echo "<hr>";
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
                echo"<hr>";
   	        }

    // 4. Search '/' if more then one '/' delimit with ' '  ...hh292

   	        public static function delimit($date_1)
            
            {

                //echo 'Output'.$date_1;
                $count = strpos($date_1,'/');
                echo '</br>Solution 4:';
                echo'</br> Position-->'.$count;
                echo '<hr>';
                return $count;     
                
            }

    //5. Count the number of words in $date     ..hh292
            public static function num_count($date)
            {        
            
            $domain = str_word_count($date);
            echo "</br>Solution 5: ";

            echo'</br>Number of words --> '.$domain."\r"; 
            echo '<hr>';
            }

    //6. Return the length of string      ...hh292

            public static function str_len($date)
            {        
            
            $count = strLen($date);
            echo"Solution 6: ";
            echo'</br>length of string--> '.$count."\r"; 
            echo '<hr>';
            }

    //7. Retrun the ASCII value of first string      ...hh292
  
            public static function ASCII($date)
            {

            
            $domain = ord($date);
            echo "Solution 7: ";
            echo '</br>Output --->'.$domain."\r";
            echo '<hr>';
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
             echo '<hr>';
            }        




    //9. Break $date into an array and set “separator parameter as "/"   ...hh292  
    
           public static function an_array($date) 

           { 
           echo 'Solution 9 :';
           echo '</br>Input --->'.$date."\r";
           $domain = explode("/", $date);
           //echo'</br>Output --->'."\r";
           print_r($domain);
           echo '<hr>';
           }	

    //10. leap year  ...hh292

public static function leap_year($year)
{
    echo "Solution 10 :</br>";
	  echo "Using foreach loop </br>"."\r";
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


}

public static function leap_year_do($year)
{

 	    $domain = count($year);
   		
   		echo "</br>Using Do while loop </br>";
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
class htmlTags {

    static public function horizontalRule() {
      return '</hr>';
    }
    
  }


?>

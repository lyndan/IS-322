<?php
class files {
	
public $csvFiles;
public columnHeading;

//CVS Function

         
         public funtion readcsv($csvFiles , $columnHeading){
         ini_set('auto_detect_line_endings, TRUE);
             if (($handle =fopen($csv, "r")) ! == FALSE)
             {
               while (($row =fgetcsv($handle, 1000, ",")) ! == False){
                          if ($column_heading == TRUE)
                          {
                            $column_heading = $row;
      				         $column_headings = FALSE;
   			} else {     
       				        $record = array_combine($column_heading, $row);
      				           $records[] = $record;
    				                    }
   		}
    		fclose($handle);
	  }
		
	                     foreach($records as $record) {
   	                      foreach($record as $key => $value) {
     		                  echo $key . ': ' . $value .  "</br> \n";
   	                     }
   	               echo '<hr>';
 	                      }
	
	}
	
//Reading the CVS files


    class newClass{
            function csvcallingfile()  {
                 $csvfile= new csvfile();
                 $newcsv= $csvfile->readcsv ();
                 echo $newcsv;
                 }
    }
   $newfile=new csvfile();
   $newfile->readcsv("uk-500.csv", TRUE);
   
                          }
               }
             }
         
         }
}

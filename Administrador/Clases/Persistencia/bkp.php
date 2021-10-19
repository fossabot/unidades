<?php

//backup_tables('http://www.e-iniaarchivosdepasturas.com','einiaarc','P3t3r_0m4r_p457ur45','einiaarc_unidades');
backup_tables('localhost','root','','einiaarc_unidades');


/* backup the db OR just a table */
//En la variable $talbes puedes agregar las tablas especificas separadas por comas:
//profesor,estudiante,clase
//O déjalo con el asterisco '*' para que se respalde toda la base de datos

function backup_tables($host,$user,$pass,$name,$tables = '*')
{
   
   $link = mysqlii_connect($host,$user,$pass);
   mysqlii_select_db($name,$link);
   
   //get all of the tables
   if($tables == '*')
   {
      $tables = array();
      $result = mysqlii_query('SHOW TABLES');
      while($row = mysqlii_fetch_row($result))
      {
         $tables[] = $row[0];
      }
   }
   else
   {
      $tables = is_array($tables) ? $tables : explode(',',$tables);
   }
   
   //cycle through
   foreach($tables as $table)
   {
      $result = mysqlii_query('SELECT * FROM '.$table);
      $num_fields = mysqlii_num_fields($result);
      
      $return.= 'DROP TABLE '.$table.';';
      $row2 = mysqlii_fetch_row(mysqlii_query('SHOW CREATE TABLE '.$table));
      $return.= "\n\n".$row2[1].";\n\n";
      
    for ($i = 0; $i < $num_fields; $i++)
      {
         while($row = mysqlii_fetch_row($result))
         {
            $return.= 'INSERT INTO '.$table.' VALUES(';
            for($j=0; $j<$num_fields; $j++) 
            {
               $row[$j] = addslashes($row[$j]);
               $row[$j] = ereg_replace("\n","\\n",$row[$j]);
               if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
               if ($j<($num_fields-1)) { $return.= ','; }
            }
            $return.= ");\n";
         }
      }
      $return.="\n\n\n";
   }
   
   //save file
   $handle = fopen('db-backup-'.time().'-'.(md5(implode(',',$tables))).'.sql','w+');
   fwrite($handle,$return);
   fclose($handle);
}


?>






<?php
$sdd_db_host='localhost';
$sdd_db_name='html_tags_browser'; 
$sdd_db_user='root'; 
$sdd_db_pass=''; 
@mysql_connect($sdd_db_host,$sdd_db_user,$sdd_db_pass); 
@mysql_select_db($sdd_db_name); 
$result=mysql_query('SELECT * FROM `html_tags_browser`');
$json_data = array();     
while($row=mysql_fetch_array($result))
{            
$json_data[] = array ('id'=>$row['id'], 'tag_name'=>$row['tag_name'], 'tag_attribute'=>$row['tag_attribute'], 'tag_syntax'=>$row['tag_syntax'], 'tag_closing'=>$row['tag_closing'], 'tag_description'=>$row['tag_description'], 'tag_specification'=>$row['tag_specification'], 'tag_example'=>$row['tag_example'], 'tag_note'=>$row['tag_note']);
}     
 $json_data  = str_replace("<", "&lt;",  $json_data); 
     if(isset($_POST['value1'], $_POST['value2'])){ 
     $return = '';
     if($_POST['value1'] < $_POST['value2']){ 
        $return =  json_encode($json_data);; 
     } 
     elseif($_POST['value1'] > $_POST['value2']){ 
        $return = '2'; 
     } 
     else{ 
        $return = '3'; 
     } 
    echo $return; 
   } 
   else{  
   }     
?>   

     
                        
 
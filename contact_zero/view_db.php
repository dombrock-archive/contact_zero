<?php
require('secure/connect.php');
require('secure/config.php');
if (!$pw = $_POST["pw"]){
  echo "You might be looking for view_db.html<br>";
};
if($pw == $contact_zero_config['Master_password']){
  $sql ="SELECT * from CONTACTS;";
  
     $ret = $db->query($sql);
     while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
        echo "<div class='contact_div'>"."\n";
        echo "ID = ". $row['ID'] . "\n"."<br>";
        echo "NAME = ". $row['NAME'] ."\n"."<br>";
        echo "EMAIL = ". $row['EMAIL'] ."\n"."<br>";
        echo "PHONE = ". $row['PHONE'] ."\n"."<br>";
        echo "SUBJECT = ". $row['SUBJECT'] ."\n"."<br>";
        echo "MESSAGE = ". $row['MESSAGE'] ."\n"."<br>";
        echo "</div>";
  
     }
     echo "Data queried successfully\n"."\n";
     $db->close();
}
else{
  echo "Ah, Ah, Ah, you didnt say the magic word!";
}

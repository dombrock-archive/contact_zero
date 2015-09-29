<?php
require('secure/connect.php');
require('secure/config.php');
$pw = $_POST["pw"];
if($pw == $contact_zero_config['Master_password']){
  $sql ="SELECT * from CONTACTS;";
  
     $ret = $db->query($sql);
     while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
        echo "<div class='contact_div'>";
        echo "ID = ". $row['ID'] . "\n"."<br>";
        echo "NAME = ". $row['NAME'] ."\n"."<br>";
        echo "EMAIL = ". $row['EMAIL'] ."\n"."<br>";
        echo "PHONE = ". $row['PHONE'] ."\n"."<br>";
        echo "SUBJECT = ". $row['SUBJECT'] ."\n"."<br>";
        echo "MESSAGE = ". $row['MESSAGE'] ."\n"."<br>";
        echo "</div>";
  
     }
     echo "Data queried successfully\n";
     $db->close();
}
else{
  echo "You didnt say the magic word!";
}

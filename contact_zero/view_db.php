<?php
require('connect.php');
$sql ="SELECT * from CONTACTS;";

   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
      echo "ID = ". $row['ID'] . "\n"."<br>";
      echo "NAME = ". $row['NAME'] ."\n"."<br>";
      echo "EMAIL = ". $row['EMAIL'] ."\n"."<br>";
      echo "PHONE = ". $row['PHONE'] ."\n"."<br>";
      echo "SUBJECT = ". $row['SUBJECT'] ."\n"."<br>";
      echo "MESSAGE = ". $row['MESSAGE'] ."\n"."<br>";
      echo "<p>";

   }
   echo "Data queried successfully\n";
   $db->close();
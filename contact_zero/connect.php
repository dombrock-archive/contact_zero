<?php
class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('zero_contact_log.db');
      }
   }
   
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      //echo "Opened database successfully\n";
   }

   $sql =<<<EOF
      CREATE TABLE IF NOT EXISTS CONTACTS
      (ID INTEGER PRIMARY KEY     AUTOINCREMENT,
      NAME           TEXT    NOT NULL,
      EMAIL            TEXT     NOT NULL,
      PHONE        TEXT,
      SUBJECT         TEXT,
      MESSAGE         TEXT);
EOF;

   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      //echo "Table created successfully\n";
   }
   //$db->close();

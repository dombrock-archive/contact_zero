<?php
$contact_zero_config = array(
  'Master_email'=>'matdombrock@gmail.com',//This will be the main TO: address
  'Master_backup' => true,//do we want to backup all messages to a SQLlite DB
  'Master_password'=>'Password123',//used for looking at the DB log, if you are not using a DB backup ignore this
  'CC'=> array(
    'joe'=>'joe@email.com',
    'jane'=>'jane@email.com',
    'jeff'=>'jeff@email.com',
    'janette'=>'janette@email.com',
    'new_USER'=>'new_USER@email.com'//can add new users
    )
);
//DO NOT EDIT BELOW THIS LINE

/*DEFAULT CONFIG BACKUP
$contact_zero_config = array(
  'Master_password'=>'Password123',//used for looking at the DB log
  'Master_email'=>'mathieu@myceliumzero.com',
  'CC'=> array(
    'joe'=>'joe@email.com',
    'jane'=>'jane@email.com',
    'jeff'=>'jeff@email.com',
    'janette'=>'janette@email.com',
    'new_USER'=>'new_USER@email.com'//can add new users
    )
);
*/

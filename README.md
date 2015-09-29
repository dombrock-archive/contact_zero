# contact_zero
A clean and simple PHP contact script with full validation and database logging using SQLite.
##Major Work In Progress
This software is in early alpha and is not ready for use. 

At the time of writing it has a fully functional PHP mailer script with validation and a config file that will allow for multiple Cc's.
 
It was just updated to include logic for saving and retrieving contacts to and from a SQLite db. This is working but currently not secure against SQL injection attacks.
 
It does not yet have any front-end logic.

It does not yet have any working samples, however you can test it by sending a POST request to ````contact_zero/zero_mailer.php```` with values for:
````
user_name //required
user_email //required
user_phone
user_subject
user_msg //required
```
Configure with the ````$contact_zero_config```` array found in ````contact_zero/config.php````.

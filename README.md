# contact_zero
A clean and simple PHP contact script with full validation and database logging using SQLite.
##Major Work In Progress
This software is in early alpha and is not ready for use. 

At the time of writing it has a fully functional PHP mailer script with validation and a config file that will allow for multiple Cc's.
 
It was just updated to include logic for saving and retrieving contacts to and from a SQLite db. This is working but currently not secure against SQL injection attacks.
 
Contains front end logic with validation that informs the user of errors with their input and sends the data to the server side mailer script with jQuery $.post and displays response. 

Includes a minimal_template.html file with all of the basic HTML required to implement the form. 

You can also test it by sending a POST request to ````contact_zero/zero_mailer.php```` with values for:
````
user_name //required
user_email //required
user_phone
user_subject
user_msg //required
```
Configure with the ````$contact_zero_config```` array found in ````contact_zero/config.php````.

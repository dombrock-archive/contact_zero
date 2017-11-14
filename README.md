# contact_zero
A very minimal and modular AJAX contact form with database logging of submissions with SQLite. 

You can see an demo of this software here:

[http:///mzero.space/hosted/contact_zero/example](http:///mzero.space/hosted/contact_zero/example)

The password used for viewing the database is "Password123".

This software is intended to be reasonably easy to install and use, even for beginning developers or those with minimal back-end knowledge. No real knowledge of PHP or SQLite should be required to use/install/modify this software for your needs. 

To get started just clone or download this software onto you server. 

There is only one file that you will need to edit to get this software running. This is the ````config.php```` file found in the ````secure/```` directory. 

At the time of this writing the config file looks like this:

````Javascript
$contact_zero_config = array(
  'Master_password'=>'Password123',//used for looking at the DB log
  'Master_email'=>'matdombrock@gmail.com',//This will be the main TO: address
  'Log_to_db' => true,
  'CC'=> array(
    'joe'=>'joe@example.com',
    'jane'=>'jane@example.com',
    'jeff'=>'jeff@example.com',
    'janette'=>'janette@example.com',
    'new_USER'=>'new_USER@example.com'//can add new users
    )
);
````

These options should be fairly straight forward. You can add and remove CCed emails inside of the CC array. These options are formatted as a JSON file. So if you have some specific questions about editing this file please refer to the JSON documentation. 

If you do not want to log the submissions you should change the value of ````  'Log_to_db' => true,```` to be ````false````. You will also want to make sure you change the value of ````'Master_password'=>'Password123',```` to something unique and secure. This is the password that you will use to read submissions that have been backed up into the database. 

Even if you do not need to CC, this software still may require at least one value in the CC array. 

To get an idea of how the contact form should be implemented you should take a look at the file called ````minimal_template.html````.

Feel free to copy the code from this template file and paste it directly into you site. However, you will need to make sure that all references to the file ````contact_zero.js```` use the correct path. There are two places where you will need to change this in the template. 

First we need to declare the working directory for contact_zero. This is not the location of your contact form but instead the location of the contact_zero backend files. This should be the folder that holds the file names ````contact_zero.js```` among others. The code located in the file ````minimal_template```` which specifies this directory looks like this at the time of writing:

````HTML
<!--You Must Declare The Relative Path of the contact_zero Directory Here-->
<script type="text/javascript">
   var CZ_Path = '../contact_zero/';
</script>
````

You will also need to make sure the the direct reference to the ````contact_zero.js```` file is correct. This reference is located at the very end of the file ````minimal_template.html````.

If you server supports sending mail via PHP then you will be good to go!

## How do I see the database though? I thought there was a database!

There is database! To look at it all you need to do is navigate your browser to ````view_db.html```` found in the ````contact_zero/```` directory among the other the other back-end files. In order to see the information located in the database you will need to enter the Master Password that you set in the file ````config.php````.

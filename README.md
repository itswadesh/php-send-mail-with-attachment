# Send PDF document as email attachment using PHP

The full tutorial can be foud @ http://angularcode.com/send-pdf-attachment-email-using-php/

##Import data
Import books.sql into your MySQL
This will create necessary tables and insert sample data into it.

##Change the settings
The following settings need to be changed at **config.php**
<pre>
  define('DATABASE_HOST', "localhost");
  define('DATABASE_NAME', "demos");
  define('DATABASE_USERNAME', "root");
  define('DATABASE_PASSWORD', "root");

  define('ATTACHED_FILENAME', "books.pdf");

  define('SENDGRID_USERNAME', "YOUR_SENDGRID_USERNAME");
  define('SENDGRID_PASSWORD', "YOUR_SENDGRID_PASSWORD");

  define('FROM', "demo@angularcode.com");
  define('TO', "support@codenx.com");
  define('SUBJECT', "The title");
  define('CONTENT', "The content");

</pre>

##Run the program
Copy the project into your PHP servers root directory and access the index.php

This should create the PDF page and display it in the browser.

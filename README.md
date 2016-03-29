# Send PDF document as email attachment using PHP

##Import data
Import books.sql into your MySQL
This will create necessary tables and insert sample data into it.

##Change the settings
The following settings need to be changed at **config.php**
<pre>
  define('DATABASE_HOST', "localhost");
  define('DATABASE_NAME', "demo");
  define('DATABASE_USERNAME', "root");
  define('DATABASE_PASSWORD', "root");

  define('ATTACHED_FILENAME', "books.pdf");

  define('SENDGRID_USERNAME', "YOUR_SENDGRID_USERNAME");
  define('SENDGRID_PASSWORD', "YOUR_SENDGRID_PASSWORD");

  define('FROM', "<AngularCode> demo@angularcode.com");
  define('TO', "support@codenx.com");
  define('SUBJECT', "ShopNx - The Single Page eCommerce Website");
  define('CONTENT', "
      <h1>Experience faster shopping with ShopNx</h1>
      <ul> 
        <li>Responsive Design</li> 
        <li>Higher Scalability</li> 
        <li>Ergonomically Designed</li> 
      </ul>");

</pre>

##Run the program
Copy the project into your PHP servers root directory and access the index.php

This should create the PDF page and display it in the browser.

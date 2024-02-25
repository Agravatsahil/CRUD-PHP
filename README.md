# CRUD-PHP
CRUD & fileupload project with database

# CRUD-PHP

crud_project/

│
├── css/
│    └── style.css

│
├── includes/
│   ├── connection.php

│   
│
├── index.php

├── display.php

├── update.php

├── delete.php

├── login.php

└── logout.php


#FILE-UPLOAD-PHP


├── fileupload.php

├── displayimg.php

├── css/
     └── style.css

#DATABASE-XAMPP


├── MYSQL


#Overview:

This project aims to develop a web application using PHP, HTML, CSS, and MySQL (managed via XAMPP) to perform CRUD operations (Create, Read, Update, Delete) along with file uploading functionality. The application allows users to interact with a database to manage records and upload associated files.

#Features:

#CRUD Operations:

Create: Users can add new records to the database by providing necessary details via a form.
Read: Users can view existing records from the database, displaying them in a tabular format.
Update: Users can modify existing records by editing their details through an update form.
Delete: Users can remove records from the database.

#File Upload:

Users can upload files (such as images, documents, etc.) associated with each record.
Uploaded files are stored in a designated folder on the server, while file paths are stored in the database.

#Technologies Used:

XAMPP: XAMPP is used as a local development environment to run Apache, MySQL, PHP, and Perl on a single machine. It provides an easy way to set up a web server environment for PHP-based applications.

PHP: PHP is used for server-side scripting to handle form submissions, interact with the database, and manage file uploads.

HTML: HTML is utilized for creating the structure and content of web pages, including forms for user input and displaying records.

CSS: CSS is employed for styling the web pages, enhancing the visual presentation and user experience.

MySQL: MySQL is used as the relational database management system to store records and manage data.

#Project Workflow:

->Database Setup:

Create a database using PHPMyAdmin (included with XAMPP).
Design tables to store records and file paths. For example:
Table 1: register (id,firstname,lastname,email,gender,password)->//ID is autoincrement
Table 2: fileupload (image)

->Backend Development:

│
├── css/
│    └── style.css

│
├── includes/
│   ├── connection.php

│   
│
├── index.php

├── display.php

├── update.php

├── delete.php

├── login.php

└── logout.php


#FILE-UPLOAD-PHP


├── fileupload.php

├── displayimg.php

├── css/
     └── style.css

#DATABASE-XAMPP


├── MYSQL


->Frontend Development:

Design HTML forms for creating, updating, and displaying records.
Use CSS to style the forms and improve the visual appearance of the web pages.




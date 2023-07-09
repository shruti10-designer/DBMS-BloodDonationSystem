
# Blood donation system

Blood Donation System is a browser-based system that is designed to store, process, retrieve and analyse information concerned with the administrative and inventory management within a blood bank


## Tech Stack

**Frontend:** HTML , CSS , Java script

**Middleware:** PHP 

**Database part:** MYSQL

**Web server:** XAMPP


## Frontend

The part of a website that the user interacts with directly is termed the front end. It is also referred to as the ‘client side’ of the application. It includes everything that users experience directly: text colors and styles, images, graphs and tables, buttons, colors, and navigation menu. HTML, CSS, and JavaScript are the languages used for Front End development. 

**HTML:**  HTML stands for Hypertext Markup Language. It is used to design the front-end portion of web pages using a markup language. HTML is the combination of Hypertext and Markup language. Hypertext defines the link between the web pages. The markup language is used to define the text documentation within the tag which defines the structure of web pages.

**CSS:** Cascading Style Sheets fondly referred to as CSS is a simply designed language intended to simplify the process of making web pages presentable. CSS allows you to apply styles to web pages. More importantly, CSS enables you to do this independent of the HTML that makes up each web page.

**Java script:** JavaScript is a famous scripting language used to create magic on the sites to make the site interactive for the user. It is used to enhancing the functionality of a website to running cool games and web-based software.

## Middleware

Middleware can be defined as a middle-man or interface acting in coordination between a request and a response. As mentioned in the above test scenario, if the user is not authenticated, your project may redirect that user from the login.php to index.php page.

**PHP:** The PHP Hypertext Preprocessor (PHP) is a programming language that allows web developers to create dynamic content that interacts with databases. PHP is basically used for developing web based software applications. This tutorial helps you to build your base with PHP.

## Database part

A database is a separate application that stores a collection of data. Each database has one or more distinct APIs for creating, accessing, managing, searching and replicating the data it holds.

**MYSQL:** MySQL is a fast, easy-to-use RDBMS being used for many small and big businesses. MySQL is developed, marketed and supported by MySQL AB, which is a Swedish company.

## Web server

Web servers are software or hardware (or both together) that stores and delivers content to a web browser at a basic level. The servers communicate with browsers using Hypertext Transfer Protocol (HTTP). Web servers can also support SMTP (Simple Mail Transfer Protocol) and FTP (File Transfer Protocol). 

**XAMPP:** XAMPP is an abbreviation where X stands for Cross-Platform, A stands for Apache, M stands for MYSQL, and the Ps stand for PHP and Perl, respectively. It is an open-source package of web solutions that includes Apache distribution for many servers and command-line executables along with modules such as Apache server, MariaDB, PHP, and Perl.

XAMPP helps a local host or server to test its website and clients via computers and laptops before releasing it to the main server. It is a platform that furnishes a suitable environment to test and verify the working of projects based on Apache, Perl, MySQL database, and PHP through the system of the host itself. Among these technologies, Perl is a programming language used for web development, PHP is a backend scripting language, and MariaDB is the most vividly used database developed by MySQL.

## Installing XAMPP

STEP 1- Open any web browser and visit https://www.apachefriends.org/index.html
. On the home page, you can find the option to download XAMPP for three platforms- Windows, MAC, and Linux
. Click on XAMPP for Windows.

STEP 2- After the download is completed, double click the .exe extension file to start the process of installation.

STEP 3- A pop-up screen with the message asking you to allow to make changes on your desktop appears. Click "YES" to continue the process.

STEP 4- Click to Allow access or deactivate the firewall and any other antivirus software because it can hamper the process of installation. Thus, it is required to temporarily disable any antivirus software or security firewall till the time all the XAMPP components have been installed completely.

STEP 5- Just before the installation, a pop-up window appears with a warning to disable UAC. User Account Control (UAC) interrupts the XAMPP installation because it restricts the access to write to the C: drive. Therefore, it is suggested to disable it for the period of installation.

STEP 6- After clicking the .exe extension file, the XAMPP setup wizard opens spontaneously. Click on "NEXT" to start the configuration of the settings.

STEP 7- After that, a 'Select Components' panel appears, which gives you the liberty to choose amongst the separate components of the XAMPP software stack for the installation. To get a complete localhost server, it is recommended to install using the default options of containing all available components. Click "NEXT" to proceed further.

STEP 8- The setup is now ready to install, and a pop-up window showing the same appears on the screen. Click "NEXT" to take the process forward.

STEP 9- Select the location where the XAMPP software packet needs to be installed. The original setup creates a folder titled XAMPP under C:\ for you. After choosing a location, click "NEXT".

STEP 10- After choosing from all the previously mentioned preferences (like language and learn more bitnami dialogue box) click to start the installation. The setup wizard will unpack and install the components to your system. The components are saved to the assigned directory. This process may takes a few minutes to complete. The progress of the installation in terms of percentage is visible on the screen.

STEP 11- After the successful installation of the XAMPP setup on your desktop, press the "FINISH" button.

## Operating XAMPP Control Panel

This part of the article deals with the steps used to operate the Control Panel to manage the start-stop actions for MySQL and Apache.

STEP 1- Open the XAMPP Control Panel by clicking on the shown icon XAMPP CONTROL PANEL
In case the icon is not visible then, go to:
All Programs → Apache Friends → XAMPP → XAMPP Control Panel.

STEP 2- Click Start button corresponding to Apache and MySQL. It is strongly advised to NOT MARK the Service checkboxes on the leftmost end because running these modules as a service may cause a clash with other applications or servers that share standard ports. Establishing and terminating services physically is considered better when one does not include the Apache and MySQL components to run for a considerable time.

STEP 3- In order to suspend the running of any of the components like Apache or MySQL, click the "Stop" button corresponding to the module you wish to stop.

## Creating database tables and web pages

STEP 1- Launch the XAMPP Control Panel and click on "Admin" corresponding to the MySQL module. It redirects you to localhost/phpmyadmin/. Now, create the database and required tables.

STEP 2- The extracted folder can be located following the sequence - c:/xampp/htdocs.

## Tables used in database

Donations(donor_id,br_id,dona_date)

Donor(donor_id, first_name,last_name, donor_phn, donor_address, donor_pin, donor_city, donor_state, donor_pass, donor_bldgrp,donor_dob, donor_gender)

Branch(br_id,br_phn,br_address,br_pin,br_city,br_state,AP,AN,BP,BN,OP,ON,ABP,ABN)

Staff(staff_id,dept_id,first_name,last_name,staff_phn,staff_address,staff_pin,staff_city,staff_state,staff_dob,staff_gender,staff_salary,staff_date_of_joining)

Manager(staff_id,first_name,last_name,staff_phn,staff_address,staff_pin,staff_city,staff_state,staff_dob,staff_gender,staff_salary,staff_date_of_joining,password)

Users(user_id, user_name, user_phn, user_address, user_pin, user_city, user_state, user_pass)

Orders( ord_id, br_id, user_id ,ord_date, ord_status,AP,AN,BP,BN,ABP,ABN,OP,ON)

Department(dep_id,dep_name,No_of_workers,br_id)

## Functionality

### ### The main user groups are:

1.User/Hospital login

2.Manager login

3.Donor login

### Functionality of user:

• User can view his profile

• Creating new orders

• Edit their profile

• View his previous orders

### Functionality of Manager:

• Manager can view or edit his profile

• View staff records

• Add or remove staff

• View department details

• View blood bank status

• Accept or decline orders

• Approve blood donations

### Functionality of Donor:

• Donor can view or edit his profile

• View his previous blood donations



## Authors

- Samitha V - BL.EN.U4CSE20152
- Shruti P - BL.EN.U4CSE20157
- Tadi Sai Vishruth Reddy - BL.EN.U4CSE20172
- Tanuja Konda Reddy - BL.EN.U4CSE20174


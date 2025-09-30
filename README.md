Online Cyber Crime Reporting System (Core PHP & MySQL)
Overview
The Online Cyber Crime Reporting System is a web-based application built with Core PHP (PDO) and MySQL, designed for easy deployment on XAMPP (localhost).
It provides a platform where users can file cybercrime complaints, administrators can manage and assign cases, and officers can update the progress of investigations.
This project is offline-ready (works entirely on localhost without email/SMS setup) and is structured to be simple for students and beginners to understand.

 Modules & Features
User Panel
Register & login securely
File new complaints (title, type, description)
View complaint history
Track officer updates (progress notes, status)
Secure logout
Admin Panel
Login as admin
View all complaints
Assign complaints to available officers
Track officer progress
Manage users and officers (add/remove)
Logout
Officer Panel
Login with given credentials
View complaints assigned by admin
Add progress updates (status, notes, remarks)
Mark cases as resolved
Logout
🛠️ Technologies Used
Frontend: HTML, CSS, Bootstrap, JavaScript
Backend: Core PHP with PDO
Database: MySQL
Server: XAMPP (Apache, PHP, MySQL)

Installation Steps
Install XAMPP (Windows/Linux/Mac).
Ensure Apache and MySQL modules are running.
Project Setup
Copy the project folder cybercrime_reporting into htdocs (XAMPP directory).
Database Setup
Open phpMyAdmin: http://localhost/phpmyadmin/
Create a database named: cybercrime_db
Import the SQL file: database/cybercrime_db.sql
Configuration

Open inc/db.php and check credentials:
$host = "localhost";
$dbname = "cybercrime_db";
$username = "root";
$password = "";
Adjust if your MySQL setup is different.
Access the System
User Panel: http://localhost/cybercrime_reporting/user/
Admin Panel: http://localhost/cybercrime_reporting/admin/
Officer Panel: http://localhost/cybercrime_reporting/officer/

Default Login Credentials
Admin:
Username: admin
Password: admin123

Project Structure
cybercrime_reporting/
│── admin/       → Admin dashboard files
│── officer/     → Officer dashboard files
│── user/        → User dashboard files
│── inc/         → Database connection & session management
│── database/    → SQL dump (cybercrime_db.sql)
│── assets/      → CSS, JS, Bootstrap, images
│── index.php    → Landing page

Key Notes
Works fully offline (localhost).
No SMS/email setup required.
PDO used for secure database interaction.Passwords hashed using password_hash().
Can be extended for real-world use (with hosting, notifications, reports).
Suitability
This project is ideal for students in Computer Science, IT, or Cybersecurity courses who need a practical system demonstrating web-based complaint reporting and tracking using PHP and MySQL.

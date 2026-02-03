⚙️ Setup Instructions (XAMPP – Step by Step)
1️⃣ Install XAMPP

Download and install XAMPP

Open XAMPP Control Panel

2️⃣ Start Services

In XAMPP Control Panel, click Start on:

✅ Apache

✅ MySQL

Both should turn green.

3️⃣ Move Project to htdocs

Your project must be inside XAMPP’s htdocs folder:

C:\xampp\htdocs\mock-website


Make sure this file exists:

C:\xampp\htdocs\mock-website\index.php

4️⃣ Open phpMyAdmin

Open your browser and go to:

http://localhost/phpmyadmin

5️⃣ Create Database

Click New

Database name:

school_db


Click Create

6️⃣ Create notices Table

Inside school_db, click SQL and run:

CREATE TABLE notices (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255),
  description TEXT,
  notice_date DATE
);

7️⃣ Insert Sample Notice

Click notices

Click Insert

Enter:

title → School Holiday

description → School will remain closed tomorrow

notice_date → select a date

Click Go

8️⃣ Database Connection (db.php)

File: db.php

<?php
$conn = mysqli_connect("localhost", "root", "", "school_db");

if (!$conn) {
    die("Database connection failed");
}
?>

9️⃣ Run the Website

Open browser and go to:

http://localhost/mock-website/


❌ Do NOT use:

php -S localhost:8000

🧩 Reusable Header & Footer
header.php

Contains:

HTML doctype

<head> section

Dynamic page title

CSS links

Navigation bar

Opening <main> tag

Usage:

<?php $pageTitle = 'Home - Our School'; ?>
<?php include 'header.php'; ?>

footer.php

Contains:

Closing </main>

Footer content

Script tags

Closing </body> and </html>

Usage:

<?php include 'footer.php'; ?>

🔄 Before vs After (Best Practice)
❌ Before (Duplicate code on every page)
<!DOCTYPE html>
<html>
<head>...</head>
<body>
<header>...</header>
<main>...</main>
<footer>...</footer>
</body>
</html>

✅ After (Reusable Components)
<?php $pageTitle = 'Page Title'; ?>
<?php include 'header.php'; ?>

<!-- Page-specific content -->

<?php include 'footer.php'; ?>


✔ Cleaner
✔ Easier to maintain
✔ Professional PHP structure

🧪 Testing the Notice System

Open homepage:

http://localhost/mock-website/


You should see Latest Notices

Click Read More

URL will look like:

notice_detail.php?id=1


Full notice opens successfully ✅

🚀 Future Enhancements

Admin panel (Add/Edit/Delete notices)

Events management system

Notice scrolling bar

Bootstrap UI

Deployment to live hosting

🏁 Important Notes

Always start Apache & MySQL from XAMPP

Always open the site using:

http://localhost/mock-website/


Do not use PHP built-in server for database projects

✅ Status

✔ PHP connected to MySQL
✔ Notice system working
✔ Clean reusable layout
✔ Ready for further development
# Admin Dashboard with User Authentication and CRUD Operations

This project is a simple **Admin Dashboard** built with PHP and MySQL. It provides basic authentication, including user login and registration, and allows CRUD operations (Create, Read, Update, Delete) for posts. The dashboard displays the total number of posts and users, as well as recent activities, using a responsive design.

---

## 📁 Folder Structure

project-root/ │ ├── config/ │ └── db.php # Database connection file │ ├── public/ │ ├── css/ │ │ └── styles.css # Optional: External CSS (if needed) │ ├── index.php # Landing page (optional redirect to login) │ ├── login.php # Login page with authentication logic │ ├── register.php # User registration page │ ├── dashboard.php # Admin dashboard with post/user stats │ ├── manage_posts.php # Manage posts (CRUD operations) │ ├── create_post.php # Form to create new posts │ ├── edit_post.php # Form to edit posts │ ├── logout.php # Logout script to destroy session │ └── README.md # Documentation (this file)


---

## 🚀 Features

- **User Authentication:** 
  - Login and registration with password encryption using `password_hash()`.
  
- **Admin Dashboard:**
  - Displays total users and posts with recent activities.
  - Responsive design with CSS grid layout for cards.

- **CRUD Operations:** 
  - Create, read, update, and delete posts from the admin interface.

---

## 🛠️ Technologies Used

- **Backend:** PHP (with MySQLi for database interaction)
- **Frontend:** HTML, CSS (Responsive design with Flexbox and Grid)
- **Database:** MySQL

---

## 🔧 Setup Instructions

### 1. Clone the Repository

```bash
git clone https://github.com/vanlalruata/.git
cd your-repo-name


mysql -u your_user -p your_password admin_dashboard < db/admin_dashboard.sql


<?php
$conn = mysqli_connect("localhost", "your_user", "your_password", "admin_dashboard");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>


php -S localhost:8000 -t public/


Open your browser and visit:
http://localhost:8000/login.php



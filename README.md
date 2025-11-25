📘 DisasterPrep – Disaster Preparedness & Awareness Web Application
DisasterPrep is a web-based platform designed to help users stay informed, prepared, and alert during natural disasters. It provides educational resources, safety tips, weather information, quizzes, feedback support, and account-based dashboard features to enhance user readiness.
DisasterPrep is a simple, beginner-friendly PHP-based disaster awareness and safety platform.
The project helps users learn about safety practices, check weather info, take quizzes, give feedback, and manage their account — all inside one website.

🚀 Features
🔹 User Authentication
    User Signup & Login (signup.php, login.php)
    Dashboard for logged-in users (dashboard.php)

🔹 Disaster Information & Safety
    General safety guidelines (safety.html)
    Weather information & alerts (weather.html)
    Educational quizzes to test preparedness (quiz.php)

🔹 Interactive Modules
    Contact form for support (contact.php)
    Feedback submission (feedback.php)

🔹 System Utilities
    Database connection testing (test_db.php)
    Multiple homepage variations (index.php, index2.php, index3.php)

🔹 Node Dependencies
    The project includes package.json and package-lock.json, indicating support for:
    UI packages
    Possible tooling / front-end dependencies

    ⭐ What This Project Does (In One Look)
Module	Purpose
User Signup & Login -	Allows users to create an account and log in.
Dashboard	- Shows a simple logged-in homepage.
Safety Page	- Provides disaster safety tips & precautions.
Weather Page - Displays weather info (static/basic version).
Quiz Page -	Disaster-readiness quiz for learning.
Contact Page - Users can reach out or ask for help.
Feedback Page	- Collects user feedback about the platform.
Test DB File - Confirms MySQL database connection.


📂 Project File Summary (Explained Simply)
index.php, index2.php, index3.php	 - Homepages / landing page variations.
login.php -	User login page with PHP + MySQL validation.
signup.php - User registration form with DB insert.
dashboard.php	- User-only page after login.
contact.php	- Contact form (POST request).
feedback.php - Feedback form storing feedback.
quiz.php - Simple disaster-awareness quiz.
safety.html	- HTML page with safety instructions.
weather.html - Weather information page.
test_db.php	- Checks DB connection (for debugging).
package.json / package-lock.json - Optional frontend dependencies (Node).
.git/ - Git repository internal files.

🧠 How the Project Works (Short & Clear)
User visits the home page
↓
User can sign up → data stored in MySQL
↓
User logs in → session starts
↓
User goes to the Dashboard
↓
From the dashboard/menu, the user can:
Read safety information
Check weather information
Take a quiz
Submit contact or feedback messages
↓
Forms send data to backend PHP, which interacts with the database when needed.
Everything is built using HTML + CSS (basic) + PHP + MySQL.

    Project Structure
DisasterPrep/
│── index.php
│── index2.php
│── index3.php
│── login.php
│── signup.php
│── dashboard.php
│── contact.php
│── feedback.php
│── quiz.php
│── safety.html
│── weather.html
│── test_db.php
│── package.json
│── package-lock.json
│── /assets   (if present in your local structure)
│── /.git      (repository files)

🛠️ Tech Stack
Frontend
HTML5
CSS3
JavaScript

Backend & Database
PHP
MySQL (for authentication & feedback modules)

Tools
Node.js packages (optional, based on package.json)
Git/GitHub for version control

📌 Future Improvements (If Needed)
Add API-based live weather updates
Add admin panel for managing users & feedback
Improve UI with modern styling
Add email alerts for disasters
Add dynamic quiz scoring

CREATE DATABASE user_database;
USE user_database;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    phone VARCHAR(20) NOT NULL,
    recruiter ENUM('Yes', 'No') NOT NULL,
    company VARCHAR(100),
    consider ENUM('Yes', 'No') NOT NULL,
    submission_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

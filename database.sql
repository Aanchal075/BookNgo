CREATE DATABASE bookngo;
USE bookngo;

CREATE TABLE IF NOT EXISTS bookings (
  id INT(100),
  name VARCHAR(100),
  email VARCHAR(100),
  hotel VARCHAR(100),
  checkin DATE,
  checkout DATE
);
CREATE TABLE IF NOT EXISTS users (
    id INT (100),
    name VARCHAR(100),
    email VARCHAR(100) ,
    password VARCHAR(100),
    
);

CREATE TABLE IF NOT EXISTS contacts (
  id INT (100),
  name VARCHAR(100) ,
  email VARCHAR(100) ,
  subject VARCHAR(150) ,
  message TEXT ,
  submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS feedback (
  id INT (100),
  name VARCHAR(100),
  email VARCHAR(100),
  rating INT(100),
  message TEXT,
  submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

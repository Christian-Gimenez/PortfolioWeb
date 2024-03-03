-- Creating database and administrator user
CREATE DATABASE portfolio_DB CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;
CREATE USER 'portfolio_admin'@'localhost' IDENTIFIED BY 'Admin1234';
GRANT ALL PRIVILEGES ON portfolio_DB.* TO 'portfolio_admin'@'localhost';
FLUSH PRIVILEGES;


USE portfolio_DB;

-- Creating the tables schema
-- project
CREATE TABLE project (
  ID INT AUTO_INCREMENT PRIMARY KEY,
  Title VARCHAR(50) NOT NULL,
  Description VARCHAR(5000) NOT NULL,
  iframe VARCHAR(200) NULL,
  URL_GitHub VARCHAR(200) NULL,
  Co_Authors VARCHAR(100) NULL
);
-- about_me
CREATE TABLE about_me (
  ID INT AUTO_INCREMENT PRIMARY KEY,
  Full_Name VARCHAR(100) NOT NULL,
  Bio VARCHAR(5000) NOT NULL,
  Skills VARCHAR(500) NOT NULL,
  Interests VARCHAR(500),
  Languages VARCHAR(100) NOT NULL,
  Location VARCHAR(100) NOT NULL
);

-- experience
CREATE TABLE experience (
  ID INT AUTO_INCREMENT PRIMARY KEY,
  Job VARCHAR(50) NOT NULL,
  Company VARCHAR(50) NOT NULL,
  Start_Date DATE NOT NULL,
  End_Date DATE NULL,
  Location VARCHAR(50) NULL,
  Description VARCHAR(5000) NULL
);

-- knowledge
CREATE TABLE knowledge (
  ID INT AUTO_INCREMENT PRIMARY KEY,
  Technology VARCHAR(20) NOT NULL,
  Description VARCHAR(250) NULL
);

-- contact
CREATE TABLE contact (
  ID INT AUTO_INCREMENT PRIMARY KEY,
  Name VARCHAR(30) NOT NULL,
  Email VARCHAR(50) NOT NULL,
  Subject VARCHAR(30) NOT NULL,
  Body VARCHAR(5000) NOT NULL
);

-- project-knowledge
CREATE TABLE project_technology (
  Project_ID INT,
  Technology_ID INT,
  PRIMARY KEY (Project_ID, Technology_ID),
  FOREIGN KEY (Project_ID) REFERENCES project(ID),
  FOREIGN KEY (Technology_ID) REFERENCES knowledge(ID)
);

-- experience-knowledge
CREATE TABLE experience_technology (
  Experience_ID INT,
  Technology_ID INT,
  PRIMARY KEY (Experience_ID, Technology_ID),
  FOREIGN KEY (Experience_ID) REFERENCES experience(ID),
  FOREIGN KEY (Technology_ID) REFERENCES knowledge(ID)
);

-- administrator user
CREATE TABLE admin_user (
  User_ID INT AUTO_INCREMENT PRIMARY KEY,
  User_Name VARCHAR(30) UNIQUE NOT NULL,
  User_Password VARCHAR(255) NOT NULL,
  Created_At TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  Updated_At TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

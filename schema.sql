CREATE TABLE ambassadors (
    name TEXT,
    email VARCHAR(100) PRIMARY KEY,
    phone DECIMAL(13, 0),
    city TEXT,
    gender VARCHAR(7),
    why TEXT,
    college TEXT,
    anything TEXT
);

CREATE TABLE enthusiasts (
    name TEXT,
    email VARCHAR(100) PRIMARY KEY,
    phone DECIMAL(13, 0),
    city TEXT,
    why TEXT,
    college TEXT,
    anything TEXT
);

CREATE TABLE contactus (
    fname TEXT,
    lname TEXT,
    email VARCHAR(100),
    query TEXT
);

CREATE TABLE recruits (
    name TEXT,
    city TEXT,
    college TEXT,
    email VARCHAR(255),
    phone NUMERIC(13, 0),
    username VARCHAR(30) PRIMARY KEY
);

CREATE TABLE `idea` (
  `name1` text,
  `name2` text,
  `name3` text,
  `email1` varchar(100) DEFAULT NULL,
  `email2` varchar(100) DEFAULT NULL,
  `email3` varchar(100) DEFAULT NULL,
  `phone1` decimal(13,0) DEFAULT NULL,
  `phone2` decimal(13,0) DEFAULT NULL,
  `phone3` decimal(13,0) DEFAULT NULL,
  `university` varchar(100) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `pincode` decimal(10,0) DEFAULT NULL,
  `city` varchar(60) DEFAULT NULL,
  `title` varchar(20) DEFAULT NULL,
  `idea_desc` text,
  `stage` varchar(15) DEFAULT NULL,
  `ss` longblob
);

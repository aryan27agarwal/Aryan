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

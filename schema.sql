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

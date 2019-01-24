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

Table -- Idea
+------------+---------------+------+-----+---------+-------+
| Field      | Type          | Null | Key | Default | Extra |
+------------+---------------+------+-----+---------+-------+
| name1      | text          | YES  |     | NULL    |       |
| name2      | text          | YES  |     | NULL    |       |
| name3      | text          | YES  |     | NULL    |       |
| email1     | varchar(100)  | YES  |     | NULL    |       |
| email2     | varchar(100)  | YES  |     | NULL    |       |
| email3     | varchar(100)  | YES  |     | NULL    |       |
| phone1     | decimal(13,0) | YES  |     | NULL    |       |
| phone2     | decimal(13,0) | YES  |     | NULL    |       |
| phone3     | decimal(13,0) | YES  |     | NULL    |       |
| university | varchar(100)  | YES  |     | NULL    |       |
| state      | varchar(50)   | YES  |     | NULL    |       |
| pincode    | decimal(10,0) | YES  |     | NULL    |       |
| city       | varchar(60)   | YES  |     | NULL    |       |
| title      | varchar(20)   | YES  |     | NULL    |       |
| idea_desc  | text          | YES  |     | NULL    |       |
| stage      | varchar(15)   | YES  |     | NULL    |       |
| ss         | longblob      | YES  |     | NULL    |       |
+------------+---------------+------+-----+---------+-------+

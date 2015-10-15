CREAte table users();
ALTER TABLE users 
ADD user_id VARCHAR(20) NOT NULL PRIMARY KEY, 
ADD password VARCHAR(32) NOT NULL,
ADD user_type CHAR(1) NOT NULL,
ADD email_address VARCHAR(256) NOT NULL,
ADD first_name VARCHAR(128) NOT NULL,
ADD last_name VARCHAR(128) NOT NULL,
ADD birth_date date,
ADD enroll_date date,
ADD last_access date;

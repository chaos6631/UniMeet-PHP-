------ TABLE BODIES ------
create table IF NOT EXISTS bodies(value_id smallint not null primary key, property varchar(25) not null);

--Inserts

INSERT INTO bodies VALUES(0, 'Body Type:');
INSERT INTO bodies VALUES(1, 'Thin');
INSERT INTO bodies VALUES(2, 'Toned');
INSERT INTO bodies VALUES(4, 'Average');
INSERT INTO bodies VALUES(8, 'Athletic');
INSERT INTO bodies VALUES(16, 'Muscular');
INSERT INTO bodies VALUES(32, 'Curvy');
INSERT INTO bodies VALUES(64, 'Full Figured');
INSERT INTO bodies VALUES(128, 'Rather Not Say');

------ TABLE CITIES ------
create table IF NOT EXISTS cities(value_id smallint NOT null primary key, property Varchar(50) not null);

--Inserts

insert into cities values(0, 'City:');
insert into cities values(16, 'Oshawa');
insert into cities values(1, 'Whitby');
insert into cities values(2, 'Ajax');
insert into cities values(32, 'Pickering');
insert into cities values(4, 'Scarborough');
insert into cities values(64, 'Bowmanville');
insert into cities values(128, 'Port Perry');
insert into cities values(256, 'Markham');
insert into cities values(8, 'Mississauga');
insert into cities values(512, 'Brampton');
insert into cities values(1024, 'Peterborough');

------ TABLE ETHNICITY ------
create table IF NOT EXISTS ethnicity(value_id smallint not null primary key, property varchar(80) not null);
 
 --Inserts

insert into ethnicity values(0, 'Ethnicity:');
insert into ethnicity values(1, 'Caucasion');
insert into ethnicity values(2, 'Latin American');
insert into ethnicity values(8, 'Asian');
insert into ethnicity values(16, 'East Indian');
insert into ethnicity values(4, 'Native American');
insert into ethnicity values(32, 'African American');

------ TABLE EDUCATION ------
create table IF NOT EXISTS education(value_id smallint not null primary key, property varchar(80) not null);

--Inserts

INSERT INTO education VALUES(0, 'Highest Level of Education Reached:');
INSERT INTO education VALUES(1, 'High School');
INSERT INTO education VALUES(2, 'Some Post-Secondary');
INSERT INTO education VALUES(4, 'Post-Secondary Certificate');
INSERT INTO education VALUES(8, 'Post-Secondary Bachelors');
INSERT INTO education VALUES(16, 'Post-Secondary Masters');
INSERT INTO education VALUES(32, 'Mature Student Status');

------ TABLE GENDERS ------
CREATE TABLE IF NOT EXISTS genders(value_id SMALLINT NOT NULL PRIMARY KEY, property VARCHAR(25) NOT NULL);

-- INSERTS

INSERT INTO genders VALUES(0, 'Gender:');
INSERT INTO genders VALUES(1, 'Male');
INSERT INTO genders VALUES(2, 'Female');

------ TABLE GENDER SOUGHT ------
CREATE TABLE IF NOT EXISTS gender_sought(value_id SMALLINT NOT NULL PRIMARY KEY, property VARCHAR(25) NOT NULL);

-- INSERTS

INSERT INTO gender_sought VALUES(0, 'Gender Seeking:');
INSERT INTO gender_sought VALUES(1, 'Male');
INSERT INTO gender_sought VALUES(2, 'Female');

------ TABLE HAIR ------
create table IF NOT EXISTS hair(value_id smallint not null primary key, property varchar(50) not null);

--INSERTS
insert into hair values(0, 'Hair Colour:');
insert into hair values(1, 'Black');
insert into hair values(2, 'Brunette');
insert into hair values(4, 'Blonde');
insert into hair values(8, 'Auburn');
insert into hair values(16, 'Chestnut');
insert into hair values(32, 'Red');
insert into hair values(64, 'Gray/White');

------ TABLE LANGUAGES ------
CREATE TABLE IF NOT EXISTS languages(value_id smallint not null primary key, property varchar(50) not null);

--Inserts

INSERT INTO languages VALUES(0, ' Second Language:');
INSERT INTO languages VALUES(1, 'English');
INSERT INTO languages VALUES(2, 'French');
INSERT INTO languages VALUES(4, 'Spanish');
INSERT INTO languages VALUES(8, 'Chinese');
INSERT INTO languages VALUES(16, 'Hindi');
INSERT INTO languages VALUES(32, 'Arabic');
INSERT INTO languages VALUES(64, 'Portugese');
INSERT INTO languages VALUES(128, 'Russian');
INSERT INTO languages VALUES(256, 'Bengali');
INSERT INTO languages VALUES(512, 'Japanese');
INSERT INTO languages VALUES(1024, 'Native American');

------ TABLE RELIGIONS ------
create table IF NOT EXISTS religions(value_id smallint not null primary key, property varchar(50) not null);

--Inserts

INSERT INTO religions VALUES(0, 'Religion:');
INSERT INTO religions VALUES(16, 'Atheist');
INSERT INTO religions VALUES(1, 'Catholic');
INSERT INTO religions VALUES(2, 'Buhddist');
INSERT INTO religions VALUES(32, 'Islamic');
INSERT INTO religions VALUES(4, 'Jewish');
INSERT INTO religions VALUES(8, 'Rather Not Say');
INSERT INTO religions VALUES(64, 'Not Sure');

------ TABLE SCHOOLS ------
create table IF NOT EXISTS schools(value_id smallint NOT null primary key, property Varchar(100) not null);

--Inserts

INSERT INTO schools VALUES(0, 'Current School:');
INSERT INTO schools VALUES(8, 'school 1');
INSERT INTO schools VALUES(1, 'school 2');
INSERT INTO schools VALUES(2, 'school 3');
INSERT INTO schools VALUES(16, 'school 4');
INSERT INTO schools VALUES(4, 'school 5');

------ TABLE SEEKING ------
create table IF NOT EXISTS seeking(value_id smallint not null primary key, property varchar(80) not null);

--Inserts

INSERT INTO seeking VALUES(0, 'I am Seeking a...');
INSERT INTO seeking VALUES(1, 'Long-Term Relationship');
INSERT INTO seeking VALUES(8, 'Casual Dates');
INSERT INTO seeking VALUES(2, 'Hook-Up');
INSERT INTO seeking VALUES(4, 'Friend');
INSERT INTO seeking VALUES(16, 'Not Sure');

------ TABLE SMOKER ------
create table IF NOT EXISTS smoker(value_id smallint not null primary key, property varchar(25) not null);

--Inserts

insert into smoker values(0, 'Do You Smoke:');
insert into smoker values(1, 'Yes');
insert into smoker values(2, 'No');
insert into smoker values(4, 'Casual');

------ TABLE STATUS ------
create table IF NOT EXISTS status(value_id smallint not null primary key, property varchar(80) not null);

--Inserts

INSERT INTO status VALUES(0, 'Relationship Status:');
INSERT INTO status VALUES(1, 'Single');
INSERT INTO status VALUES(2, 'Seperated');
INSERT INTO status VALUES(4, 'Recently Divorced');
INSERT INTO status VALUES(8, 'Recently Widowed');
INSERT INTO status VALUES(16, 'Unhappily Married');
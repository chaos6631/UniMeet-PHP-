create table genders(gender_id smallint not null primary key, gender varchar(25) not null);
create table hair(hair_id smallint not null primary key, colour varchar(50) not null);
create table bodies(body_id smallint not null primary key, body_type varchar(25) not null);
create table smoker(smoker_id smallint not null primary key, smoker_status varchar(20) not null);
create table cities(city_id smallint NOT null primary key, city_name Varchar(50) not null, prov_id smallint references provinces);
create table provinces(prov_id smallint not null primary key, prov_name varchar(50) not null);
create table ethnicity(ethnic_id smallint not null primary key, ethnic_name varchar(80) not null);
create table languages(language_id smallint not null primary key, language_name varchar(50) not null);
create table status(status_id smallint not null primary key, relationship_status varchar(80) not null);
create table seeking(seeking_id smallint not null primary key, seeking_type varchar(80) not null);
create table religions(religion_id smallint not null primary key, religion_type varchar(50) not null);
create table education(education_id smallint not null primary key, education_type varchar(80) not null);


-- INSERTS



insert into bodies(body_id, body_type) values(1, "");
insert into smoker(smoker_id, smoker_status) values(1, "");
insert into ethnicity(ethnic_id, ethnic_name) values(1, "");
insert into languages(language_id, language_name) values(1, "");
insert into status(status_id, relationship_status) values(1, "");
insert into seeking(seeking_id, seeking_type) values(1, "");
insert into religions(religion_id, religion_type) values(1, "");
insert into education(education_id, education_type) values(1, "");
create table genders(gender_id smallint not null primary key, gender varchar(25) not null);

-- INSERTS

insert into genders(gender_id, gender) values(1, "Male");
insert into genders(gender_id, gender) values(2, "Female");
insert into genders(gender_id, gender) values(3, "Trans");
create table IF NOT EXISTS ethnicity(ethnic_id smallint not null primary key, ethnic_name varchar(80) not null);
 
 --Inserts

insert into ethnicity values(0, 'Caucasion');
insert into ethnicity values(1, 'Latin American');
insert into ethnicity values(2, 'Asian');
insert into ethnicity values(3, 'East Indian');
insert into ethnicity values(4, 'Native American');
insert into ethnicity values(5, 'African American');
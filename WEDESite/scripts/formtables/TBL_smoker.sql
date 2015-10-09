create table IF NOT EXISTS smoker(value_id smallint not null primary key, property varchar(20) not null);

--Inserts

insert into smoker values(0, 'Yes');
insert into smoker values(1, 'No');
insert into smoker values(2, 'Casual');
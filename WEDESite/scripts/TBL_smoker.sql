create table IF NOT EXISTS smoker(smoker_id smallint not null primary key, smoker_status varchar(20) not null);

--Inserts

insert into smoker values(1, 'Yes');
insert into smoker values(1, 'No');
insert into smoker values(1, 'Casual');
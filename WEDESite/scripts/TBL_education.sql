create table IF NOT EXISTS education(education_id smallint not null primary key, education_type varchar(80) not null);

--Inserts

INSERT INTO education VALUES(0, 'High School');
INSERT INTO education VALUES(1, 'Some Post-Secondary');
INSERT INTO education VALUES(2, 'Post-Secondary Certificate');
INSERT INTO education VALUES(3, 'Post-Secondary Bachelors');
INSERT INTO education VALUES(4, 'Post-Secondary Masters');
INSERT INTO education VALUES(5, 'Mature Student Status');
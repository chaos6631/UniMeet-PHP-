create table IF NOT EXISTS religions(religion_id smallint not null primary key, religion_type varchar(50) not null);

--Inserts

INSERT INTO religions VALUES(0, 'Atheist');
INSERT INTO religions VALUES(1, 'Catholic');
INSERT INTO religions VALUES(2, 'Buhddist');
INSERT INTO religions VALUES(3, 'Islamic');
INSERT INTO religions VALUES(4, 'Jewish');
INSERT INTO religions VALUES(5, 'Rather Not Say');
INSERT INTO religions VALUES(6, 'Not Sure');
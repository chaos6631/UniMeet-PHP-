create table status(status_id smallint not null primary key, relationship_status varchar(80) not null);

--Inserts

INSERT INTO status VALUES(0, 'Single');
INSERT INTO status VALUES(1, 'Seperated');
INSERT INTO status VALUES(2, 'Recently Divorced');
INSERT INTO status VALUES(3, 'Recently Widowed');
INSERT INTO status VALUES(4, 'Unhappily Married');
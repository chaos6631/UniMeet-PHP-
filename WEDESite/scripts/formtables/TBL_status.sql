create table IF NOT EXISTS status(value_id smallint not null primary key, property varchar(80) not null);

--Inserts

INSERT INTO status VALUES(0, 'Relationship Status:');
INSERT INTO status VALUES(1, 'Single');
INSERT INTO status VALUES(2, 'Seperated');
INSERT INTO status VALUES(4, 'Recently Divorced');
INSERT INTO status VALUES(8, 'Recently Widowed');
INSERT INTO status VALUES(16, 'Unhappily Married');
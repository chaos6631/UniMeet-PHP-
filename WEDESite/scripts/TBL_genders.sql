CREATE TABLE IF NOT EXISTS genders(gender_id SMALLINT NOT NULL PRIMARY KEY, gender VARCHAR(25) NOT NULL);

-- INSERTS

INSERT INTO genders VALUES(1, 'Male');
INSERT INTO genders VALUES(2, 'Female');
INSERT INTO genders VALUES(3, 'Trans');
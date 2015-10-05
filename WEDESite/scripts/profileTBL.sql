﻿create table profiles();
ALTER TABLE profiles 
ADD user_id VARCHAR(20) REferences users, 
ADD gender_id SMALLINT NOT NULL, 
ADD gender_sought SMALLINT NOT NULL, 
ADD city_id INT NOT NULL, 
ADD prov_id SMALLINT NOT NULL DEFAULT 0,
ADD images SMALLINT NOT NULL DEFAULT 0, 
ADD head_line VARCHAR(100) NOT NULL, 
ADD self_description VARCHAR(1000) NOT NULL,
ADD match_description VARCHAR(1000) NOT NULL,
ADD hair_id SMALLINT NOT NULL DEFAULT 0,
ADD body_id SMALLINT NOT NULL DEFAULT 0,
ADD smoker_id SMALLINT NOT NULL DEFAULT 0,
ADD ethnic_id SMALLINT NOT NULL DEFAULT 0,
ADD language_id SMALLINT NOT NULL DEFAULT 0,
ADD status_id SMALLINT NOT NULL DEFAULT 0,
ADD seeking_id SMALLINT NOT NULL DEFAULT 0,
ADD religion_id SMALLINT NOT NULL DEFAULT 0,
ADD education_id SMALLINT NOT NULL DEFAULT 0,

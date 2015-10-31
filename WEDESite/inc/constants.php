<?php

//Constants
define("ADD_USERS", 0);// amount of random users to generate
define("BASE_URL", './');
define("BRAND_NAME", "UniMeet");
define("BRAND_LOGO", "img/logo6.png");
define("COOKIE_EXPIRE", time()+ 60*60*24*30);
define("MIN_AGE", time() - 60*60*24*365*18);//user age
define("MAX_AGE", time() - 60*60*24*365*40);//user age
define("MIN_PASS", 6);//password length
define("MAX_PASS", 8);//password length
define("MAX_TABLE_PROPERTIES", 15);//maximum count of properties within a search related table
define("MIN_USER", 6);//user_id length
define("MAX_USER", 20);//user_id length
define("PLACEHOLDER", 0);//value_id of the placeholder within a database table

//add db connect info
define("DB_HOST", "localhost");
define("DB_NAME", "group19_db");
define("DB_USER", "group19_admin");
define("DB_PASSWORD", "wede19");

?>
<?php

//Constants
define("BASE_URL", './');
define("BRAND_NAME", "UniMeet");
define("BRAND_LOGO", "img/logo6.png");
define("MIN_AGE", time() - 60*60*24*365*18);
define("MAX_AGE", time() - 60*60*24*365*40);
define("ADD_USERS", 0);
define("COOKIE_EXPIRE", time()+ 60*60*24*30);
//add db connect info
define("DB_HOST", "localhost");
define("DB_NAME", "group19_db");
define("DB_USER", "group19_admin");
define("DB_PASSWORD", "wede19");

?>
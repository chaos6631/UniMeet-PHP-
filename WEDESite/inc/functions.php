<?php 
// /*---------------------------------Functions-----------------------------------*/
//     //Function that takes a user input as an argument and uses various built in php functions to sanitize it.

//calculates age of a users
function ageCalculate($var){
  $age = "";
  $now = date('Ymd', time());
  $date = date('Ymd', strtotime($var));
  $age = intval(($now - $date)/10000);
  return $age;
}
//Sanitizes a variable
function sanitize($var){
    $var = trim($var);
    $var = strip_tags($var);
    $var = stripslashes($var);
    $var = htmlspecialchars($var);
    return $var;
}
//Sanitizes an array
function arraySanitize($var){
	if(!is_array($var)){
    	
    	$var = sanitize($var);
    }else{
    	foreach($var as $key => $value)
    	{
    		$var[$key] = sanitize($value);
    	}
    }
    return $var;
}
//Profile Image builder
function buildImageBox($image, $num){
  $output = "<div class=\"col-sm-4\">\n";
  $output .= "\t\t      <div class=\"flat-box\">\n";
  $output .= "\t\t\t<div class=\"colourway\"><img class=\"img-responsive img-rounded\" src=\"$image\"></div>\n"; 
  $output .= "\t\t      </div>\n";
  $output .= "\t\t      <p class='bg-primary text-center'>$num <input type='checkbox' name='images[]' value='$num'/></p>\n";
  $output .= "\t\t    </div>\n\t\t    ";  
  return $output;
}
// Profile Info Box Builder
function buildOutputBox($boxSize, $label, $property){
  /*builds box for displaying user data, size is small, normal, large. $property is information you want to display, 
  most likely using the getProperty function*/
  $output = '<label>' . $label . '</label><div class="output-box-' . $boxSize .'"><p>' . $property . '</p></div>';
  return $output;
}
function createProfilePreview($user_id, $num){
  $user = getUserInfo($user_id);
  $userName = $user['user_id'];
  $school = getProperty($user['school_id'], "schools");
  $match = $user['match_description'];
  
  $output = "<div class=\"col-xs-6 col-sm-3 col-md-2 search-box-results\">\n";
  $output .= "\t\t <a href='profile-display.php?user_id=$userName'><img class=\"img-responsive img-circle\" src=\"img/placeholder-user.png\"></a>\n";
  $output .= "\t\t <a href='profile-display.php?user_id=$userName'><h3>$userName</h3></a>\n";
  $output .= "\t\t <p>$school</p>\n";
  $output .= "\t\t <p>$match</p>\n";  
  $output .= "\t\t <p class='bg-primary' style='position: absolute; bottom: 0; left: 5; width: 93%;'>$num</p>\n";
  $output .= "\t\t</div>\n\t      ";
  return $output;
}
function checkLoginStatus(){
  //Check if user is logged in
  if ($_SESSION['user_id'] == NULL || $_SESSION['user_type'] == "d") {
    header("Location: user-login.php");   
    exit;
  }
}

function checkPageNum($url){
  $page = substr(strstr($url, "?page"), 6);
  for ($i=0; $i <= 20; $i++) {   
    if ($page == $i) {
      $num = ($page * 10 - 10);
    }
    if ($page == 1 || $page == NULL) {
      $num = 0;
    }  
  }
  return $num;
}

function convert2ID($tableName){
  //Will need to add any additional search elements in the future
  $name = "";
  switch ($tableName) {
    case 'bodies':
      $name =  "body_id";
      break;
    
    case 'cities':
      $name =  "city_id";
      break;
    
    case 'ethnicity':
      $name =  "ethnic_id";
      break;
    
    case 'genders':
      $name =  "gender_id";
      break;
    
    case 'hair':
      $name =  "hair_id";
      break;

    case 'languages':
      $name =  "language_id";
      break;
    
    case 'religions':
      $name =  "religion_id";
      break;
    
    case 'schools':
      $name =  "school_id";
      break;

    case 'seeking':
      $name =  "seeking_id";
      break;
    
    case 'status':
      $name =  "status_id";
      break;

    case 'smoker':
      $name =  "smoker_id";
      break;

    default:      
      break;
  }
  return $name;
}

function dump($arg){
	echo "<pre>";
	echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
	echo (is_array($arg))? print_r($arg): $arg;
	echo "</pre>";
}
function displayCopyrightInfo(){ 
  echo "&copy; UniMeet. All rights reserved.";
}

/*
  this function should be passed a integer power of 2, and any 
  decimal number, it will return true (1) if the power of 2 is 
  contain as part of the decimal argument
*/
function isBitSet($power, $decimal) {
  if((pow(2,$power)) & ($decimal)) 
    return 1;
  else
    return 0;
} 

function pagination($totalRecords, $maxItemsPage, $page, $url = '?'){
  $total = $totalRecords;
  $minAdjacents = "4"; 
  $page = substr(strstr($page, "?page"), 6);
  $page = ($page == 0 ? 1 : $page);
  $start = ($page - 1) * $maxItemsPage;               
  $prev = $page - 1;              
  $next = $page + 1;
  $lastpage = ceil($total/$maxItemsPage);
  $lpm1 = $lastpage - 1;
  $pagination = ""; 
  //Textual Page Display
  if ($lastpage <= 1) {
    $pagination .= "<h2 style='margin-bottom: 5px; font-size: 1em; color: #428bca;'>Page $page of $lastpage ($total Matches)</h2>";//displays selected page as text
  }else{
    $pagination .= "<h2 style='margin-bottom: -15px; font-size: 1em; color: #428bca;'>Page $page of $lastpage ($total Matches)</h2>";//displays selected page as text    
  }  
  //Numerical Page Display
  if($lastpage > 1){  
    $pagination .= "<ul class='pagination'>";
    if ($page > 1){ 
      //Previous Button    
      $pagination.= "<li><a href='{$url}page=$prev' aria-label=\"Previous\"><span aria-hidden=\"true\">&laquo;</span></a></li>";
    }else{
      $pagination.= "<li class='disabled'><a aria-label=\"Previous\"><span aria-hidden=\"true\">&laquo;</span></a></li>";
    }  
    //Displaying for 10 pages or less  
    if ($lastpage < 7 + $minAdjacents){  
      for ($counter = 1; $counter <= $lastpage; $counter++){
        if($counter == $page){
          $pagination.= "<li class='current'><a class='btn-primary active'>$counter</a></li>";
        }else{
          if($counter == 1){
            $pagination.= "<li><a href='{$url}'>$counter</a></li>";
          }else{
            $pagination.= "<li><a href='{$url}page=$counter'>$counter</a></li>";
          }
        }
      }
    }
    // Displaying for more than 10 pages
    elseif($lastpage > 4 + $minAdjacents){
      if($page < 1 + $minAdjacents){
        for ($counter = 1; $counter < 5 + $minAdjacents; $counter++){
          if($counter == $page){
            $pagination.= "<li><a class='btn-primary active'>$counter</a></li>";
          }else{
            if($counter == 1){
              $pagination.= "<li><a href='{$url}'>$counter</a></li>";
            }else{
              $pagination.= "<li><a href='{$url}page=$counter'>$counter</a></li>";
            }
          }
        }
        $pagination.= "<li class='disabled'><a>...</a></li>";
        $pagination.= "<li><a href='{$url}page=$lpm1'>$lpm1</a></li>";
        $pagination.= "<li><a href='{$url}page=$lastpage'>$lastpage</a></li>";   
      }elseif($lastpage - $minAdjacents > $page && $page > $minAdjacents){
        $pagination.= "<li><a href='{$url}page=1'>1</a></li>";        
        $pagination.= "<li class='disabled'><a>...</a></li>";
        for ($counter = $page - $minAdjacents; $counter <= $page + $minAdjacents; $counter++){
          if($counter == $page){
            $pagination.= "<li><a class='btn-primary active'>$counter</a></li>";
          }else{
            if($counter == 1 || $counter == 2){
              continue;
            }else{
              $pagination.= "<li><a href='{$url}page=$counter'>$counter</a></li>";
            }
          }
        }
        $pagination.= "<li class='disabled'><a>...</a></li>";
        $pagination.= "<li><a href='{$url}page=$lastpage'>$lastpage</a></li>";   
      }else{
        $pagination.= "<li><a href='{$url}page=1'>1</a></li>";
        $pagination.= "<li><a href='{$url}page=2'>2</a></li>";
        $pagination.= "<li class='disabled'><a>...</a></li>";
        for ($counter = $lastpage - (2 + $minAdjacents); $counter <= $lastpage; $counter++){
          if ($counter == $page){
            $pagination.= "<li><a class='btn-primary active'>$counter</a></li>";
          }else{
            if($counter == 1){
              $pagination.= "<li><a href='{$url}'>$counter</a></li>";
            }else{
              $pagination.= "<li><a href='{$url}page=$counter'>$counter</a></li>";
            }
          }
        }
      }
    }  
    if ($page < $counter - 1){ 
      //Next Button
      $pagination.= "<li><a href='{$url}page=$next' aria-label=\"Next\"><span aria-hidden=\"true\">&raquo;</span></a></li>";
    }else{
      $pagination.= "<li class='disabled'><a aria-label=\"Next\"><span aria-hidden=\"true\">&raquo;</span></a></li>";
    }
    $pagination.= "</ul>\n";    
  }
  return $pagination;
}

//Takes a STRING as $prefix which identifies the cookie and and array 
function setMultipleCookie($prefix, $array){
  foreach ($array as $key => $value) {
    //setcookie("search_gender_sought", $genderSought, COOKIE_EXPIRE);
    setcookie($prefix . "_" . $key, $value, COOKIE_EXPIRE);
    ob_flush();
  }
  
}

/*
  this function can be passed an array of numbers 
  (like those submitted as part of a named[] check 
  box array in the $_POST array).
*/
function sumCheckBox($array){
  $num_checks = count($array); 
  $sum = 0;
  for ($i = 0; $i < $num_checks; $i++)
  {
    $sum += $array[$i]; 
  }
  return $sum;
}

//collects cookie data for user_id or displays blank login
function userLogin(){
  $output = "";
  if(isset($_COOKIE['user_id'])){
    $output .= "<input class='userName form-control' type='text' name='user_id' value='" . $_COOKIE['user_id'] . "' required>\n"; 
    $output .= "\t\t\t\t<input class='password form-control' type='password' name='password' placeholder='Password' autofocus required>\n";
  }else{ 
    $output .= "<input class='userName form-control' type='text' name='user_id' placeholder='Username' autofocus required>\n";
    $output .= "\t\t\t\t<input class='password form-control' type='password' name='password' placeholder='Password' required>\n";  
  }
  return $output;
}


?>
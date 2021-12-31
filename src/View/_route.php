<?php
/* Description: Router for Proton Framework */

require_once "Proton/globals.php";
require_once "Proton/core.php";
require_once "Proton/route.php";



PROTON::SETLANGUAGE(PROTON::DETECTLANGUAGE());

Route::GET("/", function(){ 
  
  if(PROTON::GETSESSION("admin"))
  {
    $language = PROTON::LANGUAGE("mainLanguage");
    $controller = PROTON::CONTROLLER("admincontroller", ["page" => "admin"]);
    PROTON::RENDER("admin", $controller);
  }
  else
  {
    $language = PROTON::LANGUAGE("mainLanguage");
    $controller = PROTON::CONTROLLER("maincontroller", ["page" => "main"]);
    PROTON::RENDER("main", $controller);
  }


});



Route::GET("admin", function(){ 

  if(PROTON::GETSESSION("admin"))
  {
    $language = PROTON::LANGUAGE("mainLanguage");
    $controller = PROTON::CONTROLLER("admincontroller", ["page" => "admin"]);
    PROTON::RENDER("admin", $controller);
  }
  else
  {
    $language = PROTON::LANGUAGE("mainLanguage");
    $controller = PROTON::CONTROLLER("maincontroller", ["page" => "main"]);
    PROTON::RENDER("/", $controller);
  }


});



/* Error Handler */

Route::ERROR(function(){ 

  $language = PROTON::LANGUAGE("mainLanguage");
  $controller = PROTON::CONTROLLER("maincontroller", ["page" => "error"]);
  PROTON::RENDER("_error", $controller);

  });


  


?>
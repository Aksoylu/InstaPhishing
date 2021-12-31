<?php
/* Description: Service Router for Proton Framework */

Route::CONFIG(array(
	"extension"=>SERVICE_EXTENSION  
  ));


  Route::POST("login", function(){ 

      SERVICE::BIND("mainService@login", $_POST);
  
  });


  Route::POST("logout", function(){ 

      SERVICE::BIND("mainService@logout", $_POST);
  
  });

Route::ERROR(function(){ 

    echo "Error, service not found";

  });


?>
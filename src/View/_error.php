<?php
/* Description: Error View Handler for Proton Framework */


PROTON::TITLE("Instagram");
PROTON::CSSDEF("css/style.css");
PROTON::FAVDEF("favicon.ico");
PROTON::JSDEF("js/action.js");

?>

<div id="wrapper">
  <div class="main-content" style="overflow:y; min-height:50%;">
    <div class="header" >
      <?php PROTON::IMDEF("img/logo.png"); ?>
    </div>
    <div class="l-part">
      
    <center>
        <h2><?php echo $language->e_404_header; ?></h2> <br>
        <h4><?php echo $language->e_404_content; ?></h4> <br>
        <a href="/"><?php echo $language->e_404_link; ?></a>
    </center>
    </div>
  </div>
    <div class="s-part" style="padding-top:10px;">
    <?php echo $language->dont_have_an_account;?>&nbsp;<a href="#"><?php echo $language->sign_up;?></a>
    </div>
    <div id="result"> </div>

</div>

<script>
    
const username = document.getElementById("username");
const pass = document.getElementById("pass");

</script>



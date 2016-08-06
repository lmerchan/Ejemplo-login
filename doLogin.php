  <?php
    If($_POST['login']== $_POST['password']){
      header('Location: menu.html');
    }else{
      header('Location: login.html');
    }

<?php include './header.php'?>
<?php include './langButton.php'?>
<main>
  <section class="login">
    <div class="container">
      <div class="row">
        <div class="col-left">
          <img src="./img/login.png" alt="">
        </div>
        <div class="col-right">
          <h1 class="title"><?php echo $lang['title_login']; ?></h1>
          <form action="#">
            <input type="text" placeholder="<?php echo $lang['placeholder_email']; ?>">
            <input type="text" placeholder="<?php echo $lang['placeholder_password']; ?>">
            <a href="#" class="link-blue"><?php echo $lang['forget_password']; ?></a>
            <button type="submit" class="btn btn-gradient"><?php echo $lang['btn_login']; ?></button>
            <div class="save-login">
              <input type="checkbox" id="isLogged">
              <label for="isLogged"><?php echo $lang['isLogged']; ?></label>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>
<?php include './footer.php'?>
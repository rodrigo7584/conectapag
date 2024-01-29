<?php include './header.php'?>
<div class="btn-language">
  <ul>
    <li class="language-selected"></li>
    <li>Português</li>
    <li>English</li>
  </ul>
</div>
<main>
  <section class="login">
    <div class="container">
      <div class="row">
        <div class="col-left">
          <img src="./img/login.png" alt="">
        </div>
        <div class="col-right">
          <h1 class="title">Acesse sua conta</h1>
          <form action="#">
            <input type="text" placeholder="Digite aqui seu E-mail">
            <input type="text" placeholder="Digite aqui sua senha">
            <a href="#">Esqueci minha senha</a>
            <button type="submit" class="btn btn-gradient">Login</button>
            <div class="save-login">
              <input type="checkbox" id="isLogged">
              <label for="isLogged">Manter logado</label>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <?php echo $lang['welcome']; ?>
</main>
<?php include './footer.php'?>
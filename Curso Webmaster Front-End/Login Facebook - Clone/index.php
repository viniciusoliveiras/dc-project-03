<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Aplicar depois as metatags -->
  <title>Login Facebook | Clone</title>

  <link rel="stylesheet" href="styles.css" />
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet" />
</head>

<body>
  <header>
    <div class="center">
      <div class="logo">
        <h2>facebook</h2>
      </div>

      <form method="post" class="form-login">
        <div class="form-element">
          <p>E-mail ou telefone:</p>
          <input type="email" />
        </div>

        <div class="form-element">
          <p>Senha:</p>
          <input type="password" />
        </div>

        <div class="form-element">
          <input type="submit" name="acao" value="Enviar" />
        </div>
      </form>
      <div class="clear"></div>
    </div>
  </header>

  <section class="main">
    <div class="center">
      <div class="img-pessoas">
        <h2>O Facebook ajuda você a se conectar e</h2>
        <h2>compartilhar com as pessoas que fazem parte</h2>
        <h2>parte da sua vida.</h2>
        <img src="img1.png" alt="Fundo facebook" />
      </div>

      <div class="abrir-conta">
        <h2>Abra uma conta</h2>
        <h3>É gratuito e sempre será.</h3>

        <form action="" class="criar-conta">
          <div class="w50">
            <input type="text" placeholder="Nome" />
          </div>

          <div class="w50">
            <input type="text" placeholder="Sobrenome" />
          </div>

          <div class="w100">
            <input type="email" placeholder="E-mail" />
          </div>

          <div class="w100">
            <input type="password" placeholder="Senha" />
          </div>

          <div class="w100">
            <h2>Data de Nascimento</h2>
            <select name="nascimento-dia" class="nascimento">
              <option value="">Dia</option>
              <?php
              for ($i = 1; $i <= 31; $i++) {
              ?>
                <option value="<?php echo $i; ?>"><?php echo $i ?></option>
              <?php } ?>
            </select>

            <select name="nascimento-mes" class="nascimento">
              <option value="">Mês</option>
              <option value="1">Janeiro</option>
              <option value="2">Fevereiro</option>
              <option value="3">Março</option>
              <option value="4">Abril</option>
              <option value="5">Maio</option>
              <option value="6">Junho</option>
              <option value="7">Julho</option>
              <option value="8">Agosto</option>
              <option value="9">Setembro</option>
              <option value="10">Outubro</option>
              <option value="11">Novembro</option>
              <option value="12">Dezembro</option>
            </select>

            <select name="nascimento-ano" class="nascimento">
              <option value="">Ano</option>
              <?php
              for ($i = 1950; $i <= 2020; $i++) {
              ?>
                <option value="<?php echo $i; ?>"><?php echo $i ?></option>
              <?php } ?>
            </select>
            <div class="clear"></div>
          </div>

          <div class="w100">
            <div class="input-radio">
              <input type="radio" name="sexo" value="feminino">
              <h2>Feminino</h2>
            </div>
            <div class="input-radio">
              <input type="radio" name="sexo" value="masculino">
              <h2>Masculino</h2>
            </div>
          </div>

          <div class="w100">
            <input type="submit" value="Cadastre-se" />
          </div>

          <div class="clear"></div>
        </form>
      </div>

      <div class="clear"></div>
    </div>
  </section>

  <section class="linguas">
    <div class="center">
      <a class="selected-lingua" href="#">Português (Brasil)</a>
      <a class="" href="#">English (US)</a>
      <a class="" href="#">Español</a>
      <a class="" href="#">Français (France)</a>
      <a class="" href="#">Italiano</a>
      <a class="" href="#">Deutsch</a>
      <a class="" href="#">中文</a>
      <a class="" href="#">日本語</a>
    </div>

    <div style="border:0; padding-top:10px;" class="center informacoes one">
      <a class="" href="#">Cadastre-se</a>
      <a class="" href="#">Entrar</a>
      <a class="" href="#">Messenger</a>
      <a class="" href="#">Facebook Lite</a>
      <a class="" href="#">Celular</a>
      <a class="" href="#">Encontrar amigos</a>
      <a class="" href="#">Pessoas</a>
      <a class="" href="#">Páginas</a>
      <a class="" href="#">Locais</a>
      <a class="" href="#">Jogos</a>
      <a class="" href="#">Locais</a>
      <a class="" href="#">Marketplace</a>
      <a class="" href="#">Vídeos</a>
      <a class="" href="#">Grupos</a>
    </div>

    <div class="center informacoes two">
      <a class="" href="#">Receitas</a>
      <a class="" href="#">Esportes</a>
      <a class="" href="#">Look</a>
      <a class="" href="#">Moments</a>
      <a class="" href="#">Instagram</a>
      <a class="" href="#">Local</a>
      <a class="" href="#">Sobre</a>
      <a class="" href="#">Criar anúncio</a>
      <a class="" href="#">Criar Página</a>
      <a class="" href="#">Desenvolvedores</a>
      <a class="" href="#">Carreiras</a>
      <a class="" href="#">Privacidade</a>
      <a class="" href="#">Cookies</a>
    </div>

    <div class="center informacoes three">
      <a class="" href="#">Opções de anúncio</a>
      <a class="" href="#">Termos</a>
      <a class="" href="#">Ajuda</a>
    </div>

  </section>
</body>

</html>
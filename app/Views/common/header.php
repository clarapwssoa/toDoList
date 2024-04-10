<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="<?= site_url("bootstrap.min.js")?>"></script>

<nav class="navbar navbar-expand-lg navbar-light navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Lista de tarefas</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?= site_url('login') ?>">login</a>
      </li>
        <a class="nav-link disabled" href="<?= site_url('register') ?>">registre-se</a>
      </li>
    </ul>
  </div>
</nav>
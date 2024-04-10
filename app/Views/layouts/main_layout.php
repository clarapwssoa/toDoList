<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TO-DO LIST</title>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap.min.css') ?>">
</head>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<script src="<?= site_url("bootstrap.min.js") ?>"></script>

<nav class="navbar navbar-expand-lg navbar-light navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Lista de tarefas</a>
    <!-- nome do usuário -->
    <a class="navbar-brand" href="#">bem vind@, <?= (session('user')->name); ?>!</a>
    <!-- ------------------------------------- -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <!-- botão de criar nova tarefa -->
            <li class="nav-item p-1">
                <a href="<?php echo site_url('main/newJob') ?>" class="nav-link">criar nova tarefa</a>
            </li>
            <!-- botão de logout -->
            <li class="nav-item p-1">
                <a href="<?= site_url('login/logout') ?>" class='nav-link'>logout</a>
            </li>
                      
        </ul>
        <!-- filtragem ativo/inativo -->  
        <div>
            <select name="filter" id='filter'>
                <option value="">filtrar</option>
            </select>
        </div>
    </div>
</nav>

<body>

    <?= $this->renderSection('conteudo') ?>

    <hr>
    <footer class="container">
        <div class="row">
            <div class="col text-center">
                to-do list &copy; <?= date('Y') ?>
            </div>
        </div>
    </footer>

    <script src="<?= base_url('assets/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/bootstrap.min.js') ?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function(){
        $('#filter').on('change', function(){
            var value = $(this).val();
            //alert(value);

            $.ajax({
                url: "fetch.php",
                type: 'POST',
                data: 'request=' + value,
                beforeSend:function(){
                    $(".container").html("<span>buscando...</span>");
                },
                success:function(){
                    $(".container").html(data);
                }
            });
        });
    });
</script>

</body>

</html>
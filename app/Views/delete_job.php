<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('conteudo') ?>

<header class="container"></header>
<div class="row">
    <div class="col">
        <h3 class='p-3'><strong>LISTA DE AFAZERES</strong></h3>
    </div>
    <div class="col text-right">
        <h3>deletar tarefa</h3>
    </div>
</div>
</header>
<hr>

<div class="container"></div>
    <div class="row">
        <div class="col text-center">
            <h3>deseja apagar a tarefa: </h3>
            <div class="container card p-2 my-3 bg-light"> 
                 <h4><?= $jobs->jobs?> </h4>
            </div>          
        </div>
    </div>

    <div class="row">
        <div class="col text-center">
            <a href="<?= site_url('home')?>" class='btn btn-secondary'>não</a>
            <a href="<?= site_url('main/deletejobconfirm/').$jobs->id_jobs?>" class='btn btn-primary'>sim</a>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
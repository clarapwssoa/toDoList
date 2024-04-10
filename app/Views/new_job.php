<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('conteudo') ?>

<header class="container"></header>
<div class="row">
    <div class="col">
        <h3 class='p-3'><strong>LISTA DE AFAZERES</strong></h3>
    </div>
    <div class="col text-right">
        <h3>nova tarefa</h3>
    </div>
</div>
</header>
<hr>

<?php
    helper('form');
    echo form_open('main/newJobSubmition');
?>
<div class="container"></div>
    <div class="row">
        <div class="col-4 offset-4">
            <div class="form-group">
                <label>escreva aqui a nova tarefa:</label>
                <input type="text" name="jobs" class="form-control" required>
            </div>


            <div class="row">
                <div class="col">
                    <a href="<?= site_url('home')?>" class='btn btn-secondary'>cancelar</a>
                </div>
                <div class="col text-right">
                    <input type="submit" value="salvar" class="btn btn-primary">
                </div>
            </div>
        </div>
    </div>
</div>

<?= form_close(); ?>


<?= $this->endSection() ?>
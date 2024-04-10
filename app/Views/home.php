<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('conteudo') ?>

<hr> 
<div>
    <?php if (count($jobs) == 0) : ?>
        <p class='container text-center bg-light p-2'><strong>não existem tarefas.</strong></p>
    <?php else : ?>
        <!-- TABELA -->

        <table class="table table-striped" id='id_table'>
            <thead class='thead-dark'>
                <tr>
                    <th>tarefa</th>
                    <th class='text'>data de criação</th>
                    <th class="text">status</th>
                    <th class='text'>ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($jobs as $job) : ?>
                    <tr>
                        <td><?= $job->jobs ?></td>
                        <td><?= $job->datetime_created ?></td>
                        <td><?= $job->status ?></td>
                        <td class="text">

                            <!-- tarefa realizada -->
                            
                            <?php if ($job->status == 'pendente') : ?>
                                <a href="<?= site_url('main/jobDone/') . $job->id_jobs ?>" class='btn btn-success btn-sm mx-2'><i class="fa-solid fa-check"></i></a>
                            <?php else : ?>
                                <button class="btn btn-light btn-sm mx-2" disabled><i class="fa-solid fa-check"></i></button>
                            <?php endif; ?>

                            <!-- editar tarefa -->

                            <?php if ($job->status == 'pendente') : ?>
                                <a href="<?= site_url('main/editJob/') . $job->id_jobs ?>" class='btn btn-primary btn-sm mx-2'><i class="fa-solid fa-pen"></i></a>
                            <?php else : ?>
                                <button class="btn btn-light btn-sm mx-2" disabled><i class="fa-solid fa-pen"></i></button>
                            <?php endif; ?>

                            <!-- eliminar tarefa -->

                            <a href="<?= site_url('main/deleteJob/') . $job->id_jobs ?>" class='btn btn-warning btn-sm mx-2'><i class="fa-solid fa-trash"></i></a>

                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    <?php endif; ?>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>

    // ==================================================================

    $(document).ready(function() {
        $('#id_table').DataTable({
            "ordering": false,
            "language": {
                "decimal": "",
                "emptyTable": "nenhuma tabela encontrada",
                "info": "mostrando _START_ até _END_ de _TOTAL_ tarefas",
                "infoEmpty": "mostrando 0 até 0 de 0 tarefas",
                "infoFiltered": "(filtrando _MAX_ tarefas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "mostrar _MENU_ tarefas",
                "loadingRecords": "carregando...",
                "processing": "",
                "search": "buscar:",
                "zeroRecords": "nenhuma tarefa encontrada",
                "paginate": {
                    "first": "primeira",
                    "last": "última",
                    "next": "próxima",
                    "previous": "anterior"
                }
            }
        });
    });
</script>
<?= $this->endSection() ?>
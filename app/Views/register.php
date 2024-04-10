<div class="card">
    <div class="card-body">
        <form method='post' action="<?= base_url('register') ?>">
            <h1>registre-se</h1>
            <div class="mb-3">
                <label>nome</label>
                <input name='name' type="text" class="form-control" id="name" placeholder="digite seu nome" required>
            </div>
            <div class="mb-3">
                <label>Endereço de email</label>
                <input name='email' type="email" class="form-control" id="email" placeholder="nome@exemplo.com" required>
            </div>
            <div class="mb-3">
                <label>Senha</label>
                <input name='password' type="password" class="form-control" id="password" placeholder="digite sua senha" required>
            </div>
            <div class="mb-3">
                <input type='submit' value='enviar' class='btn btn-primary'>
            </div>
        </form>
    </div>
</div>
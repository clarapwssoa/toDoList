<div class="card">
    <div class="card-body">
        <form method='post' action="<?= base_url("/login") ?>">
            <h1>página de login</h1>
            <div class="mb-3">
                <label>Endereço de email</label>
                <input name='email' type="email" class="form-control" id="email" placeholder="nome@exemplo.com">
            </div>
            <div class="mb-3">
                <label>Senha</label>
                <input name="password" type="password" class="form-control" id="password" placeholder="digite sua senha">
            </div>
            <div class="mb-3">
                <input type='submit' value='enviar' class='btn btn-primary'>
            </div>
        </form>
    </div>
</div>
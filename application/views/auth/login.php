<div class="col-md-4 col-md-offset-4">
    <h2>Acesso ao sistema</h2>

    <?php echo validation_errors(); ?>

    <form action="/auth/login" method="post">

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email"  class="form-control" placeholder="Seu email aqui..."/>
        </div>

        <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" name="password"  class="form-control" placeholder="Sua senha aqui..."/>
        </div>

        <input type="submit" name="submit" value="Acessar" class="btn btn-primary" />

    </form>
</div>
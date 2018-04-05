<h2>Registro de usuário</h2>

<?php echo validation_errors(); ?>

<form action="/auth/register" method="post">

    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" name="name"  class="form-control" placeholder="Seu nome aqui..."/>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email"  class="form-control" placeholder="Seu email aqui..."/>
    </div>

    <div class="form-group">
        <label for="password">Senha</label>
        <input type="password" name="password"  class="form-control" placeholder="Sua senha aqui..."/>
    </div>

    <input type="submit" name="submit" value="Cadastrar" class="btn btn-primary" />

</form>
<h2>Nova página</h2>

<?php echo validation_errors(); ?>

<form action="/pages/new" method="post">

    <div class="form-group">
        <label for="title">Título</label>
        <input type="text" name="title"  class="form-control" placeholder="Seu título aqui..."/>
    </div>
    <div class="form-group">
        <label for="text">Conteúdo</label>
        <textarea name="body" class="form-control" placeholder="HTML da página"></textarea>
    </div>

    <input type="submit" name="submit" value="Criar nova página" class="btn btn-primary" />

</form>
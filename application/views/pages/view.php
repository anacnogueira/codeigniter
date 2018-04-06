<h2>Visualizando página</h2>


<div class="row">
    <div class="col-md-6">
        Título: <?php echo $page->title; ?><br>
        Url: <?php echo $page->slug; ?>
        <pre><code><?php echo html_escape($page->body); ?></code></pre>
    </div>
    <div class="col-md-6">
        <p>visualização:</p>
        <div class="panel panel-default">
            <div class="panel-body">
                <?php echo $page->body; ?>
            </div>
        </div>
    </div>
</div>

<hr>
<a href="/pages" class="btn btn-success">Voltar</a>
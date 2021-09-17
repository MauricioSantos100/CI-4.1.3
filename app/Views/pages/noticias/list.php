<h2>Blog do MB</h2>
<table class="table table-striped">
    <?php if(!empty($noticias) && is_array($noticias)): ?>
        <?php foreach($noticias as $noticias_item) : ?>
            <tr>
                <td>
                    <a href="<?php echo"/noticias/view/".$noticias_item['id'] ?>"><?php echo $noticias_item['titulo'] ?></a>
                </td>
                <td>
                <a href="/noticias/edit/<?php echo $noticias_item['id'] ?>">Editar</a>
                <a href="/noticias/delete/<?php echo $noticias_item['id'] ?>"onclick="return confirma()">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
    <tr>
        <td colspan="2">Nehuma Noticia encontrada</td>
    </tr>
    <?php endif; ?>
</table>

<script>
    function confirma() {
        if(!confirm("Deseja excluir?")) {
            return false;
        }
        return true;
    }
</script>
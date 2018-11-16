<?=anchor('postagem-novo','Nova Postagem')?>

<?php if ($postagens == FALSE): ?>
    <h3>Nenhuma postagem encontrada</h3>
<?php else: ?>
    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($postagens as $postagem): ?>
                <tr>
                    <td><?= $postagem['titulo']?></td>
                    <td><?=anchor('PostagemController/edicao/'.$postagem['id'],'Editar')?></td>
                    <td><?=anchor('PostagemController/excluir/'.$postagem['id'],'Excluir')?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>    
<?php endif; ?>
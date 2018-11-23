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
                    <td><?=anchor('postagem-visualizar/'.$postagem['id'], $postagem['titulo'])?></td>
                    <td><?=anchor('postagem-editar/'.$postagem['id'],'Editar')?>
                    <td><?=anchor('postagem-excluir/'.$postagem['id'],'Excluir')?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>    
<?php endif; ?>
<?=form_open('postagem-atualizar')?>
    <input type="hidden" name="id" value="<?=$postagem['id']?>">
    <table>
        <tr>
            <td>Título</td>
            <td><input type="text" name="titulo" value="<?=$postagem['titulo']?>"/></td>
        </tr>
        <tr>
            <td>Conteúdo</td>
            <td><input type="text" name="conteudo" value="<?=$postagem['conteudo']?>"/></td>
        </tr>
    </table>
    <input type="submit" value="Atualizar"/>
<?=form_close()?>
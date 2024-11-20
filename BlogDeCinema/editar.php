<h1>EDITAR</h1>

<?php
    $sql = "SELECT * FROM comentarios WHERE id= ".$_REQUEST["id"];

    $res = $conn->query($sql);
    
    $row = $res->fetch_object();
?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>Nome do Usuario</label>
        <input type="text" name="user" value="<?php print $row->user; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Conteudo</label>
        <textarea name="conteudo" class="form-control" id="exampleFormControlTextarea1" rows="10"><?php echo print $row->conteudo; ?></textarea>
        <script>
        document.getElementById(`mytextarea`).innerHTML="Include the text you want to display";
        </script>`
    </div>
    <div class="mb-3">
        <label>Data</label>
        <input type="date" name="data_post" value="<?php print $row->data_post; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>
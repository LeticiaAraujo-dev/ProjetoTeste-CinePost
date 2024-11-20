<h1>Nova POSTAGEM</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="postagem">
    <div class="mb-3">
        <label>Nome do Usuario</label>
        <input type="text" name="user" class="form-control">
    </div>
    <div class="mb-3">
        <label>Conteudo</label>
        <textarea name="conteudo" class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
    </div>
    <div class="mb-3">
        <label>Data</label>
        <input type="date" name="data_post" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>
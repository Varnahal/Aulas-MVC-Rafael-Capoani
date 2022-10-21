<h1>Alterar publicação</h1>
<form method="POST" action="?pagina=admin&metodo=update">
    <span>Titulo</span>
    <input type="text" name="titulo" value="{{titulo}}"><br><br>
    <input type="hidden" name="id" value="{{id}}">
    <span>Conteudo</span><br>
    <textarea name="conteudo" id="" cols="25" rows="5">{{conteudo}}</textarea><br><br>

    <input type="submit" value="alterar">
</form>
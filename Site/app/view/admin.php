<h1>Gerenciador de conteudo</h1>

<a href="http://github/Aulas-MVC-Rafael-Capoani/Site/?pagina=admin&metodo=create">Criar publicação</a><br><br>
<hr>
<br>
<table border="2">
    <tr>
        <th>ID</th>
        <th>TITULO</th>
        <th>ALTERAÇÂO</th>
        <th></th>
        <th>DELEÇÃO</th>
    </tr>
    {% for postagem in postagens %}
    <tr>
        <th>{{postagem.id}}</th>
        <th>{{postagem.titulo}}</th>
        <th>ALTERAÇÂO</th>
        <th></th>
        <th><a style=background-color:red;color:white; href="http://github/Aulas-MVC-Rafael-Capoani/Site/?pagina=admin&metodo=delete&id={{postagem.id}}">DELECÂO</a></th>
    </tr>
    {% endfor %}
    
</table>
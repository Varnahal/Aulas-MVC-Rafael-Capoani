<section>
    <article>
        <header>
            <h2>{{titulo}}</h2>
        </header>
        <p>{{conteudo}}</p>

        <br>
        <hr>
        <br>
        <h1>Comentarios</h1>
        {% if comentarios == false %}
            <p>Nenhum comentario encontrado nessa postagem</p>
        {% else %}
        {% for coment in comentarios %}
            <h3>{{coment.nome}}</h3>
            <p>{{coment.mensagem}}</p>
            <br>
        {% endfor %}
        {% endif %}
    </article>
</section>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site-MVC</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            background-color: #6495ED;
        }
        .corpo{
            width: 1000px;
            background-color: white;
            margin: 0 auto;

        }
        .topo{
            padding: 20px 25px;
            border-bottom: 2px solid #CCC;
        }
        .topo a{
            font: 20px Arial;
            color: black;
            text-decoration: none;
        }
        .topo a:hover{
            text-decoration: underline;
        }
        .conteudo{
            background: #FFF;
            padding: 20px 25px;
        }
        .conteudo article{
            margin-bottom: 20px;
        }
        article h2 a{
            font: 22px Arial;
            color:#333;
            text-decoration: none;
            
        }
        article{
            margin-left: 20px;
        }
        article h2{
            margin-bottom: 7px;
        }
        article h2 a:hover{
            text-decoration: underline;
        }
        article p{
            font: 16px Arial;
            color:#333;
            padding-left:10px ;
        }
        .conteudo h1{
            font: 24px Arial;
            color: #6495ED;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="corpo">
        <div class="topo">
            <header>
                <nav>
                <a href="http://github/Aulas-MVC-Rafael-Capoani/Site/">Home</a>|
                <a href="http://github/Aulas-MVC-Rafael-Capoani/Site/?pagina=sobre">Sobre</a>
                </nav>
            </header>
        </div>
        <div class="conteudo">
            {{area_dinamica}}
        </div>
    </div>
</body>
</html>
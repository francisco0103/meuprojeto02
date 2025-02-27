<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color:rgb(255, 255, 255);
        }
        header {
            background:rgb(0, 0, 0);
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
        }
  

        div {
            margin: 20px 0;
        }
        div a {
            color: #ffffff;
            margin: 0 15px;
            text-decoration: none;
            font-size: 1.2em;
            transition: transform 0.3s ease, color 0.3s ease;
        }
        div a:hover {
            transform: scale(1.1);
            color: #ff6347; /* Mudando a cor ao passar o mouse */
        }
    




         .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        footer {
            background:rgb(46, 51, 54);
            color: #ffffff;
            text-align: center;
            padding: 10px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        .hero {
            background:rgb(0, 0, 0);
            color: #ffffff;
            padding: 50px 0;
            text-align: center;
        }
        .hero h1 {
            margin: 0;
            font-size: 2.5em;
        }
        .hero p {
            font-size: 1.2em;
        }
li{
    list-style: none;
    display: inline;
}
a:active{
    padding: 5px 8px;
    color: #ff6347;
}





    
    </style>
</head>
<body>


<header>
    <h1> Pagina Inicial</h1>
    <div>
        <a href="/sobre">Sobre</a>
        <a href="/projeto">Projeto</a>
        <a href="/contato">Contato</a>
    </div>
</header>

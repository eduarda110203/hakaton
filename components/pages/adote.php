<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adote um Gato</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        header {
            background: #333;
            color: #fff;
            padding-top: 20px;
            min-height: 70px;
            border-bottom: #fff 3px solid;
            text-align: center;
        }
        header h1 {
            margin: 0;
            font-size: 2.5em;
        }
        .gatos-list, .adotante-form {
            background: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .gatos-list h2, .adotante-form h2 {
            margin-top: 0;
        }
        .gatos-list img {
            max-width: 150px;
            border-radius: 5px;
        }
        .gatos-list .gato {
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }
        .gatos-list .gato:last-child {
            border-bottom: none;
        }
        .adotante-form input[type="text"],
        .adotante-form input[type="email"],
        .adotante-form input[type="tel"],
        .adotante-form textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .adotante-form input[type="submit"] {
            background: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .adotante-form input[type="submit"]:hover {
            background: #555;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Adote um Gato</h1>
        </div>
    </header>
    
    <div class="container">
        <section class="gatos-list">
            <h2>Gatos Disponíveis para Adoção</h2>
            <!-- Exemplo de um gato, você deve substituir isso com dados dinâmicos do seu banco -->
            <div class="gato">
                <img src="http://exemplo.com/foto_gato1.jpg" alt="Gato 1">
                <h3>Nome do Gato 1</h3>
                <p>Idade: 2 anos</p>
                <p>Raça: Siamês</p>
                <p>Cor: Creme</p>
                <p>Sexo: M</p>
                <p>Descrição: Gato muito carinhoso e brincalhão.</p>
            </div>
            <!-- Adicione mais gatos aqui -->
        </section>

        <section class="adotante-form">
            <h2>Cadastro de Adotante</h2>
            <form action="processar_adotante.php" method="post">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" name="telefone">

                <label for="endereco">Endereço:</label>
                <textarea id="endereco" name="endereco" rows="4"></textarea>

                <label for="preferencias">Preferências:</label>
                <textarea id="preferencias" name="preferencias" rows="4"></textarea>

                <input type="submit" value="Cadastrar">
            </form>
        </section>
    </div>
</body>
</html>

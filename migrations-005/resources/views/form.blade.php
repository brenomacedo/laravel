<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action={{ route('debug') }}>
        @csrf
        <label>Título</label>
        <input type="text" name="title">

        <br>

        <label>Subtitle</label>
        <input type="text" name="subtitle">

        <br>

        <label>Content</label>
        <textarea type="text" name="content"></textarea>

        <br>

        <input type="submit" value="Cadastrar artigo">
    </form>
</body>
</html>
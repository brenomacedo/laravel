<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action={{ route('user.store') }} method="post">
        @csrf
        <label for="">Nome do usuário</label>
        <input type="text" name="name">
        
        <label for="">Email do usuário</label>
        <input type="text" name="email">
        
        <label for="">Senha do usuário</label>
        <input type="password" name="password">

        <input type="submit" value="cadastrar usuário">
    </form>
</body>
</html>
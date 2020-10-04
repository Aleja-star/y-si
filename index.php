<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contacto</title>
    <style>
       label {
           width: 150px;
           display: inline-block;
       }
    </style>
</head>
<body>

<form  method="post" action="pagina2.php"></form>
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre">

    <label for="asunto">Asunto</label>
    <label type="text" name="asunto" id="asunto"></label>

    <label for="mensaje"></label>
    <textarea name="mensaje" id="" cols="30" rows="10"></textarea>
   
    <input type="submit">
    
</body>
</html>
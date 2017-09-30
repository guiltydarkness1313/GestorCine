<html>
<head>

</head>

<body>
<h1>Bienvenido a Cinesaurio</h1>
<h2>Para obtener el precio de su entrada rellene los siguientes datos:</h2>
    <form method="post" action="/entrada/consulta">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <br>
        <label>Introduzca su edad actual <input type="text" name="edad"></label><br>
        <label>Introduzca su condición actual <input type="text" name="condicion"></label><br>
        <input type="submit" value="Obtener">
    </form>

</body>

</html>
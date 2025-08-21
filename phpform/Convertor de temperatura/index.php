<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Temperatura</title>
</head>
<body>
    <h1>Conversor de Temperatura</h1>
    <form action="form.php" method="get">
        <label for="temp">Temperatura:</label><br>
        <input type="text" name="t" id="temp" placeholder="Digite a temperatura" required><br><br>

        <label for="de"><strong>De qual unidade é essa temperatura?</strong></label><br>
        <select name="de" id="de" required>
            <option value="" disabled selected>Selecione a unidade de origem</option>
            <option value="celsius">Celsius</option>
            <option value="fahrenheit">Fahrenheit</option>
            <option value="kelvin">Kelvin</option>
        </select><br><br>

        <label for="para"><strong>Para qual unidade você quer converter?</strong></label><br>
        <select name="para" id="para" required>
            <option value="" disabled selected>Selecione a unidade de destino</option>
            <option value="celsius">Celsius</option>
            <option value="fahrenheit">Fahrenheit</option>
            <option value="kelvin">Kelvin</option>
        </select><br><br>

        <input type="submit" value="Converter">
    </form>
</body>
</html>

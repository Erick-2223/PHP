<?php
$temp = $_GET["t"];
$de   = $_GET["de"];
$para = $_GET["para"];

$erros = [];

if ($temp == "") {
    $erros[] = "A temperatura deve ser informada.";
}
if ($de == "") {
    $erros[] = "A unidade de origem deve ser selecionada.";
}
if ($para == "") {
    $erros[] = "A unidade de destino deve ser selecionada.";
}


if ($temp != "" && !is_numeric($temp)) {
    $erros[] = "A temperatura deve ser um número.";
}

if (is_numeric($temp)) {
    switch ($de) {
        case "celsius":
            if ($temp < -273.15) $erros[] = "A temperatura em Celsius não pode ser inferior ao zero absoluto (-273,15°C).";
            break;
        case "fahrenheit":
            if ($temp < -459.67) $erros[] = "A temperatura em Fahrenheit não pode ser inferior ao zero absoluto (-459,67°F).";
            break;
        case "kelvin":
            if ($temp < 0) $erros[] = "A temperatura em Kelvin não pode ser negativa.";
            break;
    }
}


if ($de === $para && $de != "" && $para != "") {
    $erros[] = "A unidade de origem e destino não podem ser iguais.";
}


if (count($erros) == 0) {
    $resultado = null;

    switch ("$de-$para") {
        case "celsius-fahrenheit":
            $resultado = $temp * 9/5 + 32;
            break;
        case "celsius-kelvin":
            $resultado = $temp + 273.15;
            break;
        case "fahrenheit-celsius":
            $resultado = ($temp - 32) * 5/9;
            break;
        case "fahrenheit-kelvin":
            $resultado = ($temp - 32) * 5/9 + 273.15;
            break;
        case "kelvin-celsius":
            $resultado = $temp - 273.15;
            break;
        case "kelvin-fahrenheit":
            $resultado = ($temp - 273.15) * 9/5 + 32;
            break;
        default:
            $erros[] = "Conversão inválida.";
            break;
    }

    if ($resultado !== null) {
        echo "Temperatura convertida: <strong>" . round($resultado, 2) . "° " . ucfirst($para) . "</strong>";
    }
} else {
    echo "<b>Foram encontrados os seguintes erros:</b><br>";
    foreach ($erros as $erro) {
        echo "- $erro <br>";
    }
}
?>

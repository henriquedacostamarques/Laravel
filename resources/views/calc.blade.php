<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
</head>
<body>

<h1>Calculadora simples</h1>

<form method="POST" action="/calcular">
    @csrf

    <input type="number" name="a" placeholder="Número 1" required>
    <input type="number" name="b" placeholder="Número 2" required>

    <select name="op">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>

    <button type="submit">Calcular</button>
</form>

@if(isset($resultado))
    <h2>Resultado: {{ $resultado }}</h2>
@endif

</body>
</html>
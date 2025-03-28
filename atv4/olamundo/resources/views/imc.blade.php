<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadoras</title>
</head>
<body>
    @if(session('resultado'))
        <p><strong>Resultado:</strong> {{ session('resultado') }}</p>
    @endif
    <form action="{{ route('imc.calcular') }}" method="POST">
        @csrf
        <h2>Calcular IMC</h2>
        <input type="hidden" name="acao" value="imc">
        <label for="peso">Peso (kg):</label>
        <input type="number" id="peso" name="peso" required step="0.1">
        
        <label for="altura">Altura (m):</label>
        <input type="number" id="altura" name="altura" required step="0.01">
        
        <button type="submit">Calcular</button>
    </form>
    <a href="{{ route('index') }}">>Voltar</a>
</body>
</html>
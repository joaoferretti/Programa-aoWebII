<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliar sono</title>
</head>
<body>
    @if(session('resultado'))
        <p><strong>Resultado:</strong> {{ session('resultado') }}</p>
    @endif
    <form action="{{ route('avaliarSono.calcular') }}" method="POST">
        @csrf
        <h2>Avaliar Sono</h2>
        <input type="hidden" name="acao" value="sono">
        <label for="sono">Horas de sono:</label>
        <input type="number" id="sono" name="horas" required>
        <button type="submit">Avaliar</button>
    </form>
    <a href="{{ route('index') }}">>Voltar</a>
</body>
</html>
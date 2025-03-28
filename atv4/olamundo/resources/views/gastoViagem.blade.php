<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gasto Viagens</title>
</head>
<body>
    <h2>Gasto com Viagem</h2>
    @if(session('resultado'))
        <p><strong>Resultado:</strong> {{ session('resultado') }}</p>
    @endif

    <form action="{{ route('gastoViagem.calcular') }}" method="POST">
        @csrf
        <label for="distancia">Distância (km):</label>
        <input type="number" id="distancia" name="distancia" required step="0.1">
        
        <label for="consumo">Consumo do veículo (km/L):</label>
        <input type="number" id="consumo" name="consumo" required step="0.1">
        
        <label for="preco">Preço do combustível (R$):</label>
        <input type="number" id="preco" name="preco" required step="0.01">
        
        <button type="submit">Calcular</button>
    </form>

    <a href="{{ route('index') }}">>Voltar</a>

</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 20px;
            padding: 0;
            color: #333;
            background-color: #f0f8ff;
        }
        
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        
        h1 {
            text-align: center;
            color: #00695c;
            font-size: 2.5em;
            margin-bottom: 30px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }
        
        .btn {
            padding: 12px 20px;
            background-color: #00796b;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1.1em;
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }
        
        .btn:hover {
            background-color: #00695c;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calculadora</h1>
        <p style="text-align: center; font-size: 1.2em;">(y^(2/2x)) + ((3x²)/z) - 3</p>
        
        <div class="calculator" style="text-align: center; margin: 30px 0;">
            <form method="post" id="calcForm">
                <input type="number" name="x" step="any" placeholder="Valor de x" required style="margin: 10px; padding: 8px;">
                <input type="number" name="y" step="any" placeholder="Valor de y" required style="margin: 10px; padding: 8px;">
                <input type="number" name="z" step="any" placeholder="Valor de z" required style="margin: 10px; padding: 8px;">
                
                <?php
                $resultado = '';
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $x = floatval($_POST['x'] ?? 0);
                    $y = floatval($_POST['y'] ?? 0);
                    $z = floatval($_POST['z'] ?? 1);
                    
                    if ($z != 0 && $x != 0) {
                        $part1 = pow($y, (2/(2*$x)));
                        $part2 = (3 * pow($x, 2)) / $z;
                        $resultado = round($part1 + $part2 - 3, 4); // 4 decimales
                    } else {
                        $resultado = 'Error: z o x no pueden ser 0';
                    }
                }
                if ($resultado !== ''): ?>
                    <div id="resultado" style="margin: 20px; font-weight: bold;">
                        Resultado: <?php echo $resultado; ?>
                    </div>
                <?php endif; ?>
            </form>
        </div>
        
        <div style="text-align: center; margin-top: 20px; display: flex; justify-content: center; gap: 15px;">
            <button type="submit" form="calcForm" class="btn">Calcular</button>
            <button type="button" class="btn" onclick="cancelar()">Cancelar</button>
            <button class="btn" onclick="window.location.href='index.php'">Regresar</button>
        </div>
    </div>

    <script>
        function cancelar() {
            document.getElementById('calcForm').reset();
            const res = document.getElementById('resultado');
            if (res) res.remove(); // elimina el resultado del DOM
        }
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #9be1f3e7;
            color: #333;
        }
        
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .product-list {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        
        .product {
            background: white;
            border-radius: 8px;
            padding: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            text-align: center;
            width: 30%;
        }
        
        .product img {
            max-width: 100%;
            border-radius: 5px;
        }
        
        .button-container {
            text-align: center;
            margin-top: 20px;
        }
        
        input[type="number"] {
            width: 60px;
            padding: 5px;
            margin-right: 10px;
        }
        
        button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 15px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        button:hover {
            background-color: #2980b9;
        }
        
        .result {
            margin-top: 20px;
            padding: 10px;
            background: #e0f7fa;
            border-radius: 8px;
        }
        
        .btn-regresar {
            background-color: #6c757d;
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            display: inline-block;
            margin-top: 20px;
        }
    </style>
    <script>
        function calcular(precio, descuento, producto) {
            const cantidad = document.getElementById(`cantidad-${producto}`).value;
            if (!cantidad || cantidad < 1) {
                alert('Ingrese una cantidad válida');
                return;
            }

            const subtotal = precio * cantidad;
            const descuentoAplicado = subtotal * (descuento / 100);
            const total = subtotal - descuentoAplicado;

            document.getElementById(`resultado-${producto}`).innerHTML = `
                <strong>Subtotal:</strong> $${subtotal.toFixed(2)}<br>
                <strong>Descuento (${descuento}%):</strong> $${descuentoAplicado.toFixed(2)}<br>
                <strong>Total a pagar:</strong> $${total.toFixed(2)}
            `;
        }
    </script>
</head>
<body>
    <h1>Ventas</h1>
    
    <div class="product-list">
        <div class="product">
            <img src="img3.jpg" alt="Playera">
            <h3>Playera</h3>
            <input type="number" id="cantidad-playera" min="1" placeholder="Cantidad">
            <button onclick="calcular(35, 5, 'playera')">Comprar ($35)</button>
            <div id="resultado-playera" class="result"></div>
        </div>
        
        <div class="product">
            <img src="img4.jpg" alt="Gorra">
            <h3>Gorra</h3>
            <input type="number" id="cantidad-gorra" min="1" placeholder="Cantidad">
            <button onclick="calcular(20, 10, 'gorra')">Comprar ($20)</button>
            <div id="resultado-gorra" class="result"></div>
        </div>
        
        <div class="product">
            <img src="img5.jpg" alt="Taza">
            <h3>Taza</h3>
            <input type="number" id="cantidad-taza" min="1" placeholder="Cantidad">
            <button onclick="calcular(15, 15, 'taza')">Comprar ($15)</button>
            <div id="resultado-taza" class="result"></div>
        </div>
    </div>

    <div class="button-container">
        <a href="index.php" class="btn-regresar">Regresar</a>
    </div>
</body>
</html>

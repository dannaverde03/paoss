<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Montañas del Mundo</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #e0f7fa, #b2ebf2);
            margin: 0;
            padding: 20px;
            min-height: 100vh;
            color: #00796b;
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
        
        .content {
            display: flex;
            gap: 30px;
            align-items: flex-start;
        }
        
        .button-list {
            display: flex;
            flex-direction: column;
            gap: 15px;
            width: 50%;
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
            display: block;
        }
        
        .btn:hover {
            background-color: #00695c;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        
        .image-container {
            width: 50%;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .image-container img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }
        
        .image-container img:hover {
            transform: scale(1.03);
        }
        
        footer {
            text-align: center;
            margin-top: 30px;
            color: #00796b;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Montañas</h1>
        
        <div class="content">
            <div class="button-list">
                <a href="boton1.php" class="btn">Descripciones</a>
                <a href="boton2.php" class="btn">Recomendaciones</a>
                <a href="boton3.php" class="btn">Venta</a>
                <a href="boton4.php" class="btn">Video</a>
                <a href="boton5.php" class="btn">Calculadora</a>
            </div>
            
            <div class="image-container">
                <img src="img1.jpg" />
            </div>
        </div>
    </div>
</body>
</html>

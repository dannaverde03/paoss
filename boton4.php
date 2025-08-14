<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Montañas del Mundo</title>
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
        <h1>Video</h1>
        
        <div style="text-align: center; margin: 30px 0;">
            <iframe width="560" height="315" 
                src="https://www.youtube.com/embed/GTtGE5vfmFg?si=YHB5M73pX9N7NhYw" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
            </iframe>
        </div>
        
        <div style="text-align: center; margin-top: 20px;">
            <button class="btn" onclick="window.location.href='index.php'">Regresar</button>
        </div>
    </div>
</body>
</html>

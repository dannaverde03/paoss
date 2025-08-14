<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Montañas del Mundo</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-image: url('fondo.jpg'); /* Aquí colocas la imagen de fondo */
            background-size: cover; /* Para que cubra toda la pantalla */
            background-position: center; /* Centra la imagen */
            background-attachment: fixed; /* Fija la imagen al hacer scroll */
            margin: 0;
            padding: 20px;
            min-height: 100vh;
            color: #00796b;
        }
        
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: rgba(255,255,255,0.85); /* Fondo blanco semitransparente */
            padding: 20px;
            border-radius: 10px;
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
            display: inline-block;
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
            display: none;
            transition: transform 0.3s ease;
        }
        
        .image-container img:hover {
            transform: scale(1.03);
        }
    </style>
    <script>
        function showImage(radio) {
            var images = document.querySelectorAll('.image-container img');
            images.forEach(img => img.style.display = 'none');
            document.getElementById(radio.value + '-img').style.display = 'block';
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Montañas más conocidas</h1>
        
        <div class="content">
            <div class="button-list">
                <form>
                    <label>
                        <input type="radio" name="mountain" value="everest" onchange="showImage(this)"> Monte Everest
                    </label><br>
                    <label>
                        <input type="radio" name="mountain" value="kilimanjaro" onchange="showImage(this)"> Kilimanjaro
                    </label><br>
                    <label>
                        <input type="radio" name="mountain" value="alpamayo" onchange="showImage(this)"> Alpamayo
                    </label>
                </form>
            </div>
            <div class="image-container">
                <img id="everest-img" src="everest.jpg" alt="Monte Everest">
                <img id="kilimanjaro-img" src="kiliman.jpg" alt="Kilimanjaro">
                <img id="alpamayo-img" src="alpamayo.jpg" alt="Alpamayo">
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 20px;">
            <button class="btn" onclick="window.location.href='index.php'">Regresar</button>
        </div>
    </div>
</body>
</html>

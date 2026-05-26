<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UrbanStyle SV</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>UrbanStyle SV</h1>
        <p>Ropa y sneakers con el mejor estilo</p>
    </header>
    <nav>
        <a href="#">Inicio</a>
        <a href="#">Productos</a>
        <a href="#">Ofertas</a>
        <a href="#">Contacto</a>
    </nav>
    <section class="bienvenida">
        <h2>Bienvenido a UrbanStyle SV</h2>
        <p>
            Encuentra ropa Nike, Adidas y los mejores sneakers.
        </p>
    </section>
    <section class="productos">
        <?php
        $ropa = [
            [
                "nombre" => "Nike Hoodie",
                "precio" => 35,
                "imagen" => "https://images.unsplash.com/photo-1521572163474-6864f9cf17ab"
            ],
            [
                "nombre" => "Adidas Camiseta",
                "precio" => 20,
                "imagen" => "https://images.unsplash.com/photo-1503341455253-b2e723bb3dbb"
            ],
            [
                "nombre" => "Nike Air Force 1",
                "precio" => 95,
                "imagen" => "https://images.unsplash.com/photo-1542291026-7eec264c27ff"
            ],
            [
                "nombre" => "Adidas Forum",
                "precio" => 85,
                "imagen" => "https://images.unsplash.com/photo-1600185365483-26d7a4cc7519"
            ]
        ];
        foreach($ropa as $item){
            echo "
            <div class='card'>
                <img src='{$item['imagen']}' alt='ropa'>
                <h3>{$item['nombre']}</h3>
                <p class='precio'>$$item[precio]</p>
                <button>Comprar</button>
            </div>
            ";
        }
        ?>
    </section>
    <footer>
        <p>© 2026 UrbanStyle SV | Creado por Kenneth</p>
    </footer>
</body>
</html>

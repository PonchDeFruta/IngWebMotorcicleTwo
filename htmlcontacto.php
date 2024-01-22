<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TiendaMotos - Contacto</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lalezar&family=Raleway:ital,wght@1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <header>
        <h1 class="nombre-sitio">Tienda <span> Motos </span></h1>
    </header>
    
    <div class="contenedor-navegacion">
        <nav class="nav-principal contenedor">
            <a href="index.html">Inicio</a>
            <a href="nosotros.html">Nosotros</a>
            <a href="tienda.html">Tienda</a>
            <a href="blog.html">Blog</a>
            <a href="galeria.html">Galería</a>
            <a href="contacto.html">Contacto</a>
        </nav>
    </div>

    
    <main class="contenido-principal contenedor ">
        <h2 class="text-center">Contacto</h2>

        <form method="post" class="formulario">
            <fieldset>
                <legend>Tus Datos</legend>
                
                <div class="campo">
                    <label for="nombre">Nombre: </label>
                    <input  id="nombre" type="text" name="txtNombre" placeholder="Tu Nombre" required>
                </div>

                <div class="campo">
                    <label for="asunto">Asunto:</label>
                    <input id="asunto" type="text" name="txtAsunto"placeholder="Tu Asunto"  required>
                </div>

                <div class="campo">
                    <label for="email">E-mail:</label>
                    <input id="email" type="email" name="txtEmail" placeholder="Tu Email" >
                </div>

                <div class="campo">
                    <label for="tel">Teléfono:</label>
                    <input id="tel" type="tel"name="txtTel" placeholder="Tu Teléfono" >
                </div>

                <div class="campo">
                    <label for="tel">Mensaje:</label>
                    <textarea rows="10" name="txtMensaje" cols="20"></textarea>
                </div>

            </fieldset>

            <fieldset>
                <legend>País</legend>

                <div class="campo">
                    <label for="pais" name="txtPais">País</label>
                    <select id="pais">
                        <option value="">-- Seleccione -- </option>
                        <option value="MX">México</option>
                        <option value="PR">Perú</option>
                        <option value="CO">Colombia</option>
                        <option value="AR">Argentina</option>
                        <option value="ES">España</option>
                        <option value="CL">Chile</option>
                    </select>

                </div>

            </fieldset>

            <fieldset>
                <legend>Información Extra</legend>
                
                <div class="campo">
                    <label for="cliente">Cliente</label>
                    <input id="cliente" name="txtCliente" type="radio" name="tipo" value="cliente">
                </div>

                <div class="campo">
                    <label for="proveedor">Proveedor</label>
                    <input id="proveedor"name="txtProveedor" type="radio" name="tipo" value="proveedor">
                </div>

                <div class="campo">
                    <label for="categoria">Categoría de Interés</label>
                    <input list="categorias" name="txtCategoria" name="categorias">
                    <datalist id="categorias">
                        <option value="Compra Motos">
                        <option value="Ventas Motos">
                        <option value="Unete al equipo">
                        <option value="Compra especial">
                        <option value="Envio especial">
                    </datalist>
                </div>

            </fieldset>

            <input class="btn" type="submit" value="Enviar Formulario" >
        </form>
        
    </main>




    <footer class="site-footer">
        <div class="grid-footer contenedor">
            <div>
                <h3>Categorías</h3>

                <nav class="footer-menu">
                    <a href="#">Otras paginas:</a>
                    <a href="https://www.bmw-motorrad.com.mx/es/home.html?gclid=CjwKCAjwv-GUBhAzEiwASUMm4voTP1eLTb1DDVGhxedNjqau_TYv5UEMNp0ZSriw2BkIDRvFixRUcBoCdDQQAvD_BwE#/filter-todo">BMW Motorrad</a>
                    <a href="https://www.harley-davidson.com/mx/es/index.html">Harley-Davidson</a>
                    <a href="https://www.ducati.com/es/es/home">Ducati</a>
                    <a href="https://www.indianmotorcycle.mx/?utm_source=g_Adwords&medium=cpc&utm_campaign=17334802781&adgroupid=136678528483&utm_term=indian%20motorcycle_b&gclid=CjwKCAjwv-GUBhAzEiwASUMm4ifTL29NKzsacL0Vwy1zL56oCKm0e1KjUmCFoyKLmzF4TCCBRO9DrhoC-RMQAvD_BwE">Indian</a>
                </nav>
            </div>

            <div>
                <h3>Sobre Nosotros</h3>
                <nav class="footer-menu">
                    <a href="nosotros.html">Nuestra Historia</a>
                    <a href="nosotros.html">Misión, Visión y Valores</a>
                    <a href="nosotros.html">Política de Privacidad</a>
                    <a href="nosotros.html">Términos y Condiciones</a>
                    </a>
                </nav>
            </div>

            <div>
                <h3>Soporte</h3>
                <nav class="footer-menu">
                    <a href="">Soporte</a>
                    <a href="">Tel-Fijo: 123-456-789</a>
                    <a href="">Watsapp: 55-456-789-45</a>
                </nav>
            </div>

        </div>

        <p class="copyright">Todos los derechos Reservados, TiendaMotos</p>
    </footer>
    
    <?php
            include("contacto.php");
            ?>


    
</body>
</html>

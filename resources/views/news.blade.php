<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Noticias</title>
</head>
<body>
    @include('partials.header')
        <div class="container">
            <!-- News Item 1 -->
            <div class="news-item">
                <img src="noticiaimagen/image1.jpg" alt="Imagen Noticia 1">
                <div class="news-content">
                    <h2 class="news-title">Participá por un viaje a Santiago del Estero</h2>
                    <p class="news-description">
                        ¡Gana un viaje inolvidable para 4 personas con nuestro exclusivo concurso!<br>
                        
                        🎉 ¿Qué debes hacer? ¡Es simple! Solo tienes que relajarte y disfrutar.
                    </p>
                    <a href="noticia1.html" class="news-link">Leer más</a>
                </div>
            </div>
            <!-- News Item 2 -->
            <div class="news-item">
                <img src="noticiaimagen/image2.jpg" alt="Imagen Noticia 2">
                <div class="news-content">
                    <h2 class="news-title">Título de la Noticia 2</h2>
                    <p class="news-description">Descripción breve de la noticia 2. Esta es una vista previa del contenido.</p>
                    <a href="noticia2.html" class="news-link">Leer más</a>
                </div>
            </div>


            <!-- Repite esto hasta tener 10 noticias -->
            <!-- News Item 3 -->
            <div class="news-item">
                <img src="noticiaimagen/image3.jpg" alt="Imagen Noticia 3">
                <div class="news-content">
                    <h2 class="news-title">Título de la Noticia 3</h2>
                    <p class="news-description">Descripción breve de la noticia 3. Esta es una vista previa del contenido.</p>
                    <a href="noticia3.html" class="news-link">Leer más</a>
                </div>
            </div>

            <div class="news-item">
                <img src="noticiaimagen/image4.jpg" alt="Imagen Noticia 4">
                <div class="news-content">
                    <h2 class="news-title">Título de la Noticia 4</h2>
                    <p class="news-description">Descripción breve de la noticia 4. Esta es una vista previa del contenido.</p>
                    <a href="noticia4.html" class="news-link">Leer más</a>
                </div>
            </div>
           
        </div>
    @include('partials.footer')
</body>
</html>
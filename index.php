<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.css" rel="stylesheet">
  	<script src="https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
  	<link rel="stylesheet" href="css/projetocss.css">
    <title>Reportei</title>
</head>

<body>
    <header class="cabecalho">
        <h1>Reportei</h1>
  </header>
        <nav class="navegacao">
        <span > <a href="login.php" class="btn btn-light">Login</a></span>
        <a href="logout.php" class="btn btn-light">Sair</a>		
        
  		  </nav>
        
   
    <main class="principal">

        <div class="conteudo">
            <div id="form">
                <form action="config/verifica.php" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="Nome">Nome</label>
                            <input type="text" class="form-control" name="name" placeholder="Nome">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nivel">Nivel da solicitação</label>
                            <select class="form-control" name="level">
                                <option selected>Escolher...</option>
                                <option value="Baixa">Baixa</option>
                                <option value="Media">Media</option>
                                <option value="Alta">Alta</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" name="address" placeholder="Rua dos Bobos, nº 0">
                    </div>
                    <div class="form-group">
                        <label for="ponto_referencia">Ponto de referência</label>
                        <input type="text" class="form-control" name="reference_point"
                            placeholder="Lojas ,cores de casa e etc.">
                    </div>
                  	<div class="form-group">
                        <label for="coordenadas">Coordenadas</label>
                        <input type="text" class="form-control" name="coordinates"
                            placeholder="Coordenadas">
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição do local</label>
                        <textarea class="form-control" name="description" rows="3"></textarea>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Enviar" name="enviar">
                </form>

            </div>

            <div id="location-map">
                <script
                    src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.min.js">
                </script>
                <link rel="stylesheet"
                    href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.css"
                    type="text/css">

                <div id="map"></div>
              	<pre id="info"></pre>
              
                <script>
                    mapboxgl.accessToken =
                        'pk.eyJ1Ijoiam9zZWZlbGlwZWRldiIsImEiOiJjbGFvaGJkZnAwenAwM3BvMmcyZTkwbTFpIn0.bE5AQzOXXMmPJZF7b1EP5w';
                    const map = new mapboxgl.Map({
                        container: 'map',
                        // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
                        style: 'mapbox://styles/mapbox/streets-v11',
                        center: [-48.65, -27.01],
                        zoom: 13
                    });

                    // Add the control to the map.
                    map.addControl(
                        new MapboxGeocoder({
                            accessToken: mapboxgl.accessToken,
                            mapboxgl: mapboxgl
                        })
                    );
                    const marker = new mapboxgl.Marker({
                        'color': '#314ccd'
                    });
                     map.on('click', (e) => { //e é o evento - traz informações sobre o que aconteceu
             
                        marker.setLngLat(e.lngLat).addTo(map)
                    
                        let info = document.getElementById('info');
                        const popup = new mapboxgl.Popup({
                                closeOnClick: true
                            })
                            .setLngLat(e.lngLat)
                            .setHTML(` Latitude :${ e.lngLat.lat.toFixed(5)} <br> Longitude: ${e.lngLat.lng.toFixed(5)}`)
                            .addTo(map);
                    });
                </script>

            </div>
        </div>
    </main>
    <footer class="rodape">
        Arid <?= date('Y'); ?>
    </footer>
</body>

</html>
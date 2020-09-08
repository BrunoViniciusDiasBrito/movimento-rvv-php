
        <div class="container" style="width: 100%; height: 480px" id="mapContainer"></div>
        <hr>
        <footer class="footer pt-5 pb-3">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-10 col-md col-lg-4 contact">
                        <h1 class="mb-3">O que fazemos?</h1>
                        <p class="mb-0">Projetos socias</p>
                        <p class="mb-0">Retiros Espirituais</p>
                        <p>Música</p>
                    </div>
                    <div class="col-10 col-md col-lg-4 contact midias">
                        <h1 class="mb-3">Nossas Redes Sociais</h1>
                        <span><i class="fab fa-instagram insta mt-1"></i> <a href="https://www.instagram.com/movimentoreviva/">@movimentorevivia</a></span>
                        <span><i class="fab fa-facebook face"></i> <a href="https://www.facebook.com/movimentoreviva/?epa=SEARCH_BOX">/movimentorevivia</a></span>
                        <span><i class="fab fa-youtube yt"></i> <a href="https://www.youtube.com/channel/UCBx_Pl-SimtI6KNdgo481HQ">movimentorevivia</a></span>
                    </div>
                    <div class="col-10 col-md col-lg-4 contact mensagem">
                        <h1 class="mb-3">Sal da terra</h1>
                        <p>"Vocês são o sal da terra. Mas, se o sal perder o seu sabor, como restaurá-lo? Não servirá para nada, exceto para ser jogado fora e pisado pelos homens.</p>
                    </div>
                </div>
            </div>
        </footer>
    
    </div>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="https://unpkg.com/vue"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>       
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-166834089-2"></script>
    <script src="js/seo/anlytics.js"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-core.js" type="text/javascript" charset="utf-8"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-service.js" type="text/javascript" charset="utf-8"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-ui.js" type="text/javascript" charset="utf-8"></script>
        


    <script>
      // Initialize the platform object:
      var platform = new H.service.Platform({
        'apikey': 'AqCicd0vgaQUh_wyjS5bRtEjrkCwW1l4wJeg1-b36qE'
      });

      // Obtain the default map types from the platform object
      var defaultLayers  = platform.createDefaultLayers();

      // Instantiate (and display) a map object:
      var map = new H.Map(
        document.getElementById('mapContainer'),
        defaultLayers .vector.normal.map,
        {
          zoom: 10,
          center: { lng: 13.4, lat: 52.51 }
        });

        var ui = H.ui.UI.createDefault(map, defaultLayers, 'pt-BR');
    </script>


</body>
</html>
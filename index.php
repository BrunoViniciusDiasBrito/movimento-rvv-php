<?php include './components/header.php' ?>
        <?php include './components/variables/variables.php' ?>
        
        <main class="main-wrap" id="main">   

            <div class="pb-4 my-carousel">
                
                <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleSlidesOnly" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleSlidesOnly" data-slide-to="1"></li>
                        <li data-target="#carouselExampleSlidesOnly" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./image/rvv-5anos.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./image/rvv-queremos-mais.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./image/rvv-queremos-mais-2.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
                
            </div>           
                        
            <article class="optin">
                    <div class="adjust">
                        <h2>Receba notificações das nossas atividades :)</h2>
                        <form action="" method="post">
                                <label for="">Nome: </label><input type="text" name="name">
                                <label for="">E-mail: </label><input type="email" name="email">

                                <button class="btn btn-primary m-1" type="submit">Enviar</button>
                        </form>
                    </div>
            </article>

           

            <article class="video_section py-5">
                <div class="adjust_videos">
                    <h2>NOSSO CANAL <span><i class="fab fa-youtube" style="color: red;"></i></span></h2> 
                    <div class="video_gallery">
                        <?php foreach($thumb as $thumbnail){?>
                                <?php if(isset($thumbnail)){?>
                                    <iframe class="videos" src="<?php echo $thumbnail['link'] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <?php }?>
                        <?php }?>
                    </div>
                </div>
            </article>
        </main>

<?php include './components/footer.php' ?>
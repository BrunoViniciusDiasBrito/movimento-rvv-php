<?php include './components/header.php' ?>

        <?php 
        $thumb = array(
            array(
                "title"=>"Basta Acreditar",
                "link"=>"https://www.youtube.com/embed/F4c7cfLXH7I"
            ),
            array(
                "title"=>"Outro Rumo",
                "link"=>"https://www.youtube.com/embed/7pBdYOkT9DI"
            ),
            array(
                "title"=>"Inteiramente Teu",
                "link"=>"https://www.youtube.com/embed/mXJVGNaewuQ"
            ),
            array(
                "title"=>"Deus é Top",
                "link"=>"https://www.youtube.com/embed/rhVAX4Z75CQ"
            ),
            array(
                "title"=>"Me Amas",
                "link"=>"https://www.youtube.com/embed/ItZS9jdXpz4"
            ),
            array(
                "title"=>"Eu quero ficar",
                "link"=>"https://www.youtube.com/embed/k4-ePThZNmM"
            )
        )
        ?>
        

        <main class="main-wrap">   
            <div class="album py-5">
                <div class="container-fluid">
                <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
                        <div class="col-md-5 p-lg-5 mx-auto my-5">
                            <h1 class="display-4 font-weight-normal">Seja Bem Vindo</h1>
                            <p class="lead font-weight-normal">Nessa àrea serão colocados comunicados importantes, e atualizações do meio.</p>
                            <a class="btn btn-outline-secondary" href="#">Recado</a>
                        </div>
                        <div class="product-device shadow-sm d-none d-md-block"></div>
                        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
                    </div>
                </div>
                    <div class="container">                
                    <div class="row">
                        <?php foreach($thumb as $thumbnail){?>
                            <?php if(isset($thumbnail)){?>
                                <div class="col-md-4">
                                    <div class="card mb-4 shadow-sm">
                                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="40%" y="50%" fill="#eceeef" dy=".3em"><?php echo $thumbnail['title']?></text></svg>
                                        <div class="card-body">
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                                </div>
                                                <small class="text-muted">9 mins</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                        <?php }?>
                        
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <article class="optin">
                    <div class="adjust">
                        <h2>Receba notificações das nossas atividades :)</h2>
                        <form action="" method="post">
                                <label for="">Nome: </label><input type="text">
                                <label for="">E-mail: </label><input type="email">
                        </form>
                    </div>
            </article>

            <p><?php print_r($GLOBAL_POST) ?></p>

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
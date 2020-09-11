<main class="main-wrap" id="main">   

            <div class="pb-1 my-carousel">
                
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
                        
            <div class="container py-5">
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-laranja">Um pouco sobre nós</h1>
                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum non diam in arcu feugiat euismod a eget est. Quisque aliquet, nisl id sollicitudin porta, libero arcu suscipit dui, sit amet vestibulum dolor turpis quis odio. Sed tristique vel sapien vitae malesuada. Morbi eu dui magna. Proin sit amet ligula a ante eleifend faucibus quis et velit. In cursus sodales justo at efficitur. Mauris maximus posuere nulla, in mollis nibh imperdiet et. Fusce a ex purus.

                        Proin vulputate id sapien at posuere. Duis posuere lorem ac risus ultricies efficitur. Sed laoreet purus vel lacinia finibus. Nullam in lobortis ipsum, a aliquet dolor. Pellentesque quis ligula in risus cursus vulputate. Curabitur nec odio suscipit, efficitur nisl in, interdum velit. Mauris venenatis nisl id molestie vulputate. Curabitur et semper mi. Praesent suscipit ipsum sed erat iaculis, in venenatis elit viverra. Fusce in pretium lacus, placerat fringilla risus. Ut venenatis massa eu ante elementum, sed bibendum mi aliquet. Mauris egestas dolor dui, in luctus odio venenatis in. Pellentesque ultrices, elit eget congue accumsan, ipsum dolor blandit justo, ut viverra augue arcu id felis.

                        Ut accumsan vehicula ornare. Aliquam finibus non odio vel placerat. Proin at aliquam ante. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse fringilla eros diam, sed consectetur sem tincidunt vel. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed sed leo ac metus ullamcorper vehicula at nec risus. Quisque eget ullamcorper ipsum. Nam id mi libero. Mauris cursus dictum erat, eget posuere leo luctus sit amet.
                        </p>
                    </div>
                </div>
            </div>

            <article id="optin_app" class="optin">
                    <div class="container">
                        <div class="row optin_app_adj mx-auto">
                            <h1>Receba notificações das nossas atividades :)</h1>
                            <form action="" class="" @submit.prevent="sendEmail">
                                <input type="text" class='form-control' placeholder="Seu nome" v-model="nome" size="50" name="name">
                                <input type="email" class='form-control' placeholder="Seu e-mail" v-model="email" size="50" name="email">
                                <button class="btn btn-dark" @click="">Enviar</button>
                            </form>
                        </div>
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
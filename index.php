<?php include $_SERVER["DOCUMENT_ROOT"] . "/assets/base/Header.php"?>
    <body class="">
      <!-- Pushy Menu -->
      <nav class="pushy pushy-left">
        <ul class="list-unstyled">
            <li><a href="#home">Главная</a></li>
            <li><a href="#feat">Этапы</a></li>
            <li><a href="#about">О нас</a></li>
            <li><a href="#news">Блог</a></li>
            <li><a href="#history"  >Наша история</a></li>
            <li><a href="#photos">Фото примеры</a></li>
            <li><a href="#contact">Подписаться</a></li>
            <li><a href="" target="_blank">Download</a></li>
        </ul>
      </nav>

      <!-- Site Overlay -->
      <div class="site-overlay"></div>

        <header id="home">
            <div class="container-fluid">
                <!-- change the image in style.css to the class header .container-fluid [approximately row 50] -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-xs-10">
                            <a href="#" class="thumbnail logo">
                                <h1 class="img-responsive"> Digital Hills </h1>

                            </a>
                        </div>
                        <div class="col-md-1 col-md-offset-8 col-xs-2 text-center">
                          <div class="menu-btn"><span class="hamburger">&#9776;</span></div>
                        </div>
                    </div>

                    <style type="text/css">
                        .my_modal{position:fixed;top:0;right:0;bottom:0;left:0;background:rgba(0,0,0,0.5);z-index:1050;display:none;margin:0;padding:0;}.my_modal:target{display:block;overflow-y:auto;}.my_modal-dialog{position:relative;width:auto;margin:10px;}@media (min-width:576px){.my_modal-dialog{max-width:460px;margin:30px auto;}}.my_modal-content{position:relative;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;background-color:#fff;-webkit-background-clip:padding-box;background-clip:padding-box;border:1px solid rgba(0,0,0,.2);border-radius:6px;outline:0;}@media (min-width:768px){.my_modal-content{-webkit-box-shadow:0 5px 15px rgba(0,0,0,.5);box-shadow:0 5px 15px rgba(0,0,0,.5);}}.my_modal-header{display:block;padding:14px 14px 4px;}.my_modal-title{margin-top:0;margin-bottom:0;line-height:1.5;font-size:1.25rem;font-weight:500;border-bottom:1px solid #d4d4d4;}.close{padding:1px 5px 0;border:1px solid #000;border-radius:50%;font-family:sans-serif;font-size:24px;font-weight:700;line-height:1;color:#000;text-shadow:0 1px 0 #fff;opacity:.5;text-decoration:none;top:4px;right:4px;position:absolute;}.close:focus,.close:hover{color:#000;text-decoration:none;cursor:pointer;opacity:.75;}.my_modal-body{position:relative;-webkit-box-flex:1;-webkit-flex:1 1 auto;-ms-flex:1 1 auto;flex:1 1 auto;padding:15px;overflow:auto;}
                      </style>
                      
                      
<div id="modal_open" class="my_modal">
  <div class="my_modal-dialog">
    <div class="my_modal-content">
      <div class="my_modal-header">
        <p class="my_modal-title">Что вы зотите посчитать ?</p>
        <a href="#" title="Закрыть модальное окно" class="close">×</a>
      </div>
      <div class="my_modal-body">
          <p>Узнайте сколько будет стоить ваш заказ</h1>    
        <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSfgn8ZZ3xZdl8IfbmoZ3MWLqlYWzEX18tqLAl9peL1rl4mWrA/viewform" class="btn btn-danger" >Расчитать стоимость ланшафт</a></p>
        <p><a href="#" class="btn btn-danger sdd" >Расчитать стоимость интерьера</a></p>

        <script>
      
            $('.sdd').click(function() {
                alert("В разработке");
            })
        </script>
      </div>
    </div>
  </div>
</div>

                    <div class="jumbotron">
                        <h1><small>Доступный дизайн</small></br>
						<strong>Студия дизайна</strong></h1>
                        <!-- <p>Красивый и уютный сад, уютный и красивый офис или дом - это к нам !</p> -->
                        <p><a class="btn btn-primary btn-lg" role="button">Выезд специалиста</a>
                             <a  href="#modal_open" class="btn btn-lg btn-danger" role="button">Расчитать стоимость</a></p>
                    </div>
                </div>
            </div>
        </header>
        <section id="feat">
            <div class="container">
                <div class="row features">
                    <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="100ms">
                        <span class="typcn typcn-pencil x3"></span>
                        <h4>Первый этап</h4>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad vero facilis recusandae maiores sed fuga. Odit incidunt quod nam nulla porro consequatur beatae pariatur! Corrupti, obcaecati? Neque iste alias vel.
                        </p>
                    </div>
                    <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="300ms">
                        <span class="typcn typcn-camera-outline x3"></span>
                        <h4>Второй этап</h4>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos exercitationem illum, maxime ab excepturi mollitia enim. Temporibus animi dolorum totam veritatis. Vero, sit quibusdam! Distinctio magnam est saepe officia possimus?
                        </p>
                    </div>
                    <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="500ms">
                        <span class="typcn typcn-bookmark x3"></span>
                        <h4>Третий этап</h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur doloribus illo nam modi, commodi officia est sed dolores eaque! Optio earum exercitationem consectetur labore a quo, cupiditate soluta maiores quod?
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="about" class="number wow fadeInUp" data-wow-delay="300ms">
            <!-- change the image in style.css to the class .number .container-fluid [approximately row 102] -->
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 opaline col-md-offset-6">
                            <div class="row">
                                <div class="col-md-offset-1 col-md-10">
                                    <h3>Студия Ланшафтного и интерьерного дизайна</h3>
                                    <h5></h5>
                                    <p>В среднем один заказ выполняется за 1 месяц, минимум 7-10 дней уходит
                                         на создание проекта. <br>
                                         
                                         // Тут по планам задать минимальную стоимость для ЛАншафта и интерьера <br>
                                         // этот текст потом уберу
                                    </p>
                                    <p>
                                        
                                    </p>
                                </div>
                            </div>
                            <div class="row text-center">
                                <!-- set the numbers in assets/js/scripts.js  -->
                                <div class="col-md-4 boxes col-xs-6 col-xs-offset-3 col-lg-4 col-lg-offset-1 col-md-offset-1 col-sm-6 wow fadeInUp">
                                    <h5>Ланшафт</h5>
                                    <h3 class="odometer 01"> 00000</h3>
                                </div>
                                <div class="col-md-4 boxes col-xs-6 col-xs-offset-3 col-lg-4 col-lg-offset-2 col-md-offset-2 col-sm-6 wow fadeInUp" data-wow-delay="300ms">
                                    <h5>Интерьер</h5>
                                    <h3 class="odometer 02">00000</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="news" class="blog wow fadeInUp" data-wow-delay="300ms">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h2>Как сделать заказ?.</h2>
                        <p>

                        </p>
                        <p>Donec id elit non mi porta gravida at eget metus. Donec id elit non mi porta gravida at eget metus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nulla vitae elit libero, a pharetra augue.</p>
                        <a class="btn btn-danger btn-lg" href="#">Take a Look <i class="fa fa-arrow-circle-o-right"></i> </a>
                    </div>
                    <div class="col-md-5">
                        <a href="#">
                            <img src="https://unsplash.it/1200/1200?image=839" alt="" class="img-responsive">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section id="history" class="story wow fadeInUp" data-wow-delay="300ms">
            <!-- change the image in style.css to the class .story .container-fluid [approximately row 141] -->
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 opaline">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <p class="lead"><i>Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</i></p>
                                    <p><i>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</i></p>
                                    <h6 class="lead"> – Fermentum Dapibus</h6>
                                    <p><small>Nibh Etiam Risus Bibendum<br>
        Nullam id dolor id nibh ultricies vehicula ut id elit.</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="photos" class="gallery wow fadeInUp" data-wow-delay="300ms">
            <div class="container">
                <div class="row">
                    <div class="masonry image-gallery">
                        <div class="grid-sizer"></div>
                        <div class="gutter-sizer"></div>
                        <div class="item item-width2">
                            <a href="https://avatars.mds.yandex.net/get-altay/4374841/2a0000017729e4c57fb3a249b587291dab8f/XXL">
                              <img src="https://avatars.mds.yandex.net/get-altay/4374841/2a0000017729e4c57fb3a249b587291dab8f/XXL" alt="" />
                            </a>
                        </div>
                        <div class="item">
                            <a href="https://avatars.mds.yandex.net/get-zen_doc/1352765/pub_5ae8a3fda936f461d5122e7a_5b8edd5b6d19d800ae96a8f0/scale_1200">
                              <img width="150" src="https://avatars.mds.yandex.net/get-zen_doc/1352765/pub_5ae8a3fda936f461d5122e7a_5b8edd5b6d19d800ae96a8f0/scale_1200" alt="" />
                            </a>
                        </div>
                        <div class="item">
                            <a href="https://avatars.mds.yandex.net/get-zen_doc/3512851/pub_60250288cd2cb47e6397846c_6025036a5a38290c15016fdc/scale_1200">
                              <img src="https://avatars.mds.yandex.net/get-zen_doc/3512851/pub_60250288cd2cb47e6397846c_6025036a5a38290c15016fdc/scale_1200" alt="" />
                            </a>
                        </div>
                        <div class="item">
                            <a href="https://i.pinimg.com/originals/1b/72/82/1b72829822a520b2937ad3c0fe74cab4.jpg">
                              <img src="https://i.pinimg.com/originals/1b/72/82/1b72829822a520b2937ad3c0fe74cab4.jpg" alt="" />
                            </a>
                        </div>
                        <div class="item">
                            <a href="https://im0-tub-ru.yandex.net/i?id=741da2352517560dafc7b5507fd4f6af&n=13">
                              <img src="https://im0-tub-ru.yandex.net/i?id=741da2352517560dafc7b5507fd4f6af&n=13" alt="" />
                            </a>
                        </div>
                        <div class="item">
                            <a href="https://designcapital.ru/interiors/img/big/interior_5c4c99d2ec275.jpeg">
                              <img src="https://designcapital.ru/interiors/img/big/interior_5c4c99d2ec275.jpeg" alt="" />
                            </a>
                        </div> 
                        <div class="item item-width2">
                            <a href="https://mykaleidoscope.ru/uploads/posts/2020-10/1602835282_16-p-dizain-interera-doma-v-sovremennom-stile-28.jpg">
                              <img src="https://mykaleidoscope.ru/uploads/posts/2020-10/1602835282_16-p-dizain-interera-doma-v-sovremennom-stile-28.jpg" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

       
        <section id="contact" class="prefooter wow fadeInUp"  data-wow-delay="300ms">
            <!-- change the image in style.css to the class .prefooter .container-fluid [approximately row 154] -->
                <div class="container-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <h3>Чтобы не пропустить скидку<br> Достаточно подписаться на рассылку</h3>
                                <p>Введите ваш Email адрес на который вы хотите получать уникальные предложения</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input name="email" type="text" class="form-control" placeholder="Ваш emai...">
                                        <br>
                                        <input type="sumbit" class="btn btn-danger">Подписаться</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

 <?php include $_SERVER["DOCUMENT_ROOT"] . "/assets/base/Footer.php" ?>

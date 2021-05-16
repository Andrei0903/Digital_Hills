<?php include $_SERVER["DOCUMENT_ROOT"] . "/assets/base/Header.php"?>
 
      <!-- Pushy Menu -->
      <?php include $_SERVER["DOCUMENT_ROOT"] . "/assets/base/sideBar.php"?>

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
        <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSc_vc1bR953TtHbc9aljUULhGJ5jIh-xhmG0Ygofhh2oP1Rfw/viewform" class="btn btn-danger sdd" >Расчитать стоимость интерьера</a></p>

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
                        <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSdrr7Mfvmqj5J1lwnva0cqM3EFYh2KESWxaho1l27Rty5A7EA/viewform" class="btn btn-primary btn-lg" role="button">Выезд специалиста</a>
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
                        Получение заявки. Обработка данных и консультация со специалистом.
                        </p>
                    </div>
                    <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="300ms">
                        <span class="typcn typcn-camera-outline x3"></span>
                        <h4>Второй этап</h4>
                        <p>
                        Выезд специалиста по адресу для произведения необходимых замеров и расчёта стоимости предоставляемой услуги.
                        </p>
                    </div>
                    <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="500ms">
                        <span class="typcn typcn-bookmark x3"></span>
                        <h4>Третий этап</h4>
                        <p>
                        Разработка и реализация проекта с учётом бюджета и личных пожеланий. Проверка работы и передача готового объекта клиенту.
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
                                    <p>
                                    Студия ландшафтного и интерьерного дизайна  «Digital Hills» находится в городе Ишим. Наши специалисты создадут неповтоимый дизайн на любом участке, учитывая все пожелания клиента, начиная с дачи и заканчивая парком. И всё это по доступной цене! Ландшафтные архитекторы нашей студии готовы воплотить мечту клиента о действительно красивом участке. <br>
                                    Мы работаем со всеми направлениями дизайна и готовы за короткое время превратить в цветущий сад даже безжизненную пустыню. Кроме ландшафтного проектирования, мы предлагаем вам услуги интерьерного дизайна, озеленения территории и многое другое.  <br>
                                    "Digital Hills" - воплощаем ваши мечты в реальность!
                                    </p>
                                    <p>
                                        
                                    </p>
                                </div>
                            </div>
                            <div class="row text-center">
                                <!-- set the numbers in assets/js/scripts.js  -->
                                <div class="col-md-4 boxes col-xs-6 col-xs-offset-3 col-lg-4 col-lg-offset-1 col-md-offset-1 col-sm-6 wow fadeInUp">
                                    <h5>Ланшафт</h5>
                                    <p>100/м²</p>

                                    <h3 class="odometer 01"> 00000</h3>
                                </div>
                                <div class="col-md-4 boxes col-xs-6 col-xs-offset-3 col-lg-4 col-lg-offset-2 col-md-offset-2 col-sm-6 wow fadeInUp" data-wow-delay="300ms">
                                    <h5>Интерьер</h5>
                                    <p>1/м²</p>
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
                        <h2>Как сделать заказ?</h2>
                        <p>

                        </p>
                        <p>Итак, представим. Вы - человек, не имеющий дизайнерского опыта, но желающий создать красоту вокруг себя. Обустроить дом или же площадь вокруг дома кажется простой задачей, но на практике всё иначе? Наша студия готова помочь Вам в этом. Наше преимущество заключается в том, что студия имеет онлайн формат то есть, чтобы связаться с нами Вам не нужно провести кучу времени в поисках нужной точки на карте города. Связь с менеджером осуществляется через сайт. Наш специалист грамотно объяснит все нюансы и ответит на интересующие Вас вопросы, после чего мы приступим к работе. Выезд специалиста на место для проведения всех необходимых замеров осуществляется по городу бесплатно. Кроме того, Вы самостоятельно можете отправить нам чертёж, план помещения или территории для работы при условии, что он имеется. В таком случае выезд специалиста может не потребоваться. После разработки дизайна и необходимых поправок мы сразу же приступим к работе. Без сомнений, студия ландшафтного и интерьерного дизайна "Digital Hills" - это в первую очередь гарантия качества. "Digital Hills" - воплотим любую мечту в реальность!
                        </p>
                        <!-- <a class="btn btn-danger btn-lg" href="#">Take a Look <i class="fa fa-arrow-circle-o-right"></i> </a> -->
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
                                <h6 class="lead"> – Наша история</h6>

                                    <p class="lead"><i>История ландшафтного дизайна насчитывает тысячелетия. Первые окультуренные участки земли с растущими на них деревьями и кустарниками появились ещё во втором тысячелетии до нашей эры на территории Египта и Месопотамии — в те времена сады носили чисто функциональный характер. Но с развитием культуры и искусств, появилась потребность в организации декоративных садовых участков для отдыха и досуга..</i></p>
                                    <p><i>Тема ландшафтного и интерьерного дизайна актуальнв и по сей день. Людям всегда и во все времена хотелось жить окружёнными красивыми вещами и комфортом. Время идёт, каноны моды и красоты меняются, однако человек никогда не утрачивал своего желания жить в красоте и комфорте. Декоративные интерьеры имели место быть и в античном мире, и в Древнем Египте и даже у индейцев. </i></p>
                                    <p><i> В связи с новыми тенденциями (например, озеленение территории и дизайн интерьера) ландшафтный и интерьерный дизайн будет актуален ещё на многие года вперёд. </i></p>
                                   
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

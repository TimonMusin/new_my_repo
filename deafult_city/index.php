<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="css/popup.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;1,700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid" id="app">
        <div class="header d-flex justify-content-lg-between align-items-center">
            <div class="header_leftbar d-flex justify-content-lg-between align-items-center align-self-center">
                <img src="images/logo.png" width="30" height="45" alt="">
                <p style="font-weight: 800; font-size: 18px">Сделаем лучше вместе</p>
                <div class="line"></div>
                <p>Городской портал по решению проблем</p>
            </div>
            <div class="header_registration">
              <button onclick="PopUpShow()" class="btn" style="border-radius: 64px; background: #FFDF3A; color: #D86D00;">Регистрация</button>
              <button onclick="PopupLogin()" class="btn" style="border: 2px solid #D86D00; box-sizing: border-box; border-radius: 64px; color: #D86D00;">Войти</button>
            </div>
        </div>
        <div class="main_container mt-4">
            <div class="request d-flex ">
                <div class="do_req d-flex flex-column align-items-left justify-content-lg-center">
                    <p>Сообщите о проблемах </p>
                    <p>благоустройства в вашем районе для ускорения их решения</p>
                    <button class="btn" style="border-radius: 64px; background: #FFDF3A; color: #D86D00;">Оставить заявку</button>
                </div>
                <div class="req_image d-flex align-items-center justify-content-lg-center">
                    <img src="images/city.png" alt="">
                </div>
            </div>
            <div class="slider">
                <div class="title">
                    <p>За всё время решено </p>
                    <p>3452178 проблем</p>
                </div>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="do_slider mt-4">
                        <div class="slider_content">
                          <div class="img_background" style="background:url('images/foto5.png');background-size: cover;"></div>
                          <div class="slider_img_content">
                            <p>Благоустройство дома</p>
                            <p>29.12.21</p>
                          </div>
                          <p>Капитальный ремонт лифтов в Первомайском районе</p>
                        </div>
                        <div class="slider_content">
                          <div class="img_background" style="background:url('images/foto6.png');background-size: cover;"></div>
                          <div class="slider_img_content">
                            <p>Благоустройство дома</p>
                            <p>29.12.21</p>
                          </div>
                          <p>Капитальный ремонт лифтов в Первомайском районе</p>
                        </div>
                        <div class="slider_content">
                          <div class="img_background" style="background:url('images/foto7.png');background-size: cover;"></div>
                          <div class="slider_img_content">
                            <p>Благоустройство дома</p>
                            <p>29.12.21</p>
                          </div>
                          <p>Капитальный ремонт лифтов в Первомайском районе</p>
                        </div>
                        <div class="slider_content">
                          <div class="img_background" style="background:url('images/foto8.png');background-size: cover;"></div>
                          <div class="slider_img_content">
                            <p>Благоустройство дома</p>
                            <p>29.12.21</p>
                          </div>
                          <p>Капитальный ремонт лифтов в Первомайском районе</p>
                        </div>
                    </div>
                  
                    </div>
                   
                    <div class="carousel-item">
                      <div class="do_slider mt-4">
                        <div class="slider_content">
                          <div class="img_background" style="background:url('images/foto1.jpg');background-size: cover;"></div>
                          <div class="slider_img_content">
                            <p>Благоустройство дома</p>
                            <p>29.12.21</p>
                          </div>
                          <p>Капитальный ремонт лифтов в Первомайском районе</p>
                        </div>
                        <div class="slider_content">
                          <div class="img_background" style="background:url('images/foto2.jpg');background-size: cover;"></div>
                          <div class="slider_img_content">
                            <p>Благоустройство дома</p>
                            <p>29.12.21</p>
                          </div>
                          <p>Капитальный ремонт лифтов в Первомайском районе</p>
                        </div>
                        <div class="slider_content">
                          <div class="img_background" style="background:url('images/foto3.jpg');background-size: cover;"></div>
                          <div class="slider_img_content">
                            <p>Благоустройство дома</p>
                            <p>29.12.21</p>
                          </div>
                          <p>Капитальный ремонт лифтов в Первомайском районе</p>
                        </div>
                        <div class="slider_content">
                          <div class="img_background" style="background:url('images/foto4.jpg');background-size: cover;"></div>
                          <div class="slider_img_content">
                            <p>Благоустройство дома</p>
                            <p>29.12.21</p>
                          </div>
                          <p>Капитальный ремонт лифтов в Первомайском районе</p>
                        </div>
                    </div>
                   
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
          </div>
          <footer class="mt-5" >
            <div class="footer_content_1">
              <img src="images/Component 1.png" width="30" height="45" alt="">
              <p style="font-weight: 800; font-size: 18px">Сделаем лучше вместе</p>
            </div>
            <div class="footer_content_2">
              <div class="social_networks">
              <img src="images/инста.png" alt=""><img src="images/вк.png" alt=""><img src="images/твиттер.png" alt=""><img src="images/фейсбук.png" alt="">
              </div>
              <p>© 2014-2021 Комитет по информатизации и связи</p>
            </div>
            <div class="footer_content_3">
              <p>Политика конфиденциальности</p>
              <p>Условия пользования</p>
            </div>
    </footer>
     
      <div class="b-popup " id="popup1">
          <div class="b-popup-content col-md-6  col-md-6 col-sm-5  ">
              <div class="popup_content ">
                <div class="popup_content_change_type">
                  <div class="change_type">
                    
                    <div class="change_type_reg">
                      <p id="showreg" onclick="SetRegistrationView()">Регистрация</p>
                      <div class="dev"></div>
                    </div>
                    <div class="change_type_log">
                      <p id="showlog" onclick="SetLoginView()">Войти</p>
                      <div class="dev"></div>
                    </div>
                  <p style="position: relative; left: 135px;top: 1px; font-size: 20px; cursor: pointer"> <a class="link" style="text-decoration: none; color: #848484" href="">x</a></p>

                  </div>
                  <div class="type_content">
                    <div class="reg">
                      <form action="registration.php" method="POST">
                      <input name="fio" type="text" class="input" placeholder="ФИО">
                      <input name="login" type="login" class="input" placeholder="Логин">
                      <input name="email" type="email" class="input" placeholder="Электронная почта">
                      <input name="password" type="password" class="input" placeholder="Пароль">
                      <input name="try_password" type="password" class="input" placeholder="Повтор пароля">
                      <button type="submit" class="btn col-lg-3 offset-4">Регистрация</button>
                      </form>
                      
                    </div>
                    <form action="">
                      <div class="log">
                        <input type="text" class="input" placeholder="Логин">
                        <input type="text" class="input" placeholder="Пароль">
                        <button class="btn col-lg-3 offset-4">Войти</button>
                      </div>

                    </form>
                    
                </div>
                </div>
                
              </div>
          </div>
      </div>
      </div>

    <script src="https://unpkg.com/vue@next"></script>
    <script src="app.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-2.0.2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
        //Скрыть PopUp при загрузке страницы    
        $("#popup1").hide();
        SetRegistrationView();
        });
        function PopupLogin(){
          PopUpShow();
          SetLoginView();
        }
        //Функция отображения PopUp
        function PopUpShow(){
            $("#popup1").show();
            $(".b-popup").css("display", "block");
        }
        //Функция скрытия PopUp
        function PopUpHide(){
            $("#popup1").hide();
        }
        $(function () {
        var target = null;
          $(':input').focus(function() {
            target = $(this).val();
          });
          // НЕ ПЕРЕНОСИТЕ ЭТОТ ФРАГМЕНТ В SUBMIT
        
        // $('form').submit( function () {
          
        //   if ( target == 'save' ) {
        //     alert('[Save] is pressed')
        //   } else if ( target == 'delete' ){
        //     alert('[Delete] is pressed')
        //   } else {
        //     alert('{unknown button is pressed}')
        //   }
        //   return false;
        // });
      });
          function SetRegistrationView(){
                $(".log").hide();
                $(".reg").show();
                $("#showreg").css("color", "#D86D00");
                $("#showlog").css("color", "#848484");
                
            }
          function SetLoginView(){
              $(".log").show();
              $(".reg").hide();
              $("#showlog").css("color", "#D86D00");
              $("#showreg").css("color", "#848484");
          }
  
    </script>
</body>

</html>
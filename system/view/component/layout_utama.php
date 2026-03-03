<!DOCTYPE html>
<html lang="en" style="background: url('images/bakground_callrecall.png');background-size: 100%;max-height: 100%;">
<head>
<meta charset="utf-8"/>
<title></title>
<meta name="description" content="mobile first, app, web app, responsive, admin dashboard, flat, flat ui"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<link rel="stylesheet" type="text/css" href="css/app-css.v1.css"/>

</head>
<body >

  <!-- header -->
  <header style="color: #ffffff; background-color: #1d2d3d;" id="header" class="navbar navbar-sm bg bg-black">
      <a style="color: #ffffff;" class="navbar-brand" href="#"><?php echo $_SESSION['lokasi']?> | Layanan <?php echo $_SESSION['layanan']?> | Loket <?php echo $_SESSION['loket'] ?></a>
      <a href="<?php echo __BASEURL__."auth/logout" ?>" class="navbar-brand" style="float: right; color: #ffffff;">Logout</a>
  </header>
  <!-- / header -->

  <section id="content">
      <div class="row-fluid">
          <div class="span4 offset4 m-t-large">
            <section class="panel">

                <div class="padder">
                    <p style="text-align: center;font-size: 55px;"><?php echo $_SESSION['layanan'] ?> <span id="counter"><?php echo $counter ?></span></p>
                    <div class="line line-dashed"></div>
                    <div onclick="call()" class="btn btn-facebook btn-block m-b-small">CALL</div>
                    <div onclick="reCall()" class="btn btn-twitter btn-block">RECALL</div>
                    <br />
                    <p style="font-size: 35px;text-align: center;">Sisa : <span id="sisa"><?php echo $sisa ?></span></p>
                </div>
            </section>
          </div>
      </div>
  </section>

  <footer id="footer" >
  <div class="text-center padder clearfix">
      <p>
        <small style="color: white;font-weight: bold;">QUEUESYSTEM&reg; - EDP_IPT2015</small><br/>
		<small style="color: white;font-weight: bold;"><?php echo $_SESSION['versi']?></small><br/><br/>
        <?php /*
        <a href="#" class="btn btn-mini btn-circle btn-white"><i class="icon-twitter"></i></a>
        <a href="#" class="btn btn-mini btn-circle btn-white"><i class="icon-facebook"></i></a>
        <a href="#" class="btn btn-mini btn-circle btn-white"><i class="icon-google-plus"></i></a>
        */ ?>
      </p>
    </div>
  </footer>

  <script src="js/jquery.min.js"></script>

  <script>
    var jeda1 = 0;
    var jeda2 = 0;
    //var sisa = '';
    function call(){
        if(jeda1 == 0 ){
            jeda1 = 1;
            $.post( "<?php echo __BASEURL__ ?>web/call", function( data ) {
                if(data!=0)
                    $("#counter").html(data);
            }).done(function(){
                updateSisa(sisa);
            });
            setTimeout(
                function(){ jeda1 = 0; }, 1000
            );
        }

    }

    function reCall(){
        if(jeda2 == 0 ){
            jeda2 = 1;
            $.post( "<?php echo __BASEURL__ ?>web/reCall", function( data ) {
              $("#counter").html(data);
            }).done(function(){
                updateSisa(sisa);
            });
            setTimeout(
                function(){ jeda2 = 0; }, 1000
            );
        }
    }

    function updateSisa(){
        $.post( "<?php echo __BASEURL__ ?>web/cekSisa/", function( data ) {
              $("#sisa").html(data);
              //sisa = data;
        });
    }
  </script>
</body>
</html>
<style>
.btn-facebook{
    background: #015d6c;
}
.btn-facebook:hover{
    background: #015f6f;
}
.btn-facebook,.btn-twitter {
    padding: 30px;
    font-size: 35px;
}
.btn-facebook:active, .btn-twitter:active{
    background: #C4220B;
}

</style>

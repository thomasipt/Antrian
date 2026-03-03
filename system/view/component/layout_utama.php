<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title></title>

<link rel="stylesheet" href="css/bootstrap.min.css"/>

<style>
html, body {
    height: 100%;
    margin: 0;
}

body {
  background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
  font-family: system-ui, -apple-system, Segoe UI, Roboto, sans-serif;
  display: flex;
  flex-direction: column;
}
.main-wrapper {
    flex: 1;
    display: flex;
    align-items: flex-start;
    justify-content: center;
    padding-top: 20px;
}
.topbar {
    background: rgba(0,0,0,0.6);
    backdrop-filter: blur(6px);
    color: #fff;
    padding: 12px 50px;
    display:flex;
    justify-content: space-between;
    align-items:center;
}

.glass-card {
    background: rgba(255,255,255,0.15);
    backdrop-filter: blur(25px);
    -webkit-backdrop-filter: blur(15px);
    border: 1px solid rgba(255,255,255,0.2);
    border-radius: 20px;
    padding: 0px 30px 30px 30px; /* atas lebih kecil */
    width: 100%;
    max-width: 420px;
    text-align:center;
    color: #fff;
    box-shadow: 0 20px 40px rgba(0,0,0,0.4);
}

.glass-card > *:first-child {
    margin-top: 0;
}

@keyframes fadeInUp {
    from { opacity:0; transform: translateY(20px); }
    to { opacity:1; transform: translateY(0); }
}

.counter {
    font-size: 100px;
    font-weight: 600;
    margin: 5px 0 15px 0;
    letter-spacing: 2px;
    line-height: 1;
}

.action-btn {
    width:100%;
    padding:20px;
    font-size:28px;
    border-radius:12px;
    margin-bottom:15px;
    transition: all .2s ease;
}

.action-btn:hover {
    transform: translateY(-3px);
}

.footer-text {
    color:#fff;
    text-align:center;
    padding:10px 0;
    font-weight:600;
}

.queue-label {
    display: inline-block;
    padding: 6px 18px;
    margin-top: 0;
    margin-bottom: 0px;
    font-size: 30px;
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
    background: rgba(255,255,255,0.2);
    border: 1px solid rgba(255,255,255,0.3);
    border-radius: 30px;
    backdrop-filter: blur(8px);
}
</style>

</head>
<body>

<div class="topbar">
    <div>
        <?php echo $_SESSION['lokasi'] ?>
        <!-- Layanan <?php echo $_SESSION['layanan'] ?> | -->
        <!-- Loket <?php echo $_SESSION['loket'] ?> -->
    </div>
    <div>
        <a href="<?php echo __BASEURL__ . "auth/logout" ?>" style="color:#fff;text-decoration:none;">Logout</a>
    </div>
</div>

<div class="main-wrapper">
    <div class="glass-card col-md-4">

        <div class="counter">
            <div class="queue-label">
              Nomor Antrian
            </div>
            <!-- <?php echo $_SESSION['layanan'] ?> -->
            <span id="counter"><?php echo $counter ?></span>
        </div>

        <button onclick="call()" class="btn btn-success action-btn">
            CALL
        </button>

        <button onclick="reCall()" class="btn btn-info action-btn">
            RECALL
        </button>

        <div style="font-size:30px;margin-top:15px;">
            Sisa : <span id="sisa"><?php echo $sisa ?></span>
        </div>

    </div>
</div>

<div class="footer-text">
    QUEUESYSTEM® - EDP_IPT2015<br/>
    <?php echo $_SESSION['versi'] ?>
</div>

<script src="js/jquery.min.js"></script>

<script>
var jeda1 = 0;
var jeda2 = 0;

function call(){
    if(jeda1 == 0 ){
        jeda1 = 1;
        $.post("<?php echo __BASEURL__ ?>web/call", function(data){
            if(data!=0)
                $("#counter").html(data);
        }).done(function(){
            updateSisa();
        });
        setTimeout(function(){ jeda1 = 0; }, 1000);
    }
}

function reCall(){
    if(jeda2 == 0 ){
        jeda2 = 1;
        $.post("<?php echo __BASEURL__ ?>web/reCall", function(data){
            $("#counter").html(data);
        }).done(function(){
            updateSisa();
        });
        setTimeout(function(){ jeda2 = 0; }, 1000);
    }
}

function updateSisa(){
    $.post("<?php echo __BASEURL__ ?>web/cekSisa/", function(data){
        $("#sisa").html(data);
    });
}

// Auto refresh setiap 3 detik
setInterval(function(){
    updateSisa();
}, 3000);

function updateCounter(){
    $.post("<?php echo __BASEURL__ ?>web/getLastCounter", function(data){
        $("#counter").html(data);
    });
}

setInterval(updateCounter, 3000);
</script>

</body>
</html>

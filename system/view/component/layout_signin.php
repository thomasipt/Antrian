<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>Login Antrian</title>
<meta name="description" content="mobile first, app, web app, responsive, admin dashboard, flat, flat ui"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<link rel="stylesheet" type="text/css" href="css/app-css.v1.css"/>

</head>
<body>

  <!-- header -->
  <header id="header" class="navbar navbar-sm bg bg-black">
    <a class="navbar-brand" href="#">Login Antrian</a>
  </header><!-- / header -->
  
  <section id="content">
      <div class="row-fluid">
          <div class="span4 offset4 m-t-large">
            <section style="margin-top: 100px;" class="panel">
                <header class="panel-heading text-center">Log in</header>
                <form method="post" class="padder">
                    <label for="layanan" class="control-label"><strong>Layanan</strong></label>
                    <input required="required" name="layanan" type="text" id="layanan" class="span12"/>
                    <br /><br />    
                    <label for="loket" class="control-label"><strong>Loket</strong></label>
                    <input required="required" name="loket" type="text" id="loket" class="span12"/>
                    <br /><br />
                    <label for="password" class="control-label"><strong>Password</strong></label>
                    <input required="required" name="password" type="password" id="password" class="span12"/>
                    <input type="submit" class="btn btn-info" style="float: right;" value="Sign in" />
                    <div style="clear: both;"></div>
                </form>
            </section>
          </div>
      </div>
  </section>
  
  <footer id="footer">
  <div class="text-center padder clearfix">
      <p>
       
      </p>
    </div>
  </footer>
  
  
</body>
</html>

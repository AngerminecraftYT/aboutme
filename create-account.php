
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />

      <meta property="og:title" content="Minecraft Tools" /> 
      <meta property="og:description" content="Tools for Minecraft!" />
      <meta name="twitter:card" content="summary_large_image" />
      <meta property="og:type" content="website" />
      <meta name="generator" content="Minecraft.Tools" />

      <meta property="og:locale" content="en_US" />
      <meta http-equiv="content-language" content="en" />

      <meta property="og:site_name" content="Minecraft.Tools" />
      <meta itemprop="name" content="Minecraft.Tools"/>
      <meta property="og:url" content="http://minecraft.tools/" /> 
      <meta property="og:image" content="http://minecraft.tools/css/img/logo.png" />
<title>Minecraft Tools: Account</title>
<meta name="description" content="Account on Minecraft Tools" />
  <link rel="stylesheet" type="text/css" href="css/min-da232d78aa81.css?1594097883" />
  <link rel="stylesheet" type="text/css" href="css/min-a6420929183c.css?1570939704" />
  <link rel="stylesheet" type="text/css" href="common-css/minecraft_styles.css" />  <link rel="stylesheet" href="js/alert/min-2f0bab8cf077.css?1570940960" />
  <!--<link rel="stylesheet" href="js/alert/sweetalert2.min.css" />-->
  <!--<link rel="stylesheet" href="js/alert/swal-forms.css">-->

  <meta name="viewport" content="width=device-width" />

  <script type="text/javascript" src="js/jquery.js"></script>  <script type="text/javascript" src="js/min-90946b3a2874.js?1587917840"></script>
  <script type="text/javascript" src="js/min-39fb14bc00a4.js?1570939703"></script>

  <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />

  </head>
<body class="en width">


        <!-- POPUP LOGIN -->  
      <a href="#x" class="login_overlay" id="se_connecter"></a>
      <div class="box">
        <form id="form_login" action="" method="POST">
          <p class="seconnecter">
            <a href="#close" class="close" title="Fermer"></a> Log in          </p>
          <input name="login" class="login-input" placeholder="Login" type="text"><br>
          <input name="password" class="login-input" placeholder="Password" type="password"><br>
          <div id="buttons">  
            <input value="Log in" class="connexion" type="submit"><br>
            <a id="mdp" href="password.php">Forget password?</a>
            <br><br>
            <a href="create-account.php" class="creer">Create my account</a>
          </div>

          <div class="error-login" id="error-login">
            Incorrect login or password          </div>
        </form>
      </div>
      <script>
        $('#form_login').submit(function(event)
        {
          $('#error-login').html("");
          $('#error-login').hide();
          $.post(
              "ajax/login.php",
              $(this).serialize()
            )
            .done(function(data)
            {
              if (data.success)
              {
                window.location.href = "my-content.php";
              }
              else
              {
                $('#error-login').html(data.error);
                $('#error-login').show();
              }
            });

          try { event.preventDefault(); } catch(err) {}
          return false;
        });

        $('.logout').click(function()
        {
          $.post(
            "ajax/login.php",
            { "disconnect": "" }
          )
          .done(function(data)
          {
            if (data.success)
            {
              window.location.href = "";
            }
          });
        });
      </script>
      <!-- END OF LOGIN  -->
  

  <div id="header">
    <div id="cadre-logo">
      <a href="./"><div class="logo"></div></a>
    </div>

  <div id="login">
  <a class="myaccount" href="#se_connecter" id="logintop">Log in</a>  </div>


  <div id="lang">
    <a href="/en/create-account.php" class="selected"><span class="en"></span></a>    <a href="/fr/create-account.php" class=""><span class="fr"></span></a>    <a href="/de/create-account.php" class=""><span class="de"></span></a>    <a href="/it/create-account.php" class=""><span class="it"></span></a>    <a href="/ru/create-account.php" class=""><span class="ru"></span></a>    <a href="/es/create-account.php" class=""><span class="es"></span></a>  </div>
    
</div><!-- fin #header -->

<div id="shared-gallery">
  <a href="public-gallery.php">Community Content</a>
</div>
<div id="sidebar">
  <ul>
<li><a href="skin.php"><img class='block-small tooltip' src='img/blocs/144_03.png' alt='&lt;span style=&#039;color: #FFFF55; &#039;&gt;Player Head&lt;/span&gt;&lt;br&gt;' /> Skin stealer</a></li>
<li><a href="crafting.php"><img class='block-small tooltip' src='img/blocs2/058-boite a outils.png' alt='Crafting Table&lt;br&gt;' /> Crafting</a></li>
<li class="sub"><a href="custom-crafting.php"><img class='block-small tooltip' src='img/blocs2/058-boite a outils.png' alt='Crafting Table&lt;br&gt;' /> Custom crafting</a></li>
<li><a href="flat.php"><img class='block-small tooltip' src='img/blocs2/002-pelouse.png' alt='Grass Block&lt;br&gt;' /> Flat world</a></li>
<li><a href="enchant.php"><img class='block-small tooltip' src='img/blocs/116.png' alt='Enchanting Table&lt;br&gt;' /> Enchant calculator</a></li>
<li><a href="armor.php"><img class="block-small" src="css/img/sidebar/armor_color.png" /> Armor color</a></li>
<li><a href="firework.php"><img src='css/img/pixel.png' width='32' height='32' class='tooltip img2-item-small' style='background-position: -288px -384px;' alt='Firework Rocket&lt;br&gt;' /> Firework crafting</a></li>
<li><a href="banner.php"><img class='block-small tooltip' src='img/blocs/banner_white.png' alt='White Banner&lt;br&gt;' /> Banners crafting</a></li>
<li class="sub"><a href="banner-galery.php"><img class='block-small tooltip' src='img/blocs/banner_white.png' alt='White Banner&lt;br&gt;' /> Banners gallery</a></li>
<li><a href="shield.php"><img class='block-small tooltip' src='img/blocs/442.png' alt='Shield&lt;br&gt;' /> Shield crafting</a></li>
<li class="sub"><a href="shield-galery.php"><img class='block-small tooltip' src='img/blocs/442.png' alt='Shield&lt;br&gt;' /> Shield gallery</a></li>
<li><a href="custom.php"><img class='block-small tooltip' src='img/blocs2/001_00.png' alt='Stone&lt;br&gt;' /> Custom world</a></li>
<li><a href="spawn.php"><img class='block-small tooltip' src='img/blocs/144_04.png' alt='&lt;span style=&#039;color: #FFFF55; &#039;&gt;Creeper Head&lt;/span&gt;&lt;br&gt;' /> Mobs Generator</a></li>
<li><a href="loots.php"><img class='block-small tooltip' src='img/blocs/054.png' alt='Chest&lt;br&gt;' /> Loot tables</a></li>
<li><a href="potion.php"><img class="block-small" src="css/img/sidebar/potion.png" /> Custom potions</a></li>
<li><a href="beacon-color.php"><img class='block-small tooltip' src='img/blocs2/138.png' alt='&lt;span style=&#039;color: #55FFFF; &#039;&gt;Beacon&lt;/span&gt;&lt;br&gt;' /> Beacon color</a></li>
<li><a href="coordinate-calculator.php"><img src='css/img/pixel.png' width='32' height='32' class='tooltip img2-item-small' style='background-position: -384px -96px;' alt='Map&lt;br&gt;' /> Coordinate Calculator</a></li>
<li><a href="selector.php"><img class='block-small tooltip' src='img/blocs/144_03.png' alt='&lt;span style=&#039;color: #FFFF55; &#039;&gt;Player Head&lt;/span&gt;&lt;br&gt;' /> Target Selector</a></li>
<li><a href="index-text-generator.php"><img src='css/img/pixel.png' width='32' height='32' class='tooltip img2-item-small' style='background-position: -352px -96px;' alt='Book&lt;br&gt;' /> Text generators</a></li>
<li class="sub"><a href="color-code.php"><img src='css/img/pixel.png' width='32' height='32' class='tooltip img2-item-small' style='background-position: -480px -192px;' alt='Lime Dye&lt;br&gt;' /> Color codes</a></li>
<li class="sub"><a href="json_text.php"><img src='css/img/pixel.png' width='32' height='32' class='tooltip img2-item-small' style='background-position: -352px -352px;' alt='Book and Quill&lt;br&gt;' /> JSON Text Component</a></li>
<li class="sub"><a href="https://colorize.fun/en/minecraft"><img src='css/img/pixel.png' width='32' height='32' class='tooltip img2-item-small' style='background-position: -512px -256px;' alt='Blue Dye&lt;br&gt;' /> Styled Text</a></li>
<li class="sub"><a href="title.php"><img src='css/img/pixel.png' width='32' height='32' class='tooltip img2-item-small' style='background-position: -320px -96px;' alt='Paper&lt;br&gt;' /> Title generator</a></li>
<li class="sub"><a href="sign.php"><img src='css/img/pixel.png' width='32' height='32' class='tooltip img2-item-small' style='background-position: -320px -64px;' alt='Oak Sign&lt;br&gt;' /> Sign generator</a></li>
<li class="sub"><a href="book.php"><img class='block-small tooltip' src='img/blocs2/enchant/x128/387.gif' alt='Written Book&lt;br&gt;' /> Book editor</a></li>
<li class="sub"><a href="tellraw.php"><img src='css/img/pixel.png' width='32' height='32' class='tooltip img2-item-small' style='background-position: -352px -352px;' alt='Book and Quill&lt;br&gt;' /> /tellraw editor</a></li>
<li class="sub"><a href="motd.php"><img src='css/img/pixel.png' width='32' height='32' class='tooltip img2-item-small' style='background-position: -256px -448px;' alt='Knowledge Book&lt;br&gt;' /> Custom server MOTD</a></li>
  </ul>
</div>
<div id="content" class='page-form'>

  <div class="intro">
    <h1>Create account</h1>
    <h2>Create an account to save your content and creation made on Minecraft Tools</h2>
  </div>


  <div class="big-form">

    <form action="" method="POST">

      <label for="name">Your Minecraft name</label>
      <input type="text" name="name" value="">
            <br><br>

      <label for="email">Email</label>
      <input type="email" name="email" value="">
            <br><br>

      <label for="password">Password</label>
      <input type="password" name="password" value="">  
      
      <input type="submit" class="bouton" value="Create my account">

    </form>

  </div>


</div><!-- fin #content -->

<div id="footer">
  <p class="copy">© Minecraft Tools: Tools for Minecraft crafted by a Minecraft lover ❤. <a href="credit.php">Credits</a> -- <a href="contact.php">Contact</a> &gt;&gt; <a href="news.php">News & Update</a> &lt;&lt;</p>
  <p>Help us to <a href="site_translation.php">translate Minecraft.tools</a> !</p>
  <p>"Minecraft"™ is a trademark of Mojang Synergies AB. We are not affiliate with Mojang.</p>
  </div>
<script src="js/alert/sweet-alert.min.js"></script>
<script src="js/alert/min-b836f943d1a2.js?1563289934"></script>
<script src="js/min-8a8cc8d6792f.js?1563289619"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-21783770-3', 'auto');
  ga('send', 'pageview');
</script>

<script>
  var sweetalert_button_text_ok = 'Ok';
  var sweetalert_button_text_cancel = 'Cancel';
  var sweetalert_copy_success_title = 'Copy';
  var sweetalert_copy_success_message = 'The command has been copied successfully :)';
  var sweetalert_copy_failled_title = 'Copy';
  var sweetalert_copy_failled_message = 'The copy of the command has failled :-(';
</script>


</body>
</html>

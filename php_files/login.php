
<title>Sign In</title>
<!-- import jquery -->
<script type="text/javascript" src="JavaScript_files\jquery.js"></script>
<!-- main css for the page -->
<link rel="stylesheet" href="css_files/login.css">
<!-- Bootstrap css -->
<link rel="stylesheet" type="text/css" href="css_files\Bootstrap_css\bootstrap.min.css">


<section id="signIn"> <!-- sing in form pop-pop -->
    <script type="text/javascript">$("#signIn").hide();</script>
    <div id="signBg"></div> <!-- Blur the background -->
    <div id="errors"></div>
    <div id="signForm"> <!-- inner container for the form -->
        <button id="back">&#10140</button>
        <button id="close">&#10006</button>
        <div class="row" style="justify-content: center;"> <!-- name and logo -->
          <img src="pictures\logoNew.jpeg" id="logoImg" class="col-lg-2" > 
          <span id="resName" class="col-lg-2">MyRes</span>
        </div>
        <form method="post">  <!-- sign in form -->
          <!-- email and next button container -->
          <div id="email_next">
            <i class="fa fa-user icon"></i>
            <input type="text" class="signInput" name="email" id="email" required placeholder="Email or usernanme"></input><br>
            <input type="button" id="next" class="signBtn" value="Next">
          </div>
          <!-- password and signIn button -->
          <div id="pass_submit">
            <div id="email_show"></div> <!-- display email -->
            <i class="fa fa-lock icon"></i>
            <input type="text" class="signInput" id="password" placeholder="Password" required><br>
            <input type="button" id="submit" class="signBtn" value="Sign In">
          </div>  
          <div class="row" style="margin-top: 20px"> <!-- separator -->
            <hr class="col-lg-5 col-md-5 col-sm-5">
            <span class="col-lg-2 col-md-2 col-sm-2">or</span>
            <hr class="col-lg-5 col-md-5 col-sm-5">
          </div>
          <a href="php_files\registration.php" id="signUp">Sign Up</a>
        </form>
    </div>
</section>

<script type="text/javascript" src="JavaScript_files/login.js"></script>
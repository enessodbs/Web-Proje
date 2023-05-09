<html>
    <head>  
        <meta charset="utf-8">
        <meta name="title" content="The Witcher">
        <meta name=”description” content="The Witcher Introduction">
        <meta name="keywords" content="Witcher, Wild Hunt, ASSASSINS OF KING">
        <meta name="author" content="RedLine Software Company">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>The Witcher</title>
        
    
        
   

        
        <script src="https://kit.fontawesome.com/16b0294914.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <script src="https://kit.fontawesome.com/07ff1ef13a.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Open+Sans:wght@800&display=swap" rel="stylesheet">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    
        <style>
            #menu{
    height: 80px;
    padding: 0 20px;
}

#logo{
    font-size: 30px;
    line-height: 80px;
    float: left;
}

nav{
    float: right;
    line-height: 80px;
}

nav a:link{
    text-decoration: none;
    margin-right: 10px;
    
}

  .main-header {
      background-color: black;
      height: 80px;
      position: fixed;
      z-index: 12;
      width: 100%;
      top: 0;
  }
  
  .main-header .logo {
      float: left;
      line-height: 80px;
      padding-left: 60px;
  }
  
  .main-header .logo a {
      font-size: 36px;
      text-transform: uppercase;
      font-weight: 800;
      color: #fff;
  }
  .main-header .logo a em {
      font-style: normal;
      color: red;
  }
  
  .main-menu {
      float: right;
      padding-right: 60px;
  }
  
  .main-menu li {
      display: inline-block;
      line-height: 79px;
      margin-left: 15px;
      position: relative;
  }
  

  .main-menu li a {
      padding: 10px 15px;
      font-size: 13px;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      font-weight: 700;
      color: #fff;
      border: 2px solid transparent;
      transition: all 0.5s;
  }
  
  .main-menu li.has-submenu a:after {
      content: '\f107';
      font-family: "FontAwesome";
      margin-left: 5px;
  }
  
  .main-menu li.has-submenu ul li a:after {
      display: none;
  }
  
  .main-menu li .sub-menu {
      position: absolute;
      width: 170px;
      background-color: black;
      opacity: 0;
      visibility: hidden;
      transition: all 0.5s;
  }
  
  .main-menu li:hover .sub-menu {
      opacity: 1;
      visibility: visible;
  }
  
  .main-menu li .sub-menu li {
      display: block;
      line-height: 20px;
      margin-left: 0px;
      margin-bottom: 15px;
      padding-bottom: 15px;
  }
  
  .main-menu li .sub-menu li:first-child {
      padding-top: 15px;
  }
  
  .main-menu li .sub-menu li:last-child {
      margin-bottom: 0px;
      border-bottom: none;
  }
  
  .main-menu li .sub-menu li a {
      font-size: 12px;
      font-weight: 500;
      padding: 0px 5px;
      letter-spacing: 0.5px;
      border: none;
      transition: all 0.5s;
  }
  
  .main-menu li .sub-menu li a:hover {
      color: red;
      border: none;
  }
  
  .main-nav li:hover a,
  .main-nav li.active a {
      border: 2px solid red;
  }
  


        </style>

    </head>

    <body>
         
        <header class="main-header clearfix" role="header">
            <div class="logo">
            <a href="index.php"><em>The</em> Witcher</a>
            </div>
            
            <nav id="menu" class="main-nav" role="navigation">
                <ul class="main-menu">
                    <li><a href="index.php">Home</a></li>
                    <li class="has-submenu"><a href="">Games</a>
                    <ul class="sub-menu">
                        <li><a href="witcher-1.php">ENHANCED EDITION</a></li>
                        <li><a href="witcher-2.php">ASSASSINS OF KING</a></li>
                        <li><a href="witcher-3.php">WILD HUNT</a></li>
                    </ul>
                    </li>
                    <li><a href="news.php">News</a></li>
                    
                    <li><a href="media.php">Media</a></li>
                    <li><a target="_blank" href="karakter.php">Characters</a></li>
                    <li class="has-submenu"><a href="">Contact Us</a>
                    <ul class="sub-menu">
                        <li><a target="_blank" href="our-team.php">Our Team</a></li>
                        <li><a target="_blank" href="join-our-team.php">Join Our Team</a></li>
                        <li><a target="_blank" href="contact-us.php">Contact</a></li>
                    </ul>
                    </li>
                </ul>
            </nav>
        </header>
    </body>
</html>
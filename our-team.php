<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="css/scroll-bar.css">
<style>
  *{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body{
  background: linear-gradient(135deg, #0e0e0e, #121010ca);
}

a {
  text-decoration: none;
}

.row{
  
  display: flex;
  flex-wrap: wrap;
  padding: 2em 1em;
  text-align: center;
}

.column{
  width: 100%;
  
  padding: 0.5em 0;
}

h1{
  width: 100%;
  text-align: center;
  font-size: 3.5em;
  color: white;
  margin-top: 80px;
}

.card{
  box-shadow: 0 0 2.2em rgba(25, 0, 58, 0.1);
  padding: 3.5em 1em;
  border-radius: 0.6em;
  
  cursor: pointer;
  transition: 0.3s;
  background-color: #ffffff;
  margin: 20px 60px 60px 60px ;
}

.card .img-c{
  width: 8em;
  height: 8em;
  background-color: #fff;
  padding: 0.5em;
  border-radius: 50%;
  margin: 0 auto 2em auto;
}

.card img{
  width: 100%;
  border-radius: 50%;
}

.card h3{
  font-weight: 500;
}

.card p{
  font-weight: 300;
  text-transform: uppercase;
  margin: 0.5em 0 2em 0;
  letter-spacing: 2px;
}

.icons{
  width: 50%;
  min-width: 100px;
  margin: auto;
  display: flex;
  justify-content: center;
}

.icons i {
  color: red;
}

.icons:hover, .icons i:hover{
  color: #fff;
}

.card a{
  text-decoration: none;
  color: inherit;
  font-size: 1.4em;
}


.card:hover{
  background: linear-gradient(gray , black);
  color: white;


}

.card:hover .img-c{
  transform: scale(1.15);
}

@media screen and (min-width: 768px){
  section{
      padding: 1em 7em;
  }
}

@media screen and (min-width: 992px){
  section{
      padding: 1em;
  }
  .card{
      padding: 5em 1em;
  }
  .column{
      flex: 0 0 33.33%;
      max-width: 33.33%;
  }
}
</style>
</head>
<body>

<?php include 'nav.php' ?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="wiewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="ourteam.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Open+Sans:wght@800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/41215a9027.js" crossorigin="anonymous"></script>

        
        
    </head>
    <body>
  
    
        <section>
            <div class="row">
                <h1>Our Team</h1>
            </div>

            <div class="row">
                    <!--1.ci kişi--> 
                <div class="column">
                    <div class="card">
                            <div class="img-c">
                                    <img src="img/guapo.png">
                            </div>
                            <h3>Bekir Nadir</h3>
                            <p>Student</p>
                            <div class="icons">
                                <a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/in/bekir-nadir-dursun-863914240/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                                <a href="https://github.com/" target="_blank"><i class="fa-brands fa-github"></i></a>
                                
                            </div>
                        </div>
                    </div>

                                        <!--2.ci kişi--> 
                <div class="column">
                    <div class="card">
                            <div class="img-c">
                                    <img src="img/enes.jpg">
                            </div>
                            <h3>Enes Odabaş</h3>
                            <p>Student</p>
                            <div class="icons">
                                <a href="https://www.instagram.com/enessodbs/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                <a href="https://www.linkedin.com/in/enes-odabaş-138b07202/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                                <a href="https://github.com/enessodbs" target="_blank"><i class="fa-brands fa-github"></i></a>
                                
                            </div>
                        </div>
                    </div>


                    
                                        <!--3.ci kişi--> 
                <div class="column">
                    <div class="card">
                            <div class="img-c">
                                    <img src="img/user.png">
                            </div>
                            <h3>Faik Mert Birdal</h3>
                            <p>Student</p>
                            <div class="icons">
                                <a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                                <a href="https://www.linkedin.com" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                                <a href="https://github.com/" target="_blank"><i class="fa-brands fa-github"></i></a>
                                
                            </div>
                        </div>
                    </div>

                    <div class="column">
                    <div class="card">
                            <div class="img-c">
                                    <img src="img/harun.jpg" style= "height: 100%;">
                            </div>
                            <h3>Harun Ramazan Duran</h3>
                            <p>Student</p>
                            <div class="icons">
                                <a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/in/bekir-nadir-dursun-863914240/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                                <a href="https://github.com/" target="_blank"><i class="fa-brands fa-github"></i></a>
                                
                            </div>
                        </div>
                    </div>

                                        <!--2.ci kişi--> 
                <div class="column">
                    <div class="card">
                            <div class="img-c">
                                    <img src="img/user.png">
                            </div>
                            <h3>Görkem Özgür</h3>
                            <p>Student</p>
                            <div class="icons">
                                <a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                                <a href="https://www.linkedin.com" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                                <a href="https://github.com/" target="_blank"><i class="fa-brands fa-github"></i></a>
                                
                            </div>
                        </div>
                    </div>


                    
                                        <!--3.ci kişi--> 
                <div class="column">
                    <div class="card">
                            <div class="img-c">
                                    <img src="img/user.png">
                            </div>
                            <h3>Gönül Özbudak</h3>
                            <p>Student</p>
                            <div class="icons">
                                <a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                                <a href="https://www.linkedin.com" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                                <a href="https://github.com/" target="_blank"><i class="fa-brands fa-github"></i></a>
                                
                            </div>
                        </div>
                    </div>

                    <div class="column">
                    <div class="card">
                            <div class="img-c">
                                    <img src="img/user.png">
                            </div>
                            <h3>Ahmet Panka</h3>
                            <p>Student</p>
                            <div class="icons">
                                <a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                                <a href="https://www.linkedin.com" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                                <a href="https://github.com/" target="_blank"><i class="fa-brands fa-github"></i></a>
                                
                            </div>
                        </div>
                    </div>

                    <div class="column">
                    <div class="card">
                            <div class="img-c">
                                    <img src="img/emir.jpg">
                            </div>
                            <h3>Emir Meydan</h3>
                            <p>Student</p>
                            <div class="icons">
                                <a href="https://instagram.com/emirmydn?igshid=MWM2YjBjM2Q=" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                <a href="https://www.linkedin.com" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                                <a href="https://github.com/" target="_blank"><i class="fa-brands fa-github"></i></a>
                                
                            </div>
                        </div>
                    </div>

                    <div class="column">
                    <div class="card">
                            <div class="img-c">
                                    <img src="img/user.png">
                            </div>
                            <h3>Tuğçe Rabia Parlak</h3>
                            <p>Student</p>
                            <div class="icons">
                                <a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                                <a href="https://www.linkedin.com" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                                <a href="https://github.com/" target="_blank"><i class="fa-brands fa-github"></i></a>
                                
                            </div>
                        </div>
                    </div>






                </div>

            
        </section>

    </body>
    </html>     

<?php include 'footer.php' ?>

</body>
</html>

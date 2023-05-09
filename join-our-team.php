<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="wiewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/join-our-team.css">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <title>Join Our Team</title>
    </head>
    <body>
        <script src="https://kit.fontawesome.com/16b0294914.js" crossorigin="anonymous"></script>
        <div class="container">
            <div class="heading">Join Our Team</div>
            <form method="post" action="#" onsubmit="myFunction()">
                <div class="card-details">
                    <div class="card-box">
                        <span class="details">Name</span>
                        <input type="text" placeholder="Plase Enter Your Name" required>
                    </div>
                    <div class="card-box">
                        <span class="details">Surname</span>
                        <input type="text" placeholder="Plase Enter Your Name" required>
                    </div>
                    <div class="card-box">
                        <span class="details">Email</span>
                        <input type="email" placeholder="Plase Enter Your Email" required>
                    </div>
                    <div class="card-box">
                        <span class="details">Phone Number</span>
                        <input type="tel" id="phone" name="phone" placeholder="0111-111-1111" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" placeholder="Plase Enter Your Phone Number" required>
                    </div>
                    <div class="card-box">
                        <span class="details"><i class="fa-brands fa-facebook fa-2x"></i></span>
                        <input type="text" placeholder="Facebook">
                    </div>
                    <div class="card-box">
                        <span class="details"><i class="fa-brands fa-twitter fa-2x"></i></span>
                        <input type="text" placeholder="Twitter">
                    </div>
                    <div class="card-box">
                        <span class="details"><i class="fa-brands fa-instagram fa-2x"></i></span>
                        <input type="text" placeholder="İnstagram">
                    </div>
                    <div class="card-box">
                        <span class="details"><i class="fa-brands fa-linkedin fa-2x"></i></span>
                        <input type="text" placeholder="LinkedIn">
                    </div>


              
                   
                    
                </div>

                <div class="circal-form ">
                    <span class="circal-title">Gender</span>
                    <div class="category">
                        <input type="radio" name="gender" required>Male
                        <input type="radio" name="gender" required>Female
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="submit">
                </div>
            </form>
        </div>

        <script>
            function myFunction() {
            alert("Formunuz Başarıyla Gönderilmiştir.");
            }
        </script>

    </body>
</html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="wiewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/contact-us.css">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <title>Contact Us</title>
        <style>
            
        </style>
        
    </head>
    <body>
        <div class="container">
            <div class="heading">Contact Us</div>
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
                    <div class="card-box" >
                        <span class="details">Address</span>
                        <textarea name="Address" id="Address" cols="100" rows="4"></textarea>
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
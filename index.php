<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$servername = "localhost";
$username = "root";
$password = "";
$database = "mail";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO posts (name, email, message)
VALUES ('$username', '$email', '$message')";

if (mysqli_query($conn, $sql)) {

} 


mysqli_close($conn);

}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Radim Pokorný</title>
        <meta name="description" content="Radim Pokorný - Web s portfóliem, které obsahuje grafické práce a menší herní projekty. Dále zde naleznete krátké stručné informace o mně."/>
        <meta name="keywords" content="programming, graphics, design, front-end, css, radim pokorný, portfolio"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Radim Pokorný"/>
        <meta name="copyright" content="Radim Pokorný"/>
        <meta name="robots" content="follow"/>
        <link rel="stylesheet" href="style.css">
        <meta name="language" content="English">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <link rel="icon" type="image/x-icon" href="favicon.ico">
    </head>
    <body>

        <div class="align-button">

            <button onclick="toggleMenu()" class="open-menu">

                <img src="menu-icon.png" alt="" id="menu-button">

            </button>

        </div>
    

        <div id="nmenu" class="navbar-menu">

            <div class="container-menu" id="cont-menu">

                <div class="menu-items">

                    <div onclick="location.href='http://www.radim-graphics.jednoduse.cz';" class="menu-item">
                        <div class="bg-item">
                            <p>Home</p>
                        </div>

                        <div class="back-color">

                        </div>
                    </div>

                    <div onclick="location.href='http://www.radim-graphics.jednoduse.cz/portfolio.html';" class="menu-item">
                        <div class="bg-item">
                            <p>Portfolio</p>
                        </div>

                        <div class="back-color">
                            
                        </div>
                    </div>

                    <div onclick="location.href='http://www.radim-graphics.jednoduse.cz/first-site/index.html';"class="menu-item">
                        <div class="bg-item">
                            <p>Old website</p>
                        </div>

                        <div class="back-color">
                            
                        </div>
                    </div>

                </div>

                <div class="creator-credit">
                    <div class="footer">
                        <div onclick="location.href='https://www.facebook.com/radim.pokorny.737/';" style="cursor:pointer;" class="icon-item">
                            <i class="fa fa-facebook"></i>
                        </div>
        
                        <div onclick="location.href='https://www.instagram.com/radimpokorny04/';" style="cursor:pointer;" class="icon-item">
                            <i class="fa fa-instagram"></i>
                        </div>
        
                        <div onclick="location.href='https://github.com/RadimPokorny';" style="cursor:pointer;" class="icon-item">
                            <i class="fa fa-github"></i>
                        </div>
        
                        <div onclick="location.href='https://steamcommunity.com/id/kingradas/';" style="cursor:pointer;" class="icon-item">
                            <i class="fa fa-steam"></i> 
                        </div>
        
                    </div>
                </div>

            </div>

        </div>


        <div id="content" class="center">



            <div class="box-center">
                <div class="background-image" style="background-image: url('1.jpg'); -webkit-mask-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0));">
                </div>  
                <div class="box">
                    <div class="box-content">

                        <div class="box-title">
                            <h1 class="">Radim Pokorný</h1>
                        </div>

                        <div class="box-paragraph">
                            <p class="">Fullstack developer</p>
                        </div> 

                    </div>
 
                </div>


            </div>

            <div class="box-center">
                <div class="background-image" style="background-image: url('2.jpg'); -webkit-mask-image: -webkit-linear-gradient(bottom, rgb(0, 0, 0, 0), rgb(0, 0, 0), rgba(255, 255, 255, 0));">
                </div> 

                <div class="card-items">

                    <div onclick="location.href='https://calendjoy.com/';" style="cursor:pointer;" class="card"> 
                        <p class="title-p">Calendjoy</p>
                        <div class="card-desc">
                            <p class="card-desc-p">Calendar app</p>
                        </div>
                    </div>

                    <div onclick="location.href='http://radim-graphics.jednoduse.cz/chat-app/pokornyradim.html';" style="cursor:pointer;" class="card"> 
                        <p class="title-p">Chat-app</p>
                        <div class="card-desc">
                            <p class="card-desc-p">Front-end model</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <div class="box-center">

            <div class="media-header">
                <p class="sm-header">Contact me:</p>
            </div>

            <div class="center-form">

                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-cm">
                    <label for="" class="username-p">Name:</label>
                    <input type="text" name="name" class="c-username">
                    <label for="" class="email-p">E-mail:</label>
                    <input type="text" name="email" class="c-email">
                    <label for="" class="message-p">Your message:</label>
                    <textarea name="message" class="message">

                    </textarea>

                    <button type="submit"class="submit">Submit</button>


                </form>

            </div>


            <div class="background-image" style="background-image: url('3.jpg'); -webkit-mask-image: -webkit-linear-gradient(bottom, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0));">
            </div> 

            



        </div>

        <div class="scroll-center">

            <div class="scroll-item">

                <i id="scroll-button" class="fa fa-arrow-down"></i>

            </div>

        </div>


        <script class="" src="index.js"></script>
    </body>
</html>
<?php

if($_POST["submit"]) {
    $recipient="kimberlycase91@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Reset stylesheet -->
    <!-- <link rel="stylesheet" href="assets/css/reset.css"> -->
    <!--Font-->
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
    <!-- Fullpage.js -->
    <link rel="stylesheet" type="text/css" href="assets/fullpage/fullpage.css" />

    <!-- Custom stylesheet  -->
    <link rel="stylesheet" href="assets/fullpage/style.css">
</head>

<body>
    <div id="fullpage">
        <div class="section" data-anchor="firstPage">
            <div id="bio">
                <p id="short-bio">
                    My name is <b class="front-page-name">Kimberly Case.</b><br>
                    I am a full-stack web developer <br>
                    based in Chandler, <br>
                    Arizona.</pid="short-bio">
            </div>

            <img src="assets/images/profile-photo.JPG" alt="Profile Photo" id="profilePhoto" height=300 width=200>

        </div>
        <div class="section" data-anchor="secondPage">
            <div id="aboutMe">
            <h1>About Me</h1>
            <hr>
            <p>I am a web developer leveraging a background as a math and science teacher to contribute to an increasingly better UI/UX experience. Recently earned a certificate in Full Stack Development from the University of Arizona, with newly developed skills in <b>CSS, JavaScript, React.js, and responsive web design.</b></p>

            <p>As a teacher I have gained many transferable skills including strong written and oral communication, collaborating with colleagues, being flexible and adaptable, and being data-driven. Known as an organized, self-motivated problem-solver. </p>
                
            <p>Passionate about balancing functionality and design with an emphasis on accessibility. Equipped with working collaboratively with a like-minded team to ensure optimal results for user-centered and technology-centered designs.
            </p>
        </div>
        </div>

        <div class="section" data-anchor="thirdPage">
            <div class="portfolio-div">
                <div class="row">
                    <div class="col s4">
                        <a target="_blank" href="https://github.com/kimberlycase91/Project-01">
                            <div class="portfolio-box grow">
                                <div class="portfolio-border">
                                    <p class="description">Event<br> Search</p>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="col s4">
                        <a target="_blank" href="https://github.com/kimberlycase91/TrainTime">
                            <div class="portfolio-box grow">
                                <div class="portfolio-border">
                                    <p class="description">Train <br> Schedule</p>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="col s4">
                        <a target="_blank" href="https://github.com/kimberlycase91/In-A-Giphy">
                            <div class="portfolio-box grow">
                                <div class="portfolio-border">
                                    <p class="description">Giphy <br> Search</p>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="row">
                    <div class="col s4">
                        <a target="_blank" href="https://github.com/kimberlycase91/TriviaGame">
                            <div class="portfolio-box grow">
                                <div class="portfolio-border">
                                    <p class="description">Timed <br> Quiz</p>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="col s4">
                        <a target="_blank" href="https://github.com/kimberlycase91/unit-4-game">
                            <div class="portfolio-box grow">
                                <div class="portfolio-border">
                                    <p class="description">Random Number <br> Game</p>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="col s4">
                        <a target="_blank" href="https://github.com/kimberlycase91/Word-Guess-Game">
                            <div class="portfolio-box grow">
                                <div class="portfolio-border">
                                    <p class="description">Hangman</p>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="section" data-anchor="fourthPage">
            <h1>Contact Me</h1>

            <?=$thankYou ?>

            <form method="post" action="contact.php">
                <label>Name:</label>
                <input name="sender">
        
                <label>Email address:</label>
                <input name="senderEmail">
        
                <label>Message:</label>
                <textarea rows="5" cols="20" name="message"></textarea>
        
                <input type="submit" name="submit">
            </form>


        </div>
    </div>
    <!-- JQuery and Materialize script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- fullpage.js script -->
    <script src="assets/fullpage/fullpage.js"></script>

    <!-- Custom script  -->
    <script src="assets/script/logic.js"></script>

    <script type="text/javascript">
        var myFullpage = new fullpage('#fullpage', {
            sectionsColor: ['white', '#BA55D3', 'white', '#BA55D3'],
            anchors: ['firstPage', 'secondPage', 'thirdPage', 'fourthPage'],
            navigation: true,
            navigationTooltips: ['Home', 'About', 'Portfolio', 'Contact'],
            showActiveTooltip: false,
            menu: '#menu'
        });
    </script>
</body>

</html>
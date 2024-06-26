<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="Style/styleshome.css">
    <link rel="icon" type="image/png" href="yum.png">


    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        nav {
            height: 60px;
        }

        #overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);

            font-size: 2em;
            text-align: center;
        }

        .button {
            border: none;

            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .button1 {
            background-color: white;

            color: black;
            border: 2px solid #04AA6D;
            border-radius: 50px;
        }

        .button1:hover {
            background-color: #04AA6D;
            color: white;
        }

        .logo {
            max-width: 250px;
            /* Adjust the maximum width of the logo */
            height: auto;
            margin-right: 10px;
        }
    </style>
</head>

<body>

    <body>

        <header>
            <nav>
                <img src="Images/Logos/yum.png" alt="YumStreet" class="logo">

                <ul class="nav-links">

                    <li><a href="login.php">Login</a></li>
                    <li><a href="signup.php">Sign Up</a></li>
                    <li><a href="index.php">What's special?</a></li>
                </ul>
            </nav>
        </header>


        <div class="vid" style="width: 100%;height:10vh position=relative;overflow: hidden;">

            <video autoplay loop muted playsinline poster="videos/home.mp4" style="width:100%;height:90%;left:0;top:0;z-index:-1;">
                <source src="videos/home.mp4">
            </video>
            <div id="overlay">
                <h1>Your one-stop destination for delicious meals!</h1>

            </div>
            <div class="content">
            </div>
            <h2> Let's savor the authenticity embedded in every bite. Beyond the ingredients, it's a celebration of
                heritage, craftsmanship, and a love for the simple pleasures of life. </h2>
            <h3> Bon appetite</h3>
            <?php
            include("html/footer.html");
            ?>
    </body>

</html>

</body>

</html>

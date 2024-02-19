<?php
include('db_conn.php');
?>
<!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" href="styleshome.css">
    <link rel="icon" type="image/png" href="yum.png">
    <title>Shawarma</title>
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
    background-color:white;
  
  color: black; 
  border: 2px solid #04AA6D;
   border-radius: 50px;
}

.button1:hover {
  background-color: #04AA6D;
  color: white;
}
.logo {
            max-width: 250px; /* Adjust the maximum width of the logo */
            height: auto;
            margin-right: 10px; }
         .main-content {
            display: flex;

            justify-content: space-around;
            flex-wrap: wrap;
            padding: 50px;
        }

        .food-item {
            width: 300px;
            margin-bottom: 20px;
            padding: 10px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .food-item img {
            max-width: 100%;
            height: auto;
          max-width: 90%;
            border-radius: 50%;
        }

        .food-description {
            margin-top: 10px;
        }
         p {
            font-family: 'Arial', sans-serif;
            font-size: 16px;
            line-height: 1.5;
            color: #333;
            margin-bottom: 20px;
        }
        h3 {
          color: grey;
        }
         .banner {
    background-color: #007bff; /* Change this to your desired background color */
    color: white; /* Change this to your desired text color */
    padding: 10px; /* Adjust padding as needed */
    text-align: center; /* Center align text */
    font-size: 20px; /* Adjust font size as needed */
    font-family: Arial, sans-serif; /* Specify font-family */
   height:400px;
    font-weight: bold; /* Specify font-weight */
    background-image: url('combo.webp');
    background-size: 100% auto; 
  }
   @keyframes fadeInOut {
      0%, 100% { opacity: 0; }
      50% { opacity: 1; }
    }

    /* Apply fadeInOut animation to each paragraph with a delay */
    p {
      animation: fadeInOut 3s ease-in-out infinite;
      display: none;
    }
p{
    text-align: center;
    color: red;
    font-size: 50px;
    font-family: "Copperplate",  fantasy;

}
h4{
   font-family: 'Arial', sans-serif;
            font-size: 16px;
            line-height: 1.5;
            color: #333;
            margin-bottom: 20px;
            color: grey;
}
.button {
            display: block;
            margin: 0 auto; /* Centers the button horizontally */
            border: none;
            padding: 10px 20px;
            width: 120px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            transition-duration: 0.4s;
            cursor: pointer;
            color:#04AA6D;
            background-color:#333;
            border-radius: 50px;
        }

       
        .button1:hover {
            background-color: #04AA6D;
            color: white;
        }


    </style>
</head>
<body >

<body>

    <header>
        <nav>
           <img src="yum.png" alt="YumStreet" class="logo">

            <ul class="nav-links">
               
                 

                <li><a href="index.php">Logout</a></li>
                <!-- Add more navigation links as needed -->
            </ul>
        </nav>
    </header>
 

  
<div class="main-content">  
    <?php

    $sql = "select * from shawarma";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_assoc($res)) {
        echo 
        "<a href='{$row["name"]}.html'>
        
            <div class='food-item'>
            <img src='{$row["image"]}' alt='Delicious Dish'></a>
            <h2>{$row["name"]}</h2>
            <h3>{$row["price"]}</h3>
            <h3>{$row["description"]}</h3>
            <div class='button button1'>Add to Cart</div>
            </div>";
    }
}
?>
       
         

        <script>
    // JavaScript to display paragraphs one after the other
    const paragraphs = document.querySelectorAll('p');
    
    let index = 0;

    function displayParagraph() {
      paragraphs.forEach((paragraph, i) => {
        paragraph.style.display = i === index ? 'block' : 'none';
      });

      index = (index + 1) % paragraphs.length;
    }

    // Initial display
    displayParagraph();

    // Set interval for continuous loop
    setInterval(displayParagraph, 3000); // Change the interval (in milliseconds) as needed
  </script>

       
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="postest.css" >
    <title>Document</title>
    
</head>


<body class = "bg" >
    <nav>
        <div class="logo">
            <h1 id="judul" >myFashion</h1>
        </div>
        <ul align="right">
            <li><a href="#">Home</a></li>
            <li><a href="aboutme.php">About Me</a></li>
            <li><a href="postest4.php">feedback</a></li>
            <li><a href="signIN.php">Sign in/sign up</a></li>
        </ul>
    </nav>
    <br>
    <p>Click switch to dark or light mode</p>
    <img id="icon" src="logow.png">
    <!-- <input type="checkbox" id="icon"> -->
    <div class="box">
        <h2 align="right" id="judul2" > myFashion</h2>
            <p>Hello, this is a website where you <br>can find fashion inspiration.
                <br>The website will display some style <br>  pictures that are trending and not out of date.
            </p>
            <div class="tombol" align = "right" >
                <a href="findout.php">Lets find out</a>
            </div>
    </div>

    <div class="poto"><img src="mingyu.jpg" width="230px" height="280px" ></div>

    <footer align="center">
        <p><br>Author:Agditha Evalyn Lolongan<br>
            Copyright &copy; 2022<br>
        </p>
    </footer>


     <script>
        //addeventlistener 
        const element = document.getElementById("icon");
        element.addEventListener("click", myFunction);
        function myFunction() {
            document.body.classList.toggle("darktema"); 
        }
     </script>

    <script src="postest.js"></script>

</body>
</html>
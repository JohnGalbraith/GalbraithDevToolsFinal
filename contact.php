<html>
    <head>
        <link rel="stylesheet" href="mainStyles.css">
        
        <script>
        window.onload = function(){
            document.querySelector("#facade").addEventListener("click", function(){alert("Your message has definately been heard, and it is probably appreciated.")});
        }
        </script>
        
    </head>
    <body>
        <!-- Top Navbar-->
        <div id="ceiling-glue">
            <ul class="topnav">
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn active">Home</a>
                    <div class="dropdown-content">
                          <a href="./index.php">About</a>
                          <a class="active" href="#">Contact</a>
                    </div>
                </li>
                <li>
                    <a href="Favourite-Games/index.php">Favourite Games</a>
                </li>
                <li>
                    <a href="Strategy-Games/index.php">Strategy Games</a>
                </li>
                <li>
                    <a href="Rougelike-Games/index.php">RougeLike Games</a>
                </li>
                <li>
                    <a href="FPS-Games/index.php">FPS Games</a>
                </li>
            </ul>
        </div>
        <!--End Top Nav-->
        
        <div class="content">
        
            <p>Hello, If you have found this page it means that you wish to contact me for some reason, maybe you dislike my taste in video games, maybe you really love one of the video games that I mentioned, maybe youre lonely, I dont know. What I do know is that I didnt actually hook this contact form up to anything so its just here to make you feel like youre able to air your complaints when really youre just tossing them to the wind.</p><br>
            
            <form>
                <span>Email:</span><input type="email"><br>
                <span>Name:</span><input type="text"><br>
                <span>Message:</span><textarea></textarea><br><br><br>
                <button id="facade" type="reset">Submit</button>
            </form>
            
        </div>


    </body>
</html>


<html>
    <head>
        <link rel="stylesheet" href="mainStyles.css">
        
        <script>
        let somethingMean = "";
        window.onload = function(){
            document.querySelector("#facade").addEventListener("click", pretendToListen);
        }
        
        function pretendToListen(){
            //get the form inputs
            let formEmail = document.querySelector("#txtEmail");
            let formName = document.querySelector("#txtName");
            let formMessage = document.querySelector("#txtMessage");
            
            //create a variable to check validate
            let formComplete = true;
            
            //make sure they entered an email
            if(formEmail.innerHTML == ""){
                formComplete = false;
            }
            
            //make sure they put in a name
            if(formName.innerHTML == ""){
                formComplete = false;
            }
            
            //make sure they wrote a message
            if(formMessage.innerHTML == ""){
                formComplete = false;
            }
            
            //make sure they arent writing anything mean
            if(formMessage.innerHTML == somethingMean){
                formComplete = false;
            }
            
            //if they have met all conditions pretend to submit the form
            if(formComplete){
                alert("Your message has definately been heard! \n\n...and it is probably appreciated.");
                formEmail.innerHTML = "";
                formName.innerHTML = "";
                formMessage.innerHTML = "";
            }
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
            
            <form  onsubmit="return false;">
                <span>Email:</span><input id="txtEmail" type="email" required><br>
                <span>Name:</span><input id="txtName" type="text" required><br>
                <span>Message:</span><textarea id="txtMessage" required></textarea><br><br>
                <button type="submit" id="facade">Submit</button>
            </form>
            
        </div>


    </body>
</html>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register & Login </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container" id = "signup" style="display:none;">
        <h1 class = "form-title ">Register</h1>
        <form method ="post" action ="register.php">
        <div class="input-group">
            <i class ="fas fa-user"></i>
            <input type ="text" name="fname" id="fname" placeholder="First Name" required>
            <label for="fname">First Name</label>
        </div>
        <div class="input-group">
            <i class = "fas fa-user"></i>
            <input type ="text" name="sname" id="sname" placeholder="Second Name" required>
            <label for ="sname">Second Name</label>
        </div>
        <div class="input-group">
            <i class ="fas fa-envelope"></i>
            <input type ="email" name ="email" id ="email" placeholder="Email" required>
            <label for ="email">Email</label>
        </div>
        <div class="input-group">
            <i class ="fas fa-lock"></i>
            <input type ="password" name ="password" id="password" placeholder="Password" required>
            <label for ="password">Password</label>
        </div>
        <input type ="Submit" class="btn" value="Sign Up" name ="signup">
        </form>
        <p class ="or">
            -----------or-----------</p>
            <div class="icons">
                <i class ="fab fa-google"></i>
                <i class ="fab fa-facebook"></i>

            </div>
            <div class="links">
                <p> Already have an Account ?</p>
                <button id = "signInButton">Sign In</button>
            </div>
</div>
            <div class="container" id = "signin">
            <h1 class = "form-title ">Sign In</h1>
            <form method ="post" action ="register.php">   
            <div class="input-group">
                <i class ="fas fa-envelope"></i>
                <input type ="email" name ="email" id ="email" placeholder="Email" required>
                <label for ="email">Email</label>
            </div>
            <div class="input-group">
                <i class ="fas fa-lock"></i>
                <input type ="password" name ="password" id="password" placeholder="Password" required>
                <label for ="password">Password</label>
            </div>
            <p class ="recover">
                <a href="#">Recover Password</a>
            </p>
            <input type ="Submit" class="btn" value="Sign In" name ="signin">
            </form>
            <p class ="or">
                -----------or-----------</p>
                <div class="icons">
                    <i class ="fab fa-google"></i>
                    <i class ="fab fa-facebook"></i>
    
                </div>
                <div class="links">
                    <p> Dont have accout yet ?</p>
                    <button id = "signUpButton">Sign Up</button>
                </div>
            </div>
            <script src="script.js"></script>
    </body>
    </html>
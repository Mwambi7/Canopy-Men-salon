<?
    include("CONNECTION.PHP"); 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Canopy Mens' Beauty Salon</title>
    <style>
        header {
            font-family: ;
    background-color: #808080;
    padding: 20px;
    text-align: center;
}
        nav ul {
    list-style-type: none;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    text-decoration: none; 
    color: #333;
}

nav ul li a:hover {
    color: #666;
}
        body {
            font-family: Arial, sans-serif;
            background-color: #808080;
        }
        
        form {
            border: 1px solid #ccc;
            background-color: #808080;
            padding: 30px;
            width: 500px;
            height: 500px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: calc(100% - 10px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"],
        button {
            background-color: #a8dadc;
            border: 1px solid #a8dadc;
            color: #fff;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 4px;
        }

        input[type="submit"]:hover,
        button:hover {
            background-color: #457b9d;
            border-color: #457b9d;
        }

        button {
            width: 100%;
        }
        header {
            background-color: #333; /* Dark grey header */
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
        }
    </style>

    <script>
        function validateForm() {
            var username = document.forms["signupForm"]["Username"].value;
            var email = document.forms["signupForm"]["email"].value;
            var password = document.forms["signupForm"]["password"].value;
            var age = document.forms["signupForm"]["age"].value;
            var message = document.forms["messageForm"]["Message"].value;

            // Username validation
            if (!/^[a-zA-Z]+$/.test(username)) {
                alert("Username should contain only alphabets");
                return false;
            }

            // Email validation
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert("Invalid email format");
                return false;
            }

            // Password validation
            if (!/(?=.\d)(?=.[a-z])(?=.*[A-Z]).{8,}/.test(password)) {
                alert("Password must contain at least one digit, one uppercase letter, and should be at least 8 characters long");
                return false;
            }

            // Age validation
            if (!/^\d+$/.test(age)) {
                alert("Age should contain only numbers");
                return false;
            }
            if (age == 0) {
                alert("Age cannot be zero.");
                return false;
            }
            if (parseInt(age) < 16) {
                alert("Age must be above 16 years");
                return false;
            }

            // Message validation
            if (message == "") {
                alert("Please enter your message");
                return false;
            }
             var successMessage = "You, " + username + ", have successfully registered!";
            alert(successMessage);

            // All validations passed
            return true;
        }
    </script>
</head>
<body>
    <header>
         <h1>Canopy Mens' Beauty Salon</h1>
        <nav>
            <ul>

                <li><a href="Home.html">Home</a></li>
                <li><a href="About.html">About</a></li>
                <li><a href="Products.html">Products</a></li>
                <li><a href="Services.html">Services</a></li>
                <li><a href="Registration.html">Registration</a></li>
            </ul>
        </nav>
    </header>
    <form action="CONNECTION.PHP"method="post" name="Registration" onsubmit="return validateForm()">
        <label>Username: </label>
        <input type="text" placeholder="Enter Username" name="Username" required><br><br>

        <label>Email: </label>
        <input type="email" name="email" placeholder="Enter email" required><br><br>

        <label>Password: </label>
        <input type="password" name="password" placeholder="Enter password" required><br><br>

        <label>Age: </label>
        <input type="text" name="age" placeholder="Enter age" required><br><br>

        <button type="submit">Register</button>
    </form>
     <form id="loginForm">
        <label>Email: </label>
        <input type="email" name="email" placeholder="Enter email" required><br><br>

        <label>Password: </label>
        <input type="password" name="password" placeholder="Enter password" required><br><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>

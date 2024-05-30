<php?></php>

<style>
    .container-side{
        width: 20%; 
            background-color: #FAE301;
            height: 100%; 
            float: left; 
    }
    .container-main{
            width: 75%; 
            background-color: ;
            height: 100%; 
            float: left; 
            padding: 20px;
    }
    form {
            width: 80%; /* Adjust width as needed */
            
            margin-top: 60px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-family: 'Balsamiq Sans', cursive;
            margin-top: 15px;
            margin-bottom: 15px;
        }
        .input-field{
            width: calc(100% - 20px); /* Adjust width to accommodate the border and padding */
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .heading-2{
            font-family: 'Balsamiq Sans', cursive;
            text-align: left;
            font-weight: bold;
            font-size: 40px;
            width: 100%;
            color: #DB0101;
        }
        button{
            margin-top: 20px;
            background-color:#DB0101 ;
            border-color: none;
            border-radius: 20px;
            width: 75px;
            height: 30px;
            color: white;
        }
        .register-link {
            font-family: 'Balsamiq Sans', cursive;
            margin-top: 20px; /* Adjust margin as needed */
            text-align: center; /* Center the link */
        }

        .register-link a {
            text-decoration: none;
            color:#DB0101 ;
            font-weight: bold;
        }


</style>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="container-side"></div>
        <div class="container-main">
            <div class="heading-2">Log in</div>
            <form action="submit">
                <label for="username">Username</label>
                <input class="input-field"type="text" name="username">
                <label for="password">Password</label>
                <input class="input-field" type="password" name="username">

                <button type="button" onclick="redirectToIndex()">Login</button>
                

            </form>
            <div class="register-link">
                <a href="register.php">Register</a>
            </div>
        </div>
        
    </body>
    <footer>
        <script>
        function redirectToIndex() {
            window.location.href = "index.php";
        }
    </script>
    </footer>

</html>
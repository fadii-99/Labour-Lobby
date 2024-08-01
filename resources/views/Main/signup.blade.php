<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Signup</title>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <script src="https://kit.fontawesome.com/yourcode.js"
            crossorigin="anonymous"></script>
            <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
            integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <header>
        <div class="container">
            <div class="logo">
                <h1>LABOUR LOBBY</h1>
            </div>
            <nav>
                <ul>
                    <li><a class="effect" href="/">Home</a></li>
                    <li><a class="effect" href="{{ URL::to('lobby') }}">LOBBY</a></li>
                    <li><a class="effect" href="{{ URL::to('login') }}">Login</a></li>
                    <li><a class="effect" href="{{ URL::to('complain') }}">COMPLAIN</a></li>
                </ul>
            </nav>
        </div>
    </header>




    <section class="showcase" style="background-image:url('images/bg2.jpg');opacity:1;">
        <div class="container container-reg  mar">
            <div class="box img">
                <img src="{{ asset('images/user.png') }}">
                <h2>USER SIGNUP FORM</h2>
            </div>

            <div class="box form">
                <form action="{{ URL::to('add-user/') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="data">
                        <h2>
                            SIGNUP CREDENTIALS
                        </h2>

                        <input type="email" name="email" pattern="[a-zA-Z0-9./%-+]+@[a-z]+.com" placeholder="Email">
                        <input type="text" name="user_name" placeholder="User Name ">
                        <input type="password" name="password" placeholder="Password" pattern=".{8,}"><br>
                        <label style="font-size:12px;">Please Enter Atleast 8 Characters</label>

                        <br>
                        <select name="type">
                            <option>Select Your Account Type</option>
                            <option value="hirer">Hirer</option>
                            <option value="worker">Worker</option>
                        </select>
                    </div>

                    <button id="btn2" class="signup-btn">
                        SIGNUP
                    </button>
                </form>
            </div>
        </div>
    </section>











    <footer class="footer">
        <div class="footer-left">
            <h4>Home</h4>
            <h4>Lobby</h4>
            <h4>Complain</h4>
        </div>
        <div class="footer-mid">
            <h3>Labour Lobby</h3>
            <p>labourlobby@email.com</p>
            <p>0348-15867448</p>
            <p>Wah Model Town, Wah, Rawalpindi</p>
        </div>
        <div class="footer-right">
            <div class="icons">
                <a href="http://facebook.com"><i class="fab fa-facebook"></i></a>
                <!-- <a href="http://youtube.com"><i class="fab fa-youtube"></i></a> -->
                <a href="http://twitter.com"><i class="fab fa-twitter"></i></a>
                <a href="http://instagram.com"><i
                        class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>


</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Lobby</title>
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
                    @if (session()->has('hirer') == 1)
                        <li><a class="effect" href="/profileh">{{ session('hirer')['name'] }}</a></li>
                    @endif
                    @if (session()->has('hirer') == 0)
                        <li><a class="effect" href="/">Home</a></li>
                        <li><a class="effect" href="{{ URL::to('login') }}">Login</a></li>
                        <li><a class="effect" href="{{ URL::to('signup') }}">Signup</a></li>
                    @endif
                    <li><a class="effect" href="{{ URL::to('complain') }}">COMPLAIN</a></li>
                </ul>
            </nav>
        </div>
    </header>




    <section class="showcase" style="background-image:url('images/bg2.jpg');opacity:1;">
        <div class=" lobby mar">

            <div class="top">
                <h1 class="h1">LOBBY</h1>
                <p>Find Worker You Want</p>
            </div>


            <br>
            <hr style="width: 80%">
            <br>


            <div class="mid">
                <a href="{{ URL::to('lobby') }}">
                    <div class="specific">All</div>
                </a>
                <a href="{{ URL::to('electrician') }}">
                    <div class="specific">Electrician</div>
                </a>
                <a href="{{ URL::to('carpenter') }}">
                    <div class="specific">Carpenter</div>
                </a>
                <a href="{{ URL::to('plumber') }}">
                    <div class="specific">Plumber</div>
                </a>
            </div>

            <br>
            <hr style="width: 80%">

            <div class="bottom">

                @foreach ($workers as $worker)
                    <div class="card">
                        @if ($worker->prof->profession_name == 'Electrician')
                            <div class="img"><img src="{{ asset('images/bijli.jpg') }}"></div>
                        @endif
                        @if ($worker->prof->profession_name == 'Plumber')
                            <div class="img"><img src="{{ asset('images/plumber.jpg') }}"></div>
                        @endif
                        @if ($worker->prof->profession_name == 'Carpenter')
                            <div class="img"><img src="{{ asset('images/lakri.jpg') }}"></div>
                        @endif
                        <div class="details">
                            {{-- <p>{{ $worker->prof->profession_name }}</p> --}}
                            {{-- <p style="font-weight: bold">|</p> --}}
                            <p><strong>Exp:</strong> {{ $worker->work_exp }} Years</p>
                            <p style="font-weight: bold">|</p>
                            <p><strong>Time:</strong> {{ $worker->work_time }}</p>
                        </div>
                        @if ($worker->status == 1)
                            <div style="background: lightgrey" class="hire-btn">HIRED</div>
                        @endif
                        @if ($worker->status == 0)
                        {{-- {{ $w[0] = session('hirer')['name'] }}
                        {{ $w[1] = $worker->email }} --}}
                            <a href="{{ URL::to('hire/' .$worker->email ) }}">
                                <div class="hire-btn">HIRE</div>
                            </a>
                        @endif
                        <div class="name">
                            <h3>{{ $worker->name }}</h3>
                        </div>
                    </div>
                @endforeach

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



    <script>
        function all() {
            document.getElementById("select").submit();
        }

        function plumber() {
            document.getElementById("select").submit();
        }
    </script>



</body>

</html>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">Logo</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                @if (Route::has('login'))
                    <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav navbar-right">
                                @auth
                                    <li class="active"><a href="{{ url('/home') }}">Home</a></li>
                                @else
                                <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                                <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-register"></span>Register</a></li>
                            </ul>
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </nav>
    <div class="row">
    <div class="jumbotron">
        <div class="container text-center">

            <div class="form-group">
                <div >
                    <h1 style="float:left;">DAYBUUY</h1>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" style="margin-top: -60px; ">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">

                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar1">
                        <ul class="nav navbar-nav">

                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-md-2"></div>
    </div>


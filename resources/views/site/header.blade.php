<header>
    <style>
        ul#nav-ul{
            padding: 0;
            list-style: none;
            background: #f2f2f2;
        }
        ul li{
            display: inline-block;
            position: relative;
            line-height: 21px;
            text-align: right;
        }
        ul li a{
            display: block;
            padding: 8px 25px;
            color: #333;
            text-decoration: none;
        }
        ul li a:hover{
            color: #fff;
            background: #939393;
        }
        ul li ul.dropdown{
            min-width: 125px; /* Set width of the dropdown */
            background: #f2f2f2;
            display: none;
            position: absolute;
            z-index: 999;
            left: 0;
        }
        ul li:hover ul.dropdown{
            display: block; /* Display the dropdown */
        }
        ul li ul.dropdown li{
            display: block;
        }
    </style>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('site.front_dashboard')}}">Jobber</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('site.front_dashboard')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('site.about')}}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('site.contact-us')}}">Contact Us</a>
                    </li>

                    @auth()
                        <ul id="nav-ul">
                            <li id="nav-li">
                                <a  id="nav-a">Welcome {{auth()->user()->name}}</a>
                                <ul id="nav-ul" class="dropdown">
                                    <li id="nav-li"><a  id="nav-a" href="{{route('user.logout')}}">Log out</a></li>
                                </ul>
                            </li>
                        </ul>
                    @else
                        <ul style="display:none;" id="nav-ul">
                            <li id="nav-li">
                                <a  id="nav-a"></a>
                                <ul id="nav-ul" class="dropdown">
                                    <li id="nav-li"><a  id="nav-a" href="">Log out</a></li>
                                </ul>
                            </li>
                        </ul>

                    @endauth

                </ul>
                <form style=" float: right;padding-top: 5px;" class="form-inline mt-2 mt-md-0">

                    <input style=" float: left; width: 400px !important; padding-top:5px;" class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" style=" margin: 10px; " type="submit">Search</button>
                </form>
            </div>
        </div>

    </nav>
</header>

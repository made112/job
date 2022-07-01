<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="{{asset('style/register.css')}}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Ring - Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{assert('style/bootstrap.min.css')}}">

</head>

<body>
@include('site.header')

<main style="margin-top: 100px; margin-bottom: 75px">
    <div class="login-wrap">
        <div class="login-html">
            <input  required id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign
                In</label>
            <input  required id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>

            <div class="login-form">
                <form action="{{route('post.login')}}" method = "post">
                    @csrf
                <div class="sign-in-htm">
                    <div class="group">
                        <label for="user" class="label">Email</label>
                        <input  required name="email" id="user" type="text" class="input">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input  required name="password" id="password" type="password" class="input" data-type="password">
                    </div>
                    <div class="group">
                        <input  required id="check" type="checkbox" class="check" checked>
                        <label for="check"><span class="icon"></span> Keep me Signed in</label>
                    </div>
                    <div class="group">
                        <button type="submit" class="button" value="Sign In">Sign in</button>
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <a href="{{route('forget.show')}}">Forgot Password?</a>
                    </div>
                </div>
                </form>

                <form action="{{route('post.register')}}" method = "post">
                    @csrf
                <div class="sign-up-htm">
                    <div class="group">
                        <label for="user" class="label">Username</label>
                        <input  required name="name" id="user" type="text" class="input">
                    </div>

                    <div class="group">
                        <label for="pass" class="label">Email</label>
                        <input  required name="email" id="pass" type="email" class="input" >
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input  required name="password" id="password" type="password" class="input" data-type="password">
                    </div>
                    <div class="group">
                        <button type="submit" class="button" >Sign up</button>
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <label for="tab-1">Already Member?</a>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</main>

<footer>
    <hr>
    <p style="float: right; margin-right: 1%" class="float-end"><a href="#">Back to top ☝</a></p>
    <p style="text-align: center;">&copy;Jobber. 2020 &middot; <a href="privacy.html">Privacy</a> &middot; <a href="terms.html">Terms</a>&middot;
        <a href="contact-us.html">Contact Us</a>
    </p>
</footer>

</body></html>

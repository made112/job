<!DOCTYPE html>
<html>

<head>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <title>Contact us</title>
    <style>
        .contact-info .fa {
            padding-right: 5px;
        }

        #contact .form-control {
            border: none;
            border-bottom: 2px solid #f0f0f0;
            border-radius: 0px;
            box-shadow: none;
            font-size: 18px;
            margin-top: 10px;
            margin-bottom: 10px;
            -webkit-transition: all ease-in-out 0.4s;
            transition: all ease-in-out 0.4s;
        }

        #contact .form-control:focus {
            border-bottom-color: #999999;
        }

        #contact input {
            height: 55px;
        }

        #contact button#submit {
            background: #2b2b2b;
            border: none;
            border-radius: 50px;
            color: #ffffff;
            height: 50px;
            margin-top: 24px;
            cursor: pointer;
        }

        #contact button#submit:hover {
            background: #7682cc;
            color: #ffffff;
        }
    </style>
</head>

<body>

@include('site.header')
    <!-- CONTACT SECTION -->
    <section id="contact" class="parallax-section">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <!-- SECTION TITLE -->
                    <div class="wow fadeInUp section-title" data-wow-delay="0.2s">
                        <h2>Get in touch</h2>
                        <p>Let us know what you have.</p>
                    </div>
                </div>

                <div class="col-md-12 col-sm-10">
                    <!-- CONTACT FORM HERE -->
                    <div class="wow fadeInUp" data-wow-delay="0.4s">
                        <form  id="contact-form" action="{{route('company.suggest')}}" method="post">
                            @csrf
                            <div class="col-md-6 col-sm-6">
                                <input type="text" class="form-control" name="name" placeholder="Name" required="">
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <input type="email" class="form-control" name="email" placeholder="Email" required="">
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <textarea class="form-control" rows="5" name="message" placeholder="Message" required=""></textarea>
                            </div>
                            <div class="col-md-offset-8 col-md-4 col-sm-offset-6 col-sm-6">
                                <button id="submit" type="submit" class="form-control" name="submit">Suggest</button>
                            </div>
                        </form>
                    </div>
                </div>



            </div>
        </div>
    </section>
    <footer style="margin-top: 11%">
        <hr>
        <p style="float: right; margin-right: 1%" class="float-end"><a href="#">Back to top ☝</a></p>
        <p style="text-align: center;">&copy;Jobber . 2020 &middot; <a href="privacy.html">Privacy</a> &middot; <a href="terms.html">Terms</a> &middot;
            <a href="contact-us.blade.php">Contact Us</a></p>
    </footer>
</body>

</html>

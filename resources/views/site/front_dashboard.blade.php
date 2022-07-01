<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Jobber</title>

    <link href="{{asset('style/bootstrap.min.css')}}" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <link href="style/carousel.css" rel="stylesheet">
</head>

<body>

@include('site.header')

<main>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><img width="100%" height="100%" src="{{asset('img/job-ring.png')}}" /></svg>

                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Jobber</h1>
                        <p><i>Jobber</i> is a recruitment platform, it aims to connect students and graduates to the careers they seek and in turn help corporates and organizations fill gaps in the talent and skills they need.</p>
                        <p><a class="btn btn-lg btn-primary" href="{{route('job.register')}}" role="button">Sign up now!</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><img width="100%" height="100%" src="{{asset('img/company.png')}}" /></svg>

                <div class="container">
                    <div class="carousel-caption">
                        <h1>Explore Jobber .</h1>
                        <p><i>Jobber</i> offers the chance to explore companies and look for internships or different job opportunities. </p>
                        <p><a class="btn btn-lg btn-primary" href="{{route('job.browse')}}" role="button">BrowseJobber !</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><img width="100%" height="50%" src="{{asset('img/talent.png')}}" /></svg>

                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>Hunt the right talent.</h1>
                        <p><i>Jobber</i> offers the possibility to reach out to students and graduates, explore all available skills and hunt the right talent.</p>
                        <p><a class="btn btn-lg btn-primary" href="{{route('job.register')}}" role="button">Hunt for talent!</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>

    <div id="more" class="container marketing">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Jobber. <span class="text-muted">Things are simple.</span></h2>
                <p class="lead"><b><i>Jobber</i></b> is a recruitment platform, it aims to connect students and graduates to the careers they seek and in turn help corporates and organizations fill gaps in the talent and skills they need. <br />For a student or
                    a graduate: <b><i>Jobber</i></b> offers the chance to explore companies and look for internships or job opportunities. <br />For corporates and organizations: <b><i>Jobber</i></b> offers the possibility to reach out to students
                    and graduates, explore all available skills and hunt the right talent.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="0" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <img width="100%" height="100%" src="img/job.png" />
                </svg>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Looking for a job? <span class="text-muted">You are in the right palce.</span></h2>
                <p class="lead"><b><i>Jobber</i></b> allows students and graduates to edit all personal and education details. <b><i>Jobber</i></b> encourages candidates to add extensive details about their qualifications and experience. Resume, detailed descriptions
                    of all the projects he or she has worked on, the technologies he used, etc. Those descriptions can be more than a page long, and this is a good thing for <b><i>Jobber</i></b> since we use the keywords in those descriptions to
                    find relevant candidates. <br />A registered student can view the list of companies in the platform, the list of jobs and internships offered, can perform text search and perform filters on the results, can sort the results based
                    on different parameters, and of course he or she can apply for those opportunities. After he applies for a certain job or internship, he can track the status of his application and review the response he got.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="0" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <img width="100%" height="100%" src="img/jobs.jpg" />
                </svg>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Looking for talents? <span class="text-muted">Explore candidates.</span></h2>
                <p class="lead"><b><i>Jobber</i></b> also allows corporates and organizations to register and fill all their respective details, edit and update those details, and set up listings for open positions they have. A listing will have all the details
                    about the job, including the job title and all required skills. One of the favorite features of <b><i>Jobber</i></b> is that we offer video content about companies and jobs at these companies. Also view and manage all applications
                    sent as a response to their listings. They can reject an application or set up an interview with the applicant in order to continue with the hiring process outside the platform.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="0" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <img width="100%" height="100%" src="img/talent-bottom.jpg" />
                </svg>
            </div>
        </div>
    </div>

</main>

<footer style="margin-top: 5%">
    <hr>
    <p style="float: right; margin-right: 1%" class="float-end"><a href="#">Back to top ☝</a></p>
    <p style="text-align: center;">&copy;Jobber . 2020 &middot; <a href="privacy.html">Privacy</a> &middot; <a href="terms.html">Terms</a> &middot;
        <a href="contact-us.blade.php">Contact Us</a></p>
</footer>

<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>

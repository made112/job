<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Candidate</title>
    <link rel="stylesheet" href="{{asset('style/bootstrap.min.css')}}">

    <style>
        body {
            margin: 20px !important;
            color: #1a202c;
            text-align: left;
        }

        .row {
            --bs-gutter-x: 1.5rem;
            --bs-gutter-y: 0;
            display: flex;
            flex-wrap: wrap;
        }

        *,
        *:before,
        *:after {
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box !important;
        }

        .column,
        .columns {
            position: relative;
            padding: 0 20px;
            min-height: 1px;
            float: left;
        }

        .column.centered,
        .columns.centered {
            float: none;
            margin: 0 auto;
        }

        .row.collapsed>.column,
        .row.collapsed>.columns,
        .column.collapsed,
        .columns.collapsed {
            padding: 0;
        }

        [class*="column"]+[class*="column"]:last-child {
            float: right;
        }

        [class*="column"]+[class*="column"].end {
            float: right;
        }

        .bgrid-sixths [class*="column"] {
            width: 16.66667%;
        }

        .bgrid-quarters [class*="column"] {
            width: 25%;
        }

        .bgrid-thirds [class*="column"] {
            width: 33.33333%;
        }

        .bgrid-halves [class*="column"] {
            width: 50%;
        }

        [class*="bgrid"] [class*="column"]+[class*="column"]:last-child {
            float: left;
        }

        .main-body {
            padding: 15px !important;
        }

        .card {
            box-shadow: 0 3px 3px 3px rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid rgba(0, 0, 0, .125);
            border-radius: .25rem;
        }

        .container {
            max-width: 100%;
        }

        .card-body {
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1rem;
        }

        .model-box {
            width: 100%;
            height: auto;
            border: solid 1px #428bca;
            padding: 5px;
            margin-bottom: 15px;
            overflow: hidden;
        }

        .detail {
            padding: 10px
        }

        .three {
            width: 25%;
        }

        .image {
            float: left;
            width: 40%
        }

        .views {
            padding-left: 15px;
            float: left;
        }

        .desc-job {
            float: left;
            width: 50%;
            overflow: hidden;
        }

        .title-type {
            overflow: hidden;
            color: black;
            text-overflow: ellipsis;
            white-space: nowrap;
            margin: 0 0 5% 0;
        }

        .sub-title {
            padding-right: 5px;
            color: black;
            font-weight: 600
        }

        .number-views {
            float: right;
            padding-left: 8px;
        }

        .skills-job {
            display: inline-block;
            background: #ddd;
            margin: 0 auto;
            padding: 14px;
            border-radius: 100%;
            font-size: 14px;
            min-width: 70px;
            text-align: center;
        }

        .root-skill-job {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .root-skill-job {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .gutters-sm>.col,
        .gutters-sm>[class*=col-] {
            padding-right: 8px;
            padding-left: 8px;
        }

        .col-md-4 {
            width: 30%;
        }

        .col-md-8 {
            width: 70%;
        }

        .row {
            max-width: 100% !important;
            width: 100%;
        }

        .mb-3,
        .my-3 {
            margin-bottom: 1rem !important;
        }

        .bg-gray-300 {
            background-color: #e2e8f0;
        }

        .h-100 {
            height: 100% !important;
        }

        .shadow-none {
            box-shadow: none !important;
        }

        .three {
            width: 27%;
        }
    </style>

</head>

<body>
@include('site.header')
    <div id="candidate-profile">
        <div class="container" style="margin-top: 5%">

            <div class="main-body">

                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="{{asset('imagesite/user.jpg')}}" alt="Student picture" class="rounded-circle" width="150">
                                    <div class="mt-3">
                                        <h4>Hatem</h4>
                                        <p class="text-secondary mb-1">{{$company->gender}}</p>
                                        <p class="text-muted font-size-sm">{{$company->country}}-{{$company->city}} </p>
{{--                                        <button class="btn btn-primary">Download Resume</button>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-body" style="padding: 4%">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{$company->std_name}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{$company->email}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Phone</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{$company->phone}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Address</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{$company->country}}-{{$company->city}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3" style="padding: 2%;">
                            <div class=" h-100">
                                <div class="row education">

                                    <div class="three columns header-col">
                                        <h1>Education</h1>
                                    </div>

                                    <div class="nine columns main-col">

                                        <div class="row item">

                                            <div class="twelve columns">

                                                <h3>University of Life</h3>
                                                <p class="info">Master in Graphic Design <span>•</span> <em class="date">April 2007</em></p>

                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis,
                                                    sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Nullam dictum felis eu pede mollis pretium.
                                                </p>

                                            </div>

                                        </div>

                                        <div class="row item">

                                            <div class="twelve columns">

                                                <h3>School of Cool Designers</h3>
                                                <p class="info">B.A. Degree in Graphic Design <span>•</span> <em class="date">March 2003</em></p>

                                                <p>
                                                    This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet
                                                    mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat
                                                </p>

                                            </div>

                                        </div>
                                        <!-- item end -->

                                    </div>
                                    <!-- main-col end -->

                                </div>
                            </div>
                        </div>


                        <div class="card mb-3" style="padding: 2%;">
                            <div class="row work">

                                <div class="three columns header-col">
                                    <h1><span>Work</span></h1>
                                </div>

                                <div class="nine columns main-col">

                                    <div class="row item">

                                        <div class="twelve columns">

                                            <h3>Awesome Design Studio</h3>
                                            <p class="info">Senior UX Designer <span>•</span> <em class="date">March 2010 - Present</em></p>

                                            <p>
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis,
                                                sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Nullam dictum felis eu pede mollis pretium.
                                            </p>

                                        </div>

                                    </div>
                                    <!-- item end -->

                                    <div class="row item">

                                        <div class="twelve columns">

                                            <h3>Super Cool Studio</h3>
                                            <p class="info">UX Designer <span>•</span> <em class="date">March 2007 - February 2010</em></p>

                                            <p>
                                                This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet
                                                mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat
                                            </p>

                                        </div>

                                    </div>
                                    <!-- item end -->

                                </div>
                                <!-- main-col end -->

                            </div>
                        </div>

                        <div class="card mb-3" style="padding: 2%;">
                            <div class="row skill">

                                <div class="three columns header-col">
                                    <h1><span>Skills</span></h1>
                                </div>

                                <div class="nine columns main-col">

                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                                    </p>

                                    <div class="bars">
                                        <ul class="root-skill-job">
                                            <li class="skills-job">C</li>
                                            <li class="skills-job">js</li>
                                            <li class="skills-job">HTML</li>
                                            <li class="skills-job">CSS</li>
                                            <li class="skills-job">C</li>
                                            <li class="skills-job">js</li>
                                            <li class="skills-job">HTML</li>
                                            <li class="skills-job">CSS</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>

                </div>

            </div>

        </div>
    </div>

    <footer>
        <hr>
        <p style="float: right;" class="float-end"><a href="#">Back to top ☝</a></p>
        <p style="text-align: center;">&copy;Jobber . 2020 &middot; <a href="privacy.html">Privacy</a> &middot; <a href="terms.html">Terms</a> &middot;
            <a href="contact-us.html">Contact Us</a>
        </p>
    </footer>
    <script src="./js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="./js/candidate-profile.js" type="text/javascript"></script>
</body>

</html>

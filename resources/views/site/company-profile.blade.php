<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Company</title>
    <link rel="stylesheet" href="{{asset('style/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('style/css/default.css')}}">

    <style>
        body {
            margin: 20px !important;
            color: #1a202c;
            text-align: left;
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
    </style>

</head>

<body>
@include('site.header')
    <div id="company-profile">

        <div class="container">

            <div class="main-body">

                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">



                        <div class="card" style="margin-top: 10%">
                            <div class="card-body">
                                <h3>About Kellby</h3>
                                <iframe width="560" style=" width: 100%; height: 100%; " height="315" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-body" style="padding: 4%">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Company Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">

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
                                        <h6 class="mb-0">Company Site</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{$company->country}}-{{$company->city}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3" style="padding: 15px;">
                            <div class=" h-100">
                                <div class="row">

                                    <div class="three columns header-col">
                                        <h1><span>About  Kellby</span></h1>
                                    </div>

                                    <div class="nine columns main-col">

                                        <div class="row item">

                                            <div class="twelve columns">


                                                <p>
                                                    Late effect of intracranial injury without mention of skull fracture
                                                </p>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="card mb-3" style="padding: 5%;">
                            <div class="row">

                                <div class="three columns header-col" style="margin-bottom: 5%">
                                    <h1><span>Jobs</span></h1>
                                </div>

                                <div>

                                    <div class="model-box">
                                        <div class="detail">
                                            <div class="image">
                                                <img width="280px" height="250px" src="http://placekitten.com/200/138">
                                            </div>
                                            <div class="desc-job">
                                                <p class="title-type"><span class="sub-title">Job Title:</span> Job 2</p>
                                                <p class="title-type"><span class="sub-title">Date posted:</span> 10/10/2020</p>
                                                <p class="title-type"><span class="sub-title">Job salary:</span> 1000$</p>
                                                <p class="title-type"><span class="sub-title">Job type:</span> part-time</p>
                                                <p class="title-type"><span class="sub-title">Job description:</span> description</p>
                                                <p class="title-type"><span class="sub-title">Job-status :</span> open</p>
                                                <div class="root-skill-job">
                                                    <ul class="ui-skill">
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
{{--                                                <p style="padding-top: 10px;"><strong><a href="job-detail.html">Click here to more detail...</a></strong></p>--}}
                                            </div>
                                            <div class="views">
                                                <img width="15px" height="15px" src="https://cdn.onlinewebfonts.com/svg/img_56374.png">
                                                <p class="number-views">1100</p>
                                            </div>
                                        </div>
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
            <a href="contact-us.html">Contact Us</a></p>
    </footer>
    <script src="./js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="./js/company-profile.js" type="text/javascript"></script>

</body>

</html>

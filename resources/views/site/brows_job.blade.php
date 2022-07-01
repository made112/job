<!Doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="description" content="Project Web Development Full Stack" />
    <meta name="author" content="hassan sammour,Abed allah Abu Abdo, Abed allah ouda, Mohammed Al habbash" />
    <title>Browse page</title>
    <link rel="stylesheet" href="{{asset('style/style.css')}}" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<style>
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 15% auto; /* 15% from the top and centered */
        padding: 20px;
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
    }

    /* The Close Button */
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
</style>
</head>

<body>

@include('site.header')
<div id="main-wrapper">
    <div class="container" style=" padding: 7px; ">

        <div class="row">

            <div class="col-md-6 col-md-offset-3">

                <div class="panel panel-primary" style="width: 150%;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Panel Type</h3>
                        <span class="pull-right">
                                <!-- Tabs -->
                                <ul class="nav panel-tabs">
                                    <li class="active"><a href="#tab1" data-toggle="tab">Jobs</a></li>
                                    <li><a href="#tab2" data-toggle="tab">Companies</a></li>
                                    <li><a href="#tab3" data-toggle="tab">Candidates</a></li>
                                </ul>
                            </span>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab1">
                                <div id="job_offers" class="container">

                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Jop Type</th>
                                            <th>Salary</th>
                                            <th>Date Posted</th>
                                            <th>Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($jobs as $job)

                                        <tr>
                                            <td>{{$job->job_title}}</td>
                                            <td>{{$job->description}}</td>
                                            <td>{{$job->job_type}}</td>
                                            <td>{{$job->salary}}</td>
                                            <td>{{$job->date_posted}}</td>
                                            @auth()
                                                <td><button class = "btn-primary" id="myBtn">Apply</button>

                                                @elseauth()
                                                <td style = "display: none"><button class = "btn-primary" id="myBtn">Apply</button>

                                                    @endauth
                                            </td>


                                            <!-- Modal -->

                                        </tr>
                                        @endforeach
                                        </tbody>

                                    </table>
                                </div>
                                <div id="myModal" class="modal">

                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <h6>Job Form</h6>
                                        <form enctype="multipart/form-data" method = "post" action="{{route('job_request.store')}}">
                                         @csrf
                                            <div class = "row">
                                                <div class = "col-md-6">
                                                    <label>name</label>
                                                    <input type="text" class="form-control" name="name" />
                                                </div>
                                                <div class = "col-md-6">
                                                    <label>Phone</label>
                                                    <input type="text" class="form-control" name="phone" />
                                                </div>
                                                <div class = "col-md-12">
                                                    <label>Cv</label>
                                                    <input type="file" class="form-control" name="cv" />
                                                </div>
                                            </div>
                                            <br>
                                                <button class = "btn-primary" type="submit">Save</button>


                                        </form>
                                    </div>

                                </div>
                                <nav class="mt-4" aria-label="Page navigation sample">
                                    <ul class="pagination">
                                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                                        <li class="page-item"><a class="page-link" data-page="1" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" data-page="2" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" data-page="3" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" data-page="4" href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="tab-pane" id="tab2">
                                <div id="company">
                                    @foreach($company as $item)
                                    <div class="model-box">
                                        <div class="detail">
                                            <div class="image">
                                                <img width="280px" height="250px" src="{{asset('imagesite/company.png')}}">
                                            </div>
                                            <div class="desc-job">
                                                <p class="title-type"><span class="sub-title">{{$item->name}}</span></p>
                                                <p class="title-type"><span class="sub-title">{{$item->country}}</span></p>
                                                <p class="title-type"><span class="sub-title">{{$item->city}}</span></p>
                                                <p class="title-type"><span class="sub-title">{{$item->phone}}</span></p>
                                                <p class="title-type-comp"><span class="sub-title">{{$item->Details}}</span></p>
                                            </div>
                                            <div class="info-company">
                                                <p style="padding-top: 10px;"><strong><a href="{{route('company.show',$item->id)}}">Click here to more detail...</a></strong></p>
                                            </div>



                                        </div>

                                    </div>
                                        @endforeach
                                </div>

                                <nav class="mt-4" aria-label="Page navigation sample">
                                    <ul class="pagination">
                                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                                        <li class="page-item"><a class="page-link" data-page="1" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" data-page="2" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" data-page="3" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" data-page="4" href="#">Next</a></li>
                                    </ul>
                                </nav>

                            </div>
                            <div class="tab-pane" id="tab3">
                                <div id="candidate">
@foreach($user as $item)
                                    <div class="model-box">
                                        <div class="detail">
                                            <div class="image">
                                                <img title="personal image" alt="personal image" width="280px" height="250px" src="{{asset('imagesite/user.jpg')}}">
                                            </div>
                                            <div class="desc-job">
                                                <p class="title-type"><span class="sub-title">{{$item->name}}</span></p>
                                                <p class="title-type"><span class="sub-title">{{$item->country}}</span></p>
                                                <p class="title-type"><span class="sub-title">{{$item->birthdate}}</span></p>
                                                <p class="title-type"><span class="sub-title">{{$item->phone}}</span></p>
                                                <ul class="ui-skill">
                                                    <li class="skills-job">C</li>
                                                    <li class="skills-job">js</li>
                                                    <li class="skills-job">HTML</li>

                                                </ul>
                                            </div>
                                            <div class="info-candidate">
                                                <p><strong><a href="{{route('candidates.show',$item->id)}}">Click here to more detail...</a></strong></p>
                                            </div>

                                        </div>

                                    </div>
                                        @endforeach
                                </div>


                                <nav class="mt-4" aria-label="Page navigation sample">
                                    <ul class="pagination">
                                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                                        <li class="page-item"><a class="page-link" data-page="1" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" data-page="2" href="#">2</a></li>
                                        <!-- <li class="page-item"><a class="page-link" data-page="3" href="#">3</a></li> -->
                                        <!-- <li class="page-item"><a class="page-link" data-page="4" href="#">Next</a></li> -->
                                    </ul>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="sidebar">
    <div class="title-sidebar">Filter</div>
    <div class="card">
        <article class="filter-group">
            <article class="filter-group">
                <header class="card-header">
                    <h6 class="title" style="color: #428bca;">Job type</h6>
                </header>
                <div class="filter-content collapse show" id="collapse_2">
                    <div class="card-body">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input">
                            <div class="custom-control-label">Full Time
                                <b class="badge badge-pill badge-light float-right">120</b>
                            </div>
                        </label>
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input">
                            <div class="custom-control-label">Part Time
                                <b class="badge badge-pill badge-light float-right">15</b>
                            </div>
                        </label>
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input">
                            <div class="custom-control-label">Hourly
                                <b class="badge badge-pill badge-light float-right">120</b>
                            </div>
                        </label>
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input">
                            <div class="custom-control-label">Fixed price
                                <b class="badge badge-pill badge-light float-right">100</b>
                            </div>
                        </label>
                    </div>
                    <!-- card-body.// -->
                </div>
            </article>

            <article class="filter-group">
                <header class="card-header">
                    <!--					<a href="#" data-toggle="collapse" data-target="#collapse_5" aria-expanded="true" class="">-->
                    <!--						<i class="icon-control fa fa-chevron-down"></i>-->
                    <h6 class="title" style="color: #428bca;">Price range </h6>
                    <!--					</a>-->
                </header>
                <div class="filter-content collapse show" id="collapse_5">
                    <div class="card-body">
                        <input type="range" class="custom-range" min="0" max="100" name="">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Min</label>
                                <input class="form-control" placeholder="$0" type="number">
                            </div>
                            <div class="form-group text-right col-md-6">
                                <label>Max</label>
                                <input class="form-control" placeholder="$1,0000" type="number">
                            </div>
                        </div>
                        <!-- form-row.// -->

                    </div>
                    <!-- card-body.// -->
                </div>
            </article>
            <!-- filter-group .// -->



            <article class="filter-group">
                <header class="card-header">
                    <!--					<a href="#" data-toggle="collapse" data-target="#collapse_6" aria-expanded="true" class="">-->
                    <!--						<i class="icon-control fa fa-chevron-down"></i>-->
                    <h6 class="title" style="color: #428bca;">Skills </h6>
                    <!--					</a>-->
                </header>
                <div class="filter-content collapse show" id="collapse_6">
                    <div class="card-body">
                        <label class="checkbox-btn">
                            <input type="checkbox">
                            <span class="btn btn-light"> Java </span>
                        </label>

                        <label class="checkbox-btn">
                            <input type="checkbox">
                            <span class="btn btn-light"> Python </span>
                        </label>

                        <label class="checkbox-btn">
                            <input type="checkbox">
                            <span class="btn btn-light"> PHP </span>
                        </label>

                        <label class="checkbox-btn">
                            <input type="checkbox">
                            <span class="btn btn-light"> HTML </span>
                        </label> <label class="checkbox-btn">
                            <input type="checkbox">
                            <span class="btn btn-light"> CSS </span>
                        </label> <label class="checkbox-btn">
                            <input type="checkbox">
                            <span class="btn btn-light"> Java Script </span>
                        </label> <label class="checkbox-btn">
                            <input type="checkbox">
                            <span class="btn btn-light"> SQL </span>
                        </label> <label class="checkbox-btn">
                            <input type="checkbox">
                            <span class="btn btn-light"> Vue </span>
                        </label> <label class="checkbox-btn">
                            <input type="checkbox">
                            <span class="btn btn-light"> React </span>
                        </label> <label class="checkbox-btn">
                            <input type="checkbox">
                            <span class="btn btn-light"> Node JS </span>
                        </label> <label class="checkbox-btn">
                            <input type="checkbox">
                            <span class="btn btn-light"> C </span>
                        </label> <label class="checkbox-btn">
                            <input type="checkbox">
                            <span class="btn btn-light"> C++ </span>
                        </label> <label class="checkbox-btn">
                            <input type="checkbox">
                            <span class="btn btn-light"> C# </span>
                        </label>
                    </div>
                    <!-- card-body.// -->
                </div>
            </article>
            <!-- filter-group .// -->
            <!-- card.// -->
            @auth
            <button class="btn btn-block btn-primary">Apply</button>
            @else
                <button style="display:none;" class="btn btn-block btn-primary">Apply</button>

            @endauth

        </article>
    </div>
</div>
<footer>
    <p style="float: right;padding-right: 25px;" class="float-end"><a href="#">Back to top ☝</a></p>
    <p style="text-align: center;">&copy; Job Ring. 2020 &middot; <a href="privacy.html">Privacy</a> &middot; <a href="terms.html">Terms</a> &middot;
        <a href="contact-us.html">Contact Us</a>
    </p>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>


<script>
    function page2() {
        location.href = location.href + "page/2";
        console.log(location.href);
    }
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

</script>


</body>

</html>

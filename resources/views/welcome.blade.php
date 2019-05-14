@extends("layout.app")


@section("content")
            <div id="carousel-example-1z" class="carousel slide carousel-fade carous" data-ride="carousel">
                    <!--Indicators-->
                <ol class="carousel-indicators">
                <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                <li data-target="#carousel-example-1z" data-slide-to="3"></li>
                </ol>
                <!--/.Indicators-->

                <!--Slides-->
                <div class="carousel-inner imgCont" role="listbox">

                <!--First slide-->
                <div class="carousel-item active">
                    <div class="view" style="background-image: url('/img1.jpg'); background-repeat: no-repeat; background-size: cover;">

                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center textCont">

                        <!-- Content -->
                        <div class="text-right white-text mx-5 wow fadeIn">
                        <h1 class="m-0">
                            <strong>With strong team spirit</strong>
                        </h1>

                        <p class="lead">
                            The best is inevitable<br/>More is coming
                        </p>

                        {{-- <a target="_blank" href="https://mdbootstrap.com/bootstrap-tutorial/" class="btn btn-outline-white btn-lg">Visit gallery
                            <i class="fa fa-music ml-2"></i>
                        </a> --}}
                        </div>
                        <!-- Content -->

                    </div>
                    <!-- Mask & flexbox options-->

                    </div>
                </div>
                <!--/First slide-->

                <!--Second slide-->
                <div class="carousel-item">
                    <div class="view" style="background-image: url('/img2.jpg'); background-repeat: no-repeat; background-size: cover;">
                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center textCont">

                        <!-- Content -->
                        <div class="text-right white-text mx-5 wow fadeIn">
                        <h1 class="m-0">
                            <strong>Taking Your Business To Greater Heights</strong>
                        </h1>

                        <p class="lead">
                            Sky High<br />The best is all we serve
                        </p>

                        {{-- <a target="_blank" href="https://mdbootstrap.com/bootstrap-tutorial/" class="btn btn-outline-white btn-lg">Visit gallery
                            <i class="fa fa-music ml-2"></i>
                        </a> --}}
                        </div>
                        <!-- Content -->

                    </div>
                    <!-- Mask & flexbox options-->

                    </div>
                </div>
                <!--/Second slide-->

                <!--Third slide-->
                <div class="carousel-item">
                    <div class="view" style="background-image: url('./img5.jpg'); background-repeat: no-repeat; background-size: cover;">

                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center textCont">

                        <!-- Content -->
                        <div class="text-right white-text mx-5 wow fadeIn">
                        <h1 class="m-0">
                            <strong>With All Resources To Serve</strong>
                        </h1>
                        <p class="lead">
                            Let us walk your business<br />to the top
                        </p>

                        {{-- <a target="_blank" href="https://mdbootstrap.com/bootstrap-tutorial/" class="btn btn-outline-white btn-lg">Visit gallery
                            <i class="fa fa-music ml-2"></i>
                        </a> --}}
                        </div>
                        <!-- Content -->

                    </div>
                    <!-- Mask & flexbox options-->

                    </div>
                </div>
                <!--/Third slide-->
                <!--Fourth slide-->
                <div class="carousel-item">
                        <div class="view" style="background-image: url('./img4.jpg'); background-repeat: no-repeat; background-size: cover;">
    
                        <!-- Mask & flexbox options-->
                        <div class="mask rgba-black-light d-flex justify-content-center align-items-center textCont">
    
                            <!-- Content -->
                            <div class="text-right white-text mx-5 wow fadeIn">
                            <h1 class="m-0">
                                <strong>Hands On To Return The Best</strong>
                            </h1>
    
                            <p class="lead">
                                A team of dedicated staff<br />And Lots More ...
                            </p>
    
                            {{-- <a target="_blank" href="https://mdbootstrap.com/bootstrap-tutorial/" class="btn btn-outline-white btn-lg">Visit gallery
                                <i class="fa fa-music ml-2"></i>
                            </a> --}}
                            </div>
                            <!-- Content -->
    
                        </div>
                        <!-- Mask & flexbox options-->
    
                        </div>
                    </div>
                    <!--/Third slide-->
    
                </div>
                <!--/.Slides-->

                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->

            </div>
        <!--/.Carousel Wrapper-->

        <div class="container-fluid">
            <div class="row">
                <div class="col-12 msgArea p-5">
                    <i class="fa fa-users iconEfull"></i>
                    <br/>
                    <div class="briefMsg lead">
                        Efull Technology Nigeria Limited is software solution
                        firm in Nigeria, providing world-class quality IT solutions for 
                        our clients since 2013.
                        Since inception, Efull Technology has grown into a force to be reckoned
                        within the IT industries, providing state of the art end-user solutions and hardware sales and support, which help our customers achieve their business goals
                    </div>
                </div>
            </div>
            <div class="row service">
                <div class="col-7 msgArea p-5 imgArea text-right">
                    <span class="h2-responsive header" style="color: orangered;">Our Services</span><br/>
                    <div class="lead ">
                        Efull Technology is a competent provider of any kind
                         of software solutions including mission critcal business applications,
                         complex engineering software, data centric analytical software, smart device solutions,
                         web solutions and so on. Our expertise lies clearly in perceiving the business goals of our customers, choosing and developing
                         the most appropriate technologies solutions that efficiently catered to their business needs.
                    </div>                    
                </div>
                <div class="col-5 sideImg">

                </div>
            </div>
            <div class="row msgArea lead">
                <div class="col-4">
                    <i class="fa fa-desktop m-4"></i><br/>
                    <span class="h3-responsive heads">SOFTWARE DEVELOPMENT</span><br />
                    <div class="logoInfo p-2">
                        We are an experienced software development firm
                        providing cutting-edge software solution services. 
                        Our cost effective solutions are built specifically for organizations by 
                        utilizing an intimate understanding of their business and industry landscape.
                        We offer rich, user-friendly and robust applications in combination with any modern database system.
                        The application can be totally standalone running in a single machine, network solutions or internet connected applications
                        
                    </div>
                </div>
                <div class="col-4">
                    <i class="fa fa-database m-4"></i><br/>
                    <span class="h3-responsive heads">DATABASE DEVELOPMENT</span><br />
                    <div class="logoInfo p-2">
                       We offer different types of database development services from design to reporting.
                       Efull Technology is experienced in standard database technologies like Oracle, Microsoft SQL Server, MySQL, PostgreSQL
                       and different BigData and Cloud database systems. We maintain bast practices in planning, development, maintenance and security including ongoing
                       monitoring and automation when needed.
            
                    </div>
                </div>
                <div class="col-4">
                    <i class="fa fa-check m-4"></i><br/>
                    <span class="h3-responsive heads">SOFTWARE TESTING</span><br />
                    <div class="logoInfo p-2">
                        We owe it to ourselves and to our clients to deliver the best application by providing (SQA)
                        Software Quality Assurance. We offer different types of software testing services from test case design to test report generation.
                        We are experienced in functional and nonfunctional testing. We maintain best practices in test planning, test case design, test environment creation, test case execution, bug 
                        reporting process and finally test report generation.
                    </div>
                </div>
            </div>
        </div>
@endsection

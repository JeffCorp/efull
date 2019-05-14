@extends("layout.app")


@section("content")
    <!-- Material form contact -->
    <div class="container-fluid" style="background: #ccc;">
        <div class="row" style="padding-top: 100px;">
            <div class="col-8 offset-2">
                <div class="card">
                    <h5 class="card-header orangeR white-text text-center py-4">
                        <strong>Contact us</strong>
                    </h5>
                    <!--Section: Contact v.2-->
                    <section class="mb-4 p-5">
                        <!--Section heading-->
                        <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
                        <!--Section description-->
                        <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
                            a matter of hours to help you.</p>
                        
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-md-9 mb-md-0 mb-5">
                                <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                                    <!--Grid row-->
                                    <div class="row">
                                        <!--Grid column-->
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <input type="text" id="name" name="name" class="form-control">
                                                <label for="name" class="">Your name</label>
                                            </div>
                                        </div>
                                        <!--Grid column-->
                        
                                        <!--Grid column-->
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <input type="text" id="email" name="email" class="form-control">
                                                <label for="email" class="">Your email</label>
                                            </div>
                                        </div>
                                        <!--Grid column-->
                                    </div>
                                    <!--Grid row-->
                        
                                    <!--Grid row-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form mb-0">
                                                <input type="text" id="subject" name="subject" class="form-control">
                                                <label for="subject" class="">Subject</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Grid row-->
                        
                                    <!--Grid row-->
                                    <div class="row">
                                        <!--Grid column-->
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                                <label for="message">Your message</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Grid row-->
                                </form>
                                <div class="text-center text-md-left">
                                    <a class="btn orangeR" onclick="document.getElementById('contact-form').submit();">Send</a>
                                </div>
                                <div class="status"></div>
                            </div>
                            <!--Grid column-->
                    
                            <!--Grid column-->
                            <div class="col-md-3 text-center">
                                <ul class="list-unstyled mb-0">
                                    <li><i class="fas fa-map-marker-alt fa-2x"></i>
                                        <p>19, Oyo street, Garki, Area II, FCT - Abuja</p>
                                    </li>
                    
                                    <li><i class="fas fa-phone mt-4 fa-2x"></i>
                                        <p>+(234) 818 999 0006</p>
                                    </li>
                    
                                    <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                                        <p>markets@efulltech.com</p>
                                    </li>
                                </ul>
                            </div>
                            <!--Grid column-->
                        </div>    
                    </section>
                    <!--Section: Contact v.2-->
                    <!-- Material form contact -->
                </div>
            </div>
        </div>
    </div>
@endsection
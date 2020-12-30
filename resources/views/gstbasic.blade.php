    @include('header') 
    <body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">
      <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section id="pricing-plan">
                  <!-- Buy Form-->
                  <div class="horizontal-wizard">
            <div class="login-card">
                <div class="login-card-body">
                    <form action="{{url('/payment-initiate-request')}}" method="POST">
                        <div class="row">
                            <input type="hidden" value="{{csrf_token()}}" name="_token" />
                            <div class="col-sm-6"
                            <label class="form-label" for="username">Name</label> : 
                            <input type="text" class="form-control" id="name"  name="name">
                            </div>
                        </div></br>
                        <div class="row">
                          
                            <label for="email">Email</label> : 
                            <input type="text" class="form-control" id="email" name="email">
                        </div></br>
                        <div class="row">
                            <label for="contactNumber">Contact Number</label> : 
                            <input type="text" class="form-control" id="contactNumber" name="contactNumber">
                        </div></br>
                        <div class="row">
                            <label for="address">Address</label> : 
                            <input type="text" class="form-control" id="address" name="address">
                        </div></br>
                        <div class="row">
                            <label for="amount">Amount</label> : 
                            <input type="text" class="form-control" id="amount" name="amount" value="399" readonly>
                        </div></br>
                        <input type="hidden" id="plan" name="plan" value="GST BASIC">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>                    
                </div>
            </div>
        </div>
                    <!-- pricing free trial -->
                    <div class="pricing-free-trial">
                        <div class="row">
                            <div class="col-12 col-lg-10 col-lg-offset-3 mx-auto">
                                <div class="pricing-trial-content d-flex justify-content-between">
                                    <div class="text-center text-md-left mt-3">
                                        <h3 class="text-primary">Still not convinced? Start with a 14-day FREE trial!</h3>
                                        <h5>You will get full access to with all the features for 14 days.</h5>
                                        <button class="btn btn-primary mt-2 mt-lg-3">Start 14-day FREE trial</button>
                                    </div>

                                    <!-- image -->
                                    <img src="{{asset('images/illustration/pricing-Illustration.svg')}}" class="pricing-trial-img img-fluid" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ pricing free trial -->
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->
@include('footer')
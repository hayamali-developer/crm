<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from WebGround.com/WebGround/layouts/light/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Aug 2019 13:30:23 GMT -->
<head>
        <meta charset="utf-8" />
        <title>CRM</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="WebGround" name="description" />
        <meta content="WebGround" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('dash')}}/assets/images/elev8.webp">

        <!-- App css -->
        <link href="{{asset('dash')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('dash')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('dash')}}/assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="authentication-bg authentication-bg-pattern"
 >

        <div class="account-pages mt-5 mb-5"
        style="background-image:url({{asset('dash')}}/assets/images/expo.jpg)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">

                                <div class="text-center w-75 m-auto">
                                    <a href="index.html">
                                        <span><img src="{{asset('dash')}}/assets/images/elev8.webp" alt="" height="55"></span>
                                    </a>
                                    <p class="text-muted mb-4 mt-3">Enter your email address and password to access admin panel.</p>
                                </div>

                                <form action="{{route('post.login')}}" method="Post">
                                       @csrf
                                    <div class="form-group mb-3">
                                        <label for="emailaddress">Email address</label>
                                        <input class="form-control" type="email" name="email" value="{{old('email')}}" id="emailaddress" required="" placeholder="Enter your email">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" required="" name="password" value="{{old('password')}}"  placeholder="Enter your password">
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                            <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block"
                                        style="background-color: greenyellow"
                                         type="submit" name="submit" value="submit"> Log In </button>
                                    </div>

                                </form>



                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->




        <!-- Vendor js -->
        <script src="{{asset('dash')}}/assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="{{asset('dash')}}/assets/js/app.min.js"></script>

    </body>

<!-- Mirrored from WebGround.com/WebGround/layouts/light/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Aug 2019 13:30:23 GMT -->
</html>

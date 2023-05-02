<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- custom css link  -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/luluWind.css')}}">

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('assets/images/favicon.jpg')}}">

    <!-- font-awesome link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- jquery link  -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Innova Infosys</title>
  </head>
  <body>

      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{route('Home')}}">Innova Infosys</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <form class="form-inline my-2 my-lg-0">
                <ul class="navbar-nav mr-auto header-ul-list">
                    <li class="nav-item active">
                    <a class="nav-link" href="{{route('Home')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('Home')}}#solution">Solution</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('Home')}}#industry">Industry</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('AboutUs')}}">About Us</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('Home')}}#contact">Contact</a>
                    </li>
                </ul>
            </form>
            </div>
        </div>
      </nav>

      @yield('content')





    <!-- footer section code start from here  -->

    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="img-div">
                        <img src="{{asset('assets/images/logo.png')}}" class="img-fluid" alt="">
                        <p>Start working with Firmbee to elevate your firm's efficiency. Manage teams and tasks with our project management module. Use CRM tools, regain finance control, and issue invoices with our free invoicing app.</p>
                        <div class="icons-div">
                            <a href="https://www.facebook.com/innova.infosys"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://twitter.com/InnovaInfosysTech"><i class="fa-brands fa-twitter"></i></a>
                            <a href="https://youtube.com/InnovaInfosysTech"><i class="fa-brands fa-youtube"></i></a>
                            <a href="https://instagram.com/InnovaInfosysTech"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 footer-office-address">
                    <h4>Office Address</h4>
                    <p>Email : office@innovainfosys.com</p>
                    <p>Phone : + 8801964353056</p>
                     <p>Address : House#10, Main Road, Block#C, Dhaka 1219</p>
                </div>
                <div class="col-md-4 useful-links">
                    <h4>Useful Links</h4>
                    <div class="footer-icon-and-text"><i class="fa-solid fa-angle-right"></i><span class="footer-icon-arrow-text"><a href="{{route('FinanceBanking')}}">Finance and Banking</a></span></div>
                    <div class="footer-icon-and-text"><i class="fa-solid fa-angle-right"></i><span class="footer-icon-arrow-text"><a href="{{route('Healthcare')}}">Healthcare</a></span></div>
                    <div class="footer-icon-and-text"><i class="fa-solid fa-angle-right"></i><span class="footer-icon-arrow-text"><a href="{{route('EcommerceRetails')}}">E-commerce and Retail</a></span></div>
                    <div class="footer-icon-and-text"><i class="fa-solid fa-angle-right"></i><span class="footer-icon-arrow-text"><a href="{{route('Transportation')}}">Transporation</a></span></div>
                    <div class="footer-icon-and-text"><i class="fa-solid fa-angle-right"></i><span class="footer-icon-arrow-text"><a href="{{route('Logistics')}}">Logistics</a></span></div>
                    <div class="footer-icon-and-text"><i class="fa-solid fa-angle-right"></i><span class="footer-icon-arrow-text"><a href="{{route('Manufacturing')}}">Manufacturing</a></span></div>
                    <div class="footer-icon-and-text"><i class="fa-solid fa-angle-right"></i><span class="footer-icon-arrow-text"><a href="{{route('TermsCondition')}}">Terms Of Service</a></span></div>
                </div>

            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="copyright">
                <p>Copyright © 2023 Innova Infosys</p>
            </div>
        </div>
    </footer>

    <!-- footer section code end from here  -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



    <script src="https://unpkg.com/ityped@0.0.10"></script>
      <script src="{{asset('assets/js/main.js')}}"></script>

         <script>

        </script>

  </body>
</html>

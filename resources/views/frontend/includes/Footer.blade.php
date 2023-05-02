

    <!-- contact form section code start from here  -->

    <section id="contact">
        <div class="container">
            <div class="row contact-row">
                <div class="col-md-6 contact-col1"><img src="{{asset('assets/images/contact-left.jpg')}}" class="img-fluid" alt=""></div>
                <div class="col-md-6 contact-col2">
                    <h3>Set and accomplish your</h3>
                    <h3 style="color:#ffc107;">team goals with Innova Infosys</h3>

                    <form class="register-form" action="{{route('contactInsert')}}" method="POST" name="form">
                        @csrf
                        <div class="d-none"></div>
                        <div><label class="form-label" for="email">E-mail:</label>
                        <input id="email" class="form-control" name="email" type="email" placeholder="Mail"></div>

                        <div class="mb-4"><label class="form-label" for="password">Write Message:</label>
                        <textarea name="message" id="" class="form-control" cols="30" rows="6" placeholder="Message"></textarea>
                        </div>

                        <div class="form-check"><label class="checkbox mr-3 mr-0" style="margin-top: 0 !important; margin-bottom: .5rem !important;" data-placement="top"><input class="form-check-input" required="required" name="privacy_policy" type="checkbox">
                        I accept the
                        <a class="font-weight-bolder" href="{{route('TermsCondition')}}" target="_blank" rel="noopener">terms of service</a>
                        </label></div>
                        <div class="start-now-btn"><button class="mt-3 c-sub-btn" type="submit">Start now!</button></div>
                        </form>

                </div>
            </div>
        </div>
    </section>

    <!-- contact form section code end from here  -->


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

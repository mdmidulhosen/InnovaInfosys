    @include('frontend.includes.Header')
    <!-- banner code start from here  -->
    <section class="banner-sec" id="home">
        <div class="container">
            <div class="row align-center banner-row">
                <div class="col-md-6 banner-col1">
                    <h1 class="banner-title">Entire Business <br>in One Ecosystem</h1>
                    <p class="banner-desc">All in one business management platform which manages your firm’s tasks, finances, commerce, accounting and HR processes.
                    </p>


                    {{-- <div class="banner-newsletter">
                        <input type="email" placeholder="Enter Your Email" class="newsletter"><button>Submit</button>
                    </div> --}}
                </div>
                <div class="col-md-6 banner-col2">
                    <img src="{{asset('assets/images/loremImage.png')}}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- banner code start from here  -->

    <!-- solution section code start from here  -->

    <section class="banner-2nd">
        <div class="container">
            <div class="row">
               <div class="section-title-sub text-center mb-4">
                <h1 class="section-title">For several industries</h1>
                <p class="section-sub">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque at, consequatur optio, quibusdam eos.</p>
               </div>
                <div class="col-md-2">
                    <div class="sol-item-wrap sol-item-wrap-active">
                        <i class="fa-solid fa-dollar-sign"></i>
                        <h6 class="sol-t1">Finance and Banking</h6>
                        <h6 class="sol-t1">Management</h6>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="sol-item-wrap lorem">
                        <i class="fa-solid fa-gear"></i>
                        <h6 class="sol-t1">Healthcare</h6>
                        <h6 class="sol-t1">Management</h6>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="sol-item-wrap">
                        <i class="fa-solid fa-image"></i>
                        <h6 class="sol-t1">E-commerce and Retail</h6>
                        <h6 class="sol-t1">Management</h6>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="sol-item-wrap">
                        <i class="fa-solid fa-person"></i>
                        <h6 class="sol-t1">Transporation</h6>
                        <h6 class="sol-t1">Management</h6>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="sol-item-wrap">
                        <i class="fa-solid fa-calendar"></i>
                        <h6 class="sol-t1">Logistics</h6>
                        <h6 class="sol-t1">Management</h6>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="sol-item-wrap">
                        <i class="fa-solid fa-desktop"></i>
                        <h6 class="sol-t1">Manufacturing</h6>
                        <h6 class="sol-t1">Management</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Manage section code start from here  -->

    <section class="manage-section" id="solution">
        <div class="container">
            <div class="row" style="justify-content: center;">
                <div class="toggle-icons row">
                    <div class="icon-item col-md-1 icon-1 first-icon" id="icon-1" onclick="active1()"><i class="fa-solid fa-clipboard"></i></div>
                    <div class="icon-item col-md-1 icon-2" id="icon-2" onclick="active2()"><i class="fa-solid fa-bars-progress"></i></div>
                    <div class="icon-item col-md-1 icon-3" id="icon-3" onclick="active3()"><i class="fa-solid fa-gear"></i></div>
                    <div class="icon-item col-md-1 icon-4" id="icon-4" onclick="active4()"><i class="fa-sharp fa-solid fa-id-card-clip"></i></div>
                    <div class="icon-item col-md-1 icon-5" id="icon-5" onclick="active5()"><i class="fa-solid fa-people-roof"></i></div>
                    <div class="icon-item col-md-1 icon-6" id="icon-6" onclick="active6()"><i class="fa-solid fa-wallet"></i></div>
                    <div class="icon-item col-md-1 icon-7" id="icon-7" onclick="active7()"><i class="fa-solid fa-cart-shopping"></i></div>
                    <div class="icon-item col-md-1 icon-8" id="icon-8" onclick="active8()"><i class="fa-solid fa-file-invoice"></i></div>
                    <div class="icon-item col-md-1 icon-9" id="icon-9" onclick="active9()"><i class="fa-solid fa-table-cells"></i></div>
                    <div class="icon-item col-md-1 icon-10" id="icon-10" onclick="active10()"><i class="fa-solid fa-clock"></i></div>
                    <div class="icon-item col-md-1 icon-11" id="icon-11" onclick="active11()"><i class="fa-solid fa-box"></i></div>
                    <div class="icon-item col-md-1 icon-12" id="icon-12" onclick="active12()"><i class="fa-solid fa-file"></i></div>
                </div>
                <div class="section-title-sub text-center mb-4 click-option1" id="click-option1">
                    <h1 class="typing-animation section-title">Manage your firm’s <span class="ityped animtaion-text-color"></span> <br>from one central place</h1>
                    <p class="section-sub">With just one glance get to know your firm’s revenue total and check the statuses and due dates of client payments. Keep <br>project budget information organized by linking certain revenues to projects.</p>
                    <img src="{{asset('assets/images/products.jpg')}}" class="img-fluid" alt="">
                   </div>

                   <div class="section-title-sub text-center mb-4 click-option2" id="click-option2">
                    <h1 class="typing-animation section-title">Manage your firm’s <span class="ityped2 animtaion-text-color"></span> <br>from one central place</h1>
                    <p class="section-sub">With just one glance get to know your firm’s revenue total and check the statuses and due dates of client payments. Keep <br>project budget information organized by linking certain revenues to projects.</p>
                    <img src="{{asset('assets/images/tasks.jpg')}}" class="img-fluid" alt="">
                   </div>

                   <div class="section-title-sub text-center mb-4 click-option3" id="click-option3">
                    <h1 class="typing-animation section-title">Manage your firm’s <span class="ityped3 animtaion-text-color"></span> <br>from one central place</h1>
                    <p class="section-sub">With just one glance get to know your firm’s revenue total and check the statuses and due dates of client payments. Keep <br>project budget information organized by linking certain revenues to projects.</p>
                    <img src="{{asset('assets/images/workforce.jpg')}}" class="img-fluid" alt="">
                   </div>

                   <div class="section-title-sub text-center mb-4 click-option4" id="click-option4">
                    <h1 class="typing-animation section-title">Manage your firm’s <span class="ityped4 animtaion-text-color"></span> <br>from one central place</h1>
                    <p class="section-sub">With just one glance get to know your firm’s revenue total and check the statuses and due dates of client payments. Keep <br>project budget information organized by linking certain revenues to projects.</p>
                    <img src="{{asset('assets/images/contacts.jpg')}}" class="img-fluid" alt="">
                   </div>

                   <div class="section-title-sub text-center mb-4 click-option5" id="click-option5">
                    <h1 class="typing-animation section-title">Manage your firm’s <span class="ityped5 animtaion-text-color"></span> <br>from one central place</h1>
                    <p class="section-sub">With just one glance get to know your firm’s revenue total and check the statuses and due dates of client payments. Keep <br>project budget information organized by linking certain revenues to projects.</p>
                    <img src="{{asset('assets/images/recruitments.jpg')}}" class="img-fluid" alt="">
                   </div>

                   <div class="section-title-sub text-center mb-4 click-option6" id="click-option6">
                    <h1 class="typing-animation section-title">Manage your firm’s <span class="ityped6 animtaion-text-color"></span> <br>from one central place</h1>
                    <p class="section-sub">With just one glance get to know your firm’s revenue total and check the statuses and due dates of client payments. Keep <br>project budget information organized by linking certain revenues to projects.</p>
                    <img src="{{asset('assets/images/revenues.jpg')}}" class="img-fluid" alt="">
                   </div>

                   <div class="section-title-sub text-center mb-4 click-option7" id="click-option7">
                    <h1 class="typing-animation section-title">Manage your firm’s <span class="ityped7 animtaion-text-color"></span> <br>from one central place</h1>
                    <p class="section-sub">With just one glance get to know your firm’s revenue total and check the statuses and due dates of client payments. Keep <br>project budget information organized by linking certain revenues to projects.</p>
                    <img src="{{asset('assets/images/expenses.jpg')}}" class="img-fluid" alt="">
                   </div>

                   <div class="section-title-sub text-center mb-4 click-option8" id="click-option8">
                    <h1 class="typing-animation section-title">Manage your firm’s <span class="ityped8 animtaion-text-color"></span> <br>from one central place</h1>
                    <p class="section-sub">With just one glance get to know your firm’s revenue total and check the statuses and due dates of client payments. Keep <br>project budget information organized by linking certain revenues to projects.</p>
                    <img src="{{asset('assets/images/invoices.jpg')}}" class="img-fluid" alt="">
                   </div>

                   <div class="section-title-sub text-center mb-4 click-option9" id="click-option9">
                    <h1 class="typing-animation section-title">Manage your firm’s <span class="ityped9 animtaion-text-color"></span> <br>from one central place</h1>
                    <p class="section-sub">With just one glance get to know your firm’s revenue total and check the statuses and due dates of client payments. Keep <br>project budget information organized by linking certain revenues to projects.</p>
                    <img src="{{asset('assets/images/leads.png')}}" class="img-fluid" alt="">
                   </div>

                   <div class="section-title-sub text-center mb-4 click-option10" id="click-option10">
                    <h1 class="typing-animation section-title">Manage your firm’s <span class="ityped10 animtaion-text-color"></span> <br>from one central place</h1>
                    <p class="section-sub">With just one glance get to know your firm’s revenue total and check the statuses and due dates of client payments. Keep <br>project budget information organized by linking certain revenues to projects.</p>
                    <img src="{{asset('assets/images/deadlines.jpg')}}" class="img-fluid" alt="">
                   </div>

                   <div class="section-title-sub text-center mb-4 click-option11" id="click-option11">
                    <h1 class="typing-animation section-title">Manage your firm’s <span class="ityped11 animtaion-text-color"></span> <br>from one central place</h1>
                    <p class="section-sub">With just one glance get to know your firm’s revenue total and check the statuses and due dates of client payments. Keep <br>project budget information organized by linking certain revenues to projects.</p>
                    <img src="{{asset('assets/images/products.jpg')}}" class="img-fluid" alt="">
                   </div>

                   <div class="section-title-sub text-center mb-4 click-option12" id="click-option12">
                    <h1 class="typing-animation section-title">Manage your firm’s <span class="ityped12 animtaion-text-color"></span> <br>from one central place</h1>
                    <p class="section-sub">With just one glance get to know your firm’s revenue total and check the statuses and due dates of client payments. Keep <br>project budget information organized by linking certain revenues to projects.</p>
                    <img src="{{asset('assets/images/offers.jpg')}}" class="img-fluid" alt="">
                   </div>

            </div>
        </div>
    </section>




    <!-- Manage section code end from here  -->


    <!-- serveral idustry section start end from here  -->

    <section id="industry">
        <div class="container">
            <div class="row si-row">
                <div class="text-center mb-4">
                    <h1 class="section-title">For several industries</h1>
                    <p class="section-sub">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque at, consequatur optio, quibusdam eos.</p>
                   </div>
                   <div class="col-md-2 si-item" onclick="siContent1()">
                    <div class="si-item1 indus-item1 si-item1-changing" id="indus-item1">
                        <i class="fa-solid fa-dollar-sign"></i>
                        <h6 class="sol-t1">Finance and Banking</h6>
                    </div>
                   </div>

                   <div class="col-md-2 si-item" onclick="siContent2()">
                    <div class="si-item1 indus-item2" id="indus-item2">
                        <i class="fa-solid fa-gear"></i>
                        <h6 class="sol-t1">Healthcare</h6>
                    </div>
                   </div>

                   <div class="col-md-2 si-item" onclick="siContent3()">
                    <div class="si-item1 indus-item3" id="indus-item3">
                        <i class="fa-solid fa-image"></i>
                        <h6 class="sol-t1">E-commerce and Retail</h6>
                    </div>
                   </div>

                   <div class="col-md-2 si-item" onclick="siContent4()">
                    <div class="si-item1 indus-item4" id="indus-item4">
                         <i class="fa-solid fa-user-group"></i>
                        <h6 class="sol-t1">Transporation</h6>
                    </div>
                   </div>

                   <div class="col-md-2 si-item" onclick="siContent5()">
                    <div class="si-item1 indus-item5" id="indus-item5">
                        <i class="fa-solid fa-file"></i>
                        <h6 class="sol-t1">Logistics</h6>
                    </div>
                   </div>

                   <div class="col-md-2 si-item" onclick="siContent6()">
                    <div class="si-item1 indus-item6" id="indus-item6">
                        <i class="fa-solid fa-desktop"></i>
                        <h6 class="sol-t1">Manufacturing</h6>
                    </div>
                   </div>

                   <div class="si-content row" id="si-content-item1">
                    <div class="row si-align">
                        <div class="si-content-wrapper col-md-6">
                            <h3>Finance and Banking</h3>
                        <p>Finance and Banking: Our IT company offers a range of solutions to help streamline transaction processing, manage risk, and enhance customer service. With our expertise in the latest software and technologies, we can provide secure and reliable solutions that meet the unique needs of your organization.
                        </p>
                        </div>
                        <div class="si-content-wrapper col-md-2">
                            <button><a href="{{route('FinanceBanking')}}">Learn More</a></button>
                        </div>
                    </div>

                   </div>

                   <div class="si-content row" id="si-content-item2">
                    <div class="row si-align">
                        <div class="si-content-wrapper col-md-6">
                            <h3>Healthcare</h3>
                        <p>Healthcare: We understand the importance of managing patient data and electronic medical records with the utmost care and security. Our IT company can help you optimize your healthcare processes with customized solutions that improve efficiency and accuracy, from medical imaging to telemedicine.
                        </p>
                        </div>
                        <div class="si-content-wrapper col-md-2">
                            <button><a href="{{route('Healthcare')}}">Learn More</a></button>
                        </div>
                    </div>

                   </div>

                   <div class="si-content row " id="si-content-item3">
                     <div class="row si-align">
                        <div class="si-content-wrapper col-md-6">
                            <h3>E-commerce and Retail</h3>
                        <p>E-commerce and Retail: In the fast-paced world of e-commerce and retail, our IT company can help you stay ahead of the competition with cutting-edge technology and innovative solutions. We can assist with online platform management, inventory control, payment processing, and other critical aspects of your business.
                        </p>
                        </div>
                        <div class="si-content-wrapper col-md-2">
                            <button><a href="{{route('EcommerceRetails')}}">Learn More</a></button>
                        </div>
                     </div>

                   </div>

                   <div class="si-content row " id="si-content-item4">
                      <div class="row si-align">
                        <div class="si-content-wrapper col-md-6">
                            <h3>Transporation</h3>
                        <p>Transportation: Whether you're involved in logistics, fleet management, or supply chain optimization, our IT company has the expertise to help you succeed. We offer real-time tracking and efficient solutions that can help you streamline operations and improve customer service.
                        </p>
                        </div>
                        <div class="si-content-wrapper col-md-2">
                            <button><a href="{{route('Transportation')}}">Learn More</a></button>
                        </div>
                      </div>

                   </div>

                   <div class="si-content row " id="si-content-item5">
                      <div class="row si-align">
                        <div class="si-content-wrapper col-md-6">
                            <h3>Logistics</h3>
                        <p>Logistics: Our IT company understands the complexities of logistics and can provide solutions to help you manage inventory, optimize routes, and enhance customer service. We offer customized solutions that meet your unique needs and help you stay ahead in a competitive market.
                        </p>
                        </div>
                        <div class="si-content-wrapper col-md-2">
                            <button><a href="{{route('Logistics')}}">Learn More</a></button>
                        </div>
                      </div>

                   </div>

                   <div class="si-content row " id="si-content-item6">
                       <div class="row si-align">
                            <div class="si-content-wrapper col-md-6">
                                <h3>Manufacturing</h3>
                            <p>Manufacturing: We know that manufacturing requires precision and efficiency, and our IT company can help you achieve both. Our solutions include inventory management, production optimization, and supply chain management, which can help you reduce costs and improve profitability.
                            </p>
                            </div>
                            <div class="si-content-wrapper col-md-2">
                                <button><a href="{{route('Manufacturing')}}">Learn More</a></button>
                            </div>
                       </div>

                   </div>

            </div>
        </div>
    </section>

    <!-- serveral idustry section code end from here  -->

    <!-- one app section code start from here  -->

    <section>
        <div class="container">
            <div class="row">
                <div class="text-center mb-4">
                    <h1 class="section-title">Everything in one app!</h1>
                    <p class="section-sub">No additional costs for special features, no need for integrations.</p>
                   </div>

                   <div class="col-md-4 text-center one-app-col">
                    <i class="fa-solid fa-hands-holding-circle"></i>
                    <h3 class="one-app-title">Projects</h3>
                    <p class="one-app-desc">Design your team’s workflow, assign coworkers to tasks and track the project progress with our customizable kanban boards.</p>
                   </div>

                   <div class="col-md-4 text-center one-app-col">
                    <i class="fa-solid fa-user-group"></i>
                    <h3 class="one-app-title">Team work</h3>
                    <p class="one-app-desc">Spark team collaboration thanks to options like commenting, tagging users and leaving structured feedback.</p>
                   </div>

                   <div class="col-md-4 text-center one-app-col">
                    <i class="fa-sharp fa-solid fa-location-dot"></i>
                    <h3 class="one-app-title">Remote work</h3>
                    <p class="one-app-desc">Cooperate and achieve team goals, whether you’re in the same room or in different corners of the world.</p>
                   </div>

                   <div class="col-md-4 text-center one-app-col">
                    <i class="fa-solid fa-wallet"></i>
                    <h3 class="one-app-title">Finances</h3>
                    <p class="one-app-desc">Stay on top of your budget, track the statuses of your payments and issue invoices automatically with our free invoicing app.</p>
                   </div>

                   <div class="col-md-4 text-center one-app-col">
                    <i class="fa-solid fa-file"></i>
                    <h3 class="one-app-title">Recruitment</h3>
                    <p class="one-app-desc">From search to hire, carry out your entire recruitment processes in a planned and structured way.</p>
                   </div>

                   <div class="col-md-4 text-center one-app-col">
                    <i class="fa-solid fa-user"></i>
                    <h3 class="one-app-title">CRM Tools</h3>
                    <p class="one-app-desc">Keep client details easily accessible for your team by organizing information and sharing it at scale.</p>
                   </div>

            </div>
        </div>
    </section>

    <!-- one app section code end from here  -->
    @include('frontend.includes.Footer')

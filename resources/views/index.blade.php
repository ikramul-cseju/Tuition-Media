<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JU Tuition Media System</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/image/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/image/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/image/favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="/css/style.css">
    

</head>

<body>


    <!-- header section starts  -->

    <header>

        <div id="menu" class="fas fa-bars"></div>

        <img src="/image/logo.jpg" width="90px" height="70px" alt="LOGO">

        <nav class="navbar">
            <ul>
                <li><a class="active" href="#home"><i class="fa fa-fw fa-home"></i>Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#course">Course</a></li>
                <li><a href="#teacher">Teacher</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="{{url('/payment')}}">Payment</a></li>

                <li> <a  href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>


    </header>

    <!-- header section ends -->





    <!-- home section starts  -->

    <section class="home" id="home">

        <h1>JU Tuition Media</h1>
        <p>One of the trastest Online Tution Media and Education Directory. </p>
       

        <div class="shape"></div>

    </section>

    <!-- home section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <div class="image">
            <img src="image/study.png" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>Find a best Home Tutor or Tuition Job in Dhaka,Savar, Dhanmondi, Uttara, Gulshan or anywhere in Dhaka. Just register as a Home Tutor/ Student to get a Tuition or get a qualified Tutor without wasting your valuable time..</p>
            <p>.We are providing the best grade teacher of Bangladesh in Dhaka City(Student of dhak University,BUET,Jahangirnagar University,Jagannath University,BUTEX etc</p>
            <a href="#"><button class="btn">learn more</button></a>
        </div>

    </section>

    <!-- about section ends -->

    <!-- course section starts  -->

    <section class="course" id="course">

        <h1 class="heading">Our Popular Courses</h1>

        <div class="box-container">

            <div class="box">
                <img src="image/physics.jpg" alt="">

                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                    <a href="#" class="title">Physics</a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, beatae. Modi quos excepturi id quibusdam? Molestiae quis nihil non debitis!</p>
                    <div class="info">
                        <h3> <i class="far fa-clock"></i> Class-9 </h3>
                        <h3> <i class="far fa-calendar-alt"></i> 6 months </h3>
                        <h3> <i class="fas fa-book"></i> 4 days/week </h3>
                    </div>
                </div>
            </div>

            <div class="box">
                <img src="image/physics.jpg" alt="">

                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                    <a href="#" class="title">Chemistry</a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, beatae. Modi quos excepturi id quibusdam? Molestiae quis nihil non debitis!</p>
                    <div class="info">
                        <h3> <i class="far fa-clock"></i>Class-10 </h3>
                        <h3> <i class="far fa-calendar-alt"></i>6 months </h3>
                        <h3> <i class="fas fa-book"></i> 4 days/week </h3>
                    </div>
                </div>
            </div>

            <div class="box">
                <img src="image/physics.jpg" alt="">

                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                    <a href="#" class="title">ICT</a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, beatae. Modi quos excepturi id quibusdam? Molestiae quis nihil non debitis!</p>
                    <div class="info">
                        <h3> <i class="far fa-clock"></i>Class-11 </h3>
                        <h3> <i class="far fa-calendar-alt"></i> 2 months </h3>
                        <h3> <i class="fas fa-book"></i> 4 days/week </h3>
                    </div>
                </div>
            </div>

            <div class="box">
                <img src="image/physics.jpg" alt="">

                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                    <a href="#" class="title">Statistics</a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, beatae. Modi quos excepturi id quibusdam? Molestiae quis nihil non debitis!</p>
                    <div class="info">
                        <h3> <i class="far fa-clock"></i>Class-12 </h3>
                        <h3> <i class="far fa-calendar-alt"></i> 6 months </h3>
                        <h3> <i class="fas fa-book"></i> 4 days/week </h3>
                    </div>
                </div>
            </div>

            <div class="box">
                <img src="image/physics.jpg" alt="">

                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                    <a href="#" class="title">English</a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, beatae. Modi quos excepturi id quibusdam? Molestiae quis nihil non debitis!</p>
                    <div class="info">
                        <h3> <i class="far fa-clock"></i>Class-9 </h3>
                        <h3> <i class="far fa-calendar-alt"></i> 6 months </h3>
                        <h3> <i class="fas fa-book"></i> 4 days/week </h3>
                    </div>
                </div>
            </div>

            <div class="box">
                <img src="image/physics.jpg" alt="">

                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                    <a href="#" class="title">Economics</a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, beatae. Modi quos excepturi id quibusdam? Molestiae quis nihil non debitis!</p>
                    <div class="info">
                        <h3> <i class="far fa-clock"></i>Class-12 </h3>
                        <h3> <i class="far fa-calendar-alt"></i> 2 months </h3>
                        <h3> <i class="fas fa-book"></i> 4 days/week </h3>
                    </div>
                </div>

            </div>
            <a href="{{url('/course')}}"><button class="btn">more course</button></a>

        </div>
        <!-- <div class="courses">
    <a href="#"  ><button class="btn" >learn more course</button></a>
</div> -->




        <!-- course section ends -->

        <!-- teacher section starts  -->

        <section>

            <h1 class="heading" class="teacher" id="teacher">Featured Tutors</h1>
            <br>
            <marquee style="font-size: 30px;font-weight: bold;font-family: sans-serif ; color: rgb(13, 0, 201);">Featured tutors are verified and more trusted than general tutors. We always recommend to search for a featured / premium tutor other than general tutors.</marquee>

            <div class="box-container">

                <div class="box">
                    <img src="image/emon.jpg" alt="">

                    <div class="content">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half"></i>
                        </div>
                        <a href="#" class="title">Ikramul Islam Emon</a>
                        <p>Student of Dept of Computer Science & Engineering, Jahangirnagar University. Experienced in teaching Mathematics,ICT & also experience in admission</p>

                    </div>
                </div>
                <div class="box">
                    <img src="image/saifi.jpg" alt="">

                    <div class="content">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half"></i>
                        </div>
                        <a href="#" class="title">Saifi Alam Nirjhor</a>
                        <p> Student of Dept of Computer Science & Engineering, Jahangirnagar University. Problem solver ,Experienced in teaching Physics,ICT</p>

                    </div>
                </div>

                <div class="box">
                    <img src="image/sohan.jpg" alt="">

                    <div class="content">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half"></i>
                        </div>
                        <a href="#" class="title">Sohanur Rahman</a>
                        <p> Student of Dept of Computer Science & Engineering, Jahangirnagar University. Problem solver ,Experienced in teaching Physics,ICT</p>

                    </div>
                </div>
                <div class="box">
                    <img src="image/enayet.jpg" alt="">

                    <div class="content">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half"></i>
                        </div>
                        <a href="#" class="title">Anayet Ullah</a>
                        <p> Student of Dept of Computer Science & Engineering, Jahangirnagar University. Problem solver ,Experienced in teaching Physics,ICT</p>

                    </div>
                </div>
                <div class="box">
                    <img src="image/tibro.jpg" alt="">

                    <div class="content">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half"></i>
                        </div>
                        <a href="#" class="title">Md.Shakil Hossain</a>
                        <p> Student of Dept of Computer Science & Engineering, Jahangirnagar University. Problem solver ,Experienced in teaching Physics,ICT</p>

                    </div>
                </div>

                <a href="{{url('/teacher')}}"><button class="btn">more </button></a>

            </div>
        </section>


        <!-- teacher section ends -->

        <!-- contact section starts  -->

        <section class="contact" id="contact">

            <h1 class="heading">contact us</h1>

            <div class="row">

                <form action="https://formsubmit.co/492b5601ca4396514416060d18735dac" method="POST">
                    <input type="text" placeholder="full name" class="box" name="name">
                    <input type="email" placeholder="your email" class="box" name="email">

                    <input type="number" placeholder="your number" name="number" class="box">
                    <textarea name="message" id="" cols="30" rows="10" class="box address" placeholder="your message"></textarea>
                    <input type="submit" class="btn" value="send now">
                </form>

                <div class="image">
                    <img src="images/contact-img.png" alt="">
                </div>

            </div>

        </section>

        <!-- contact section ends -->



        <!-- footer section starts  -->

        <div class="footer">

            <div class="box-container">

                <div class="box">
                    <h3>Important links</h3>
                    <a href="{{url('/privacy')}}">Privacy Policy</a>
                    <a href="{{url('/privacy')}}">Terms & Condition</a>

                </div>

                <div class="box">
                    <h3>Quick links</h3>
                    <a href="#home">home</a>
                    <a href="#about">about</a>
                    <a href="#course">course</a>
                    <a href="#teacher">teachers</a>
                    <a href="#contact">contact</a>
                </div>

                <div class="box">
                    <h3>contact info</h3>
                    <p> <i class="fas fa-map-marker-alt"></i> Savar ,Dhaka-1340 </p>
                    <p> <i class="fas fa-envelope"></i>emonju330@gmail.com</p>
                    <a href="#"><i class="fab fa-facebook"></i> Ju Tuition Media</a>
                    <p> <i class="fas fa-phone"></i> +880177******* </p>
                    <p> <i class="fas fa-phone"></i> +880167******* </p>
                </div>

            </div>

            <h1 class="credit">created by <a href="#">&copy;Emon Ikram</a> all rights reserved. </h1>

        </div>

        <!-- footer section ends -->





















        <!-- jquery cdn link  -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <!-- custom js file link  -->
        <script src="script.js"></script>

</body>

</html>
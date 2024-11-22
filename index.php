<?php
// Start session to check if the user is logged in
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Afiq Ikhwan</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Favicon
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.png">

    <!-- Stylesheets
    ================================================== -->
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<header id="masthead" class="site-header">
        <nav id="primary-navigation" class="site-navigation">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <a class="site-logo"><img src="afiq_ikhwan-removebg-preview.png" alt="logo"></a>
                    <button type="button" class="navbar-toggle collapsed" data-target="#portfolio-perfect-collapse" aria-expanded="false">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div><!-- /.navbar-header -->

                <div class="main-menu" id="portfolio-perfect-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="page-scroll"><a href="#hero">Home</a></li>
                        <li class="page-scroll"><a href="#about">About</a></li>
                        <li class="page-scroll"><a href="#journey">Journey</a></li>
                        <li class="page-scroll"><a href="#portfolio">Portfolio</a></li>
                        <li class="page-scroll"><a href="#buybooks">Buy Books</a></li>
                        <li class="page-scroll"><a href="#contact">Contact</a></li>

                        <?php if (isset($_SESSION['user_id'])): // Check if the user is logged in ?>
                            <form action="logout.php" method="POST">
                                <button type="submit" name="logout">Logout</button>
                            </form>
                        <?php else: ?>
                            <li><a href="login.php">Login</a></li>
                            <li><a href="register.php">Register</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div id="hero" class="hero">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <h1>Muhammad Afiq Ikhwan</h1>
                    <div class="page-scroll">
                        <p class="job-title">Diploma in Computer Science at UPTM</p>
                        <a href="#about" class="btn btn-border">More About Me</a>
                    </div>
                </div>
            
                <div class="col-md-6 text-right">
                    <img src="assets/img/Afiq-removebg-preview.png" alt="alex-vidal">
                </div>

            </div>
        </div>
    </div><!-- /.hero -->

    <main id="main" class="site-main">

        <section id="about" class="site-section section-about text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <h2>About</h2>
                        <img src="assets/img/lines.svg" class="img-lines" alt="lines">
                        <p>Hello! I'm Muhammad Afiq Ikhwan, now I am studying in the field of computer science and in the 4th semester. At the same time, I also do a part-time job to add money to my daily expenses. The purpose of my portfolio is to introduce myself to the company I will be applying for a job.</p>
                </div>
            </div>
        </section><!-- /.secton-about -->

        <section class="site-section section-skills">
            <div class="container">
                <div class="text-center">
                    <h3>My Skills</h3>
                    <img src="assets/img/lines.svg" class="img-lines" alt="lines">
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="skill">
                            <h4>JavaScript</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="60"></div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                        <div class="skill">
                            <h4>C++</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="70"></div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                    </div>
                    <div class="col-md-4">
                        <div class="skill">
                            <h4>Entrepreneurship</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="82"></div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                        <div class="skill">
                            <h4>PHP</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="68"></div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                    </div>
                    <div class="col-md-4">
                        <div class="skill">
                            <h4>Statistics</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="97"></div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                        <div class="skill">
                            <h4>Calculus</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="95"></div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                    </div>
                </div>
            </div>
        </section><!-- /.secton-skills -->

        <section id="journey" class="site-section section-journey overlay text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>My Journey</h3>
                        <img src="assets/img/lines.svg" class="img-lines" alt="lines">
                    </div>
                    <div class="col-sm-4">
                        <div class="service">
                            <img src="skgb.jpeg" alt="Front End Developer">
                            <h4>Sek.Kebangsaan Gong Badak</h4>
                            <p>
                                <h5><strong> Academic Achievements: </strong></h5> 
                                <p>-Scored 8A's in the UPKK examination.</p>
                                <p>-Achieved 3A's and 3B's in the UPSR exams.</p><br>

                                <h5><strong> Sports Experience: </strong></h5>        
                                <p>-Part of a football team as a goalkeeper for 3 years, starting at the age of 10.</p>
                                <p>-Developed skills in teamwork, discipline, and perseverance through sports.</p><br>

                                <h5><strong> Extracurricular Activities:</strong></h5>
                                <p>-Member of a kompang group, performing at weddings and shows.</p>
                                <p>-Gained experience in public performance and event coordination.</p>
                        </div><!-- /.service -->
                    </div>
                    <div class="col-sm-4">
                        <div class="service">
                            <img src="Smkadha.jpg" alt="Back End Developer">
                            <h4>SMK Agama Dato Haji Abbas </h4>
                            <h5><strong>Joined the football team at 15:</strong></h5>
                            <p> Developed teamwork, discipline, and leadership skills as a player.</p><br>
                            <h5><strong>Started learning web design:</strong></h5>
                            <p> Explored my interest in technology and creativity.</p><br>
                            <h5><strong>Won second place in a Merdeka creativity poster competition:</strong></h5>
                            <p> Gained recognition for my artistic skills and creativity.</p><br>
                            <h5><strong>Became an entrepreneur:</strong></h5>
                            <p>Sold homemade treats like Chocojar, ramen rolls, and cookies, earning my own pocket money and gaining hands-on business experience.</p><br>
                            <h5><strong>Worked with my father in his business:</strong></h5>
                            <p>Learned about management, customer service, and operations, gaining practical business insights..</p>
                        </div><!-- /.service -->
                    </div>
                    <div class="col-sm-4">
                        <div class="service">
                            <img src="uptm.png" alt="Coding">
                            <h4>University Poly-Tech Malaysia</h4>
                            <p>Currently studying at University Poly-Tech Malaysia, pursuing a degree in Computer Science.</p><br>
                            <p>Learning various programming languages such as C++, Java, HTML, and more.</p><br>
                            <p>Working part-time to support myself and add to my pocket money.</p><br>
                            <p>Gaining independence while living away from my parents.</p><br>
                            <p> Learning valuable skills in time management, responsibility, and balancing work with studies.</p>
                        </div><!-- /.service -->
                    </div>
                </div>
            </div>
        </section><!-- /.secton-services -->

        <section id="portfolio" class="site-section section-portfolio">
            <div class="container">
                <div class="text-center">
                    <h3>My Experience</h3><br>
                    <img src="assets/img/lines.svg" class="img-lines" alt="lines">
                </div>
                <div class="row">
                    <div class="col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="image/javascript.jpeg" class="img-res" alt="">
                            <div class="portfolio-item-info">
                                <h4>JavaScript</h4>
                                <a href="#" data-toggle="modal" data-target="#portfolioItem1"><span class="glyphicon glyphicon-eye-open"></span></a>
                                <a href="javascript.html"><span class="glyphicon glyphicon-link"></span></a>
                            </div><!-- /.portfolio-item-info -->
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="image/c++.jpeg" class="img-res" alt="">
                            <div class="portfolio-item-info">
                                <h4>C++</h4>
                                <a href="#" data-toggle="modal" data-target="#portfolioItem2"><span class="glyphicon glyphicon-eye-open"></span></a>
                                <a href="c++.html"><span class="glyphicon glyphicon-link"></span></a>
                            </div><!-- /.portfolio-item-info -->
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="image/Creative-Entrepreneur.jpg" class="img-res" alt="">
                            <div class="portfolio-item-info">
                                <h4>Entreprenuership</h4>
                                <a href="#" data-toggle="modal" data-target="#portfolioItem3"><span class="glyphicon glyphicon-eye-open"></span></a>
                                <a href="entreprenuership.html"><span class="glyphicon glyphicon-link"></span></a>
                            </div><!-- /.portfolio-item-info -->
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="image/PHP.png" class="img-res" alt="">
                            <div class="portfolio-item-info">
                                <h4>PHP</h4>
                                <a href="#" data-toggle="modal" data-target="#portfolioItem4"><span class="glyphicon glyphicon-eye-open"></span></a>
                                <a href="php.html"><span class="glyphicon glyphicon-link"></span></a>
                            </div><!-- /.portfolio-item-info -->
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="image/statistics.jpg" class="img-res" alt="">
                            <div class="portfolio-item-info">
                                <h4>Statistics</h4>
                                <a href="#" data-toggle="modal" data-target="#portfolioItem5"><span class="glyphicon glyphicon-eye-open"></span></a>
                                <a href="statistics.html"><span class="glyphicon glyphicon-link"></span></a>
                            </div><!-- /.portfolio-item-info -->
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="image/calculus.jpg" class="img-res" alt="">
                            <div class="portfolio-item-info">
                                <h4>Calculus</h4>
                                <a href="#" data-toggle="modal" data-target="#portfolioItem6"><span class="glyphicon glyphicon-eye-open"></span></a>
                                <a href="calculus.html"><span class="glyphicon glyphicon-link"></span></a>
                            </div><!-- /.portfolio-item-info -->
                        </div><!-- /.portfolio-item -->
                    </div>
                </div>
            </div>
        </section><!-- /.secton-portfolio -->

        <section class="site-section section-counters text-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <p class="counter start" data-to="2" data-speed="2000">0</p>
                        <h4>Years Experience</h4>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <p class="counter start" data-to="30" data-speed="2000">0</p>       
                        <h4>Projects Delivered</h4>      
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <p id="infinity" class="counter" data-from="0" data-to="1" data-speed="1000">0</p>
                        <h4>Seconds on this site!<br>What are you waiting for?</h4>
                    </div>
                </div>
            </div>
        </section><!-- /.section-counters -->

        <section id="buybooks" class="site-section section-books overlay text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Books</h3>
                        <img src="assets/img/lines.svg" class="img-lines" alt="lines">
                    </div>
                    <div class="book-list">
                        <!-- Book Item -->
                        <div class="book-item">
                            <img src="c++ books.jpg" alt="C++ Programming">
                            <h3>C++ Programming</h3>
                            <span class="price">RM 29.90</span> 
                            <div class="rating">⭐⭐⭐⭐⭐</div>
                            <a href="cart.html" class="btn btn-border">Add to Cart</button></a>
                        </div>
                    </div>

        <h3>Contact</h3>
        <img src="assets/img/lines.svg" class="img-lines" alt="lines">
        <form action="#" method="POST">
            <div class="row">
                <div class="col-sm-6">
                    <input type="text" name="name" class="form-control mt-x-0" placeholder="Name" required>
                </div>
                <div class="col-sm-6">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>   
                </div>
                <div class="col-sm-12">
                    <textarea name="message" id="message" class="form-control" placeholder="Message" required></textarea>
                </div>
            </div>
            <!-- You can change the button's functionality depending on whether you want it to submit the form or trigger an external link. -->
            <button class="btn btn-border" type="submit">Send Message <span class="glyphicon glyphicon-send"></span></button>
        </form>
        <!-- If you want a WhatsApp link, use a separate link or button for that purpose. -->
        <a href="https://wa.me/your-number" class="btn btn-border mt-3" target="_blank">Chat with me on WhatsApp</a>
    </div>
</section>
<!-- /.section-form -->

    </main><!-- /#main -->

    <footer id="colophon" class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <a class="icon facebook-bg" href="#"><i class="icon-facebook"></i></a>
                    <a class="icon twitter-bg" href="#"><i class="icon-twitter"></i></a>
                    <a class="icon gplus-bg" href="#"><i class="icon-linkedin"></i></a>
                    <a class="icon linkedin-bg" href="#"><i class="icon-gplus"></i></a>
                </div>
                <div class="col-sm-4 col-sm-offset-0 col-xs-6 col-xs-offset-3"><p class="copyright">2017. All Rights Reserved</p></div>
                <div class="col-sm-4 col-xs-3">
                    <div class="text-right page-scroll">
                        <a class="icon icon-up-bg" href="#hero"><i class="icon-up"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- /#footer -->

    <!-- Modals -->
    <div id="portfolioItem1" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <a class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
            <img class="img-res" src="image/javascript.jpeg" alt="">
          </div>
          <div class="modal-body">
            <h4 class="modal-title">Summary about JavaScript</h4>
            <p>A thorough grasp of the foundational concepts and sophisticated methods required to develop dynamic, interactive web applications can be gained by studying JavaScript in an academic context. Students first become proficient in fundamental ideas including variables, data types, functions, loops, and conditionals. More complex subjects like closures, higher-order functions, and asynchronous programming are covered as the curriculum develops. In order to make websites responsive and interesting, students also learn how to work with web page elements and manage events using the Document Object Model (DOM). Academic courses frequently include server-side JavaScript using Node.js in addition to client-side development, allowing students to build full-stack applications. In order to prepare students for real-world development challenges, best practices including code readability, debugging, testing, and modular architecture are emphasized. By becoming proficient in JavaScript, students</p>
          </div>
          <div class="modal-footer">
            <a href="javascript.html" class="btn btn-fill">Visit Page</a>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="portfolioItem2" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <a class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
            <img class="img-res" src="image/c++.jpeg" alt="">
          </div>
          <div class="modal-body">
            <h4 class="modal-title">About C++</h4>
            <p>A strong foundation in programming and computer science concepts is provided by studying C++ in an academic setting, which emphasizes both the theoretical and practical facets of software development. Beginning with an introduction to C++ syntax, students learn how to construct simple programs using operators, data types, and control structures like conditionals and loops. Writing modular and reusable code requires an understanding of object-oriented programming (OOP) principles like classes, inheritance, polymorphism, and encapsulation, which students learn more about as the course goes on. In order to assist students gain a solid grasp of low-level programming, C++ also places a high emphasis on memory management through pointers, dynamic memory allocation, and effective use of system resources. Along with learning the fundamentals of programming, students also study more complex subjects including templates, the Standard</p>
          </div>
          <div class="modal-footer">
            <a href="c++.html" class="btn btn-fill">Visit Page</a>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="portfolioItem3" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <a class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
            <img class="img-res" src="image/Creative-Entrepreneur.jpg" alt="">
          </div>
          <div class="modal-body">
            <h4 class="modal-title">Entreprenuership</h4>
            <p>Learning entrepreneurship in an academic setting equips students with the knowledge, skills, and mindset needed to identify, evaluate, and launch successful business ventures. The academic journey typically starts with foundational concepts, such as understanding business models, market analysis, and the entrepreneurial process. Students explore the key elements of starting a business, including product development, business planning, financing, marketing strategies, and the legal aspects of entrepreneurship. The curriculum also emphasizes the importance of innovation, creativity, and risk management in creating sustainable business solutions. In addition to theoretical knowledge, students often engage in case studies, simulations, and practical projects that provide hands-on experience in solving real-world entrepreneurial challenges. Topics such as leadership, negotiation, and decision-making are also covered, fostering the critical thinking and problem-solving abilities needed to navigate the complexities of launching and scaling a business. By the end of their studies, students are not only prepared to start their own ventures but also to work in roles that support innovation and business development in a variety of industries.</p>
          </div>
          <div class="modal-footer">
            <a href="entreprenuership.html" class="btn btn-fill">Visit Page</a>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="portfolioItem4" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <a class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
            <img class="img-res" src="image/PHP.png" alt="">
          </div>
          <div class="modal-body">
            <h4 class="modal-title">PHP</h4>
            <p>A solid foundation in server-side web development is given to students who study PHP in an academic context. With the help of the popular programming language PHP (Hypertext Preprocessor), students can make dynamic, interactive websites and online apps. Basic programming concepts like variables, control structures, loops, and functions are usually covered first in the academic curriculum before moving on to more complex subjects like database integration, session management, and securely processing user input. In order to create web sites that can process and show data in real time, students learn how to combine PHP with HTML and CSS. PHP is a crucial ability for creating data-driven websites since they also examine how it may be integrated with MySQL or other relational databases to store and retrieve data. Furthermore, excellent practices are frequently included in academic courses.</p>
          </div>
          <div class="modal-footer">
            <a href="php.html" class="btn btn-fill">Visit Page</a>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="portfolioItem5" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <a class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
            <img class="img-res" src="image/statistics.jpg" alt="">
          </div>
          <div class="modal-body">
            <h4 class="modal-title">Statistics</h4>
            <p>Gaining knowledge of statistics in an academic context is similar to acquiring a potent toolset for using data to comprehend the world around us. Learning to make sense of numbers is more important than simply memorizing them. Students begin by learning the fundamentals, such as averages, medians, and standard deviations. These ideas assist us in condensing information and providing a brief overview of the situation. However, it becomes more fascinating as you delve deeper. You begin use data to test hypotheses, create predictions, and reach conclusions. Making decisions based on data is made possible by methods like regression analysis and hypothesis testing, which is crucial in domains like social research, science, and business. The power of statistics to transform unstructured data into insightful narratives is what makes them so beautiful.</p>
          </div>
          <div class="modal-footer">
            <a href="statistics.html" class="btn btn-fill">Visit Page</a>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="portfolioItem6" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <a class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
            <img class="img-res" src="image/calculus.jpg" alt="">
          </div>
          <div class="modal-body">
            <h4 class="modal-title">Calculus</h4>
            <p>In an academic context, mastering calculus is similar to learning the language of motion and change. Calculus is fundamentally the study of change, whether it is the speed of a moving vehicle, population expansion, or the behavior of a curve. Basic ideas like limits, derivatives, and integrals are introduced to students. For instance, derivatives aid in our comprehension of rates of change, such as the speed at which an object is moving at any given time. Conversely, integrals enable us to compute volumes, areas, and cumulative quantities over time. Although these concepts might initially appear abstract, they are actually very effective instruments for resolving practical issues in biology, engineering, physics, and even economics. Students go deeper into increasingly difficult subjects as they advance, such as multivariable calculus.</p>
          </div>
          <div class="modal-footer">
            <a href="calculus.html" class="btn btn-fill">Visit Page</a>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/skrollr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-progressbar/0.9.0/bootstrap-progressbar.min.js"></script>
    <script src="assets/js/jquery.countTo.min.js"></script>
    <script src="assets/js/script.js"></script>
  
</body>
</html>
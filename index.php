<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website</title>
    <link rel="stylesheet" href="./stylesheet/style.css">
    <link rel="icon" href="./stylesheet/image/pic.3.png" type="image/png">
    <link
      href="https://fonts.googleapis.com/css?family=ABeeZee"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Sofia"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Trirong"
    />
    <link href="https://fonts.googleapis.com/css2?family=Mooli&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ca6421a464.js" crossorigin="anonymous"></script>

    
</head>
<body>
    <div id="header">
       <div class="container">
            <nav>
                <img src="./stylesheet/image/Taha.png" class="logo">
                <ul id="sidemenu">
                    <li><a href="#header">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <i class="fa-solid fa-xmark" onclick="closemenu()"></i>
                </ul>
                <i class="fa-solid fa-bars" onclick="openmenu()"></i>
            </nav>
            <div class="header-text">
                <p>UI/UX Designer</p>
                <h1>Hi, I'm <span>Taha</span> <br> From Pakistan</h1>
            </div>
       </div> 
    </div>

    <!----------------------------About Section------------------------------------>

    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                    <img src="./stylesheet/image/pic.2.png" class="about-img">
                </div>
                <div class="about-col-2">
                    <h1 class="sub-title">About Me</h1>
                    <p class="sub-p">Hi, I'm Taha, a web developer UI/UX Designer wiyh a passion for creating beautiful, funtional, and user-centered digital experiences. I am always looking for new and innovative ways to bring my clients' vision to life. <br>
                        I believe that design is about more than just pretty -it's about solving problems and creating intuitive, enjoyable, experiences for users. <br>
                        Whether I'm working on websites, mobile app, or digital product, I look forward to the opportunity to your next project.  
                    </p>

                    <div class="tab-title">
                        <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                        <p class="tab-links" onclick="opentab('experience')">Experience</p>
                        <p class="tab-links" onclick="opentab('education')">Education</p>
                    </div>
                    <div class="tab-contents active-tab" id="skills">
                        <ul>
                            <li><span>UI?UX</span><br>Designing Web/App interface</li>
                            <li><span>Web Development</span><br>Web app Development</li>
                            <li><span>Landing Pages</span><br>UI Design landing pages</li>
                            <li><span>Microsoft Office</span><br>Intermediate Level</li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="experience">
                        <ul>
                            <li><span>Classic Denim Mills, Assistant Technician <br>01/2022 - 09/2022</span><br>Assist in the maintenance and repair of machinery and equipment used in 
                                denim manufacturing processes. Collaborate with senior technicians to 
                                diagnose and troubleshoot equipment malfunctions and breakdowns.
                            </li>
                            <li><span>Allied Engineering, Generator Operator <br>10/2022 – Present</span><br>Operate and monitor power generation equipment, including diesel 
                                generators, turbines, and associated systems. Start, stop, and control 
                                generator units in response to power demands or as scheduled.
                            </li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="education">
                        <ul>
                            <li><span>Advance Diploma in Software Engineering <br>2022 - Present</span><br>Aptech</li>
                            <li><span>D.A.E, Pre-Engineering<br>2022</span><br>Jamia-Millia Government College</li>
                            <li><span>Intermediate, HSC Pre Engineering <br>2020</span><br>Superior govt. College</li>
                            <li><span>Matriculation, Computer Science <br>2018</span><br>Muhammadi Public School</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!---------------------------Services Section-------------------------->

    <div id="services">
        <div class="container">
            <h1 class="sub-title">My Services</h1>
            <div class="services-list">
                <div>
                    <i class="fa-solid fa-code"></i>
                    <h2>Web Design</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat autem cum laudantium quos est dolore a. 
                        Impedit aliquid ut ea quia quidem beatae fuga, pariatur commodi omnis perferendis voluptatem. Deleniti.</p>
                        <a href="#">Learn More</a>
                </div>
                <div>
                    <i class="fa-solid fa-crop"></i>
                    <h2>UI/UX Design</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat autem cum laudantium quos est dolore a. 
                        Impedit aliquid ut ea quia quidem beatae fuga, pariatur commodi omnis perferendis voluptatem. Deleniti.</p>
                        <a href="#">Learn More</a>
                </div>
                <div>
                    <i class="fa-solid fa-layer-group"></i>
                    <h2>Landing pages</h2>
                    <p>consectetur adipisicing elit. Quaerat autem cum laudantium quos est dolore a. 
                        Impedit aliquid ut ea quia quidem beatae fuga, pariatur commodi omnis perferendis voluptatem. Deleniti.</p>
                        <a href="#">Learn More</a>
                </div>

            </div>
        </div>
    </div>
    
    <!-------------------------Portfolio Section----------------------->

    <div id="portfolio">
        <div class="container">
            <h1 class="sub-title">My Projects</h1>
        </div>
        <div class="work-list">
            <div class="work">
                <img src="./stylesheet/image/pic.4.jpg">
                <div class="layer">
                    <h3>INK CRAFT</h3>
                    <p>This website based on different languages font style calligraphy.</p>
                    <a href="file:///C:/Users/Taha%20Yaseen/Documents/Caligraphy%20Website/Website%20work/index.html"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
            <div class="work">
                <img src="./stylesheet/image/pic.5.jpg">
                <div class="layer">
                    <h3>CAM & LEN</h3>
                    <p>This is a camera and lense website you can order easily for our website.</p>
                    <a href="file:///C:/Users/Taha%20Yaseen/Documents/Cam&Lense%20Website/index.html"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
            <div class="work">
                <img src="./stylesheet/image/pic.6.jpg">
                <div class="layer">
                    <h3>Patches</h3>
                    <p>This is a patches website you can buy any patches for our website.</p>
                    <a href="file:///C:/Users/Taha%20Yaseen/Documents/Landing%20Page%20With%20Faizan/Landing%20Page/Landing%20Page/index.html"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
        </div>
        <a href="#" class="btn">See More</a>
    </div>

    <!------------------------Contact Section--------------------------->
    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <h1 class="subtitle">Contact Me</h1>
                    <p><i class="fa-solid fa-paper-plane"></i> tk737986@gmail.com</p>
                    <p><i class="fa-solid fa-square-phone"></i> 0342-2632146</p>
                    <div class="social-icons">
                        <a href=""><i class="fa-brands fa-facebook"></i></a>
                        <a href=""><i class="fa-brands fa-twitter-square"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                        <a href=""><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                    <a href="./stylesheet/image/CV.pdf" class="btn btn-2"><i class="fas fa-download"></i> Download CV</a>
                </div>

                
                <div class="contact-right">
                    <form>
                        <input type="text" name="Name" placeholder="Your Name" required>
                        <input type="email" name="email" placeholder="Your Email" required>
                        <textarea name="Message" rows="6" placeholder="Your Message"></textarea>
                        <button type="submit" class="btn btn-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>Copyright © | <i class="fa-solid fa-heart"></i> Power By Taha</p>
        </div>
    </div>
</body>
</html>

<script src="./js/script.js"></script>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About Me</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
            *{
                padding: 0;
                margin: 0;
                box-sizing: border-box;
                font-family: poppins;
            }
            body {
                background-color: beige;
            }
            #about-section {
                width: 100%;
                height: auto;
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 80px 12%;
            }
            .about-left img{
                width: 420px;
                height: auto;
                transform: translateY(50px);
            }
            .about-right {
                width: 54%;
            }

            .about-right ul li {
                display: flex;
                align-items: center;
            }

            .about-right h1 {
                color: #e74d06;
                font-size: 37px;
                margin-bottom: 5px;
            }

            .about-right p {
                color: #444;
                line-height: 26px;
                font-size: 15px;
            }

            .about-right .address {
                margin: 25px 0;
            }

            .about-right .address ul li {
                margin-bottom: 5px;
            }

            .address .address-logo {
                margin-right: 15px;
                color: #e74d06;
            }

            .address .saprater {
                margin: 0 35px;
            }

            .about-right .expertise ul {
                width: 80%;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .expertise h3 {
                margin-bottom: 10px;
            }

            .expertise .expertise-logo {
                font-size: 19px;
                margin-right: 10px;
                color: #e74d06;
            }
        </style>
    </head>

    <body>
        <section id="about-section">
            <!-- about left  -->
            <div class="about-left">
                <img src="about_me2.jpg" alt="About Img"/>
            </div>

            <!-- about right  -->
            <div class="about-right">
                <h4>My Story</h4>
                <h1>About Me</h1>
                <p>I'm Timothy Rotich, a third-year student undertaking Information Security and Forensics
                    with a relentless passion for securing the digital realm. 
                    Currently pursuing my Bachelor's degree at KCA University, 
                    I'm well-versed in penetration testing and network security. 
                    I'm on a mission to protect the digital world, 
                    and my goal is to be a cybersecurity Expert. 
                    Let's connect and strengthen the digital defense together!
                </p>
                <div class="address">
                    <ul>
                        <li>
                            <span class="address-logo">
                                <i class="fas fa-phone-alt"></i>
                            </span>
                            <p>Phone No</p>
                            <span class="saprater">:</span>
                            <p>+254 797-560-036</p>
                        </li>
                        <li>
                            <span class="address-logo">
                                <i class="far fa-envelope"></i>
                            </span>
                            <p>Email ID</p>
                            <span class="saprater">:</span>
                            <p>rotichtimothy202@gmail.com</p>
                        </li>
                    </ul>
                </div>
                <div class="expertise">
                    <h3>My Expertise</h3>
                    <ul>
                        <li>
                            <span class="expertise-logo">
                                <i class="fab fa-html5"></i>
                            </span>
                            <p>HTML</p>
                        </li>
                        <li>
                            <span class="expertise-logo">
                                <i class="fab fa-css3-alt"></i>
                            </span>
                            <p>CSS</p>
                        </li>
                        <li>
                            <span class="expertise-logo">
                                <i class="fab fa-node-js"></i>
                            </span>
                            <p>Java Script</p>
                        </li>
                        <li>
                            <span class="expertise-logo">
                                <i class="fab fa-java"></i>
                            </span>
                            <p>Java</p>
                        </li>
                        <li>
                            <span class="expertise-logo">
                                <i class="fab fa-python"></i>
                            </span>
                            <p>Python</p>
                        </li>
                        <li>
                            <span class="expertise-logo">
                                <i class="fab fa-php"></i>
                            </span>
                            <p>PHP</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </body>

</html>
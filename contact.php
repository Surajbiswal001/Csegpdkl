<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us - Computer Science Department</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <style>
        x @import url('https://fonts.googleapis.com/css2?family=Playwrite+GB+S:ital,wght@0,100..400;1,100..400&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Playwrite+GB+S:ital,wght@0,100..400;1,100..400&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        /* Reset */
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #00aaff, #aa00ff);

            color: #121212;
            width: 100%;
            height: 100%;
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        /* Header Styles */
        header {
            width: 100%;
            transition: background 0.3s ease;
            /*position: sticky; */
            top: 0;
            border-bottom: white solid 0.2rem;
        }

        .title {
            display: flex;
            justify-content: space-around;
            align-items: center;
            height: 12vh;
            padding: 30px 0;
            background-color: black;
            color: #f5f5f5;
        }

        .name {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            font-family: serif;
        }

        p {
            font-family: "Century Gothic", sans-serif;
            letter-spacing: 2px;
            margin-top: 8px;
        }

        /* Navigation Styles */
        .nav-bar {
            background: linear-gradient(135deg, #ff0080, #ff3d00);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
            width: 100%;
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 50px;
        }

        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }

        .hamburger span {
            height: 3px;
            width: 25px;
            background: #fff;
            margin: 4px;
            border-radius: 2px;
            transition: background 0.3s ease;
        }

        .nav-bar .content {
            position: relative;
            margin-left: 30px;
            padding-right: 10px;
        }

        .nav-bar a {
            color: #ffffff;
            text-decoration: none;
            font-size: 1em;
            padding: 10px 0;
            transition: color 0.3s ease;
            position: relative;
            font-family: "Poppins", serif;
            font-weight: 500;
        }

        .nav-bar a:hover {
            color: gold;
        }

        .nav-bar a::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 2px;
            background: #00f7ff;
            bottom: -5px;
            left: 0;
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.3s ease;
        }

        .content-dropdown {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #3a3a3a;
            min-width: 160px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
            border-radius: 6px;
            z-index: 1001;
            opacity: 0;
            transition: opacity 0.3s ease, visibility 0.3s;
        }

        .content:hover .content-dropdown {
            display: block;
            opacity: 1;
            visibility: visible;
        }

        .content-dropdown a {
            padding: 10px 20px;
            display: block;
            color: #d1d1d1;
            transition: background-color 0.3s ease;
        }

        .content-dropdown a:hover {
            background: #000099;
            color: #ffffff;
        }

        /*end of header*/
        .container2 {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            width: 100%;
        }

        .container2 h1 {
            font-family: serif;
            text-shadow: 0 5px 10px rgba(0, 0, 0, .2);
            margin: 0.9rem;
            margin-bottom: 2rem;
            margin-top: 3rem;
            color: #fff;
        }

        .flex {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            width: 100%;
        }

        .contact-info {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            margin: 2rem;
        }

        .loc {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: left;
            background-color: #b3e0ff;
            padding: 2rem;
            width: 45%;
            margin: 1rem;
        }

        .get1 {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: left;
            background-color: #c2f0c2;
            padding: 2rem;
            width: 45%;
            margin: 1rem;
        }

        .get1:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .loc:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .contact-form {
            background: transparent;
            outline: none;
            border: solid 0.2rem white;
            border-radius: 2rem;
            color: white;
            width: 90%;
            padding-top: 0.8rem;
            padding-left: 1.5rem;
            padding-right: 3rem;
            padding-bottom: 0.7rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .form {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form input {
            padding-top: 1rem;
            padding-left: 1.5rem;
            padding-right: 3rem;
            padding-bottom: 1rem;
            background: transparent;
            outline: none;
            border: solid 0.2rem white;
            border-radius: 2rem;
            color: white;
            width: 100%;
            margin: 0.8rem;
        }

        .contact-form h2 {
            font-family: serif;
            text-shadow: 0 5px 10px rgba(0, 0, 0, .2);
            margin: 0.9rem;
            margin-bottom: 1rem;
            margin-top: 1rem;
            color: #fff;
        }


        .form input::placeholder {
            color: white;
            font-size: 0.9rem;
        }
        .form .message input {
                height: 4rem;
        }
        .form .message input::placeholder {
            
        }
        /* footer Styles */
        footer {
            background: linear-gradient(10deg, #093085, rgb(0, 0, 0));
            height: 28rem;
            color: white;
            border-top: 0.15rem white solid;
        }

        .footer-container {
            display: flex;
            justify-content: space-around;
            padding: 2rem;
            gap: 2rem;
        }

        .important a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s;
            display: block;
            padding: 0.5rem;
            font-family: sans-serif;
            font-size: 0.85rem;
            font-weight: bold;
        }

        .map {
            width: 30%;
            height: 18rem;
            background-image: url('map.jpg');
            background-size: cover;
            background-position: center;

        }

        .map iframe {
            height: 100%;
            width: 100%;
        }

        .copywrite {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem;
            font-family: sans-serif;
        }

        .getintouch p {
            margin-bottom: 1rem;
            font-size: 0.9rem;
        }

        .getintouch h2 {
            margin-bottom: 1.2rem;
        }

        .important h2 {
            margin-bottom: 0.8rem;
        }

        .important a:hover {
            color: gold;

        }
    </style>
</head>

<body>
    <header>
        <div class="header">
            <div class="title">
                <a href="index.php">
                    <img src="img/logo.png" alt="cse-logo" height="100px" width="100px" margin="10px">
                </a>
                <div class="name">
                    <h1>DEPARTMENT OF COMPUTER SCIENCE & ENGINEERING</h1>
                    <p>Government Polytechnic Dhenkanal</p>
                </div>
                <a href="https://gpdhenkanal.org/" target="_blank">
                    <img src="img/GpdLogo.png" alt="GPD logo" width="115px">
                </a>
            </div>
            <!-- Hamburger Icon for Mobile -->
            <div class="hamburger" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav>
                <div class="nav-bar">

                    <div class="content">
                        <a href="index.php">HOME</a>
                    </div>
                    <div class="content">
                        <a href="#">STUDENT</a>
                        <div class="content-dropdown">
                            <a href="1styear.php">1st Year</a>
                            <a href="2ndyear.php">2nd Year</a>
                            <a href="3rdyear.php">3rd Year</a>
                        </div>
                    </div>
                    <div class="content">
                        <a href="#">FACULTY</a>
                    </div>
                    <div class="content">
                        <a href="#">COURSE</a>
                        <div class="content-dropdown">
                            <a href="note.php">Note</a>
                            <a href="syllabus.php">syllabus</a>
                            <a href="3rdyear.php">Academic Calendar</a>
                        </div>
                    </div>
                    <div class="content">
                        <a href="result.php">RESULT</a>
                    </div>
                    <div class="content">
                        <a href="#">INFORMTION BROWSER</a>
                        <div class="content-dropdown">
                            <a href="1styear.php">Admission</a>
                            <a href="2ndyear.php">Fee Structure</a>
                            <a href="3rdyear.php">Exam Information </a>
                        </div>
                    </div>
                    <div class="content">
                        <a href="#">PASS OUT</a>
                    </div>
                    <div class="content">
                        <a href="contact.php">CONTACT US</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="container2">
        <h1>Contact the Computer Science Department</h1>
        <div class="flex">

            <!-- Contact Info Section -->
            <div class="contact-info">
                <div class="loc">
                    <h2>Our Location</h2>
                    <p><strong>Department of Computer Science</strong></p>
                    <p>Government Polytechnic Dhenkanal</p>
                    <p>At-Mahisapat, Dist-Dhenkanal, PIN-759001</p>
                </div>
                <div class="get1">
                    <h2>Get in Touch</h2>
                    <p>Email: <a href="mailto:csdept@xyz.edu.in">csdept@xyz.edu.in</a></p>
                    <p>Phone: +91-9876543210</p>
                    <p>Office Hours: Mon–Sat, 10 AM to 5 PM</p>
                </div>
            </div>

            <!-- Contact Form Section -->
            <div class="contact-form">
                <h2>Send Us a Message</h2>
                <div class="form">
                    <form id="contactForm" action="submit_contact.php" method="POST" onsubmit="return validateForm()">

                        <input type="text" id="name" name="name" placeholder="Full Name" required>


                        <input type="email" id="email" name="email" placeholder="Email Address " required>

                        <div class="message">
                            <input id="message" name="message" placeholder="Message:" required>
                            <button type="submit"><i class="ri-send-plane-2-fill"></i></button>
                        </div>
                    </form>
                    <p id="error-message" class="error"></p>
                </div>
            </div>

        </div>
    </div>

    <script>
        function validateForm() {
            const name = document.getElementById("name").value.trim();
            const email = document.getElementById("email").value.trim();
            const message = document.getElementById("message").value.trim();
            const error = document.getElementById("error-message");

            if (!name || !email || !message) {
                error.textContent = "Please fill in all fields.";
                return false;
            }

            const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
            if (!email.match(emailPattern)) {
                error.textContent = "Please enter a valid email address.";
                return false;
            }

            return true;
        }

    </script>
    <footer>
        <div class="footer-container">
            <div class="important">
                <h2 style="font-family: Century Gothic, sans-serif;">Important Links</h2>
                <div class="footer-links">
                    <ul>
                        <li><a href="https://gpdhenkanal.org/" target="_blank">Gp Dhenkanal</a></li>
                        <li><a href="https://sctevt.odisha.gov.in/" target="_blank">SCTE&VT</a></li>
                        <li><a href="https://www.aicte-india.org/" target="_blank">AICTE</a></li>
                        <li><a href="https://ojee.nic.in/" target="_blank">OJEE</a></li>
                        <li><a href="https://www.netacad.com/" target="_blank">CISCO</a></li>
                        <li><a href="https://scholarship.odisha.gov.in/website/home" target="_blank">State Scholarship
                                Portal</a></li>
                        <li><a href="https://www.northsouth.org/india-scholarships/" target="_blank">NSF Scholarship</a>
                        </li>
                        <li><a href="https://www.samsodisha.gov.in/" target="_blank">SAMS</a></li>
                    </ul>
                </div>
            </div>
            <div class="getintouch">
                <h2 style="font-family: Century Gothic, sans-serif;">Get In Touch</h2>
                <p>Contact Us: 123-456-7890</p>
                <p>Email: info@example.com</p>
                <p>Address: 123 Main St, City, State, ZIP</p>
            </div>
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4594.22067294098!2d85.59209537596277!3d20.640435901001556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a18e01bb30b066f%3A0x609a3e43254ae9a5!2sGovt.%20Polytechnic.%20Dhenkanal%20College!5e1!3m2!1sen!2sin!4v1738672071663!5m2!1sen!2sin"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="copywrite">
            <p>© 2025 [CSE Govt.Polytechnic Dhenkanal]. All Rights Reserved.</p>
        </div>
    </footer>
</body>

</html>
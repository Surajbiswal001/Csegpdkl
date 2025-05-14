<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/logo1.png">
    <title>Syllabus</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playwrite+GB+S:ital,wght@0,100..400;1,100..400&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
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
        .heading {
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            margin: 4rem;
            font-size: 1.4rem;
        }

        .heading h1 {
            text-shadow: 0 5px 10px rgba(0, 0, 0, .2);
        }

        .select {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        select {
            -webkit-appearance: none;
            /* Chrome, Safari */
            -moz-appearance: none;
            /* Firefox */
            appearance: none;
            /* Standard */
            background: transparent;
            border: none;
            padding-right: 1.5em;
            /* space for custom arrow */
        }

        .select select {
            padding-top: 0.8rem;
            padding-left: 1.5rem;
            padding-right: 3rem;
            padding-bottom: 0.7rem;
            background: transparent;
            outline: none;
            border: solid 0.2rem white;
            border-radius: 2rem;
            color: white;
            font-size: 1rem;
            margin: 1.2rem;
        }

        option {
            color: white;
            font-size: 1rem;
            background: black;
            margin: 0.5rem;
        }

        .semester-content {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .semester-content p {
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            padding-top: 0.8rem;
            padding-left: 1.5rem;
            padding-right: 3rem;
            padding-bottom: 0.7rem;
            background: transparent;
            width: 70%
        }

        button {
            height: 2rem;
            border-radius: 2rem;
            border: none;
            color: #333;
            font-size: 0.9rem;
            cursor: pointer;
            font-family: "Poppins", serif;
            font-weight: 600;
            margin-top: 2rem;
            margin-bottom: 2rem;
            width: 6rem;
        }

        .button {
            display: flex;
            justify-content: center;
            align-items: center;

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
                    <h1>COMPUTER SCIENCE & ENGINEERING</h1>
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
                            <a href="result.php">RESULT</a>
                            <a href="note.php">NOTE</a>
                            <a href="syllabus.php">SYLLABUS</a>
                        </div>
                    </div>
                    <div class="content">
                        <a href="#">PASS OUT</a>
                    </div>
                    <div class="content">
                        <a href="#">CONTACT US</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="container">
        <div class="heading">
            <h1>Syllabus</h1>
        </div>
        <div class="select">
            <select id="semesterDropdown" onchange="displaySyllabus()">
                <option value="">Select a semester</option>
                <option value="semester1&23">1St & 2nd Semester Common Syllabus for all Engineering Branches(2013-2017)
                </option>
                <option value="semester1&24">1St & 2nd Semester Common Syllabus for all Engineering Branches(2018
                    Onwards)
                </option>
                <option value="semester1&25">1st & 2nd Semester Common Revised Syllabus for all Engineering
                    Branches(2024-25
                    Onwards) -Modified</option>
                <option value="semester3">3rd semester</option>
                <option value="semester4">4th semester</option>
                <option value="semester5">5th semester</option>
                <option value="semester6">6th semester</option>
            </select>
        </div>

        <div class="semester-content" id="semesterContent">
            <!--  Dynamic content will appear here  -->
        </div>
        <div class="button">

            <div class="button-container" id="searchButtonContainer" style="display: none;">
                <button onclick="openSyllabusPDF()">View</button>
            </div>
        </div>
    </div>
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
    <script>
        // Function to display semester information
        function displaySyllabus() {
            var semester = document.getElementById("semesterDropdown").value;
            var content = document.getElementById("semesterContent");
            var buttonContainer = document.getElementById("searchButtonContainer");

            // Show the relevant syllabus information
            if (semester === "semester1&23") {
                content.innerHTML = "<p> please click on the view button to view the syllabus file. </p>";
                buttonContainer.style.display = "block"; // Show the "Search" button
            } else if (semester === "semester1&24") {
                content.innerHTML = "<p>please click on the view button to view the syllabus file. </p>";
                buttonContainer.style.display = "block"; // Show the "Search" button
            } else if (semester === "semester1&25") {
                content.innerHTML = "<p> please click on the view button to view the syllabus file. </p>";
                buttonContainer.style.display = "block";
            } else if (semester === "semester3") {
                content.innerHTML = "<p> please click on the view button to view the syllabus file. </p>";
                buttonContainer.style.display = "block";
            } else if (semester === "semester4") {
                content.innerHTML = "<p> please click on the view button to view the syllabus file. </p>";
                buttonContainer.style.display = "block";
            } else if (semester === "semester5") {
                content.innerHTML = "<p>please click on the view button to view the syllabus file. </p>";
                buttonContainer.style.display = "block";
            } else if (semester === "semester6") {
                content.innerHTML = "<p> please click on the view button to view the syllabus file. </p>";
                buttonContainer.style.display = "block";// Show the "Search" button
            } else {
                content.innerHTML = "<p> Please select a semester to view the syllabus.</p>";
                buttonContainer.style.display = "none"; // Hide the "Search" button when no semester is selected
            }
        }

        // Function to open the PDF for the selected semester
        function openSyllabusPDF() {
            var semester = document.getElementById("semesterDropdown").value;

            if (semester === "semester1&23") {
                window.open("syllabus/2013-17syllabus.pdf", "_blank");
            } else if (semester === "semester1&24") {
                window.open("syllabus/2018syllabus.pdf", "_blank");
            } else if (semester === "semester1&25") {
                window.open("syllabus/newfinal.pdf", "_blank");
            }


            else if (semester === "semester3") {
                window.open("syllabus/3rdsemester.pdf", "_blank");
            } else if (semester === "semester4") {
                window.open("syllabus/4thsemester.pdf", "_blank");
            } else if (semester === "semester5") {
                window.open("syllabus/5thsemester.pdf", "_blank");
            } else if (semester === "semester6") {
                window.open("syllabus/6thsemester.pdf", "_blank");
            }
        }
    </script>
</body>

</html>
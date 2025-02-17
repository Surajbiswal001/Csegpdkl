<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');

*{
    font-family: 'Poppins', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    outline: none; border:none;
    text-decoration: none;
    text-transform: capitalize;
    transition: .2s linear;
}

.container{
    background:linear-gradient(45deg, blueviolet, rgb(16, 168, 11));
    padding:15px 9%;
    padding-bottom: 100px;
}

.container .heading{
    text-align: center;
    padding-bottom: 15px;
    color:#fff;
    text-shadow: 0 5px 10px rgba(0,0,0,.2);
    font-size: 50px;
}

.box-container{
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap:15px;
    
}

.container .box-container .box{
    box-shadow: 0 5px 10px rgba(0,0,0,.2);
    border-radius: 5px;
    background: #ffffff;
    text-align: center;
    padding:30px 20px;
    border:1px solid #f0ad4e;
}

.container .box-container .box img{
    height: 80px;
}

.container .box-container .box h3{
    color:#444;
    font-size: 22px;
    padding:10px 0;
}

.container .box-container .box p{
    color:#777;
    font-size: 15px;
    line-height: 1.8;
}

.container .box-container .box .btn{
    margin-top: 10px;
    display: inline-block;
    background:#333;
    color:#fff;
    font-size: 17px;
    border-radius: 5px;
    padding: 8px 25px;
}

.container .box-container .box .btn:hover{
    letter-spacing: 1px;
}

.container .box-container .box:hover{
    box-shadow: 0 10px 15px rgba(0,0,0,.3);
    transform: scale(1.03);
}

@media (max-width:768px){
    .container{
        padding:20px;
    }
}
semester {
    border: 1px solid #f0a500;
    padding: 20px;
    margin: 20px;
    font-family: Arial, sans-serif;
  }
  
  .semester h2 {
    text-align: left;
    font-size: 24px;
    color: #f0a500;
    margin-bottom: 15px;
  }
  
  .course {
    border-bottom: 1px solid #1b0808;
    padding: 10px 0;
    text-align:left
    
  }
  
  .course:last-child {
    border-bottom:#f0a500;
  }
  
  .course-name {
    font-size: 16px;
    color: #333;
    text-align:left;
  }
  
  .course-name:hover {
    color: #f0a500;
    cursor: pointer;
  }
  .toggle {
    background-color: #fff;
    color: #f0ad4e;
    border: 1px solid #f0ad4e;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    cursor: pointer;
    font-size: 16px;
    text-align: center;
    line-height: 28px;
  }
  .toggle:hover {
    background-color: #f0ad4e;
    color: #fff;
}
    </style>
</head>
<body>
    
<div class="container">
    <h1 class="heading">our notes</h1>
    <div class="box-container">
        <div class="box">
            <div class="semester">
                <h2>1st Semester</h2>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Basic Electrical & Electronics</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Computer Application</span>
                  <!-- <div class="accordion-content">
                    <ul>
                      <li><a href="#">Lesson Plan</a></li>
                      <li><a href="#">Study Material</a></li>
                      <li><a href="#">Video Lecture - Integrated Circuits</a></li>
                      <li><a href="#">Video Lecture - Power Billing</a></li>
                      <li><a href="#">Video Lecture - Resistance</a></li>
                    </ul>
                  </div> -->
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Computer Application Lab</span>
                  
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Engineering Drawing</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Engineering Mathematics-I</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Engineering Physics</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Engineering Physics Lab</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Seminar</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Student Centred Activities</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Introduction to IT System</span>
                </div>
              </div>
        </div>

        <div class="box">
            <div class="semester">
                <h2>2nd Semester</h2>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Basic Electrical & Electronics</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Computer Application</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Computer Application Lab</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Engineering Drawing</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Engineering Mathematics-I</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Engineering Physics</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Engineering Physics Lab</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Seminar</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Student Centred Activities</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Introduction to IT System</span>
                </div>
              </div>
        </div>

        <div class="box">
            <div class="semester">
                <h2>3rd Semester</h2>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Basic Electrical & Electronics</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Computer Application</span>
                </div>
                <div class="course">
                  <span class="course-name">Computer Application Lab</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Engineering Drawing</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Engineering Mathematics-I</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Engineering Physics</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Engineering Physics Lab</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Seminar</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Student Centred Activities</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Introduction to IT System</span>
                </div>
              </div>
        </div>

        <div class="box">
            <div class="semester">
                <h2>4th Semester</h2>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Basic Electrical & Electronics</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Computer Application</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Computer Application Lab</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Engineering Drawing</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Engineering Mathematics-I</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Engineering Physics</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Engineering Physics Lab</span>
                </div>
                <div class="course">
                  <span class="course-name">Seminar</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Student Centred Activities</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Introduction to IT System</span>
                </div>
              </div>
        </div>

        <div class="box">
            <div class="semester">
                <h2>5th Semester</h2>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Basic Electrical & Electronics</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Computer Application</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Computer Application Lab</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Engineering Drawing</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Engineering Mathematics-I</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Engineering Physics</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Engineering Physics Lab</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Seminar</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Student Centred Activities</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Introduction to IT System</span>
                </div>
              </div>
        </div>

        <div class="box">
            <div class="semester">
                <h2>6th Semester</h2>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Basic Electrical & Electronics</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Computer Application</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Computer Application Lab</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Engineering Drawing</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Engineering Mathematics-I</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Engineering Physics</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Engineering Physics Lab</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Seminar</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Student Centred Activities</span>
                </div>
                <div class="course">
                  <button class="toggle">+</button>
                  <span class="course-name">Introduction to IT System</span>
                </div>
              </div>
        </div>

    </div>

</div>
<script>
  const headers = document.querySelectorAll('.course-name');
  headers.forEach(header => {
    header.addEventListener('click', () => {
      const content = header.nextElementSibling;
      const symbol = header.querySelector('.toggle');
      const isOpen = content.style.display === 'block';

      // Close all other sections
      document.querySelectorAll('.accordion-content').forEach(item => item.style.display = 'none');
      document.querySelectorAll('.toggle').forEach(item => item.textContent = '+');

      // Toggle the current section
      if (isOpen) {
        content.style.display = 'none';
        symbol.textContent = '+';
      } else {
        content.style.display = 'block';
        symbol.textContent = '-';
      }
    });
  });
</script>

</body>
</html>
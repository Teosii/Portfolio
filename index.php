<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

// send message as a client to teos database
if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

                                    /// this below is a sql query and it checks if table contact form with name below and email and number and message exist;
   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   // if message exist this message below will shown as response
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      // if message doesnt exist before it means that it is correct to be sent 
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    />
  </head>
  <?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>
  <body>
    <header class="header">
      <div id="menu-btn" class="fas fa-bars"></div>
      <a href="#home" class="logo">Portfolio</a>
      <nav class="navbar">
        <a href="#home" class="active">home</a>
        <a href="#about">about</a>
        <a href="#services">services</a>
        <a href="#portfolio">portfolio</a>
        <a href="#contact">contact</a>
      </nav>

      <div class="follow">
        <a href="https://www.facebook.com/profile.php?id=100011968443476" class="fab fa-facebook-f"></a>
        <a href="https://www.instagram.com/teoshoxha/" class="fab fa-instagram"></a>
        <a href="https://www.linkedin.com/in/teos-hoxha-24007822b/" class="fab fa-linkedin"></a>
        <a href="https://github.com/Teosii" class="fab fa-github"></a>
      </div>
    </header>

    <section class="home" id="home">
      <div class="image" data-aos="fade-right">
        <img src="image/user.PNG" alt="" />
      </div>
      <div class="content">
        <h3>Hi, I am Teos Hoxha</h3>
        <span>Web and Mobile Developer</span>
        <p>
        I'm 18 years old from Gjilan and code bunch a random stuff.
        </p>
        <a href="#about" class="btn">about me</a>
      </div>
    </section>

    <section class="about" id="about">
      <h1 class="heading">
        <span>biography</span>
      </h1>
      <div class="biography">
        <p>
          Always loved computers and coding since a young age and gave it a go.
         Now I'm studying Computer Science at UBT in Prishtina.
        </p>
        <div class="bio">
          <h3><span>name : </span>Teos Hoxha</h3>
          <h3><span>email : </span>hoxhateos08@gmail.com</h3>
          <h3><span>address : </span>Prishtine,Kosova</h3>
          <h3><span>phone : </span>+38344849850</h3>
          <h3><span>age : </span>18 years</h3>
          <h3><span>experience : </span>2+ years</h3>
        </div>
      </div>
      <div class="skills">
        <h1 class="heading">
          <span>skills</span>
        </h1>
        <div class="progress">
          <div class="bar">
            <h3>
              <span>HTML <span>95%</span></span>
            </h3>
          </div>
          <div class="bar">
            <h3>
              <span>CSS <span>90%</span></span>
            </h3>
          </div>
          <div class="bar">
            <h3>
              <span>JavaScript <span>80%</span></span>
            </h3>
          </div>
          <div class="bar">
            <h3>
              <span>React JS <span>40%</span></span>
            </h3>
          </div>
        </div>
      </div>
      <div class="edu-exp">
        <h1 class="heading"><span>education & experience</span></h1>
        <div class="row">
          <div class="box-container">
            <h3 class="title">educations</h3>
            <div class="box">
              <span>(2020-2021)</span>
              <h3>Web Development</h3>
              <p>
                First year that i started coding in the web devlopment course at Jcoders.
              </p>
            </div>
                <div class="box">
              <span>(2021-2022)</span>
              <h3>Web Development</h3>
              <p>
                After the first year i continued in second year which included JavaScript in the course.
              </p>
            </div>
                <div class="box">
              <span>(2022-2023)</span>
              <h3>Web Development</h3>
              <p>
              Now im close to finishing the second year and continuing third year which includs NodeJs.
              </p>
            </div>
          </div>
            <div class="box-container">
            <h3 class="title">experience</h3>
            <div class="box">
              <span>(2020-2021)</span>
              <h3>front-end developer</h3>
              <p>
               At that time i started working as a front-end developer in a construction company which needed a website.
              </p>
            </div>
                <div class="box">
              <span>(2020-2021)</span>
              <h3>front-end developer</h3>
              <p>
                After i was done with the work at that company i moved on to another company which they also were construction company
              </p>
            </div>
                <div class="box">
              <span>(2021-2022)</span>
              <h3>front-end developer</h3>
              <p>
               Since then till july in 2022 i worked and since july i am unemployed.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="services" id="services">
      <h1 class="heading"> <span>services</span></h1>
      <div class="box-container">
        <div class="box">
          <i class="fas fa-code"></i>
          <h3>web development</h3>
          <p>Web development services involve everything related to building a web-based solution or whether it is a simple text page or a complex web application.</p>
        </div>
         <div class="box">
          <i class="fab fa-bootstrap"></i>
          <h3>bootstrap</h3>
          <p> Designed to enable responsive development of mobile-first websites, Bootstrap provides a collection of syntax for template designs.</p>
        </div>
         <div class="box">
          <i class="fa-solid fa-users"></i>
          <h3>USER-DRIVEN OUTCOMES</h3>
          <p>where deployments happen daily, rollout of new features to customers happens gradually, and customer input is an integral part.</p>
        </div>
         <div class="box">
          <i class="fa-solid fa-bullhorn"></i>
          <h3>EFFECTIVE BRANDING</h3>
          <p>Build a strong brand with custom front-end development services.</p>
        </div>
      </div>
    </section>


      <section class="portfolio" id="portfolio">
        <h1 class="heading"><span>portfolio</span></h1>
        <div class="box-container">
          <div class="box">
            <img src="image/img-1.jpg" alt="">
            <h3>web development</h3>
            <span><a href="https://github.com/Teosii/bootstrap">Check project</a> </span>
           
          </div>
           <div class="box">
            <img src="image/img-2.jpg" alt="">
            <h3>web development</h3>
            <span> <a href="https://github.com/Teosii/projektiFinal">Check project</a></span>
           
          </div>
           <div class="box">
            <img src="image/img-3.jpg" alt="">
            <h3>web development</h3>
            <span><a href="https://github.com/Teosii/Js-project">Check project</a></span>
          </div>
           <div class="box">
            <img src="image/img-4.jpg" alt="">
            <h3>web development</h3>
            <span><a href="https://github.com/Teosii/First-Project">Check Project</a></span>
          </div>
           <div class="box">
            <img src="image/img-5.jpg" alt="">
            <h3>web development</h3>
            <span><a href="https://github.com/Teosii/Second-Project">Check Project</a></span>
          </div>
           <div class="box">
            <img src="image/img-6.jpg" alt="">
            <h3>web development</h3>
            <span><a href="https://github.com/Teosii/bootstrap">Check Project</a></span>
          </div>
        </div>
      </section>


      <section class="contact" id="contact">
        <h1 class="heading"><span>contact me</span></h1>
        <form action="" method="post">
          <div class="flex">
            <input type="text" name="name" placeholder="enter your name" class="box" required>
            <input type="email" name="email" placeholder="enter your email" class="box" required>
          </div> 
            <input type="number"  min="0"  name="number" placeholder="enter your number" class="box" required>
            <textarea name="message" class="box" required placeholder="enter your message" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" name="send" class="btn">
        </form>
      </section>



      <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Teos Hoxha</span> </div>


    <script src="js/script.js"></script>
  </body>
</html>

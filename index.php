<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,scale=1">
  <title>My Website_(1402019071)</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>

<!-- loader -->
<div class="bg-loader">
  <div class="loader"></div>  
</div>

  <!-- header -->
  <div class="medsos">
    <div class="container">
      <ul>
        <li><a href="https://www.instagram.com/raflyihzarayana/"><i class="fab fa-instagram-square"></i></a></li>
        <li><a href="https://www.youtube.com/channel/UCE3SlxL_Myl7F7sb6MxIE5g"><i class="fab fa-youtube"></i></a></li>
        <li><a href="#"><i class="fab fa-line"></i></a></li>
      </ul>  
    </div>
  </div>
  <header>
    <div class="container">  
      <h1><a href="index.html">Muhammad Rafly Ihza Rayana</a></h1>
      <ul>
          <li><a href="myprojects.html">My Projects</a></li>
          <li><a href="about.html">ABOUT</a></li>
          <li><a href="askme.html">ASK ME!</a></li>
      </ul>
  </div>
  </header>

  <!-- banner -->
  <section class="banner">
    <h2>WELCOME MY WEBSITE</h2> 
  </section>

  <!-- My projects -->
  <section class="My projects">
    <div class="containet">
      <h3>MY PROJECTS</h3>
      <table>
  <tr>
    <th>My Project Tittle</th>
    <th>Proggramming Language</th>
    <th>Description</th>
  </tr>
  <tr>
    <td>Sensor Lampu</td>
    <td>C</td>
    <td>This project shows how the motion sensor is to turn on a lamp.</td>
  </tr>
  <tr>
    <td>Membuat Login app</td>
    <td>Java</td>
    <td>This project describes how to create a login application.</td>
  </tr>
</table>
    </div>  
  </section>

  <!--About Me-->
  <section class="about">
    <div class="containet">  
      <h3>ABOUT</h3>
      <h4>Muhammad Rafly Ihza Rayana</h4>
  <section class="rafly"></section>
      <P>Halooo... Perkenalkan nama saya Muhammad Rafly Ihza Rayana. Saat ini saya tinggal di daerah Jakarta Pusat. Saya kuliah di Universitas Yarsi dengan program studi Teknik Informatika dan sudah memasuki semester 4. Saat ini saya sedang mencoba untuk membuat sebuah website portofolio pribadi. Selama saya kuliah di Universitas yarsi, saya sudah mempelajari berbagai macam bahasa pemrograman, seperti:</P>
       <ul>
       <li>Java</li>
       <li>HTML</li>
       <li>CSS</li>
       <li>Javascript</li>
       <li>SQL</li>
      </ul>
    </div>
   </section>
     
<!--Ask Me!-->
  <section class="askme">
    <div class="containet">
      <h5>ASK ME!</h5> 
      <P>Tulis peratanyaan yang kamu ingin ajukan disini. privasi pemberi pertenyaan saya pastikan akan selalu aman. Komentar atau pertanyaan yang positif dan membangun akan sangat saya hargai. Semua pertanyaan akan saya jawab melalui email.</P>

      <div>
  <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="question">Question</label>
    <input type="text" id="question" name="lastname" placeholder="Your question..">
  
    <input type="submit" value="Submit">
  </form>
</div>
</section>

<!-- footer -->
<footer>
  <div class="container">
    <small>Copyright &copy; 2021 - Muhammad Rafly Ihza Rayana. All Right Reserved.</small>
    </div>
</footer>

<script type="text/Javascript">
  $(document).ready(function(){  
  $(".bg-loader").hide();
})
</script>

</body>
</html>

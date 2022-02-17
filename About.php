<!doctype html>
<html lang="en">
   <head>
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
      <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
      <title>Landing Page</title>
   </head>
   <body background="BackgroundIMG.jpeg">
      <style>
         .sidenav {
        height: 100%;
        width: 162px;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #222;
        overflow-x: hidden;
        padding-top: 20px;

      }
      body {
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
      }  

      html {
        box-sizing: border-box;
      }

      *, *:before, *:after {
        box-sizing: inherit;
      }

      .column {
        float: left;
        width: 33.3%;
        margin-bottom: 16px;
        padding: 0 8px;
      }

      .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        margin: 8px;
      }

      .about-section {
        padding: 50px;
        text-align: center;
        background-color: #474e5d;
        color: white;
      }

      .container {
        padding: 0 16px;
      }

      .container::after, .row::after {
        content: "";
        clear: both;
        display: table;
      }

      .title {
        color: grey;
      }

      .button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
      }

      .button:hover {
        background-color: #555;
      }

      @media screen and (max-width: 650px) {
        .column {
          width: 100%;
          display: block;
        }
}     
      </style>


      
       <div class="about-section">
  <h1>About Me</h1>
  
</div>


<div class="row">
  
  <div class="column">
    <div style = "margin-left: 200px;"class="card">
      <img src="Image.jpeg" style="width:25%">
      <div class="container" >
        <h2 style="margin-top: 20px;">Tudurean Adrian</h2>
        <p class="title">Student</p>
        <p>I graduated high school with a degree in Mathematics and Informatics and now i'm in
         the final year of studies at FSEGA-UBB, studying Informatics and Economics.
         Since childhood I have developed a passion for technology and I have a desire to
         commence my career into programming.
         <br>I enjoy being challenged and engaging with projects that require me to work outside my
          comfort zone and knowledge set, as continuing to learn new programming languages and development 
          techniques that are important to me. 
        </p>
         <h3> Personal Skills </h3>
         <p>-Good understanding of data structures and algorithms
         <br>-Java programming OOP (intermediary level)
         <br>-HTML, CSS, JavaScript Package (intermediary level)
         <br>-C/C++ programming (basic level)
         <br>-Python programming (basic level)
         <br>-Basic Database techniques (Oracle PL/SQL, SQL, PostgreSQL)
         <h3>Language Skills</h3>
         <p>B2 Level Cambridge Certificate obtained in 2017.
          <br>I have good communication skills gained through my volunteer experience and my seasonal jobs of late years.
         </p>
        <p></p>
        <p><button class="button" onclick="window.location.href='Contact.php'">Contact</button></p>
      </div>
    </div>
  </div>
  </div>
</div>

      <div class = "sidenav">
      <div class = "card"> 

      <button class = "btn btn-dark btn btn-lg" type = "button"  onclick="window.location.href='Test.php'"> Home </button>
      <button style="margin:9px;" class = "btn btn-secondary btn btn-sm" type = "button" onclick="window.location.href='About.php'"><i class="las la-info-circle"></i> About </button>
      <button style="margin:9px;" class = "btn btn-dark btn btn-sm" type = "button" onclick="window.location.href='Projects.php'"> Projects </button>
      <button style="margin:9px;" class = "btn btn-dark btn btn-sm" type = "button" onclick="window.location.href='Contact.php'"> Contact </button>
      </div>
      </div>
      
   </body>
   
  </html>
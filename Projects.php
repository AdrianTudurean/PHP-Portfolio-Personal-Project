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
        background-color: #111;
        overflow-x: hidden;
        padding-top: 20px;
      }     
      .card {
         width: 159px;
       }
       button {
         margin-top=16px;
       }
      .center {
          text-align: left;
          margin-left:9%;
          list-style-position: inside;
       }
      ol.center li {
       text-align: left;
       margin-left: -1%;
      }

      </style>


      <div class = "sidenav">
      <div class = "card"> 

     <button class = "btn btn-dark btn btn-lg" type = "button"  onclick="window.location.href='Test.php'"> Home </button>
      <button style="margin:9px;" class = "btn btn-dark btn-sm" type = "button"onclick="window.location.href='About.php'"> About </button>
      <button style="margin:9px;" class = "btn btn-secondary btn btn-sm" type = "button" onclick="window.location.href='Projects.php'"> <i class="las la-project-diagram"></i> Projects </button>
      <button style="margin:9px;" class = "btn btn-dark btn btn-sm" type = "button" onclick="window.location.href='Contact.php'"> Contact </button>
      </div>
      </div>
      <ol class="center" style="margin-top: 40px;"> <b> My Projects: </b>
         <li><button style="margin:9px;" class = "btn btn-dark btn btn-lg" type = "button" onclick="window.location.href='MineSweeper.php'"> MineSweeper </button></li>
         <li><button style="margin:9px;" class = "btn btn-dark btn btn-lg" type = "button" onclick="window.location.href='TicTacToe.php'"> TicTacToe </button></li>
         <li><button style="margin:9px;" class = "btn btn-dark btn btn-lg" type = "button" onclick="window.location.href='HangMan.php'"> HangMan </button></li>
      </ol>
   </body>
   
  </html>
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
      <button style="margin:9px;" class = "btn btn-dark btn btn-sm" type = "button"> About </button>
      <button style="margin:9px;" class = "btn btn-secondary btn btn-sm" type = "button" onclick="window.location.href='Test1.php'"> Projects </button>
      <button style="margin:9px;" class = "btn btn-dark btn btn-sm" type = "button"> Contact </button>
      </div>
      </div>
      <ol class="center"> Projects
         <li><button style="margin:9px;" class = "btn btn-dark btn btn-lg" type = "button" onclick="window.location.href='MineSweeper.php'"> MineSweeper </button></li>
         <li><button style="margin:9px;" class = "btn btn-dark btn btn-lg" type = "button" onclick="window.location.href='TicTacToe.php'"> TicTacToe </button></li>
         <li><button style="margin:9px;" class = "btn btn-secondary btn btn-lg" type = "button" onclick="window.location.href='HangMan.php'"><i class="las la-skull-crossbones"></i> HangMan </button></li>
      </ol>
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
      <title>Hang Man</title>
   </head>
   <body>
      <style>
         .wrapper {
         text-align: center;
         }
         .button {
         position: absolute;
         top: 50%;
         }
      </style>
      <div id="button" class="container w-150 p-5">
         <div class="card-header" style="background-color: #eba13c; font-family:Brush Script MT" font size="+22">
            <font size="+4">Introduce a word:</font>
         </div>
         <div class="card">
            <input type="text" class="form-control" id="theWord" style="background-color: #eee;" autocomplete="off">
            <button type="submit" class="btn btn-primary" onclick="return startGame();" style="background-color: #8e0f7b;"><i class="las la-skull"></i> Begin! <i class="las la-skull"></i></button>
         </div>
      </div>
      <div class="wrapper">
         <button class="button btn btn-success" onclick="return restartGame();" id="restartWin" > <i class="las la-dove"></i> You won! <i class="las la-dove"></i></button>
      </div>
      <div class="wrapper">
         <button class="button btn btn-danger" onclick="return restartGame();" id="restartLose" ><i class="las la-skull-crossbones"></i> You lost! <i class="las la-skull-crossbones"></i></button>
      </div>
      <script>
         $('#restartWin').hide();
         $('#restartLose').hide();
      </script>
      <div id="hangman" class="container w-120 p-5">
      <div id="list">
      </div>
      <form>
         <div class="mb-3">
         <label>Guess the letters!</label>
         <input type="text" class="form-control" id="letter" autocomplete="off">
         <button type="submit" class="btn btn-danger" onclick="return checkGuess();"><i class="las la-skull"></i> Make a guess <i class="las la-skull"></i></button>
      </form>
      <div id="hangmanWord" class="container w-120 w-5">
         <div id="list1">
         </div>
      </div>
      <div class="wrapper">
         <canvas id="canvas" width="400px" height="300px" >
            Your browser does not support HTML5 Canvas element! :(
         </canvas>
      </div>
   </body>
   <script>
      $('#hangman').hide();
      var canvas = document.getElementById("canvas");
      var letterList = [];
      var checkList = [], letteridList = [];
      var length = 0;
      var win = 0, lose = 0;
      
            function instaWin() {
              var word = $('#theWord').val();
              var guessedword = $('#letter').val();
              if(word == guessedword) {
                win = 8;
                winLoss();
                return 1;
              }
              return false;
            }
      
            function startGame() {
            var i = 0, correctletter = 100, hiddenletter = 1000;
            var word = $('#theWord').val();
            $('#button').hide();
            $('#hangman').show();
            letterList.push(word.toLowerCase());
            $('#list').append(`<div class="card-header"style="background-color: #eba13c; font-family:Brush Script MT">
                                    <font size="+4">Hang Man</font>`);
            while(word.length > i) {
              $('#list1').append(`
                <button id= "`+ correctletter +`" type="button" class="btn btn-dark btn-lg">`+ letterList[0][i] +`</i></button>  
                `);
              $('#list1').append(`
                <button id= "`+ hiddenletter +`" type="button" class="btn btn-dark btn-lg"><i class="las la-question-circle"></i></i></button>  
                `);
              $('#' + correctletter).hide();
              i++; correctletter++; hiddenletter += 100;
            }
            length = i;
            lose = 7;
            giveHint(); 
            return false;
           }
      
           function checkGuess() {
            
            if(instaWin() != 1) {
            var letter = $('#letter').val();
            var guessmade = 0;
            if(letter.length != 1 || letter.length == 0) {
              alert("You can only introduce 1 letter!")
            } else {
            var i, correctletter, hiddenletter;
            for(i = 0; i < length; i++) {
              correctletter = 0; hiddenletter = 0;
              if(letter == letterList[0][i]) {
                checkList.push(letterList[0][i]);
                correctletter = i + 100;
                hiddenletter = i * 100 + 1000;
                $('#' + hiddenletter).hide();
                $('#' + correctletter).show();
                guessmade = 1;
                if(letteridList.indexOf(correctletter) == -1 && letteridList.indexOf(letter) == -1)
                 win++; 
                }
                
                
           }
           letteridList.push(letter);
           if(guessmade === 0) {
            lose--;
            minusLife(lose);
           }
           
           winLoss();
         }
         } else {
           winLoss();
         } 
           return false;
         }

         function winLoss() {
          if(win >= length) {
                $('#restartWin').show();
                $('#hangman').hide();
      
              } else if(lose == 0) {
                $('#restartLose').show();  
                $('#hangman').hide();
               }
         }
         
         function minusLife(lose) {
          
          if (canvas.getContext("2d")) { // Check HTML5 canvas support
            var context = canvas.getContext("2d"); // get Canvas Context object
            if(lose == 6) {
            context.beginPath();
            context.moveTo(200, 80)
            context.fillStyle = "bisque"; // #ffe4c4
            context.arc(200, 50, 30, 0, Math.PI * 2, true); // draw circle for head
            // (x, y) center, radius, start angle, end angle, anticlockwise
            context.fill();
            }
            if(lose == 5) {
            context.beginPath();
            context.strokeStyle = "red"; // color
            context.lineWidth = 3;
            context.arc(200, 80, 20, -0.7, Math.PI * 1 + 0.7 , true); // draw semicircle for frowning
            context.stroke();
            }
            if(lose == 4) {
            // eyes
            context.beginPath();
            context.fillStyle = "green"; // color
            context.arc(190, 45, 3, 0, Math.PI * 2, true); // draw left eye
            context.fill();
            context.arc(210, 45, 3, 0, Math.PI * 2, true); // draw right eye
            context.fill();
            }
            if(lose == 3) {
            // body
            context.beginPath();
            context.moveTo(200, 80);
            context.lineTo(200, 180);
            context.strokeStyle = "navy";
            context.stroke();
            }
            if(lose == 2) {
            // arms
            context.beginPath();
            context.strokeStyle = "#0000ff"; // blue
            context.moveTo(200, 80);
            context.lineTo(150, 130);
            context.moveTo(200, 80);
            context.lineTo(250, 130);
            context.stroke();
            }
            if(lose == 1) {
            // legs
            context.beginPath();
            context.strokeStyle = "orange";
            context.moveTo(200, 180);
            context.lineTo(150, 280);
            context.moveTo(200, 180);
            context.lineTo(250, 280);
            context.stroke();
            }
           } 
         }
         function restartGame() {
          location.reload();
         }
         var array = [], marker = 1;
         function giveHint(minimum, maximum) {
      
            minimum = 0; maximum = length;
            if(marker == 1) {
              array[1000] = maximum;
              marker = 0;
            }
      
            var cycle = Math.floor(maximum / 2);
      
            while(cycle != 0) {
            if(array[1000] > Math.floor(maximum / 2)) {
              
            var OK = 1;
            while(OK == 1) {
            var random = Math.floor(Math.random() * (maximum - minimum) + minimum);
            if(array.indexOf(random) == -1) {  
              OK = 0;
              array.push(random);
            } else {
              OK = 1;
            }
          }
          var random_x = random + 100, random_y = random * 100 + 1000;   
          $('#' + random_x).show(); letteridList.push(random_x);
          $('#' + random_y).hide();
          array[1000] -= 1;
          win++;
          } 
          cycle--;
          }
            return false;
        }
      
   </script>
</html>
   </body>
   
  </html>
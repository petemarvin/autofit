<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    <style>
      body{
        font-family: 'Montserrat', sans-serif;
      }

      p{
        margin-bottom: 20pt;
        margin-top: 0pt;
      }

      p:last-child{
        margin-bottom: 0pt;
        margin-top: 0pt;
      }

      #main {
        border:1px solid red;
        width: 24.1cm;
        height: 11.2cm;
      }
      #text {
        border:1px solid blue;
          font-size:35px;
      }
    </style>
  </head>
  <body>
    <div id="main">
      <div id="text">
        <?php
          if (isset($_GET["q"])){
            $content = $_GET["q"];
            $content_p = str_replace("new_line", "</p>\r\n<p>", $content);
            $content_p = "<p>" . $content_p . "</p>";
            echo  $content_p;
          }
        ?>


      </div>    
    </div>
    
    <div id="font">
      
    </div>
    

    <script>
      $(window).on('load', function (e) {
        var intMainHeight = $('#main').height();
        var intTextHeight = $('#text').height();
        var intFontSize = parseInt($('#text').css('font-size'));
        while (intTextHeight > intMainHeight) {
            console.log(intTextHeight,intMainHeight);
            intFontSize= intFontSize-0.5;
            $('#text').css('font-size', intFontSize+ 'px');
            intMainHeight = $('#main').height();
            intTextHeight = $('#text').height();
        }
        final = intFontSize;

      
          
        show(final );
      });
      function show(final){
       //$('#main').hide(); 
       $('#font').html(final); 
      }
      
    </script>
  </body>
</html>

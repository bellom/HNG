<!DOCTYPE html>
<html lang="en">
    
    <head>
      <title>HNG Homepage</title>
      <meta charset="UTF-8">
      <style type="text/css">
        h1 {
            color: white;
            font-family:cursive;
            font-size: 60px;
            text-align: left;
        }
          
        p {
            color: white;
            font-family: cursive;
            font-size: 30px;
            text-align: left;
        }
        
         h2 {
              color: white;
              text-align: center;
             font-size: 100px;
            
          }

         h3 {
              color: white;
              text-align: center;
             font-size: 40px;   
          }
          
      </style>


    </head>
    
    <body background="brain.jpg">
      
        <h1>HNG<p>Homepage</p></h1>
       <h3><i>The Time is:</i></h3>
        
        <h2>
               <?php
              date_default_timezone_set("Africa/Lagos");  
              echo" " .date("h:i:sa"); 
               ?>
        </h2>
      
    </body>
    
</html>
<?php

/* Template Name: Thank You Speaker Registration */ 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you</title>
   <style>
       @import url(https://fonts.googleapis.com/css?family=Montserrat);
       /*basic reset*/
       body {
       margin: 0;
       padding: 0;
       font-family: montserrat, arial, verdana;
       width: 100%;
       }
           #success{
           text-align: center;
           width: 50%;
           margin-top: 50px;
           margin-bottom: 50px;
           margin-left: auto;
           margin-right: auto;
           }

           #success h1{
           color: #009688;
           font-size: 30px;
           font-weight: bold;
           }

           #success p{
           line-height: 1.5;
           font-weight: bold;
           font-size: 18px;
           }
           #success img{
           width: 55%;
           height: 55%;
           }

           @media only screen and (max-width: 700px){
                  #success{
                  width: 70%;
                  font-size: 12px;
                  }

                   #success img{
                   width: 70%;
                   height: 70%;
                   }
           }
       </style>
</head>
<body>
  <section id="success">
      <h1>Success! You are registered.</h1>
      <p>Thank you for signing-up, it means a lot to us! We really appreciate you giving us a moment of your time.</p>
      <p>As next step, we will send confirmation and reminders up to 1 day before the session.</p>
      <img src="https://health4theworld.org/academy/wp-content/uploads/2019/11/Thankyou.png" alt="Thankyou">
  </section>
</body>
    </html>
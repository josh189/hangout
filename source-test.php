<?php 
$mail1 = "josh189_@hotmail.com";
$mail2 = "marialennypineda@gmail.com"; 
?>
<!-- <html>
<head>
    <title>Hangout button demo: Inviting people</title>
    <link rel="canonical" href="http://www.example.com" />
</head>
<body>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <div id="hangout_div1">
      <a id="pulsar1">
        <g:hangout render="createhangout"
        invites="[{ id : '<?php //echo $mail2; ?>', invite_type : 'EMAIL' }]">
        </g:hangout>
      </a>
    </div>
</body>
</html> -->
<html>
<head>
    <title>Hangout button demo: Inviting people</title>
    <!-- <link rel="canonical" href="http://www.example.com" /> -->
</head>
<body>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <g:hangout render="createhangout"
        invites="[{ id : 'natacha.medina.p@gmail.com', invite_type : 'EMAIL' }]">
    </g:hangout>
</body>
</html>
<!-- <html>
  <head>
    <title>Hangout button demo: Async load</title>
    <link rel="canonical" href="http://www.example.com" />
    <script src="https://apis.google.com/js/platform.js" async defer>
    </script>
  </head>
  <body>
    <div class="g-hangout" data-render="createhangout"></div>
  </body>
</html> -->


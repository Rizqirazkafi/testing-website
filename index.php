<!DOCTYPE html>
<html lang="en">

<head>
  <title>Testing Website</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet">
</head>

<body>
  <h1>This is testing website</h1>
  <p>Lorem ipsum dolor sit amet, qui minim labore adipisicing minim sint
    cillum sint consectetur cupidatat.</p>
  <script type="text/javascript">
    var ip = "<?php echo $_SERVER['SERVER_ADDR']; ?>";
    alert(ip);
  </script>

</body>

</html>

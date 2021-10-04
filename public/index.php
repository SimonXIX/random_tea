<?php

# @name: index.php
# @version: 0.1
# @creation_date: 2021-10-03
# @license: The MIT License <https://opensource.org/licenses/MIT>
# @author: Simon Bowie <simon.bowie.19@gmail.com>
# @purpose: Home page for the application

include '../tea.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>What kind of tea today?</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<?php

$tea_string=randomise_tea();

?>

   <div class="text tea_title">
      What kind of tea today?
   </div>

   <div class="text centre">
      <?php echo $tea_string; ?>
   </div>

   <div class="image">
      <img src="images/<?php echo $tea_string; ?>.png">
   </div>

</body>
</html>

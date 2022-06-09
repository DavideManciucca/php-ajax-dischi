<?php 
 

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <link rel="stylesheet" href="style.css">
  <title>PHP dischi</title>
</head>
<body>
  <main> 
  <div id="app">
    <div class="dm-wrapper">
    <div class="dm-container">
  <?php include('json.php') ?>
    <?php foreach($db as $disco): ?>
      <div class="poster"><img src="<?php echo $disco['poster'] ?>" alt=""></div>
      <div><?php echo $disco['title'] ?></div>
      <div><?php echo $disco['author']?></div>
      <div><?php echo $disco['genre']?></div>
      <div><?php echo $disco['year'] ?></div>
    <?php endforeach; ?>
  </div>
</div>
  
</div>
  </main>
  <script src="script.js"></script>
</body>
</html>
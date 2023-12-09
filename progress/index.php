<?php
include "../php/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Progress</title>
  <link rel="stylesheet" href="../css/base.css?v=1.1" />
  <link rel="stylesheet" href="../css/progress.css?v=1.1" />
</head>

<body>
  <div id="main_wrapper">
    <a href="/" class="back_arrow_wrapper">
      <img src="../assets/back_arrow.webp" alt="" />
      <p>Back</p>
    </a>

    <div class="divider_1"></div>

    <div class="div_1">
      <h2>Leaderboard</h2>
      <p>You are signed in as Yash Kolambekar (9602)</p>
    </div>

    <div class="divider_1"></div>

    <div class="div_1" id="actions_wrapper">
      <a href="update">Update my records</a>
    </div>

    <div class="divider_1"></div>

    <div class="div_1" id="subject_select_wrapper">
      <a href="">101 COD</a>
      <a href="">102 Python</a>
      <a href="">103 FOSS</a>
      <a href="" class="a_active">104 DBMS</a>
      <a href="">105 Disc Maths</a>
      <a href="">106 Statistics</a>
      <a href="">107 Soft Skills</a>
    </div>

    <div class="divider_2"></div>

    <div class="div_1" id="table_wrapper">
      <div id="table">
        <div class="table_head"><p>Name</p></div>
        <div class="table_head"><p>1</p></div>
        <div class="table_head"><p>2</p></div>
        <div class="table_head"><p>3</p></div>
        <div class="table_head"><p>4</p></div>
        <div class="table_head"><p>5</p></div>
        <div class="table_head"><p>6</p></div>
        <div class="table_head"><p>7</p></div>
        <div class="table_head"><p>8</p></div>
        <div class="table_head"><p>9</p></div>
        <div class="table_head"><p>10</p></div>
        
      </div>
    </div>


  </div>
</body>

</html>
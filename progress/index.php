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
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
  <div id="main_wrapper">
    <a href="/" class="back_arrow_wrapper">
      <img src="../assets/back_arrow.webp" alt="" />
      <p>Back</p>
    </a>

    <div class="divider_1"></div>

    <div class="div_1">
      <h2>Progress</h2>
      <p>You are signed in as Yash Kolambekar (9602)</p>
    </div>

    <div class="divider_1"></div>

    <div class="div_1" id="actions_wrapper">
      <?php 
        if(isset($_COOKIE[""])){
          echo '<a href="update">Update my records</a>';
        }else{
          echo '<a href="signup">Sign Up</a>';
          echo '<a href="login">Log In</a>';
        }
      ?>
      
    </div>

    <div class="divider_1"></div>

    <div class="div_1" id="subject_select_wrapper">
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
        
        <div class="row_1"><p>Yash Kolambekar</p></div>
        <div class="row_1"><p>✅</p></div>
        <div class="row_1"><p>✅</p></div>
        <div class="row_1"><p>✅</p></div>
        <div class="row_1"><p>✅</p></div>
        <div class="row_1"><p>✅</p></div>
        <div class="row_1"><p>✅</p></div>
        <div class="row_1"><p>✅</p></div>
        <div class="row_1"><p>✅</p></div>
        <div class="row_1"><p>✅</p></div>
        <div class="row_1"><p>✅</p></div>

        <div class="row_2"><p>Mukesh Bhai</p></div>
        <div class="row_2"><p></p></div>
        <div class="row_2"><p></p></div>
        <div class="row_2"><p>✅</p></div>
        <div class="row_2"><p>✅</p></div>
        <div class="row_2"><p></p></div>
        <div class="row_2"><p>✅</p></div>
        <div class="row_2"><p>✅</p></div>
        <div class="row_2"><p></p></div>
        <div class="row_2"><p></p></div>
        <div class="row_2"><p>✅</p></div>

        <div class="row_1"><p>Jethalal</p></div>
        <div class="row_1"><p>✅</p></div>
        <div class="row_1"><p>✅</p></div>
        <div class="row_1"><p></p></div>
        <div class="row_1"><p>✅</p></div>
        <div class="row_1"><p></p></div>
        <div class="row_1"><p></p></div>
        <div class="row_1"><p>✅</p></div>
        <div class="row_1"><p></p></div>
        <div class="row_1"><p></p></div>
        <div class="row_1"><p>✅</p></div>

        <div class="row_2"><p>Mukesh Bhai</p></div>
        <div class="row_2"><p></p></div>
        <div class="row_2"><p></p></div>
        <div class="row_2"><p>✅</p></div>
        <div class="row_2"><p>✅</p></div>
        <div class="row_2"><p></p></div>
        <div class="row_2"><p>✅</p></div>
        <div class="row_2"><p>✅</p></div>
        <div class="row_2"><p></p></div>
        <div class="row_2"><p></p></div>
        <div class="row_2"><p>✅</p></div>

        <div class="row_1"><p>Jethalal</p></div>
        <div class="row_1"><p>✅</p></div>
        <div class="row_1"><p>✅</p></div>
        <div class="row_1"><p></p></div>
        <div class="row_1"><p>✅</p></div>
        <div class="row_1"><p></p></div>
        <div class="row_1"><p></p></div>
        <div class="row_1"><p>✅</p></div>
        <div class="row_1"><p></p></div>
        <div class="row_1"><p></p></div>
        <div class="row_1"><p>✅</p></div>

        <div class="row_2"><p>Mukesh Bhai</p></div>
        <div class="row_2"><p></p></div>
        <div class="row_2"><p></p></div>
        <div class="row_2"><p>✅</p></div>
        <div class="row_2"><p>✅</p></div>
        <div class="row_2"><p></p></div>
        <div class="row_2"><p>✅</p></div>
        <div class="row_2"><p>✅</p></div>
        <div class="row_2"><p></p></div>
        <div class="row_2"><p></p></div>
        <div class="row_2"><p>✅</p></div>

        <div class="row_1"><p>Jethalal</p></div>
        <div class="row_1"><p>✅</p></div>
        <div class="row_1"><p>✅</p></div>
        <div class="row_1"><p></p></div>
        <div class="row_1"><p>✅</p></div>
        <div class="row_1"><p></p></div>
        <div class="row_1"><p></p></div>
        <div class="row_1"><p>✅</p></div>
        <div class="row_1"><p></p></div>
        <div class="row_1"><p></p></div>
        <div class="row_1"><p>✅</p></div>
        
        <div class="row_1"><p>Yash Kolambekar</p></div>
        <div class="row_1"><p>✅</p></div>
        <div class="row_1"><p>✅</p></div>
        <div class="row_1"><p>✅</p></div>
        <div class="row_1"><p></p></div>
        <div class="row_1"><p>✅</p></div>
        <div class="row_1"><p>✅</p></div>
        <div class="row_1"><p>✅</p></div>
        <div class="row_1"><p>✅</p></div>
        <div class="row_1"><p>✅</p></div>
        <div class="row_1"><p>✅</p></div>

        <div class="row_2"><p>Mukesh Bhai</p></div>
        <div class="row_2"><p></p></div>
        <div class="row_2"><p></p></div>
        <div class="row_2"><p>✅</p></div>
        <div class="row_2"><p>✅</p></div>
        <div class="row_2"><p></p></div>
        <div class="row_2"><p>✅</p></div>
        <div class="row_2"><p>✅</p></div>
        <div class="row_2"><p></p></div>
        <div class="row_2"><p></p></div>
        <div class="row_2"><p>✅</p></div>

        <div class="row_1"><p>Jethalal</p></div>
        <div class="row_1"><p>✅</p></div>
        <div class="row_1"><p>✅</p></div>
        <div class="row_1"><p></p></div>
        <div class="row_1"><p>✅</p></div>
        <div class="row_1"><p></p></div>
        <div class="row_1"><p></p></div>
        <div class="row_1"><p>✅</p></div>
        <div class="row_1"><p></p></div>
        <div class="row_1"><p></p></div>
        <div class="row_1"><p>✅</p></div>

        <div class="row_2"><p>Mukesh Bhai</p></div>
        <div class="row_2"><p></p></div>
        <div class="row_2"><p></p></div>
        <div class="row_2"><p>✅</p></div>
        <div class="row_2"><p>✅</p></div>
        <div class="row_2"><p></p></div>
        <div class="row_2"><p>✅</p></div>
        <div class="row_2"><p>✅</p></div>
        <div class="row_2"><p></p></div>
        <div class="row_2"><p></p></div>
        <div class="row_2"><p>✅</p></div>

        <div class="row_1"><p>Jethalal</p></div>
        <div class="row_1"><p>✅</p></div>
        <div class="row_1"><p>✅</p></div>
        <div class="row_1"><p></p></div>
        <div class="row_1"><p>✅</p></div>
        <div class="row_1"><p></p></div>
        <div class="row_1"><p></p></div>
        <div class="row_1"><p>✅</p></div>
        <div class="row_1"><p></p></div>
        <div class="row_1"><p></p></div>
        <div class="row_1"><p>✅</p></div>

        <div class="row_2"><p>Mukesh Bhai</p></div>
        <div class="row_2"><p></p></div>
        <div class="row_2"><p></p></div>
        <div class="row_2"><p>✅</p></div>
        <div class="row_2"><p>✅</p></div>
        <div class="row_2"><p></p></div>
        <div class="row_2"><p>✅</p></div>
        <div class="row_2"><p>✅</p></div>
        <div class="row_2"><p></p></div>
        <div class="row_2"><p></p></div>
        <div class="row_2"><p>✅</p></div>

        <div class="row_1"><p>Jethalal</p></div>
        <div class="row_1"><p>✅</p></div>
        <div class="row_1"><p>✅</p></div>
        <div class="row_1"><p></p></div>
        <div class="row_1"><p>✅</p></div>
        <div class="row_1"><p></p></div>
        <div class="row_1"><p></p></div>
        <div class="row_1"><p>✅</p></div>
        <div class="row_1"><p></p></div>
        <div class="row_1"><p></p></div>
        <div class="row_1"><p>✅</p></div>

      </div>
    </div>


  </div>
</body>
<script src="../js/progress.js"></script>
</html>
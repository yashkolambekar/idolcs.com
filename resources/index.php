<?php
    include "../db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Resources</title>
  <base href="../">
  <link rel="stylesheet" href="css/base.css" />
</head>

<body>
  <div id="main_wrapper">
  <a href="/" class="back_arrow_wrapper">
        <img src="assets/back_arrow.webp" alt="" />
        <p>Back</p>
      </a>
      <div class="divider_1"></div>
    <div class="div_1">
      <h2>All Resources</h2>
      <div class="links_1">
      <?php
        $query = "SELECT * FROM `resources` ORDER BY `id` DESC LIMIT 5";
        $result = mysqli_query($db, $query);
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<a target='blank' href='" . $row["link"] . "'>";
            echo "<p class='ll_head'>" . $row["title"] . "</p>";
            echo '<div class="ll_small_text">';
            echo '<p>' . $row["description"] . '</p>';
            echo '</div>';
            echo '</a>';
          }
        }
        ?>
      </div>
    </div>
  </div>
</body>

</html>
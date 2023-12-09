<?php
include "../../php/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Update Progress</title>
  <link rel="stylesheet" href="../../css/base.css?v=1.1" />
  <link rel="stylesheet" href="../../css/progress_update.css?v=1.1" />
</head>

<body>
  <div id="main_wrapper">
    <a href="/progress" class="back_arrow_wrapper">
      <img src="../../assets/back_arrow.webp" alt="" />
      <p>Back</p>
    </a>

    <div class="divider_1"></div>

    <div class="div_1">
      <h2>Update Progress</h2>
      <p>You are signed in as Yash Kolambekar (9602)</p>
    </div>

    <div class="div_1">
        <select name="" id="">
            <option value="">101 COD</option>
            <option value="">102 Python</option>
            <option value="">103 FOSS</option>
            <option value="">104 DBMS</option>
            <option value="">105 Disc Maths</option>
            <option value="">106 Statistics</option>
            <option value="">107 Soft Skills</option>
        </select>
    </div>

    <div class="divider_1"></div>

    <div class="div_1" id="update_table">
        <table>
            <tr>
                <td>Chap No</td>
                <td>Status</td>
            </tr>
            <tr>
                <td>1</td>
                <td><input type="checkbox" name="" id=""></td>
            </tr>
            <tr>
                <td>2</td>
                <td><input type="checkbox" name="" id=""></td>
            </tr>
            <tr>
                <td>3</td>
                <td><input type="checkbox" name="" id=""></td>
            </tr>
            <tr>
                <td>4</td>
                <td><input type="checkbox" name="" id=""></td>
            </tr>
            <tr>
                <td>5</td>
                <td><input type="checkbox" name="" id=""></td>
            </tr>
            <tr>
                <td>10</td>
                <td><input type="checkbox" name="" id=""></td>
            </tr>
        </table>
    </div>

    <div class="div_1" id="submit_wrapper">
      <button >Update</button>
    </div>

  </div>
</body>

</html>
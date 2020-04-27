<?php

include('functions.php');


$conn = getDB();
$username = $_SESSION['username'];
//fetch user information
$sqlstmt = "SELECT * FROM users LEFT JOIN countries ON users.countryID = countries.countryID WHERE username = '$username' ";
$result = runQuery($conn, $sqlstmt);
$user = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Jeoparty! - the Jeopardy Party Game</title>

  <link href="css/reset.css" rel="stylesheet">
  <link href="css/gamepage.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link href="css/slickButton.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>
<body onload="getCategories()">
  <div id="questionPrompt" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<div class="overlay-content" id="question">Question</div><br>
    <div class="overlay-content">PRESS SPACE TO BUZZ</div>
  </div>


  <div id="sideScore">
    <div class="scoreIcon">
      <span> SCORES </span>
    </div>

    <div id ="sideScoreCards">
      <div class = "scoreCard">
        <div class="score" id="currentScore"></div>
        <div class="username" ><?php echo strtoupper($user['name']); ?> <!-- use php to get name --></div>
      </div>
    </div>
  <button class="slickButton" id="slickButtonBack" onclick="window.location.href = 'menu.html';"><span>Exit Without Saving Score</span></button>
  <button class="slickButton" id="slickButtonBack" onclick="saveScore()" ><span>Save Score and Exit</span></button>
  </div>

  <div id="myModal" class="modal">
    <div class="modal-content">
      <input type="text" id="answerInput">
      <!-- <i class="material-icons">subdirectory_arrow_left</i> -->
    </div>
  </div>


  <table>
    <tr>
      <th class="category">
        <div class="categoryContent">1</div>
        <div style="display: none;" class="categoryId">1</div>
      </th>
      <th class="category">
        <div class="categoryContent">2</div>
        <div style="display: none;" class="categoryId">1</div>
      </th>
      <th class="category">
        <div class="categoryContent">3</div>
        <div style="display: none;" class="categoryId">1</div>
      </th>
      <th class="category">
        <div class="categoryContent">4</div>
        <div style="display: none;" class="categoryId">1</div>
      </th>
      <th class="category">
        <div class="categoryContent">5</div>
        <div style="display: none;" class="categoryId">1</div>
      </th>
      <th class="category">
        <div class="categoryContent">6</div>
        <div style="display: none;" class="categoryId">1</div>
      </th>
    </tr>
    <tr>
      <td class ="card" type="twohundred">
        <div class = "content" id = "test">$200</div>
      </td>
      <td class ="card" type="twohundred">
        <div class = "content">$200</div>
      </td>
      <td class ="card" type="twohundred">
        <div class = "content">$200</div>
      </td>
      <td class ="card" type="twohundred">
        <div class = "content">$200</div>
      </td>
      <td class ="card" type="twohundred">
        <div class = "content">$200</div>
      </td>
      <td class ="card" type="twohundred">
        <div class = "content">$200</div>
      </td>
    </tr>
    <tr>
      <td class ="card" type="fourhundred">
        <div class = "content">$400</div>
      </td>
      <td class ="card" type="fourhundred">
        <div class = "content">$400</div>
      </td>
      <td class ="card" type="fourhundred">
        <div class = "content">$400</div>
      </td>
      <td class ="card" type="fourhundred">
        <div class = "content">$400</div>
      </td>
      <td class ="card" type="fourhundred">
        <div class = "content">$400</div>
      </td>
      <td class ="card" type="fourhundred">
        <div class = "content">$400</div>
      </td>
    </tr>
    <tr>
      <td class ="card" type="sixhundred">
        <div class = "content">$600</div>
      </td>
      <td class ="card" type="sixhundred">
        <div class = "content">$600</div>
      </td>
      <td class ="card" type="sixhundred">
        <div class = "content">$600</div>
      </td>
      <td class ="card" type="sixhundred">
        <div class = "content">$600</div>
      </td>
      <td class ="card" type="sixhundred">
        <div class = "content">$600</div>
      </td>
      <td class ="card" type="sixhundred">
        <div class = "content">$600</div>
      </td>
    </tr>
    <tr>
      <td class ="card" type="eighthundred">
        <div class = "content">$800</div>
      </td>
      <td class ="card" type="eighthundred">
        <div class = "content">$800</div>
      </td>
      <td class ="card" type="eighthundred">
        <div class = "content">$800</div>
      </td>
      <td class ="card" type="eighthundred">
        <div class = "content">$800</div>
      </td>
      <td class ="card" type="eighthundred">
        <div class = "content">$800</div>
      </td>
      <td class ="card" type="eighthundred">
        <div class = "content">$800</div>
      </td>
    </tr>
    <tr>
      <td class="card" type="onethousand">
        <div class = "content">$1000</div>
      </td>
      <td class="card" type="onethousand">
        <div class = "content">$1000</div>
      </td>
      <td class="card" type="onethousand">
        <div class = "content">$1000</div>
      </td>
      <td class="card" type="onethousand">
        <div class = "content">$1000</div>
      </td>
      <td class="card" type="onethousand">
        <div class = "content">$1000</div>
      </td>
      <td class="card" type="onethousand">
        <div class = "content">$1000</div>
      </td>
    </tr>

  </table>

	<script src="scripts/game.js"></script>
</body>
</html>
<?php
echo ' <!-- Navbar  -->' ?>
    <div class="top">
        <div class="topBar">
        <a href="index.php" class="logo"><img src="littlethings_logo.png"></a>

            <div class="smaller">
                <a class="bar" onclick="myFunction()" title="Toggle Navigation Menu"><img src="bars.svg" alt="MENU"></a>
            </div>
            <a href="addLittleThing.php"><img  class="menuButton" src="daily_thing.png"></a>
            <a href="dailyLittleThing.php"><img  class="menuButton" src="add_thing.png"></a>
        </div>

        <!-- Navbar on small screens -->
        <div id="smallScreen" class="hide">
            <ul>
                <li><a href="index.php" class="dropdownButton top">Home</a> </li>
                <li><a href="parsha.php" class="dropdownButton">Add a little thing</a> </li>
                <li><a href="geula.php" class="dropdownButton bottom">Daily little thing</a></li>
            </ul>
        </div>
    </div>
    <div class="under_the_menu"></div>
';

<?php
echo ' <!-- Navbar  -->
    <div class="top">
        <div class="topBar">
        <a href="index.php" class="logo"><img src="littlethings_logo.png"></a>

            <div class="smaller">
                <a class="bar" onclick="myFunction()" title="Toggle Navigation Menu"><img src="bars.svg" alt="MENU"></a>
            </div>
            <a href="parsha.php" class="menuButton">This Week\'s Parsha</a>
        </div>

        <!-- Navbar on small screens -->
        <div id="smallScreen" class="hide">
            <ul>
                <li><a href="index.php" class="dropdownButton top">Home</a> </li>
                <li><a href="parsha.php" class="dropdownButton">This Week\'s Parsha</a> </li>
                <li><a href="geula.php" class="dropdownButton bottom">Bring the Geula</a></li>
            </ul>
        </div>
    </div>
    <div class="under_the_menu"></div>
';

<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body>

<?php include("includes/design-top.php");?>
<?php include("includes/navigation.php");?>

<div class="container" id="main-content">
	<h2>Welcome to our Raspberry Pi Marble Maze Project!</h2>
	<p>This project details the creation of a physical marble maze game using a Raspberry Pi and Sense HAT. The goal is to develop an interactive game where players navigate a marble 
	through a maze by tilting the Raspberry Pi and capturing sensor data.  The orientation sensors gather pitch, roll, and yaw data,  and the LED matrix is used  to display the maze
	 and show the marble moving in real-time. </p>
	<h3>Introduction</h3>
	
	<p>Our Marble Maze game features 6 unique maze patterns. In these mazes, the player will see a Blue Marble and a Green Goal. The walls of the mazes are colored RED and prevent the
	 marble from moving in that direction.
	 The player will tilt the Rasberry Pi in any direction to move the marble throughout the maze.
	 While playing, the player may encounter a Pink Enemy. If the marble hits the enemy, the player will lose the game and a "You Lose :(" will show on the LED martix of the Pi
	  and mazes will no longer generate for the player.
     If the player manages to reach the Green Goal, the player will win the game and a "You Win :)" message will show on the LED matrix. Mazes will continue to generate as long as the
      player has not yet lost a game.</p>

    <h4>Graphs of Our Data</h4>
    
    <img src="wins.png" alt="Graph of games WON">
    <p id="graph_desc">Number of Games WON ! </p>
    
    <img src="Loses.png" alt="Graph of games LOST">
    <p id="graph_desc">Number of Games LOST ! </p>

    <img src="Move_count_graph.png" alt="Graph of amount of times marble moved">
    <p id="graph_desc">Number of times the marble moved on the led matrix.</p>

    <img src="temp.png" alt="Temperature of PI during gameplay.">
    <p id="graph_desc">Temperature of Rasberry PI during gameplay.</p>

	
</div>

<?php include("includes/footer.php");?>

</body>
</html>

<style>
        /* CSS styles */
        body {
            
            background-color: #cccccc;

        }
        p {
        	font-size: 18px;
        	
        }

        .won {
        	font-size: 32px;
        }

        #graph_desc {
            font-size: 32px;
        }

        a {
        	font-size: 24px;
        }

        

    </style>

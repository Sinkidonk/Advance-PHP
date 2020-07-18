<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Pets</title>
		<link rel="stylesheet" href="style.css">
		</head>
		<body>
			<?php
			error_reporting(E_ALL);
			ini_set('display_error', 1);
			
			function fred($val)
			{
				echo '<pre>';
				var_dump( $val );
				echo '</pre>';
			}
			 # Script 5.3 - pets2.php
			// This page defines and uses the Pet, Cat, and Dog classes.
			
			# ***** CLASSES ***** #
			/* Class Pet.
			 * * The class contains one attribute: name.
			 * * The class contains four methods:
			 * * - _ _construct()
			 * * - eat()
			 * * - sleep()
			 * * - play()
			 * */
			 class Pet {
			 	public $name;
				public $type;
				
				function __construct($pet_name, $pet_type) {
			 		$this->name = $pet_name;
					$this->type = $pet_type;
					//$this->type = $pet_type;
				}
				
				public function set_name($pet_name) {
					$this->name = $pet_name;
				}
				public function set_type($pet_type) {
					$this->type = $pet_type;
				}
				public function get_name(){
					return $this->name;
				}
				public function get_type() {
					return $this->type;
				}
				
				

				function eat() {
					echo "<p>$this->name is eating.</p>";
				}
				
				function sleep() {
					echo "<p>$this->name is sleeping.</p>";
				}
				
				// Pets can play:
				function play() {
					echo "<p>$this->name is playing.</p>";
				}
				function talk() {
					echo "<p>$this->name is talking</p>";
				}
				function petType() {
					echo "<p>$this->name is ";
					echo "$this->type</p>";
				}
				
			 } // End of Pet class.
			 //var_dump($this);
			 //fred($this->type);
			 /* Cat class extends Pet.
			  * * Cat overrides play().
			  * */
			  class Cat extends Pet {
			  	function play() {
			  		echo "<p>$this->name is climbing.</p>";
				}
				function talk() {
					echo "<p>$this->name meows";
				}
			  } // End of Cat class.
			  
			   
			   /* Dog class extends Pet.
			   * Dog overrides play().
			    */
			   class Dog extends Pet {
			   	function play() {
			   		echo "<p>$this->name is fetching.</p>";
				}
				function talk() {
					echo "<p>$this->name barks";
				}
			   } // End of Dog class.

			   # ***** END OF CLASSES ***** #

			   // Create a dog:
			   $dog = new Dog('Satchel', 'dog'); // Satchel 
			   
			   // Create a cat:
			   $cat = new Cat('Bucky', 'cat'); // Bucky
			   
			   // Create an unknown type of pet:
			   $pet = new Pet('Rob', 'unknown'); // Rob
			   
			   // Feed them:
			   $dog->eat();
			   $cat->eat();
			   $pet->eat();
			   
			   // Nap time:
			   $dog->sleep();
			   $cat->sleep();
			   $pet->sleep();
			   
			   // Have them play:
			   $dog->play();
			   $cat->play();
			   $pet->play();
			   
			   // Have them talk:
			   $dog->talk();
			   $cat->talk();
			   $pet->talk();
			   
			   // Type of pet
			   $dog->petType();
			   $cat->petType();
			   $pet->petType();
			   
			   
			   // Delete the objects:
			   unset($dog, $cat, $pet);
			   
			   ?>
			   </body>
			   </html>

	<?php  
if (session_status() == PHP_SESSION_NONE) {
    session_start();
		if(isset($_SESSION['phone']))
			{
				
				
				} 
			else
			{
				//header("Location: index.php");
			}
}
 ?>
	
	<header>
	
		<?php 
			if(isset($_SESSION['phone']))
			{
			?>
			<div class="logged-in">
				<div>Username: <?php echo $_SESSION['phone']; ?> </div>
				<div><a href="profile.php">My Profile</a></div>
				<div><a href="basic/logout.php">Sign Out</a></div>
			</div>
			
			<?php
			} 
			else
			{
			?>	
			<button class="create_account">Create Account</button>
				<section class="log-form">
		<form class="log-in" action="basic/login.php" method="POST">
			<input type="text" name="phone" value="">
			<input type="password" name="password" value="">
			<input type="Submit" name="Submit" value="Log In" />
			<br />
			
		</form>
		</section>
			<?php	
			}  
			?>
		
		
		<nav>
			<ul>
				<li class="hor"><a href="index.php">Home</a></li>
			<!--	<li class="hor dropdown"><a href="streetlayout.php">Street Layout</a> </li>-->
			<li class="hor dropdown"><a href="zones.php">Parking Zones</a> </li>
				<?php
				if(isset($_SESSION['phone']))
				{
				?>
				<li class="hor dropdown"><a href="basic/check_book.php">Book Parking Lot</a>
				</li>
				<li class="hor dropdown"><a href="basic/logout.php">Logout</a>
				</li>
				<?php } ?>
				<li class="hor dropdown"><a href="contact.php">Contact Us</a>
				</li>
				
			</ul>
		</nav>
	</header>
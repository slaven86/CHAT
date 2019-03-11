			
<?php

		include('includes/konekcija.php');
		
			$result = mysqli_query($conn, "SELECT * from chat ORDER BY id DESC");
			while($row = mysqli_fetch_assoc($result)){
				
				$name = $row['name'];
				$message = $row['message'];
				$date = $row['date'];
				
			?>
			
			<div id="chat-data">
			
			<span style="color: green;"><?php echo $name; ?></span>: 
			<span style="color: brown; "><?php echo $message; ?></span>
			<span style="float: right"><?php echo $date; ?></span> <hr/>
			
			</div>
		<?php 	
			}
		?>

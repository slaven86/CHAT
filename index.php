<?php

	include('includes/konekcija.php');

?>

<!DOCTYPE html>
<head>
<?php include('includes/head.php'); ?>


<script>
		function ajax() {
			var req = new XMLHttpRequest();
			
			req.onreadystatechange = function(){
			if(req.readyState == 4 && req.status == 200){
				
				document.getElementById('chat-box').innerHTML = req.responseText;
				
			}	
				
			}
			
			req.open('GET','chat.php',true);
			req.send();
		}
	
	</script>

</head>
<body onload ="ajax();">

	<div id="container">
		<div id="chat-box">	
		
		</div>
		
	
		
		<form action="" method="post">
	
		<input type="text" name="name" placeholder="Unesite ime" />
		<textarea name="msg" placeholder="Unesite poruku"></textarea>
		<input type="submit" name="submit" value="Send" />
	
	
		</form>
		
		<?php
		
		if(isset($_POST['submit'])){
			
			$name = $_POST['name'];
			$msg = $_POST['msg'];
			
			if(!empty($name) && !empty($msg)){
						
			$result = mysqli_query($conn, "INSERT INTO chat (name,message) VALUES ('$name', '$msg')");
		}
		else{
			echo "Niste uneli podatke";
		}
		
		}
		
		?>

	
	</div>
	
	
	

</body>
</html>
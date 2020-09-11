<?php
			$count = $pdo->query('SELECT * FROM gallery');
			$dataCount = $count->fetchAll();

			$stmt = $pdo->query('SELECT * FROM gallery');
			$data = $stmt->fetch();
			echo "<h1>Gallery</h1><table><tr><th>ID</th><th>NAME</th><th>TEXT</th></tr>";
			for ($a = 0; $a<count($dataCount);$a++){
				echo "<tr><td>$data[id]</td> <td>$data[name]</td> <td>$data[text]</td></tr>";
				$data = $stmt->fetch();
			}
			echo "</table>";


			$count = $pdo->query('SELECT * FROM orders');
			$dataCount = $count->fetchAll();

			$stmt = $pdo->query('SELECT * FROM orders');
			$data = $stmt->fetch();
			echo "<h1>Orders</h1><table><tr><th>ID</th><th>NAME</th><th>TELEPHONE</th><th>SERVICENAME</th><th>MESSAGE</th> <th>DATE</th></tr>";
			for ($a = 0; $a<count($dataCount);$a++){
				echo "<tr><td>$data[id]</td> <td>$data[name]</td> <td>$data[telephone]</td> <td>$data[servicename]</td> <td>$data[message]</td> <td>$data[date]</td></tr>";
				$data = $stmt->fetch();
			}
			echo "</table>";



			$count = $pdo->query('SELECT * FROM callback');
			$dataCount = $count->fetchAll();

			$stmt = $pdo->query('SELECT * FROM callback');
			$data = $stmt->fetch();
			echo "<h1>Callback</h1><table><tr><th>ID</th><th>NAME</th><th>EMAIL</th><th>TELEPHONE</th><th>TEXT</th> <th>DATE</th></tr>";
			for ($a = 0; $a<count($dataCount);$a++){
				echo "<tr><td>$data[id]</td> <td>$data[name]</td> <td>$data[email]</td> <td>$data[telephone]</td> <td>$data[text]</td> <td>$data[date]</td></tr>";
				$data = $stmt->fetch();
			}
			echo "</table>";

			$count = $pdo->query('SELECT * FROM reviews');
			$dataCount = $count->fetchAll();

			$stmt = $pdo->query('SELECT * FROM reviews');
			$data = $stmt->fetch();
			echo "<h1>Reviews</h1><table><tr><th>ID</th><th>NAME</th><th>SERVICE</th><th>TEXT</th></tr>";
			for ($a = 0; $a<count($dataCount);$a++){
				echo "<tr><td>$data[id]</td> <td>$data[name]</td> <td>$data[service]</td> <td>$data[text]</td></tr>";
				$data = $stmt->fetch();
			}
			echo "</table>";
?>
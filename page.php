<?php 

	include('header.php');

	$STH = $DBH->query("SELECT * FROM info WHERE id=$page_id");

	$result = $STH->fetch();

 ?>
		<section>
			<h2><?php echo $result['title']; ?></h2>
			<img src="img/<?php echo $result['img']; ?>">
			<?php echo $result['text']; ?>

		</section>
		<section class="features">
			<ul>
				<?php 
					$STH = $DBH->query("SELECT value FROM specs WHERE info_id=$page_id");

					while($row = $STH->fetch()){
						echo "<li>".$row['value']."</li>";
					}

				 ?>
			</ul>
			<ul>
				<li>Debian GNU/linux 5.0/6.0/7.0</li>
				<li>Ubuntu 8.0 until 13.10</li>
				<li>CentOS 5.3 until 6.3</li>
				<li>Fedora 10 until 18</li>
				<li>Gentoo 2010 until 2013</li>
				<li>Arch Linux 2011/2012/2013</li>
			</ul>
		</section>
		<section>
			<table>
				<tr>
					<th>Starter 1</th>
					<th>Starter 2</th>
					<th>Starter 3</th>
					<th>Starter 4</th>
					<th>Starter 5</th>
				</tr>
				<tr>
					<td><b>512 MB</b> RAM</td>
					<td><b>1 GB</b> RAM</td>
					<td><b>2 GB</b> RAM</td>
					<td><b>4 GB</b> RAM</td>
					<td><b>8 GB</b> RAM</td>
				</tr>
				<tr class="even">
					<td><b>25 GB</b> diskspace</td>
					<td><b>50 GB</b> diskspace</td>
					<td><b>100 GB</b> diskspace</td>
					<td><b>200 GB</b> diskspace</td>
					<td><b>400 GB</b> diskspace</td>
				</tr>
				<tr>
					<td><b>250 GB</b> traffic</td>
					<td><b>500 GB</b> traffic</td>
					<td><b>1000 GB</b> traffic</td>
					<td><b>2000 GB</b> traffic</td>
					<td><b>4000 GB</b> traffic</td>
				</tr>
				<tr class="even">
					<td><b>&euro; 0</b> setup</td>
					<td><b>&euro; 0</b> setup</td>
					<td><b>&euro; 0</b> setup</td>
					<td><b>&euro; 0</b> setup</td>
					<td><b>&euro; 0</b> setup</td>
				</tr>
				<tr>
					<td><b>&euro; 7</b> p/m</td>
					<td><b>&euro; 10</b> p/m</td>
					<td><b>&euro; 15</b> p/m</td>
					<td><b>&euro; 25</b> p/m</td>
					<td><b>&euro; 50</b> p/m</td>
				</tr>
				<tr class="order even">
					<td><button>Order</button></td>
					<td><button>Order</button></td>
					<td><button>Order</button></td>
					<td><button>Order</button></td>
					<td><button>Order</button></td>
				</tr>

			</table>
		</section>
		<footer>
			Copyright &copy; 2013
		</footer>
	</div>
</body>
</html>
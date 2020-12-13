<?php 
	require_once'include/head.php';

	if (isset($_POST['search'])) {
		$keywords = $_POST['keywords'];
		$stm=$o->prepare("SELECT * from sanpham where masanpham like '$keywords' or tensanpham like '$keywords'");
		$stm->execure();
		while ($stm->fetchAll()) {?>
		<tr>
			<td>
				<?php echo $row['masanpham'];  ?>
			</td>
			<td><?php echo $row['tensanpham']; ?></td>
		</tr>
		<?php	
		}
		?>
		
	<?php } ?>
	


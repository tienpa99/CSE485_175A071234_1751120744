<?php 
session_start();
if(isset($_SESSION["user"])){
	require_once('php/common/ketnoi.php');
	$str = $_GET["search"];
	$str=htmlentities($str);
	$sql = "SELECT * FROM `post` WHERE `title`LIKE '%".$str."%'";
	$rs=$conn->query($sql);

}
else{
	mysqli_close($conn);
	header("Location: index.php");
}
?>
<?php include('php/include/trangchu-header.php') ?>

		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col-md-1">ID</th>
					<th scope="col-md-5">Title</th>
					<th scope="col-md-2">Category</th>
					<th scope="col-md-2">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php while ($row = $rs->fetch_assoc()) {
					$id = $row["id"];
					$title = $row["title"];
					$danhmuc = $row["danhmuc"];
				?>
				<tr>
					<th scope="row"><?php echo $id ?></th>
					<td><a href="../view.php?id=<?php echo $id ?>"><?php echo $title ?></a></td>
					<td><?php echo $danhmuc ?></td>
					<td>
						<button class="button suaID" id="<?php echo $id ?>" >Sửa</button>
						<button class="button xoaID" id="<?php echo $id  ?>" style="background-color: red" >Xóa</button>
					</td>
				</tr>
			<?php } ?>
			</tbody>
		</table>	
	</div>
<?php include('php/include/trangchu-footer.php') ?>
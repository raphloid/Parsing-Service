<?php include "config.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link href="sb-admin-2.css" rel="stylesheet">
	<!-- My CSS -->
	<link rel="stylesheet" href="blog.css">

	<title>AdminHub</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">AdminHub</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="blog.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Blog</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Analytics</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Message</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">Team</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>
             <!-- Page Heading -->
			 <h5 class="mb-2 text-gray-800">Blog Posts</h5>
                  <!-- DataTales Example -->
                  <div class="card shadow">
                     <div class="card-header py-3 d-flex justify-content-between">
                        <div>
                           <a href="add_blog.php">
                              <h6 class="font-weight-bold text-primary mt-2">Add New</h6>
                           </a>
                        </div>
                        <div>
                           <form class="navbar-search">
                              <div class="input-group">
                                 <input type="text" class="form-control bg-white border-0 small" placeholder="Search for...">
                                 <div class="input-group-append">
                                    <button class="btn btn-primary" type="button"> <i class="fas fa-search fa-sm"></i> </button>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                     <div class="card-body">
                        <div class="table-responsive">
                           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                              <thead>
                                 <tr>
                                    <th>Sr.No</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Date</th>
                                    <th colspan="2">Action</th>
                                 </tr>
                              </thead>
                              <tbody>
			                	<?php
								$sql="SELECT * FROM blog LEFT JOIN categories ON
									blog.category=categories.cat_id LEFT JOIN users ON
									blog.author_id=users.id ORDER BY blog.publish_date DESC";
								$query=mysqli_query($config,$sql);
								$rows=mysqli_num_rows($query);
								$count=0;
								if ($rows) {
									while($result=mysqli_fetch_assoc($query)){
										?>
										<tr>
											<td><?= ++$count ?></td>
											<td><?= $result['blog_title'] ?></td>
											<td><?= $result['cat_name'] ?></td>
											<td><?= date('d-M-y',strtotime($result['publish_date'])) ?></td>
											<td><a href="edit_blog.php?id=<?= $result['blog_id'] ?>" class="btn btn-sm btn-success">Edit</a></td>
											<td>
												<form class="mt-2" method="POST" onsubmit="return confirm('Are you sure you want to delete?')" >
												<input type="hidden" name="id" value="<?= $result['blog_id'] ?>">
												<input type="hidden" name="image" value="<?= $result['blog_image'] ?>">
												<input type="submit" name="deletePost" value="Delete" class=" btn btn-sm btn-danger">
												</form>
											</td>
										</tr>
										<?php
									}
								}
								else
								{
									?>
									<tr><td colspan="7">No record found</td></tr>
									<?php
								}

								?>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
			</div>
		</div>
	</div>
</div>
</ul>
	</div>
		</div>
			</main>
		<!-- MAIN -->
	</section>
    <script src="script.js"></script>

	<?php include "config.php";
	if (isset($_POST['deletePost'])) {
		$id=$_POST['id'];
		$image= "upload/".$_POST['image'];
		$delete="DELETE FROM blog WHERE blog_id='$id'";
		$run=mysqli_query($config,$delete);
		if ($run) {
			unlink($image);
			$msg=['Category has been deleted sucessfully','alert-success'];
			$_SESSION['msg']=$msg;

		}
		else
		{
			$msg=['Failed, try again','alert-danger'];
			$_SESSION['msg']=$msg;
			  header("location:add_cat.php");
		}
	}
	?>
</body>
</html>

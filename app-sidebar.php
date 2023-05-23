<div class="dashboard_sidebar" id="dashboard_sidebar">
	<h3 class="dashboard_logo" id="dashboard_logo">CollectX</h3>
	<div class="dashboard_sidebar_user" id="dashboard_sidebar_container">
		<img src="images/users/cams.jpg" alt="User image." id="userImage" />
		<span><?= $user['first_name'] . ' ' . $user['last_name'] ?></span>
	</div>
	<div class="dashboard_sidebar_menus">
		<ul class="dashboard_menu_lists">
			<!--class="menuActive-->
			<li>
				<a href="./dashboard.php" ><i class="fa fa-tachometer"></i><span class="menuText">Dashboard</span></a>
			</li>
			<li>
				<a href="./users-add.php"><i class="fa fa-user-plus"></i><span class="menuText">Add User</span></a>
			</li>
		</ul>
	</div>
</div>
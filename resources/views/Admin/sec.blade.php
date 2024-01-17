<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="../../../public/images/3448513.png" />

	<title>Secretary</title>
	<link
	rel="stylesheet"
	href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"
  />
	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="admin_home.html">
        <img src="../../../public/images/3448513.png" style="width:50px ;height: 50px;">  <span class="align-middle" style="font-size:1.5rem ;">Asclep</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header" style="font-size: 1.2rem;">
						Pages
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="admin_home.html">
              <i class="align-middle las la-home"></i> <span class="align-middle">Dashboard</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="profile.html">
              <i class="align-middle las la-user-circle" ></i> <span class="align-middle">Profile</span>
            </a>
					</li>
                        <!---
					<li class="sidebar-item">
						<a class="sidebar-link" href="log-in.html">
              <i class="align-middle"data-feather="log-in" ></i> <span class="align-middle">Log In</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="#" id="nj">
              <i class="align-middle " data-feather="log-out"></i> <span class="align-middle">Log out</span>
            </a>
					</li>
--->
					<li class="sidebar-header" style="font-size: 1.1rem;">
						EMPLOYEES
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="doc.html">
              <i class="align-middle las la-users"></i> <span class="align-middle">Doctors</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="sec.html">
              <i class="align-middle las la-users"></i> <span class="align-middle">Secretary</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pharma.html">
              <i class="align-middle las la-pills"></i> <span class="align-middle">Pharmacy</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="lab.html">
              <i class="align-middle las la-users"></i> <span class="align-middle">Lab Tech</span>
            </a>
					</li>
				</ul>


			</div>
		</nav>
		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg" >
				<a class="sidebar-toggle js-sidebar-toggle" onclick="togllenav()">
          <i class="las la-bars align-self-center" style=" color:#01304A;font-size:2rem"></i>
        </a>
		<div class="form_1">
			<div class="search-wrapper">
				<span class="las la-search"></span>
				<input type="search" placeholder="Search here" />
				  </div></div>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="bell"></i>
									<span class="indicator">4</span>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									4 New Notifications
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-danger" data-feather="alert-circle"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Update completed</div>
												<div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
												<div class="text-muted small mt-1">30m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-warning" data-feather="bell"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Lorem ipsum</div>
												<div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-primary" data-feather="home"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Login from Amany secretray</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-success" data-feather="user-plus"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">New connection</div>
												<div class="text-muted small mt-1">Amany accepted your request.</div>
												<div class="text-muted small mt-1">14h ago</div>
											</div>
										</div>
									</a>
								</div>
							</div>
						</li>
<!---THIS IS PART FOR MASSAGE TO ADMIN BUT IT STATIC-->
<li class="nav-item dropdown">
	<a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
		<div class="position-relative">
			<i class="align-middle" data-feather="message-square"></i>
		</div>
	</a>
	<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
		<div class="dropdown-menu-header">
			<div class="position-relative">
				4 New Messages
			</div>
		</div>
		<div class="list-group">
			<a href="#" class="list-group-item">
				<div class="row g-0 align-items-center">
					<div class="col-2">
						<img src="../../../public/images/p.png" class="avatar img-fluid rounded-circle">
					</div>
					<div class="col-10 ps-2">
						<div class="text-dark">Yamin Gaser</div>
						<div class="text-muted small mt-1">Doctor Yamin statred his work early today</div>
						<div class="text-muted small mt-1">15m ago</div>
					</div>
				</div>
			</a>
			<a href="#" class="list-group-item">
				<div class="row g-0 align-items-center">
					<div class="col-2">
						<img src="../../../public/images/p.png" class="avatar img-fluid rounded-circle">
					</div>
					<div class="col-10 ps-2">
						<div class="text-dark">Ahmed Adam</div>
						<div class="text-muted small mt-1">Doctor Ahmed statred his work early today</div>
						<div class="text-muted small mt-1">2h ago</div>
					</div>
				</div>
			</a>
			<a href="#" class="list-group-item">
				<div class="row g-0 align-items-center">
					<div class="col-2">
						<img src="../../../public/images/p.png" class="avatar img-fluid rounded-circle">
					</div>
					<div class="col-10 ps-2">
						<div class="text-dark">Mahmud Ebrahim</div>
						<div class="text-muted small mt-1">Doctor Mahmud ended his work early today</div>
						<div class="text-muted small mt-1">4h ago</div>
					</div>
				</div>
			</a>
			<a href="#" class="list-group-item">
				<div class="row g-0 align-items-center">
					<div class="col-2">
						<img src="../../../public/images/p.png" class="avatar img-fluid rounded-circle">
					</div>
					<div class="col-10 ps-2">
						<div class="text-dark">Ahmed Anwar</div>
						<div class="text-muted small mt-1">Doctor Ahmed statred his work early today</div>
						<div class="text-muted small mt-1">5h ago</div>
					</div>
				</div>
			</a>
		</div>
	</div>
</li>

						<!--For icon Admin with its details -->
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                <img src="../../../public/images/4140037.png" class="avatar img-fluid rounded me-1" alt="Hassan Yasser " /> <span class="text-dark">Hassan Yasser</span>
              </a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="profile.html"><i class="align-middle me-1" data-feather="user"></i>Profile</a>
								<a class="dropdown-item" href="admin_home.html"><i class="align-middle me-1" data-feather="settings"></i>Admin Home</a>
								<a class="dropdown-item" href="#">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>


			<main class="content">
				<div class="container-fluid p-0"></div>
				<div class="mb-3">
					<h1 class="h3 d-inline align-middle las la-user">Secretary</h1></div>
				<div class="tan">
				<div class="bth">
		<button type="button" class="btn btn-primary" onclick="openpopup()">Add New<span class="las la-plus"></span></button></div>


                       <div class="tbn">
						<table class="table table-bordered">
							<thead>
							  <tr>
								  <td scope="col"><span data-feather="chevrons-up"></span></td>
								<th scope="col" >ID</th>
								<th scope="col">Name</th>
								<th scope="col">Mobil</th>
								<th scope="col">E-mail</th>
								<th scope="col">Action</th>
							  </tr>
							</thead>
							<tbody>
							  <tr>
								<th scope="row"><img src="../../../public/images/download.png" style="width:40px;"></th>
								<td>20</td>
								<td>Sara mahmud</td>
								<td>01111268003</td>
								<td>saramahmudr@gmail.com</td>
<td class="bv"><button onclick="openpopup()" class="las la-edit" style=" background-color: rgb(135, 228, 152);color:rgb(6, 128, 65);font-size: 0.8rem;
									 cursor: pointer;  border-color:rgb(6, 128, 65)"></button>
									  <button class="las la-times" style="background-color: rgb(245, 157, 157);
									  color: rgb(241, 5, 5);
									  font-size: 0.8rem;
									  border-color:rgb(241, 5, 5);
									  cursor: pointer;"></button></td>
							  </tr>
							  <tr>
								<th scope="row"><img src="../../../public/images/download.png" style="width:40px;"></th>
								<td>20</td>
								<td>Sara mahmud</td>
								<td>01111268003</td>
								<td>saramahmudr@gmail.com</td>
<td class="bv"><button onclick="openpopup()" class="las la-edit" style=" background-color: rgb(135, 228, 152);color:rgb(6, 128, 65);font-size: 0.8rem;
									 cursor: pointer;  border-color:rgb(6, 128, 65)"></button>
									  <button class="las la-times" style="background-color: rgb(245, 157, 157);
									  color: rgb(241, 5, 5);
									  font-size: 0.8rem;
									  border-color:rgb(241, 5, 5);
									  cursor: pointer;"></button></td>
							  </tr>
							  <tr>
								<th scope="row"><img src="../../../public/images/download.png" style="width:40px;"></th>
								<td>20</td>
								<td>Sara mahmud</td>
								<td>01111268003</td>
								<td>saramahmudr@gmail.com</td>
<td class="bv"><button onclick="openpopup()" class="las la-edit" style=" background-color: rgb(135, 228, 152);color:rgb(6, 128, 65);font-size: 0.8rem;
									 cursor: pointer;  border-color:rgb(6, 128, 65)"></button>
									  <button class="las la-times" style="background-color: rgb(245, 157, 157);
									  color: rgb(241, 5, 5);
									  font-size: 0.8rem;
									  border-color:rgb(241, 5, 5);
									  cursor: pointer;"></button></td>
							  </tr>
							  <tr>
								<th scope="row"><img src="../../../public/images/download.png" style="width:40px;"></th>
								<td>20</td>
								<td>Sara mahmud</td>
								<td>01111268003</td>
								<td>saramahmudr@gmail.com</td>
<td class="bv"><button onclick="openpopup()" class="las la-edit" style=" background-color: rgb(135, 228, 152);color:rgb(6, 128, 65);font-size: 0.8rem;
									 cursor: pointer;  border-color:rgb(6, 128, 65)"></button>
									  <button class="las la-times" style="background-color: rgb(245, 157, 157);
									  color: rgb(241, 5, 5);
									  font-size: 0.8rem;
									  border-color:rgb(241, 5, 5);
									  cursor: pointer;"></button></td>
							  </tr>
							  <tr>
								<th scope="row"><img src="../../../public/images/download.png" style="width:40px;"></th>
								<td>20</td>
								<td>Sara mahmud</td>
								<td>01111268003</td>
								<td>saramahmudr@gmail.com</td>
<td class="bv"><button onclick="openpopup()" class="las la-edit" style=" background-color: rgb(135, 228, 152);color:rgb(6, 128, 65);font-size: 0.8rem;
									 cursor: pointer;  border-color:rgb(6, 128, 65)"></button>
									  <button class="las la-times" style="background-color: rgb(245, 157, 157);
									  color: rgb(241, 5, 5);
									  font-size: 0.8rem;
									  border-color:rgb(241, 5, 5);
									  cursor: pointer;"></button></td>
							  </tr>
							  <tr>
								<th scope="row"><img src="../../../public/images/download.png" style="width:40px;"></th>
								<td>20</td>
								<td>Sara mahmud</td>
								<td>01111268003</td>
								<td>saramahmudr@gmail.com</td>
<td class="bv"><button onclick="openpopup()" class="las la-edit" style=" background-color: rgb(135, 228, 152);color:rgb(6, 128, 65);font-size: 0.8rem;
									 cursor: pointer;  border-color:rgb(6, 128, 65)"></button>
									  <button class="las la-times" style="background-color: rgb(245, 157, 157);
									  color: rgb(241, 5, 5);
									  font-size: 0.8rem;
									  border-color:rgb(241, 5, 5);
									  cursor: pointer;"></button></td>
							  </tr>
							</tbody>
						  </table></div>
						</div>
						<div class="addod" id="popup">
							<span class="Close-btn" onclick="closepopup()">&times;</span>
							<div class="dod">
							<table class="table table-bordered">
								<thead>
									<tr>
									  <th scope="col" ><span data-feather="chevrons-up"></span></th>
									  <th scope="col">ID</th>
									  <th scope="col">Name</th>
									  <th scope="col">Mobil</th>
									  <th scope="col">E-mail</th>
									</tr>
								  </thead>
								<tbody>
								  <tr>
									<th scope="row"><input type="file"></th>
									<td><input type="text"></td>
									<td><input type="text"></td>
									<td><input type="text"></td>
									<td><input type="text"></td>
								  </tr>
								</tbody>
							  </table>
							</div><div id="koki">
		<button type="button" class="btn btn-success" type="submit" onclick="closepopup()">Save</button></div>
						</div>



					</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="admin_home.html" target="_blank"><strong>Acslep_Admin</strong></a> &copy;
							</p>
						</div></div></div>
					</footer>

	<script src="../../js/app.js"></script>

</body>

</html>

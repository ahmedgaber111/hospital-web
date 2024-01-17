<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
          <title>Admin Dashboard</title>
	<link rel="icon" type="image/png" sizes="32x32" href="../../../public/images/3448513.png" />
          <link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<link
	rel="stylesheet"
	href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"
  />
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
								<a class="dropdown-item" href="#" onchange="log()">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">

<h1 class="h3 mb-3" style="padding-left: 28rem;"><strong>Hospital</strong> Dashboard</h1>
   <!----
<div class="move1">
					<div class="row">
						<div class="col-xl-6 col-xxl-5 d-flex">
							<div class="w-100">
								<div class="row">
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Patients</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle las la-users"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3 ">1300</h1>

											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Doctors</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle las la-users" ></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3">600</h1>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Revenue</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle las la-dollar-sign"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3">67895 LE</h1>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Ambulance</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle las la-ambulance"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3">90</h1>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
							</div>--->
					<div class="tab">
				<div class="container-fluid p-0">
<span style="font-weight: bold; font-size:1.2rem; margin-bottom:2rem ;"> Recent Activities</span>
					<table class="table table-hover ">
						<thead class="bg-white">
						  <tr>
							<th scope="col">Num.</th>
							<th scope="col">Patient Name</th>
							<th scope="col"> Assigned Doctor </th>
							<th scope="col">Specialized</th>
							<th scope="col">Date of Appointment </th>
							<th scope="col">Action</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<th scope="row">1</th>
							<td>Mark</td>
							<td>DR.Ahmed Anwer</td>
							<td>Children</td>
							<td>30/5/2022</td>
							<td class="bv"><button class="las la-edit" onclick="openpopup2()"
								style=" background-color: rgb(135, 228, 152);color:rgb(6, 128, 65);font-size: 0.8rem;cursor: pointer;  border-color:rgb(6, 128, 65)"></button>
									 <button  class="las la-times" style="background-color: rgb(245, 157, 157);
									 color: rgb(241, 5, 5);
									 font-size: 0.8rem;
									 border-color:rgb(241, 5, 5);
									 cursor: pointer;"></button></td>
							  </tr>
						  <tr>
							<th scope="row">1</th>
							<td>Mark</td>
							<td>DR.Ahmed Anwer</td>
							<td>Children</td>
							<td>30/5/2022</td>
							<td class="bv"><button  onclick="openpopup2()" class="las la-edit"
								style=" background-color: rgb(135, 228, 152);color:rgb(6, 128, 65);font-size: 0.8rem;cursor: pointer;  border-color:rgb(6, 128, 65)"></button>
									 <button class="las la-times" style="background-color: rgb(245, 157, 157);
									 color: rgb(241, 5, 5);
									 font-size: 0.8rem;
									 border-color:rgb(241, 5, 5);
									 cursor: pointer;"></button></td>
							  </tr>
						  </tr>
						  <tr>
							<th scope="row">1</th>
							<td>Mark</td>
							<td>DR.Ahmed Anwer</td>
							<td>Children</td>
							<td>30/5/2022</td>
							<td class="bv"><button  onclick="openpopup2()" class="las la-edit"
								style=" background-color: rgb(135, 228, 152);color:rgb(6, 128, 65);font-size: 0.8rem;cursor: pointer;  border-color:rgb(6, 128, 65)"></button>
									 <button class="las la-times" style="background-color: rgb(245, 157, 157);
									 color: rgb(241, 5, 5);
									 font-size: 0.8rem;
									 border-color:rgb(241, 5, 5);
									 cursor: pointer;"></button></td>
							  </tr>
						  </tr>
						  <tr>
							<th scope="row">1</th>
							<td>Mark</td>
							<td>DR.Ahmed Anwer</td>
							<td>Children</td>
							<td>30/5/2022</td>
							<td class="bv"><button  onclick="openpopup2()" class="las la-edit"
								style=" background-color: rgb(135, 228, 152);color:rgb(6, 128, 65);font-size: 0.8rem;cursor: pointer;  border-color:rgb(6, 128, 65)"></button>
									 <button class="las la-times" style="background-color: rgb(245, 157, 157);
									 color: rgb(241, 5, 5);
									 font-size: 0.8rem;
									 border-color:rgb(241, 5, 5);
									 cursor: pointer;"></button></td>
							  </tr>
						  </tr>
						  <tr>
							<th scope="row">1</th>
							<td>Mark</td>
							<td>DR.Ahmed Anwer</td>
							<td>Children</td>
							<td>30/5/2022</td>
							<td class="bv"><button class="las la-edit"  onclick="openpopup2()"
							style=" background-color: rgb(135, 228, 152);color:rgb(6, 128, 65);font-size: 0.8rem;cursor: pointer;  border-color:rgb(6, 128, 65)"></button>
								 <button class="las la-times" style="background-color: rgb(245, 157, 157);
								 color: rgb(241, 5, 5);
								 font-size: 0.8rem;
								 border-color:rgb(241, 5, 5);
								 cursor: pointer;"></button></td>
						  </tr>
						</tbody>
					  </table>
					  <div class="ttt">
				<span style="font-weight: bold; font-size:1.2rem; padding-bottom:3rem ;padding-top: 1rem;">Employees Activities</span>
						<table class="table table-hover">
							<thead class="bg-white">
							  <tr>
								<th scope="col">Num.</th>
								<th scope="col">Name</th>
								<th scope="col">ID</th>
								<th scope="col">Department</th>
								<th scope="col">Start Shift</th>
								<th scope="col">End Shift</th>
								<th scope="col">Action</th>
							  </tr>
							</thead>
							<tbody>
							  <tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>13</td>
								<td>Laboratory</td>
								<td>9:00 AM</td>
								<td>4:30 PM</td>
								<td class="bv"><button onclick="openpopup1()" class="las la-edit"
									style=" background-color: rgb(135, 228, 152);color:rgb(6, 128, 65);font-size: 0.8rem;cursor: pointer;  border-color:rgb(6, 128, 65)"></button>
										 <button class="las la-times" style="background-color: rgb(245, 157, 157);
										 color: rgb(241, 5, 5);
										 font-size: 0.8rem;
										 border-color:rgb(241, 5, 5);
										 cursor: pointer;"></button></td>
								  </tr>
							  </tr>
							  <tr>
								<th scope="row">2</th>
								<td>Mariem</td>
								<td>15</td>
								<td>Secratry</td>
								<td>9:00 AM</td>
								<td>4:30 PM</td>
								<td class="bv"><button onclick="openpopup1()" class="las la-edit"
									style=" background-color: rgb(135, 228, 152);color:rgb(6, 128, 65);font-size: 0.8rem;cursor: pointer;  border-color:rgb(6, 128, 65)"></button>
										 <button class="las la-times" style="background-color: rgb(245, 157, 157);
										 color: rgb(241, 5, 5);
										 font-size: 0.8rem;
										 border-color:rgb(241, 5, 5);
										 cursor: pointer;"></button></td>
								  </tr>
							  </tr>
							</tbody>
						  </table></div>
			                   	</div>
			                       </div>
								   <div class="addod1" id="popup1">
									<span class="Close-btn1" onclick="closepopup1()">&times;</span>
									<div class="dod">
									<table class="table table-bordered">
										<thead>
											<tr>
											  <th scope="col">Num.</th>
											  <th scope="col">ID</th>
											  <th scope="col">Name</th>
											  <th scope="col">Department</th>
											  <th scope="col">Start Shift</th>
											  <th scope="col">End Shift</th>
											</tr>
										  </thead>
										<tbody>
										  <tr>
											<td><input type="text"></td>
											<td><input type="text"></td>
											<td><input type="text"></td>
											<td><input type="text"></td>
											<td><input type="text"></td>
											<td><input type="text"></td>
										  </tr>
										</tbody>
									  </table>
									</div><div id="koki1">
				<button type="button" class="btn btn-success" type="submit" onclick="closepopup1()">Save</button></div>
								</div>
								<div class="addod2" id="popup2">
									<span class="Close-btn2" onclick="closepopup2()">&times;</span>
									<div class="dod">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th scope="col">Num.</th>
												<th scope="col">Patient Name</th>
												<th scope="col"> Assigned Doctor </th>
												<th scope="col">Specialized</th>
												<th scope="col">Date of Appointment </th>
											  </tr>
										  </thead>
										<tbody>
										  <tr>
											<td><input type="text"></td>
											<td><input type="text"></td>
											<td><input type="text"></td>
											<td><input type="text"></td>
											<td><input type="text"></td>
										  </tr>
										</tbody>
									  </table>
									</div><div id="koki2">
				<button type="button" class="btn btn-success" type="submit" onclick="closepopup2()">Save</button></div>
								</div>

			    </main>
			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="admin_home.html" target="_blank"><strong>Acslep_Admin</strong></a> &copy;
							</p>
						</div>
			</footer>
		</div>
	</div>

	<script src="../../js/app.js"></script>

</body>

</html>

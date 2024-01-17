<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="images/3448513.png" />

	<link rel="canonical" href="profile.html" />

	<title>Admin Profile</title>

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
<!----
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
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
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
				<div class="ad">
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle"> Admin Profile</h1>
							</div>
						<div class="col-md-8 col-xl-9">
							<div class="card">
								<div class="card-header">
                               <h5 class="card-title mb-0">Profile Details</h5>
								</div>
								<div class="card-body h-100">
									<img src="../../../public/images/4140037.png" class="img-fluid rounded-circle mb-2" width="128" height="128" />
									<h5 class="card-title mb-0">Hassan Yasser</h5>
								<hr class="my-0" />
								<div class="card-body">
									<h5 class="h6 card-title">Skills</h5>
									<a href="#" class="badge bg-primary me-1 my-1">Leader</a>
									<a href="#" class="badge bg-primary me-1 my-1">Helpfull</a>
									<a href="#" class="badge bg-primary me-1 my-1">Manager</a>
									<a href="#" class="badge bg-primary me-1 my-1">work at 5 hospital </a>
								</div>
								<hr class="my-0" />
								<div class="card-body">
									<h5 class="h6 card-title">About</h5>
									<ul class="list-unstyled mb-0">
										<li class="mb-1"><span data-feather="home" class="feather-sm me-1"></span> Lives in <a href="#">Alexandria</a></li>
										<li class="mb-1"><span  class="feather-sm me-1 las la-at"></span> E-mail <a href="#">HassanYasser@gmail.com</a></li>
										<li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span> Works at <a href="#">Asclep Hospital</a></li>
										<li class="mb-1"><span data-feather="map-pin" class="feather-sm me-1"></span> From <a href="#">Cairo</a></li>
									</ul>
								</div>
                                </div>
                            </div></div></div></div></main>


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

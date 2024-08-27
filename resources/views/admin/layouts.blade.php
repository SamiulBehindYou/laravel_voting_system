
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>VoteApp</title>
	<!-- core:css -->
	<link rel="stylesheet" href="{{ asset('admin') }}/vendors/core/core.css">
	<!-- endinject -->
	<!-- plugin css for this page -->
	<!-- end plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="{{ asset('admin') }}/fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="{{ asset('admin') }}/vendors/flag-icon-css/css/flag-icon.min.css">
	<!-- endinject -->
  <!-- Layout styles -->
	<link rel="stylesheet" href="{{ asset('admin') }}/css/demo_1/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="{{ asset('admin') }}/images/favicon.png" />
</head>
<body>
	<div class="main-wrapper">

		<!-- partial:../../partials/_sidebar.html -->
		<nav class="sidebar">
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
          VOTE<span>APP</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('custom_register') }}" class="nav-link">
              <i class="link-icon" data-feather="user-plus"></i>
              <span class="link-title">Register new!</span>
            </a>
          </li>
          <li class="nav-item nav-category">Mange vote</li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
              <i class="link-icon" data-feather="user"></i>
              <span class="link-title">Voter</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="emails">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ route('vote.see_voter') }}" class="nav-link">See voters</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('vote.create_voter') }}" class="nav-link">Create new voter</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a href="{{ route('vote.create_vote') }}" class="nav-link">
                <i class="link-icon" data-feather="file-plus"></i>
              <span class="link-title">Create vote</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('see_votes') }}" class="nav-link">
                <i class="link-icon" data-feather="file-text"></i>
              <span class="link-title">See votes</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('history') }}" class="nav-link">
              <i class="link-icon" data-feather="rotate-ccw"></i>
              <span class="link-title">History</span>
            </a>
          </li>


          </li>
        </ul>
      </div>
    </nav>
    <nav class="settings-sidebar">
      <div class="sidebar-body">
        <a href="#" class="settings-sidebar-toggler">
          <i data-feather="settings"></i>
        </a>
        <h6 class="text-muted">Sidebar:</h6>
        <div class="form-group border-bottom">
          <div class="form-check form-check-inline">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight" value="sidebar-light" checked>
              Light
            </label>
          </div>
          <div class="form-check form-check-inline">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark" value="sidebar-dark">
              Dark
            </label>
          </div>
        </div>
        <div class="theme-wrapper">
          <h6 class="text-muted mb-2">Light Theme:</h6>
          <a class="theme-item active" href="../../../demo_1/dashboard-one.html">
            <img src="{{ asset('admin') }}/images/screenshots/light.jpg" alt="light theme">
          </a>
          <h6 class="text-muted mb-2">Dark Theme:</h6>
          <a class="theme-item" href="../../../demo_2/dashboard-one.html">
            <img src="{{ asset('admin') }}/images/screenshots/dark.jpg" alt="light theme">
          </a>
        </div>
      </div>
    </nav>
		<!-- partial -->

		<div class="page-wrapper">

			<!-- partial:../../partials/_navbar.html -->
			<nav class="navbar">
				<a href="#" class="sidebar-toggler">
					<i data-feather="menu"></i>
				</a>
				<div class="navbar-content">

					<ul class="navbar-nav">

						<li class="nav-item dropdown nav-apps">
							<a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i data-feather="grid"></i>
							</a>
							<div class="dropdown-menu" aria-labelledby="appsDropdown">
								<div class="dropdown-header d-flex align-items-center justify-content-between">
									<p class="mb-0 font-weight-medium">Menu</p>
								</div>
								<div class="dropdown-body">
									<div class="d-flex align-items-center apps">
										<a href="{{ route('dashboard') }}"><i data-feather="home" class="icon-lg"></i><p>Home</p></a>
										<a href="{{ route('vote.see_voter') }}"><i data-feather="user" class="icon-lg"></i><p>Voter</p></a>
										<a href="{{ route('vote.create_voter') }}"><i data-feather="user-plus" class="icon-lg"></i><p>Create</p></a>
										<a href="{{ route('vote.create_vote') }}"><i data-feather="edit" class="icon-lg"></i><p>Create vote</p></a>
									</div>
								</div>

							</div>
						</li>

						<li class="nav-item dropdown nav-notifications">
							<a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i data-feather="bell"></i>
								<div class="indicator">
									<div class="circle"></div>
								</div>
							</a>
							<div class="dropdown-menu" aria-labelledby="notificationDropdown">
								<div class="dropdown-header d-flex align-items-center justify-content-between">
									<p class="mb-0 font-weight-medium">6 New Notifications</p>
									<a href="javascript:;" class="text-muted">Clear all</a>
								</div>
								<div class="dropdown-body">
									<a href="javascript:;" class="dropdown-item">
										<div class="icon">
											<i data-feather="user-plus"></i>
										</div>
										<div class="content">
											<p>New customer registered</p>
											<p class="sub-text text-muted">2 sec ago</p>
										</div>
									</a>
									<a href="javascript:;" class="dropdown-item">
										<div class="icon">
											<i data-feather="gift"></i>
										</div>
										<div class="content">
											<p>New Order Recieved</p>
											<p class="sub-text text-muted">30 min ago</p>
										</div>
									</a>
									<a href="javascript:;" class="dropdown-item">
										<div class="icon">
											<i data-feather="alert-circle"></i>
										</div>
										<div class="content">
											<p>Server Limit Reached!</p>
											<p class="sub-text text-muted">1 hrs ago</p>
										</div>
									</a>
									<a href="javascript:;" class="dropdown-item">
										<div class="icon">
											<i data-feather="layers"></i>
										</div>
										<div class="content">
											<p>Apps are ready for update</p>
											<p class="sub-text text-muted">5 hrs ago</p>
										</div>
									</a>
									<a href="javascript:;" class="dropdown-item">
										<div class="icon">
											<i data-feather="download"></i>
										</div>
										<div class="content">
											<p>Download completed</p>
											<p class="sub-text text-muted">6 hrs ago</p>
										</div>
									</a>
								</div>
								<div class="dropdown-footer d-flex align-items-center justify-content-center">
									<a href="javascript:;">View all</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown nav-profile">
							<a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img src="{{ asset('admin/profile.jpg') }}" alt="profile">
							</a>
							<div class="dropdown-menu" aria-labelledby="profileDropdown">
								<div class="dropdown-header d-flex flex-column align-items-center">
									<div class="figure mb-3">
										<img src="{{ asset('admin/profile.jpg') }}">
									</div>
									<div class="info text-center">
										<p class="name font-weight-bold mb-0">{{ Auth::User()->name }}</p>
										<p class="email text-muted mb-3">{{ Auth::User()->email }}</p>
									</div>
								</div>
								<div class="dropdown-body">
									<ul class="profile-nav p-0 pt-3">

										<li class="nav-item">
											<a href="javascript:;" class="nav-link">
												<i data-feather="edit"></i>
												<span>Edit Profile</span>
											</a>
										</li>

										<li class="nav-item">
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                            <button type="submit" class="btn text-danger m-0 p-0">
												<i data-feather="log-out"></i>
												<span class='ml-1 pl-2'>Log Out</span>
											</button>
                                            </form>
										</li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</nav>
			<!-- partial -->

			<div class="page-content">


                @yield('admin')


			</div>

			<!-- partial:../../partials/_footer.html -->
			<footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
				<p class="text-muted text-center text-md-left">Copyright © 2021 <a href="https://www.facebook.com/shamiulislma.1" target="_blank">VOTEAPP</a>. All rights reserved</p>
				<p class="text-muted text-center text-md-left mb-0 d-none d-md-block">Handcrafted With <i class="mb-1 text-primary ml-1 icon-small" data-feather="heart"></i></p>
			</footer>
			<!-- partial -->

		</div>
	</div>

	<!-- core:js -->
	<script src="{{ asset('admin') }}/vendors/core/core.js"></script>
	<!-- endinject -->
	<!-- plugin js for this page -->
	<!-- end plugin js for this page -->
	<!-- inject:js -->
	<script src="{{ asset('admin') }}/vendors/feather-icons/feather.min.js"></script>
	<script src="{{ asset('admin') }}/js/template.js"></script>
	<!-- endinject -->
	<!-- custom js for this page -->
  <!-- end custom js for this page -->
</body>
</html>

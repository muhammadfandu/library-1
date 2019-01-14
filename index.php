<!DOCTYPE html>
<html lang="en">
<head>
	<title>PHP AngularJS CRUD</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<!-- Angular JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular-route.min.js"></script>
	<!-- MY App -->
	<script src="app/packages/dirPagination.js"></script>
	<script src="app/routes.js"></script>
	<script src="app/services/myServices.js"></script>
	<script src="app/helper/myHelper.js"></script>
	<!-- App Controller -->
	<script src="app/controllers/ItemController.js"></script>
	<script src="app/controllers/UserController.js"></script>
	<script src="app/controllers/BorrowController.js"></script>
    
    <style type="text/css">
        .modal-dialog, .modal-content{
            z-index:1051;
        }
        .modal-backdrop{
            z-index:0;
        }
    </style>


</head>
<body ng-app="main-App">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">Perpustakaan</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="/php_library/index.php">Buku</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/php_library/index.php#/users">User</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/php_library/index.php#/borrows">Peminjaman</a>
			</li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<ng-view></ng-view>
	</div>
</body>
</html>
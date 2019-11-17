
<!doctype html>
<html lang="en">
  	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="description" content="">
	    <meta name="author" content="@putradongkal">
	    <meta name="url" content="<?= base_url() ?>">

	    <title>Codeigniter Nestable Menu - @putradongkal</title>

	    <!-- Bootstrap core CSS -->
	    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

	    <!-- Custom styles for this template -->
	    <link href="https://getbootstrap.com/docs/4.0/examples/sticky-footer-navbar/sticky-footer-navbar.css" rel="stylesheet">

	    <link href="<?= base_url('vendor/nestable/jquery.nestable.css') ?>" rel="stylesheet">
	    <link href="<?= base_url('vendor/font-awesome-5.10.2/css/all.min.css') ?>" rel="stylesheet">
  	</head>

	<body>

	    <header>
	      <!-- Fixed navbar -->
	      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
	        <a class="navbar-brand" href="#"><i class="fas fa-fire"></i> Codeigniter Nestable</a>
	        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
	          	<span class="navbar-toggler-icon"></span>
	        </button>
	      </nav>
	    </header>

	    <main role="main" class="container">
	    	<div class="dd" id="nestable">
	    		Loading...
	    	</div>
	    	<button class="btn btn-primary mt-4 btn-save">Save</button>
	    </main>

	    <footer class="footer">
	      	<div class="container text-center">
	        	<a href="https://github.com/putradongkal" class="text-muted"><i class="fab fa-github"></i> putradongkal</a>
	      	</div>
	    </footer>
	    <script src="<?= base_url('vendor/jquery/jquery.min.js') ?>"></script>
	    <script src="<?= base_url('vendor/nestable/jquery.nestable.js') ?>"></script>
	    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
	    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
    	<script src="<?= base_url('vendor/sweetalert/sweetalert.js')?>"></script>
	    <script src="<?= base_url('assets/js/codeigniter-nestable.js') ?>"></script>
  	</body>
</html>

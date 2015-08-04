<!DOCTYPE html>
<html lang="en" ng-app="GemStore">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- Bootstrap Latest compiled and minified CSS -->
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>

		<!-- Optional Bootstrap theme -->
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"
			  rel="stylesheet"/>

		<link type="text/css" href="css/style.css" rel="stylesheet"/>
		<script type="text/javascript" src="javascript/event.js"></script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script type="text/javascript" src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript"
				src="//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript"
				src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
		<script type="text/javascript"
				src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.12.1/additional-methods.min.js"></script>

		<!-- Latest compiled and minified Bootstrap JavaScript, all compiled plugins included -->
		<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

		<!-- angular.js -->
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular.min.js"></script>
		<script type="text/javascript" src="angular/gemstore.js"></script>
		<script type="text/javascript" src="angular/store-controller.js"></script>

		<title>Angular Exercise</title>
	</head>
	<body ng-controller="StoreController as store">
		<!--  Products Container  -->
		<div class="list-group">
			<!--  Product Container  -->
			<div class="list-group-item" ng-repeat="product in store.products">
				<h3>
					{{product.name}}
					<em class="pull-right">{{product.price | currency}}</em>
				</h3>

				<!-- Image Gallery  -->
				<div class="gallery" ng-show="">
					<img class="img img-circle img-thumbnail center-block" ng-src="{{product.images[0]}}"/>
					<ul class="clearfix">
						<li class="small-image pull-left thumbnail" ng-repeat="image in product.images"><img
								ng-src="{{image}}"/></li>
					</ul>
				</div>
			</div>
		</div>
	</body>
</html>
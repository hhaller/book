<!DOCTYPE html>
<html ng-app>
<head>
<title>Book app</title>
<!--script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.6/angular.js"-->
<script src="assets/js/angular.min.js">
</script>
</head>
<body>
<input ng-model="name" type="text" placeholder="Your name">
<h1>Hello {{ name }}</h1>
</body>
</html>

<!DOCTYPE html>
<html>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<body ng-app="" ng-init="myColor={background:'green'}" style="background-color:{{myColor}}">
<h1>Angular</h1>
<div >
	<div >
 	<p>Enter your favourite color and see the magic</p>
	<input  name="mycolor" id="mycolor" ng-model="myColor" value="{{myColor}}" />
	</div>
</div>

</body>
</html>
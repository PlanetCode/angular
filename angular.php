<!DOCTYPE html>
<html lang="en-US">
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<body>

<?php echo 'this is develop branch'; ?>

this is upstream commit


now this is upstream commit

<div ng-app="myApp" ng-controller="myCtrl">

First Name: <input type="number" ng-model="firstName"><br>
Last Name: <input type="number" ng-model="lastName"><br>
<br>
Full Name: {{firstName + lastName}}

this is development change

</div>

commit 1

commit 2

commit 3

cherrypick 1

cherrypick 2

cherrypick 3

cherrypick 4

develop branch changes

check  slack notification

<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
    $scope.firstName= 5;
    $scope.lastName= 2;
});

</script>

</body>
</html>
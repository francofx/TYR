app.controller('projectCtrl', ['$scope', 'loginService', function ($scope, loginService ) {
	$scope.saveProject = function () {
		var userData = {
			name: $scope.name
			/* .. y completas el user data con la info q necesitas */
		} 

		loginService.save(userData);
	};
   
	
}]);


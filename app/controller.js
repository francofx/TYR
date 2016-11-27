app.controller('projectCtrl', ['$scope', 'reclamosServices', function ($scope, reclamosServices ) {
	$scope.saveProject = function () {
		var userData = {
			name: $scope.name
			/* .. y completas el user data con la info q necesitas */
		} 

		reclamosServices.save(userData);
	};
   
	
}]);


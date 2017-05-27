app.controller('projectCtrl', ['$scope', 'reclamosServices', function ($scope, reclamosServices ) {
	$scope.saveProject = function () {
		var userData = {
			uid: $scope.uid,
			name: $scope.name,
			email: $scope.email,
            theme:$scope.project.theme,
			phone: $scope.project.phone,
			address: $scope.project.address,
			comment: $scope.project.comment
		} 

		reclamosServices.save(userData);
	};
   
	
}]);


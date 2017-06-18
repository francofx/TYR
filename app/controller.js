app.controller('projectCtrl', ['$scope', 'reclamosServices', function ($scope, reclamosServices ) {
	$scope.saveProject = function () {
		var userData = {
			uid: $scope.uid,
			name: $scope.name,
			email: $scope.email,
			phone: $scope.project.phone,
			theme: $scope.project.theme,
			address: $scope.project.address,
			comment: $scope.project.comment
		} 

		reclamosServices.save(userData);
	};
   
	
}]);


app.controller('projectCtrl', ['$scope', 'reclamosServices', function ($scope, reclamosServices ) {
	$scope.saveProject = function () {
		var userData = {
			uid: $scope.uid,
			name: $scope.name,
			email: $scope.emal,
			phone: $scope.phone,
			address: $scope.address,
			comment: $scope.comment
		} 

		reclamosServices.save(userData);
	};
   
	
}]);


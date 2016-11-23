app.controller('projectCtrl', function ($scope, $http, $location ) {
	$scope.saveProject = function () {
		$http.post('api/v1/resourceproject.php', $scope.project, {cache:true}).success(function (){
			$location.path('dashboard')

		});
	};
   
	
});


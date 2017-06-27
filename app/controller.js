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

		//Agrego el mensaje al llenar el formulario
		if ($scope.proyectoForm.$valid) {
     //location.href(‘/dashboard’)
     //alert("Gracias por completar el formulario, en breve te llegara un correo con el numero de expediente");
     document.location = "#/dashboard";
		 //$location.path('dashboard');

  	}else {
			//valida los datos
    	//alert("Hay datos inválidos");
  	}

	};


}]);

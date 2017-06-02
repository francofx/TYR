/**
 * Service to handle the login communications to the API
 */
app.service(
    "reclamosServices",
    function ($http, $q) {
        return {
            save: function (userData) {

                var deferred = $q.defer();

	            $http({
	                method: 'POST',
	                url: 'api/v1/resourceproject.php',
	                headers: {
	                  //si necesitas mandas headers tambien  
	                },
	                data: userData

	            })
	            .success(function (data) {
	                
	                 //hago algo si todo va bien, por defecto, resuevlo el deferred object 
	                 //debugger;
	                 var alldata = arguments[3].data;
	                 
	                 $http({
	                method: 'POST',
	                url: 'http://200.80.240.114:8000/asunto/crear/',
	                headers: {
	                  //si necesitas mandas headers tambien  
	                },
	                data: {
						        "id": 1,
						        "descripcion": "asunto 1",
						        "apellido": "Colella",
						        "nombre": "Eloy",
						        "dni": 33852292,
						        "telefono": "3364541000",
						        "email": "eloycolella@gmail.com",
						        "domicilio": "Alem 1333 4-4",
						        "causante": "Causante 1",
						        "tipo_rechazo": null,
						        "fecha_rechazo": null,
						        "fecha_aceptacion": "2017-05-30",
						        "fecha_alta": "2017-05-30"
						    }

	            })

	                deferred.resolve(data);
	            }).error(function (data) {
	            	//hago algo con el erroro aca
           		});

                return deferred.promise;

	        }
        }
    }
);
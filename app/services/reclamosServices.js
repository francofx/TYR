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
	                deferred.resolve(data);
	            }).error(function (data) {
	            	//hago algo con el erroro aca
           		});

                return deferred.promise;
	        }
        }
    }
);
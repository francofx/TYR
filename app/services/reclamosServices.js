/**
 * Service to handle the login communications to the API
 */
app.service(
    "projectService",
    function ($http, $q, $config) {
        return {
            save: function (userData) {
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
	        }
        }
    }
);
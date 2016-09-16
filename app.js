(function() {
	var app = angular.module('UBCLostNFound', []);

	//inject the various dependencies into the search controller
	app.controller('SearchCtrl', ['$scope', '$http', function($scope, $http){
				
		//Called when the search button is clicked or the enter key pressed
		$scope.searchItems = function(searchInput) {
			if(!$scope.search) {
				$scope.submitted = true;
				return;
			}
		};
		
	}]);
	
})();

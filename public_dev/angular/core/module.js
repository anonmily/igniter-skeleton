var myApp = angular.module('myApp', ['ui.router','ngSanitize']);

myApp.config(['$stateProvider','$urlRouterProvider','$locationProvider', function($stateProvider, $urlRouterProvider, $locationProvider){
	
	//$locationProvider.html5Mode(true);
	$stateProvider
		.state('/',{
			url: '/',
			template: '<h1>Homepage here</h1>',
			controller: 'MyController'
		})

		.state('api',{
			url: '/api',
			templateUrl: 'partials/apirequest.html',
			controller: 'MyController'
		})

		.state('route1', {
			url: '/route1url',
			template: '<h1>Route 1 clicked</h1>'
		})

		.state('route1.list', {
		  url: '/list',
		  templateUrl: 'partials/state1.list.html',
		  controller: function($scope){
		    $scope.items = ['A', 'List', 'Of', 'Items'];
		  }
		})

		.state('route2', {
			url: '/route2',
			templateUrl: 'partials/state2.list.html'
		})

		.state('route2.list', {
		  url: '/list',
		  templateUrl: 'partials/state2.list.html',
		  controller: function($scope){
		    $scope.things = ['A', 'Set', 'Of', 'Things'];
		  }
		})
}]);
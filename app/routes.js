var app =  angular.module('main-App',['ngRoute','angularUtils.directives.dirPagination']);

app.config(['$routeProvider',
    function($routeProvider) {
        $routeProvider.when('/', {
            templateUrl: 'templates/items.html',
            controller: 'ItemController'
        });
        $routeProvider.when('/users', {
            templateUrl: 'templates/users.html',
            controller: 'UserController'
        });
        $routeProvider.when('/borrows', {
            templateUrl: 'templates/borrows.html',
            controller: 'BorrowController'
        });
        
}]);
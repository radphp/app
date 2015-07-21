angular.module('App')

    .controller('AppController', function($scope, $http, URL) {
        $http.get(URL, {headers: {"X-Requested-With" : "XMLHttpRequest"}})
            .success(function (response) {$scope.examples = response.examples;});
    });

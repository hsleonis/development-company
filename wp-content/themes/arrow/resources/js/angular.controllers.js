var app = angular.module('leo', []).run(function ($templateCache, $http) {
});

app.controller('searchController', function ($scope, $http) {
    $scope.init = function(projects){
        $scope.projects = window['projects'];
    };
    $scope.reset = function(){
        $scope.searchSize='';
        $scope.searchProject='';
        $scope.searchCity='';
        $scope.searchStatus ='';
    };
});
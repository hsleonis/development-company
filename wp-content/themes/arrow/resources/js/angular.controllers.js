/*
 Controllers v1.0.2
 (c) 2016 MD. Hasan Shahriar, hsleonis2@gmail.com
 License: GPL v3
*/

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
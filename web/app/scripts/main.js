'use strict';

var post = angular.module('post', []); // jshint:ignore

post.controller('PostController', ['$scope', '$http', function($scope, $http) {
    $http({
        method: 'GET',
        url: '/api/post'
    }).then(function successCallback(response) {
        $scope.posts = response.data.posts;
        console.log($response.data);
    });
}]);

var app = angular.module('myApp', []);

app.controller('myCtrl', function($scope, $http) {

    setInterval( function (){

        $http.get("/getmessage")
            .then(function(response) {

                $scope.myData = response.data;

            });

    },1000);
});
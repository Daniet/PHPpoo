'use strict';

angular.module('yapp')
  .controller('listWorkersCtrl', function($scope, $state, $http) {
    $scope.$state = $state;

    $http.get('http://127.0.0.1:9000/employee').then(function(succes){
      console.log(succes.data);
      $scope.table = succes.data;
    });

    $scope.deleteEmployee = function(event){
      var url = 'http://127.0.0.1:9000/employee/delete/' + this.x.id_employee
      $http.post(url).then(function(succes){
        console.log(succes);
      });
    }

  });

'use strict';

/**
* @ngdoc overview
* @name yapp
* @description
* # yapp
*
* Main module of the application.
*/
var states = [{
    name: 'base',
    state: {
      abstract: true,
      url: '',
      templateUrl: 'views/base.html',
      data: {
        text: "Base",
        visible: false
      }
    }
  },{
    name: 'workers',
    state:{
      url: '/workers',
      parent: 'base',
      templateUrl: 'views/workers.html',
      controller: 'listWorkersCtrl',
      data:{}
    }
  // },{
  //   name: 'login',
  //   state: {
  //     url: '/login',
  //     parent: 'base',
  //     templateUrl: 'views/login.html',
  //     controller: 'LoginCtrl',
  //     data:{
  //       text: "Login",
  //       visible: false
  //     }
  //   }
  }];

angular.module('yapp', [
  'ui.router',
  'snap',
  'ngAnimate'
])
.config(function($stateProvider, $urlRouterProvider) {
  $urlRouterProvider.when('/dashboard', '/dashboard/overview');
  $urlRouterProvider.otherwise('/workers');

  angular.forEach(states, function (state) {
    $stateProvider.state(state.name, state.state);
  });
});

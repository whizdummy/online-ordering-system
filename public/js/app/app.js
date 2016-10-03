(function(){
    'use strict';
    
    angular
        .module("app", ['ui.router'])
        .config(function($stateProvider, $urlRouterProvider){
       
        $stateProvider
            .state('dashboard', {
                url: '/dashboard',
                templateUrl: 'js/app/templates/dashboardTpl.html',
                controller: 'dashboardCtrl as vm'
            })
            .state('productMtn', {
                url: '/products',
                template: '<h1>Hi<h2>'
            });
    });;
})();

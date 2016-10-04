(function(){
    'use strict';
    
    angular
        .module('app')
        .controller('categoryMtnCtrl.ctr.js', categoryMtnCtrl);
    
    function categoryMtnCtrl(){
        var vm = this;
        vm.persons = [{
				    "id": 860,
				    "firstName": "Superman",
				    "lastName": "Yoda"
				}, {
				    "id": 870,
				    "firstName": "Foo",
				    "lastName": "Whateveryournameis"
				}, {
				    "id": 590,
				    "firstName": "Toto",
				    "lastName": "Titi"
				}, {
				    "id": 803,
				    "firstName": "Luke",
				    "lastName": "Kyle"
				}];

    }
})(); 
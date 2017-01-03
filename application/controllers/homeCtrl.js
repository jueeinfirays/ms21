(function() {
    angular
        .module('ms21')
        .controller('homeCtrl', HomeController);

    function HomeController() {

        var vm = this; 
        vm.nav = [{
            name: 'Rider',
            link: '#rider'
        }, {
            name: 'Bike',
            link: '#bike'
        }, {
            name: 'Route',
            link: '#route'
        }, {
            name: 'Pictures',
            link: '#pictures'
        },{
            name: 'Acknowledgements',
            link: '#acknowledgements'
        }, {
            name: 'Visa Stamps',
            link: '#visastamps'
        }];
    }

})();
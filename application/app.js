(function() {
    angular.module('ms21', ['ngRoute', 'ngParallax', 'angularCSS', 'ngAnimate'])
        .config(function($routeProvider) {
            $routeProvider.when('/home', {
                    css: ['css/home.css'],
                    templateUrl: "application/partial/home.php",
                    title: 'Home'
                })
                .otherwise({
                    redirectTo: "/home"
                });
            new WOW({
                boxClass: 'wow',
                offset: 10,
                mobile: false
            }).init();

        })
           .run(['$location', '$rootScope', '$anchorScroll', function($location, $rootScope, $anchorScroll) {
            $rootScope.$on('$locationChangeStart', function(event) {
                $('.view').hide(0.001);
                $anchorScroll();
            });
            $rootScope.$on('$routeChangeSuccess', function(event, current, previous) {
                $('.view').show();
            });
        }]);
    
})();
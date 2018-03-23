(function(){
    angular.module('baseApp',['ui.bootstrap'])
    .controller('loginCtrl',loginCtrl);
    
    function loginCtrl($scope){
        $scope.view = false;
        $scope.togglePass = togglePass;
        
        function togglePass(){
            $scope.view = !$scope.view;
        }
    }
})();
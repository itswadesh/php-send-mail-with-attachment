'use strict';

angular.module('sendmailApp', [])
.controller('MailController', function ($scope,$http) {
  $scope.loading = false;
  $scope.mail = {to: 'support@codenx.com'};
  $scope.send = function (mail){
    $scope.loading = true;
    $http.post('api/index.php', { to: mail.to }).then(res=>{
        $scope.loading = false;
        if(res.status===200)
          $scope.serverMessage = 'Email sent with attachment';
        else
          $scope.serverMessage = 'Error sending email';
    });
  }
})

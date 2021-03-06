(function () {
'use strict';

angular
  .module('Mobidul')
  .directive('mblActionButton', ActionButton);


ActionButton.$inject = [
  '$rootScope'
];


function ActionButton (
  $rootScope
) {
  return {
    restrict: 'E',
    transclude: true,
    scope: {
      success: '@'
    },
    template: '' +
      '<div>' +
        '<md-button ' +
          'class="md-raised md-primary md-mobilot" ' +
          'ng-click="actionButton.clicked()"' +
        '>' +
          '<ng-transclude></ng-transclude>' +
        '</md-button><br /><md-divider id="station_creator_divider"></md-divider>' +
      '</div>'
    ,
    controller: ActionButtonController,
    controllerAs: 'actionButton'
  };



  function ActionButtonController (
    $scope, $element, $attrs
  ) {
    var actionButton = this;

    actionButton.clicked = function () {
      $rootScope.$broadcast('action', $attrs.success);
    }
  }
}

})();

myApp.controller('NavbarController',function($scope){
  //=== Variables ===//
  
  $scope.affixed = 'top';
  $scope.search = {
    show : true,
    terms : ''
  };
  $scope.brand = "<img src='images/logo.png' class='brandlogo' /><h1><a href='/'>Angular Frontend</a></h1>";
  $scope.inverse = true;
  $scope.menus = [
    {
      title : "Dropdown Menu",
      menu : [
        {
          title : "Menu Item One",
          action : "item.one"
        },
        {
          title : "Menu Item Two",
          action : "item.two"
        },
        {
          divider: true
        },
        {
          title : "Menu Item Three",
          action : "item.three"
        }
      ]
    },
    {
      title : "Singular Menu Item",
      action : "singular"
    }
  ]; // end menus
  
  $scope.item = '';
  $scope.styling = 'Inverse';
  $scope.searchDisplay = 'Visible';
  
  $scope.searchfn = function(){
    alert('Attempting search on: "' + $scope.search.terms + '"');
  }; // searchfn
  
  $scope.navfn = function(action){
    switch(action){
      case 'item.one':
        $scope.item = 'Item one selected.';
        break;
      case 'item.two':
        $scope.item = 'Item two selected.';
        break;
      case 'item.three':
        $scope.item = 'Item three selected.';
        break;
      case 'singular':
        $scope.item = 'Singular link item selected.';
        break;
      default:
        $scope.item = 'Default selection.';
        break;
    }; // end switch
  }; // end navfn
  
  $scope.toggleStyling = function(){
    $scope.inverse = !$scope.inverse;
    if(angular.equals($scope.inverse,true))
      $scope.styling = 'Inverse';
    else
      $scope.styling = 'Default';
  }; // end toggleStyling
  
  $scope.toggleSearchForm = function(){
    $scope.search.show = !$scope.search.show;
    if(angular.equals($scope.search.show,true))
      $scope.searchDisplay = 'Visible';
    else
      $scope.searchDisplay = 'Hidden';
  }; // end toggleSearchForm
  
  $scope.addMenu = function(){
    $scope.menus.push({
        title : "Added On The Fly!",
        action : "default"
    });
  }; // end test
  
  $scope.toggleAffixed = function(){
    switch($scope.affixed){
      case 'top':
        $scope.affixed = 'bottom';
        break;
      case 'bottom':
        $scope.affixed = 'none';
        break;
      case 'none':
        $scope.affixed = 'top';
        break;
    };
  }; // end toggleAffixed
}) // end navbarDirectiveTestCtrl
/*
.run(function($templateCache){
  $templateCache.put('tmpls/nav/navbar.html','<nav class="navbar" ng-class="{\'navbar-inverse\': inverse,\'navbar-default\': !inverse,\'navbar-fixed-top\': affixed == \'top\',\'navbar-fixed-bottom\': affixed == \'bottom\'}" role="navigation"><div class="container-fluid"><div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"><span class="sr-only">Toggle Navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" ng-click="noop()" ng-bind-html="haveBranding()"></a></div><div class="collapse navbar-collapse" id="navbar-menu"><ul class="nav navbar-nav" ng-if="hasMenus()"><li ng-repeat="menu in menus" ng-class="{true: \'dropdown\'}[hasDropdownMenu(menu)]"><a ng-if="!hasDropdownMenu(menu)" ng-click="navAction(menu.action)">{{menu.title}}</a><a ng-if="hasDropdownMenu(menu)" class="dropdown-toggle" data-toggle="dropdown">{{menu.title}} <b class="caret"></b></a><ul ng-if="hasDropdownMenu(menu)" class="dropdown-menu"><li ng-repeat="item in menu.menu" ng-class="{true: \'divider\'}[isDivider(item)]"><a ng-if="!isDivider(item)" ng-click="navAction(item.action)">{{item.title}}</a></li></ul></li></ul><form ng-if="search.show" class="navbar-form navbar-right" role="search"><div class="form-group"><input type="text" class="form-control" placeholder="Search" ng-model="search.terms"><button class="btn btn-default" type="button" ng-click="searchfn()"><span class="glyphicon glyphicon-search"></span></button></div></form></div></div></nav>');
});
*/
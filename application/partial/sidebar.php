<div ng-controller="sidebarCtrl as sidebar">
    <nav class="menu text-center" ng-show=sidebar.variables.open class=sidebar>
        <span class><i class="fa fa-times pull-left" style="cursor: pointer;margin-right: 5px; font-size: 30px;" ng-click=sidebar.closeMenu()></i></span> 
        <div class=sidebar-wraper>
            <ul class="menu-item pad0">
                <li ng-repeat="opt in sidebar.sidebar" ng-class="{subli : $index &gt;= 3, margintop20: $index == 3,active : sidebar.variables.activeIndex === $index}"><a class=nav-link ng-href="{{ opt.link }}" ng-click=sidebar.variables.closeSidebar()>{{ opt.name }}</a></li>
            </ul>
        </div>
        <div class=socialmedia>
            <ul class=pad0>
                <li ng-repeat="socialmedia in sidebar.sidebarsocialmedia"><a ng-href="{{ socialmedia.link}}" class=white target=_blank><i class="{{ socialmedia.icon }}"></i></a></li>
            </ul>
        </div>
    </nav>
</div>
<div class="main-container pad0" ng-controller="homeCtrl as home">
	<div id="intro" class="intro">
		<div class="nav-holder display-table text-center">
			<div class="display-table-cell vertical-middle">
				<ul class="margin0">
					<li ng-repeat="nav in home.nav">
						<a ng-href="{{ nav.link }}">{{ nav.name }}</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="text-holder display-table text-center ">
			<div class="logo ">
				<img src="images/logo.png" alt="logo" height="100px" class="pull-left">
				<p class="pull-right">August 1983 - December 1984</p>
			</div>
			<div class="display-table-cell vertical-middle overlay">
				<h1 class="margintb20">Welcome to <span class="logo-font">MOBIKE SAFARI 21</span> web site</h1>
				<p class="parafont">MOBIKE SAFARI 21 is an individual's arduous journey on an Indian motorcycle (Yezdi - 250, cc 2-stroke) from Baroda (Vadodara), India to Los Angeles, USA, through 18 countries in Europe, and North America over a period of 16 months, covering approximately. 22,000 miles (35,000 kilometers).</p>
			</div>
		</div>
	</div>
	<div class="wrapper" id="wrapper">
		<div class="sidebar">
			<ul class="margin0">
				<li ng-repeat="nav in home.nav">
					<a ng-href="{{ nav.link }}">{{ nav.name }}</a>
				</li>
			</ul>
		</div>
	</div>
</div>
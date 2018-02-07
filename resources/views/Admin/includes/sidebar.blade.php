<nav class="navbar navbar-default sidebar" role="navigation">
    <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/admin/">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
        <li><a href="{{route('adCategory.index')}}">Categories<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags "></span></a></li>
        <li ><a href="/admin/ads">Ads<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Users <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
        <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="{{route('user.index')}}">All</a></li>
            <li><a href="{{route('person.index')}}">Person</a></li>
            <li><a href="{{route('company.index')}}">Company</a></li>
        </ul>
        <li ><a href="/admin/ads">Setting<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a></li>
      </ul>
    </div>
  </div>
</nav>
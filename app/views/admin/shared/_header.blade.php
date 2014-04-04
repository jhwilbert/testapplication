<!-- Fixed navbar -->
<div class="navbar" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      {{ link_to_route('admin_index', 'Projesom', null, array('class' => 'navbar-brand')) }}
    </div>
    <div class="navbar-collapse collapse">
      @if (Auth::check())
        <ul class="nav navbar-nav">
          <li>{{ link_to_route('admin_index', 'Painel') }}</li>
          <li>{{ link_to_route('admin.projects.index', 'Projetos') }}</li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> {{Auth::user()->name;}} <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li>{{ link_to_route('admin_users', 'Gerenciar Usuários') }}</li>
              @if (Auth::user()->role == 'admin')
                <li class="divider"></li>
                <li>{{ link_to_route('logout', 'Sair') }}</li>
              @endif
            </ul>
          </li>
        </ul>
      @endif
    </div><!--/.nav-collapse -->
  </div>
</div>

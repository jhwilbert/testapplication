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
      <ul class="nav navbar-nav">
        <li>{{ link_to_route('admin_index', 'Painel') }}</li>
        @if (Admin\ProjectController::can('index'))
          <li>{{ link_to_route('admin.projects.index', 'Projetos') }}</li>
        @endif
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> {{$current_user->name;}} <b class="caret"></b></a>
          <ul class="dropdown-menu">
            @if (Admin\UserController::can('index'))
              <li>{{ link_to_route('admin.usuarios.index', 'Gerenciar Usuários') }}</li>
              <li class="divider"></li>
            @endif
            <li>{{ link_to_route('admin.usuarios.edit', 'Alterar dados', $current_user->id) }}</li>
            <li>{{ link_to_route('logout', 'Sair') }}</li>
          </ul>
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>

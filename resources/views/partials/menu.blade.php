<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
            <li>Bienvenue {{ Auth::user()->name }}</li>
            <li class="nav-item">
                <a href="{{ route("admin.home") }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
            @can('users_manage')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-users nav-icon">

                        </i>
                        {{ trans('cruds.userManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-unlock-alt nav-icon">

                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-briefcase nav-icon">

                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-user nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    </ul>
                </li>
            @endcan
            <li class="nav-item">
                <a href="{{ route('auth.change_password') }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-key">

                    </i>
                    {{ trans('global.change_password') }}
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ Route('contenus') }}" class="nav-link {{ request()->is('contenus') || request()->is('contenus/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-graduation-cap nav-icon">
                    </i>
                    {{ trans('dashboard.content_title') }}
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link {{ request()->is('planning') || request()->is('planning/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-calendar-alt nav-icon">
                    </i>
                    {{ trans('dashboard.planning_title') }}
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link {{ request()->is('activities') || request()->is('activities/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-pencil-ruler nav-icon">
                    </i>
                    {{ trans('dashboard.activities_title') }}
                </a>
            </li>
            <li class="nav-item">
                <a href="https://whereby.com/classe-pantoufle" target="blank" class="nav-link {{ request()->is('https://whereby.com/classe-pantoufle') || request()->is('https://whereby.com/classe-pantoufle/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-handshake nav-icon">
                    </i>
                    {{ trans('dashboard.room_title') }}
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>

    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
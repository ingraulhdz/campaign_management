<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAdmin" aria-expanded="true"
        aria-controls="collapseAdmin">
        <i class="fas fa-fw fa-cog"></i>
        <span>Admin</span>
    </a>
    <div id="collapseAdmin" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Admin Panel Security:</h6>
            <a class="collapse-item" href="{{ route('users.index') }}">Users</a>
            <a class="collapse-item" href="{{ route('roles.index') }}">Roles</a>
            <a class="collapse-item" href="{{ route('permissions.index') }}">Permissions</a>
        </div>
    </div>
</li>

<li class='nav-item'>
                <a class='nav-link' href="{{ route('estructuras.index')}}">
                    <i class='fas fa-fw fa-check'></i>
                    <span>Estructuras</span></a>
            </li><li class='nav-item'>
                <a class='nav-link' href="{{ route('personas.index')}}">
                    <i class='fas fa-fw fa-check'></i>
                    <span>Personas</span></a>
            </li><li class='nav-item'>
                <a class='nav-link' href="{{ route('grupos.index')}}">
                    <i class='fas fa-fw fa-check'></i>
                    <span>Grupos</span></a>
            </li>
            <li class='nav-item'>
                <a class='nav-link' href="{{ route('cargos.index')}}">
                    <i class='fas fa-fw fa-check'></i>
                    <span>Cargos</span></a>
            </li>
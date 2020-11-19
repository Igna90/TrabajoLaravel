<?php $r = \Route::current()->getAction() ?>
<?php $route = (isset($r['as'])) ? $r['as'] : ''; ?>

<ul class="sidebar-menu">
    @Logged()
    <li class="header">MENU</li>
    @endLogged()

    @LoggedAD()
    <li>
        <a href="{{url('empresa')}}">
            
            <i class="fa fa-building"></i>
            <span>Empresas</span>
        </a>
    </li>
    <li>
        <a href="{{url('ciclo')}}">
            
            <i class="fa fa-circle"></i>
            <span>Ciclos</span>
        </a>
    </li>
    @endLoggedAD()
    @LoggedALyAD()
    <li>
        <a href="{{ url('/fichas') }}">
            
            <i class="fa fa-file"></i>
            <span>Fichas de Seguimiento</span>
        </a>
    </li>
    <li>
        <a href="{{ url('/asistencia') }}">
            
            <i class="fa fa-calendar"></i>
            <span>Asistencia</span>
        </a>
    </li>
    @endLoggedAL()
    @LoggedTLyAD()
    @endLoggedTLyAD()
    @LoggedTEyAD()
    <li>
        <a href="{{ url('/tareas') }}">
            
            <i class="fa fa-book"></i>
            <span>Tareas</span>
        </a>
    </li>
    <li>
        <a href="{{ url('/modulos') }}">
            
            <i class="fa fa-rebel"></i>
            <span>Módulos</span>
        </a>
    </li>
    <li>
        <a href="{{ url('/resultados') }}">
            <i class="fa fa-registered"></i>
            <span>Resultados de aprendizaje</span>
        </a>
    </li>
    <li>
        <a href="{{ url('/criterios') }}">
            
            <i class="fa fa-copyright"></i>
            <span>Criterios</span>
        </a>
    </li>
    @endLoggedTEyAD()
</ul>
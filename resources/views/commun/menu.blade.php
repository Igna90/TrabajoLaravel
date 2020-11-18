<?php $r = \Route::current()->getAction() ?>
<?php $route = (isset($r['as'])) ? $r['as'] : ''; ?>

<ul class="sidebar-menu">
    <li class="header">MENU</li>

    <li>
        <a href="{{url('fichas')}}">
            <i class="fa fa-dashboard"></i>
            <span>fichas</span>
        </a>
    </li>
</ul>

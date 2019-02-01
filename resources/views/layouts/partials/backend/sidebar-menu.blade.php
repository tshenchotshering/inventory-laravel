<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="{{ \App\Utils::checkRoute(['dashboard::index', 'admin::index']) ? 'active': '' }}">
        <a href="{{ route('dashboard::index') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
    </li>
    @if (Auth::user()->can('viewList', \App\User::class))
        <li class="{{ \App\Utils::checkRoute(['admin::users.index', 'admin::users.create']) ? 'active': '' }}">
            <a href="{{ route('admin::users.index') }}">
                <i class="fa fa-user-secret"></i> <span>Users</span>
            </a>
        </li>
    @endif
    <li class="active treeview menu-open">
        <a href="#">
        <i class="fa fa-book"></i> <span>Master</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="{{ \App\Utils::checkRoute(['admin::kategori']) ? 'active': '' }}">
                <a href="{{ route('admin::kategori.index') }}">
                    <span>Kategori</span>
                </a>
            </li>
        </ul>
        <ul class="treeview-menu">
            <li class="{{ \App\Utils::checkRoute(['admin::barang']) ? 'active': '' }}">
                <a href="{{ route('admin::barang.index') }}">
                    <span>Barang</span>
                </a>
            </li>
        </ul>
    </li>
</ul>

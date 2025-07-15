<div id="app">
    <div id="sidebar" class='active'>
        <div class="sidebar-wrapper active">
<div class="sidebar-header">
    <a href="/dashboard">
    <img src="{{asset ('assets')}}/images/logo.svg" alt="" srcset="">
    </a>
</div>
<div class="sidebar-menu">
    <ul class="menu">
            <li class='sidebar-title'>Main Menu</li>
            <li class="sidebar-item {{request()->is('dashboard') ? 'active' : '' }}">
                <a href="/dashboard" class='sidebar-link'>
                    <i data-feather="home" width="20"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sidebar-item {{request()->is('tambah_data') ? 'active' : ''}}">
                <a href="/tambah_data" class="sidebar-link">
                    <i data-feather="file-plus" width="20"></i>
                    <span>Tambah Data</span>
                </a>
            </li>
    </ul>
</div>

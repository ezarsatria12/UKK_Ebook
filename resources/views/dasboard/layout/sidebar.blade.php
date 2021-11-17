<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div> 
            <a href="/" class="nav_logo"> 
                <i class='bx bx-book nav_logo-icon'></i>
                <span class="nav_logo-name"></span> 
            </a>
            <div class="nav_list"> 
                <a href="/dasboard" class="nav_link {{ Request::is('dasboard') ? 'active' : ''}}"> 
                    <i class='bx bx-grid-alt nav_icon'></i> 
                    <span class="nav_name">Dashboard</span> 
                </a> 
                <a href="/addbook" class="nav_link {{ Request::is('buku') ? 'active' : ''}}"> 
                    <i class='bx bx-book-add nav_icon'></i> 
                    <span class="nav_name">Tambah Buku</span> 
                </a>
                <a href="/user" class="nav_link {{ Request::is('user') ? 'active' : ''}}"> 
                    <i class='bx bx-user nav_icon'></i>
                    <span class="nav_name">User</span> 
                </a> 
            </div>
        </div> 
            
    </nav>
</div>
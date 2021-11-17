<header class="header" id="header">
    <div class="logo">
        <h3>EBOOK</h3>
    </div>
    <form action="/out" method="post">
        @csrf
        <button type="submit" class="btn ">
            <i class='bx bx-log-out nav_icon'></i> 
            <span class="nav_name">SignOut</span>
        </button>
    </form>
</header>
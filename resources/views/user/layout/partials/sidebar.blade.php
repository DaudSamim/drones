<nav class="sidebar">
    <div class="sidebar-header">
        <a class="sidebar-brand">
            {{Auth::user()->name}}
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <ul class="nav sub-menu">
                <li class="nav-item">
                    <a href="{{ url('view-user-stats') }}"
                       class="nav-link  {{ $opt=='view-user-stats'?'active':'' }}">Statistics</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('view-home') }}"
                        class="nav-link  {{ $opt=='view-cashout'?'active':'' }}">Cash Out</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('user-change-password') }}"
                        class="nav-link  {{ $opt=='user-change-password'?'active':'' }}">Password</a>
                </li>
            </ul>
        </ul>
    </div>
</nav>

<nav class="sidebar">
    <div class="sidebar-header">
        <a class="sidebar-brand">
            BUDGET
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
                            <a href="{{ url('view-stats') }}"
                               class="nav-link  {{ $opt=='view-stats'?'active':'' }}">Statistics</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('view-products') }}"
                               class="nav-link  {{ $opt=='view-products'?'active':'' }}">Products</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('view-cashout') }}"
                               class="nav-link  {{ $opt=='view-cashout'?'active':'' }}">Cash Out</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('view-job') }}"
                               class="nav-link  {{ $opt=='view-job'?'active':'' }}">Jobs</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('view-cashin') }}"
                               class="nav-link  {{ $opt=='view-cashin'?'active':'' }}">Cash In</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('view-user') }}"
                               class="nav-link  {{ $opt=='view-user'?'active':'' }}">Users</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('view-eststats') }}"
                               class="nav-link  {{ $opt=='view-eststats'?'active':'' }}">Est. Statistics</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('view-estcashout') }}"
                               class="nav-link  {{ $opt=='view-estcashout'?'active':'' }}">Est. Cash Out</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('view-estcashin') }}"
                               class="nav-link  {{ $opt=='view-estcashin'?'active':'' }}">Est. Cash In</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('change-password') }}"
                               class="nav-link  {{ $opt=='change-password'?'active':'' }}">Password</a>
                        </li>
                    </ul>

        </ul>
    </div>
</nav>

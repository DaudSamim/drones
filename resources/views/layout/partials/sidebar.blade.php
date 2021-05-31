<nav class="sidebar">
    <div class="sidebar-header">
        <a href="/" class="sidebar-brand">
            Drone Stock
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
                               class="nav-link  ">Statistics</a>
                        </li>
                   
                    @if( auth()->user()->role == 2 )
                        <li class="nav-item">
                            <a href="{{ url('view-videos') }}"
                               class="nav-link ">Videos </a>
                        </li>
                    @endif
                    @if(auth()->user()->role == 3)
                     <li class="nav-item">
                            <a href="/view-purchases"
                               class="nav-link  ">Purchases </a>
                        </li>

                         <li class="nav-item">
                            <a href="#"
                               class="nav-link  ">Plans </a>
                        </li>
                    @endif
                    @if( auth()->user()->role == 1 )
                        <li class="nav-item">
                            <a href="{{ url('view-all-videos') }}"
                               class="nav-link ">Videos </a>
                        </li>
                    
                    
                        <li class="nav-item">
                            <a href="{{ url('view-category') }}"
                               class="nav-link ">Categories </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('view-qualities') }}"
                               class="nav-link ">Qualities </a>
                        </li>

                        <li class="nav-item">
                            <a href="/view-purchases"
                               class="nav-link  ">Purchases </a>
                        </li>
                    
                    
                        <li class="nav-item">
                            <a href="#"
                               class="nav-link  ">Plans </a>
                        </li>
                    
                    
                        <li class="nav-item">
                            <a href="{{ url('view-user-stats') }}"
                               class="nav-link  ">Users </a>
                        </li>
                    
                    
                        <li class="nav-item">
                            <a href="{{ url('view-contributor') }}"
                               class="nav-link ">Contributor </a>
                        </li>
                    
                    
                        <li class="nav-item">
                            <a href="{{ url('view_contact_us') }}"
                               class="nav-link  ">Contact Queries </a>
                        </li>
                    
                    
                        <li class="nav-item">
                            <a href="{{ url('view_subscriptions') }}"
                               class="nav-link  ">Subscriptions </a>
                        </li>
                    @endif
                   
                        <li class="nav-item">
                            <a href="{{ url('change-password') }}"
                              class="nav-link"  >Change Password</a>
                        </li>
                    
                    </ul>

        </ul>
    </div>
</nav>

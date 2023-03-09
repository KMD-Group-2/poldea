<aside class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav active">
            <ul id="sidebar-nav" class="in">
                @hasanyrole('Admin|QA Manager|QA Coordinator')
                    <li>
                        <a href="{{ route('dashboard.index') }}">
                            <i class="fas fa-home"></i>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-users"></i>
                            <span class="hide-menu">Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('staff.index') }}">
                            <i class="fas fa-id-badge"></i>
                            <span class="hide-menu">Staff</span>
                        </a>
                    </li>
                @else
                    <li>
                        <a href="#">
                            <i class="fas fa-lightbulb"></i>
                            <span class="hide-menu">Ideas</span>
                        </a>
                    </li>
                @endhasanyrole
            </ul>
        </nav>
    </div>
</aside>

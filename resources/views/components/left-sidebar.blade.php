<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{ route('dashboard') }}">
            <img src="vendors/images/deskapp-logo.svg" alt="" class="dark-logo">
            <img src="vendors/images/deskapp-logo-white.svg" alt="" class="light-logo">
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li class="dropdown">
                    <a href="{{ route('dashboard') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-analytics-8"></span><span class="mtext">Dashboard</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-add-user"></span><span class="mtext">Apply</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('leave.create') }}">Leave</a></li>
                        <li><a href="{{ route('loan.create') }}">Loan</a></li>
                    </ul>
                </li>
                @if (Auth::user()->role == 'Staff')
                @else
                <li class="dropdown">
                    <a href="{{ route('staff.index') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-user2"></span><span class="mtext">Staff</span>
                    </a>
                </li> @endif
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-user-3"></span><span class="mtext">Leaves</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('leave.index') }}">Requests</a></li>
                        @if (Auth::user()->role == 'Staff')
                        @else
                        <li><a href="{{ route('leave_review.index') }}">Leave Status</a></li>
                        @endif
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-money-2"></span><span class="mtext">Loan</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('loan.index') }}">Requests</a></li>
                        @if (Auth::user()->role == 'Staff')
                        @else
                        <li><a href="{{ route('loan_review.index') }}">Loan Status</a></li>
                        @endif
                    </ul>
                </li>
                @if (Auth::user()->role == 'Staff')
                @else
                <li class="dropdown">
                    <a href="{{ route('reports') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-analytics-4"></span><span class="mtext">Reports</span>
                    </a>
                </li>
                @endif
                <li>
                    <div class="dropdown-divider"></div>
                </li>
            </ul>
        </div>
    </div>
</div>
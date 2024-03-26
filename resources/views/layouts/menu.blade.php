<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>
<li class="{!! (Request::is('employees*') ? 'active' : '' ) !!}">
    <a href="{{ route('employees.index') }}">
        <span class="mm-text ">Employees</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

<li class="{!! (Request::is('leaveApplications*') ? 'active' : '' ) !!}">
    <a href="{{ route('leaveApplications.index') }}">
        <span class="mm-text ">Leave Applications</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

<li class="{!! (Request::is('leaveApplications*') ? 'active' : '' ) !!}">
    <a href="{{ route('leaveApplications.index') }}">
        <span class="mm-text ">Leave Applications</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

<li class="{!! (Request::is('payrolls*') ? 'active' : '' ) !!}">
    <a href="{{ route('payrolls.index') }}">
        <span class="mm-text ">Payrolls</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

<li class="{!! (Request::is('advancePayments*') ? 'active' : '' ) !!}">
    <a href="{{ route('advancePayments.index') }}">
        <span class="mm-text ">Advance Payments</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>


<div id="menu" role="navigation">
    <ul class="navigation list-unstyled" id="demo">
        <li><span class="close-icon d-xl-none d-lg-block"><img src="{{asset('img/images/input-disabled.png')}}"
                    alt="image missing"></span></li>

        <a href="{{ URL::to('index') }}" class="logo navbar-brand mr-0">

            <h2 class="text-center">IAG ERP</h2>
        </a>
        <li {!! (Request::is('') ? 'class="active"' : '' ) !!}>
            <a href="{{ URL::to('') }}">
                <span class="mm-text ">Dashboard</span>
                <span class="menu-icon"><i class="im im-icon-Home"></i></span>
            </a>
        </li>



        <!-- General Management -->
    <li>
        <a href="#">
            <span class="mm-text">Management</span>
            <span class="menu-icon"><i class="fas fa-users-cog"></i></span>
        </a>
        <ul>
            <li class="{!! (Request::is('clients*') ? 'active' : '' ) !!}">
                <a href="{{ route('clients.index') }}">Clients</a>
            </li>
            <li class="{!! (Request::is('locations*') ? 'active' : '' ) !!}">
                <a href="{{ route('locations.index') }}">Locations</a>
            </li>
            <li class="{!! (Request::is('banks*') ? 'active' : '' ) !!}">
                <a href="{{ route('banks.index') }}">Banks</a>
            </li>
            <li class="{!! (Request::is('projectManagers*') ? 'active' : '' ) !!}">
                <a href="{{ route('projectManagers.index') }}">Project Managers</a>
            </li>
            <li class="{!! (Request::is('contracts*') ? 'active' : '' ) !!}">
                <a href="{{ route('contracts.index') }}">Contracts</a>
            </li>


            <li class="{!! (Request::is('subcontractors*') ? 'active' : '' ) !!}">
                <a href="{{ route('subcontractors.index') }}">SubContractors</a>
            </li>


        </ul>
    </li>

    <!-- Procurement -->
    <li>
        <a href="#">
            <span class="mm-text">Procurement</span>
            <span class="menu-icon"><i class="fas fa-hard-hat"></i></span>
        </a>
        <ul>
            <li class="{!! (Request::is('suppliers*') ? 'active' : '' ) !!}">
                <a href="{{ route('suppliers.index') }}">Suppliers</a>
            </li>

            <li class="{!! (Request::is('quotations*') ? 'active' : '' ) !!}">
                <a href="{{ route('quotations.index') }}">Quotations</a>
            </li>
            
            <li class="{!! (Request::is('quotationItems*') ? 'active' : '' ) !!}">
                <a href="{{ route('quotationItems.index') }}">Quotation Items</a>
            </li>

            
            <li class="{!! (Request::is('purchaseOrders*') ? 'active' : '' ) !!}">
                <a href="{{ route('purchaseOrders.index') }}">
                    <span class="mm-text ">Purchase Orders</span>
                    <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
                </a>
            </li>


            



            <li class="{!! (Request::is('gRNS*') ? 'active' : '' ) !!}">
                <a href="{{ route('gRNS.index') }}">G R N S</a>
            </li>
        </ul>
    </li>

    <!-- Task Orders -->
    <li>
        <a href="#">
            <span class="mm-text">Task Orders</span>
            <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
        </a>
        <ul>
            <li class="{!! (Request::is('taskOrderProposals*') ? 'active' : '' ) !!}">
                <a href="{{ route('taskOrderProposals.index') }}">Task Order Proposals</a>
            </li>
            <li class="{!! (Request::is('taskOrders*') ? 'active' : '' ) !!}">
                <a href="{{ route('taskOrders.index') }}">Task Orders</a>
            </li>
            <li class="{!! (Request::is('tOMaterials*') ? 'active' : '' ) !!}">
                <a href="{{ route('tOMaterials.index') }}">
                    <span class="mm-text ">T O Materials</span>
                    <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
                </a>
            </li>
        </ul>
    </li>

    <!-- Finance -->
    <li>
        <a href="#">
            <span class="mm-text">Finance</span>
            <span class="menu-icon"><i class="fas fa-chart-line"></i></span>
        </a>


        
        <ul>
           <li class="{!! (Request::is('subcontractorCosts*') ? 'active' : '' ) !!}">
                <a href="{{ route('subcontractorCosts.index') }}">Subcontractor Costs</a>
            </li> 


            <li class="{!! (Request::is('supplierInvoices*') ? 'active' : '' ) !!}">
                <a href="{{ route('supplierInvoices.index') }}">Supplier Invoices</a>
            </li>

            <li class="{!! (Request::is('customerInvoices*') ? 'active' : '' ) !!}">
                <a href="{{ route('customerInvoices.index') }}">
                    <span class="mm-text ">Customer Invoices</span>
                    <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
                </a>
            </li>

            
            <li class="{!! (Request::is('subContractorTrackers*') ? 'active' : '' ) !!}">
                <a href="{{ route('subContractorTrackers.index') }}">Sub Contractor Trackers</a>
            </li>
            <li class="{!! (Request::is('receivePayments*') ? 'active' : '' ) !!}">
                <a href="{{ route('receivePayments.index') }}">Receive Payments</a>
            </li>
            <li class="{!! (Request::is('invoiceTrackers*') ? 'active' : '' ) !!}">
                <a href="{{ route('invoiceTrackers.index') }}">Invoice Trackers</a>
            </li>

            <li class="{!! (Request::is('taskOrderCosts*') ? 'active' : '' ) !!}">
                <a href="{{ route('taskOrderCosts.index') }}">
                    <span class="mm-text ">Task Order Costs</span>
                    <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
                </a>
            </li>
        </ul>
    </li>

    <!-- Cashier -->
    <li>
        <a href="#">
            <span class="mm-text">Cashier</span>
            <span class="menu-icon"><i class="fas fa-cash-register"></i></span>
        </a>
        <ul>
            <li class="{!! (Request::is('supplierCashiers*') ? 'active' : '' ) !!}">
                <a href="{{ route('supplierCashiers.index') }}">Supplier Cashiers</a>
            </li>
            <li class="{!! (Request::is('subcontractorCashiers*') ? 'active' : '' ) !!}">
                <a href="{{ route('subcontractorCashiers.index') }}">Subcontractor Cashiers</a>
            </li>
            <li class="{!! (Request::is('generalExpenses*') ? 'active' : '' ) !!}">
                <a href="{{ route('generalExpenses.index') }}">General Expenses</a>
            </li>
            <li class="{!! (Request::is('expenseTrackers*') ? 'active' : '' ) !!}">
                <a href="{{ route('expenseTrackers.index') }}">Expense Trackers</a>
            </li>
        </ul>
    </li>


        <!-- HR Department -->
        <li>
            <a href="#">
                <span class="mm-text">HR Department</span>
                <span class="menu-icon"><i class="fas fa-cash-register"></i></span>
            </a>
            <ul>
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

            </ul>
        </li>
</ul>

        <li {!! (Request::is('buttons') || Request::is('alerts') || Request::is('dropdown') || Request::is('cards') ||
            Request::is('forms') || Request::is('form_layout')|| Request::is('form_examples') ||
            Request::is('accordion') || Request::is('progress_bar') || Request::is('pagination') || Request::is('icons')
            || Request::is('tabs') || Request::is('modals') ? 'class="menu-dropdown active"' : "class='menu-dropdown'" )
            !!}>
            <a href="#">
                <span class="mm-text ">Content</span>
                <span class="menu-icon "> <i class="im im-icon-Pen-4"></i></span>
                <span class="im im-icon-Arrow-Right imicon"></span>
            </a>
            <ul class="sub-menu list-unstyled">
                <li {!! (Request::is('alerts') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('alerts') }}">
                        Alerts
                    </a>
                </li>


            </ul>
        </li>

      








        @include("layouts/menu")
    </ul>
    <!-- / .navigation -->
</div>



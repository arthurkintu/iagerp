<?php




Route::resource('clients', 'ClientsController');

Route::resource('locations', 'LocationsController');

Route::resource('banks', 'BanksController');

Route::resource('subcontractors', 'SubcontractorsController');

Route::resource('taskOrderProposals', 'TaskOrderProposalsController');

Route::resource('taskOrders', 'TaskOrdersController');





Route::resource('subContractorTrackers', 'SubContractorTrackerController');

Route::resource('gRNS', 'GRNController');



Route::resource('projectManagers', 'ProjectManagersController');

Route::resource('equipment', 'EquipmentController');





















Route::resource('contracts', 'ContractsController');







Route::resource('supplierInvoices', 'SupplierInvoicesController');



Route::resource('suppliers', 'SuppliersController');





Route::resource('receivePayments', 'ReceivePaymentsController');

Route::resource('invoiceTrackers', 'InvoiceTrackerController');

Route::resource('supplierCashiers', 'SupplierCashierController');

Route::resource('subcontractorCashiers', 'SubcontractorCashiersController');





Route::resource('generalExpenses', 'GeneralExpensesController');

Route::resource('expenseTrackers', 'ExpenseTrackersController');

Route::resource('tOMaterials', 'TOMaterialsController');

Route::resource('quotations', 'QuotationsController');

Route::resource('quotationItems', 'QuotationItemsController');





Route::resource('customerInvoices', 'CustomerInvoicesController');

Route::resource('purchaseOrders', 'PurchaseOrdersController');

Route::resource('taskOrderCosts', 'TaskOrderCostsController');

Route::resource('subcontractorCosts', 'SubcontractorCostsController');

Route::resource('subcontractorCosts', 'SubcontractorCostsController');

Route::resource('subcontractorCosts', 'SubcontractorCostsController');

Route::resource('employees', 'EmployeesController');

Route::resource('leaveApplications', 'LeaveApplicationController');

Route::resource('leaveApplications', 'LeaveApplicationController');

Route::resource('payrolls', 'PayrollController');

Route::resource('advancePayments', 'AdvancePaymentsController');
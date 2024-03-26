<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\TaskOrders;
use App\Models\ProjectManagers;
use App\Models\Suppliers;
use App\Models\Quotations;
use App\Models\QuotationItems;
use App\Models\TOMaterials;
use App\Models\LocalPOs;
use App\Models\Subcontractors;
use App\Models\SubcontractorCosts;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Define a view composer to share task order data with all views
        view()->composer('*', function ($view) {
            // // Fetch task order data
            // $taskOrderData = TaskOrders::pluck('TONumber', 'TONumber');
            
            // // Pass the task order data to the view
            // $view->with('taskOrderData', $taskOrderData);

// Fetch task order data
$taskOrderData = TaskOrders::pluck('TONumber', 'TONumber');

// Fetch additional data from taskorders table
$taskOrderDetails = TaskOrders::select('TONumber', 'Todescription', 'TOAmount', 'PM', 'Location')->get();

// Group the task order details by TONumber
$taskOrderDetailsByTONumber = [];
foreach ($taskOrderDetails as $taskOrderDetail) {
    $taskOrderDetailsByTONumber[$taskOrderDetail->TONumber] = [
        'Todescription' => $taskOrderDetail->Todescription,
        'TOAmount' => $taskOrderDetail->TOAmount,
        'PM' => $taskOrderDetail->PM,
        'Location' => $taskOrderDetail->Location,
    ];
}

// Pass the task order data and details to the view
$view->with('taskOrderData', $taskOrderData)
     ->with('taskOrderDetailsByTONumber', $taskOrderDetailsByTONumber);








         // Fetch project manager data
           $projectManagersData = ProjectManagers::pluck('Name', 'id');
            
          // Pass the project manager data to the view
          $view->with('projectManagersData', $projectManagersData);

          // Fetch suppliers data
            $suppliersData = Suppliers::pluck('SupplierName', 'id');
            
            // Pass the suppliers data to the view
            $view->with('suppliersData', $suppliersData);


          // Fetch suppliers data
           $suppliersData = Suppliers::pluck('SupplierName', 'id');
            
           // Pass the suppliers data to the view
            $view->with('suppliersData', $suppliersData);


           // Fetch Quotations data
           $quotationsData = quotations::pluck('quotationno', 'id');
            
           // Pass the Quotationss data to the view
            $view->with('quotationsData', $quotationsData);



           // Fetch Quotationsitem data
           $quotationsItemData = quotationitems::pluck('quotationnumber', 'id');
            
           // Pass the Quotationsitem data to the view
            $view->with('quotationsItemData', $quotationsItemData);


           // Fetch TOmaterials data
            $toMaterialsData = TOMaterials::pluck('ItemName', 'TONumber');

           // Pass the TOmaterials data to the view
            $view->with('toMaterialsData', $toMaterialsData);


                // Calculate totals by TONumber
                $totalsByTONumber = QuotationItems::select('TONumber', DB::raw('SUM(TotalAmount) as total'))
                ->groupBy('TONumber')
                ->pluck('total', 'TONumber');
    
            // Bind the calculated totals to the service container as a constant
            $this->app->instance('totalsByTONumber', $totalsByTONumber);


        });

// Fetch subcontractors data
$subcontractorsData = Subcontractors::pluck('SubConName', 'id');

// Pass the subcontractors data to the view
view()->share('subcontractorsData', $subcontractorsData);

// Fetch SubcontractorCost data
$subcontractorCostData = SubcontractorCosts::pluck('SubConContractAmount', 'TONumber');

// Pass the SubcontractorCost data to the view
view()->share('subcontractorCostData', $subcontractorCostData);

// Calculate totals by TONumber for SubcontractorCost
$totalsByTONumberSubcontractor = SubcontractorCosts::select('TONumber', DB::raw('SUM(SubConContractAmount) as total'))
    ->groupBy('TONumber')
    ->pluck('total', 'TONumber');

// Bind the calculated totals to the service container as a constant
$this->app->instance('totalsByTONumberSubcontractor', $totalsByTONumberSubcontractor);


    }











}

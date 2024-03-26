<style>
    .grid-container {
        display: grid;
        grid-template-columns: auto auto;
        gap: 10px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        border: 1px solid #ccc;
    }

    .grid-item {
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }

    .grid-item:last-child {
        border-bottom: none;
    }

    th {
        text-align: right;
    }

    .label {
        font-weight: bold;
    }
</style>

<div class="grid-container">
    <div class="grid-item">
        <span class="label">Id:</span>
        <span>{{ $customerInvoices->id }}</span>
    </div>
    <div class="grid-item">
        <span class="label">TO Number:</span>
        <span>{{ $customerInvoices->TONumber }}</span>
    </div>
    <div class="grid-item">
        <span class="label">To Amount:</span>
        <span>{{ $customerInvoices->TOAmount }}</span>
    </div>
    <div class="grid-item">
        <span class="label">Invoice %:</span>
        <span>{{ $customerInvoices->InvoicePercentage }}</span>
    </div>
    <div class="grid-item">
        <span class="label">Invoice Group:</span>
        <span>{{ $customerInvoices->InvoiceGroup }}</span>
    </div>
    <div class="grid-item">
        <span class="label">Invoice Status:</span>
        <span>{{ $customerInvoices->InvoiceStatus }}</span>
    </div>
    <div class="grid-item">
        <span class="label">Invoice Date:</span>
        <span>{{ $customerInvoices->InvoiceDate }}</span>
    </div>
    <div class="grid-item">
        <span class="label">Invoice Amount:</span>
        <span>{{ $customerInvoices->InvoiceAmount }}</span>
    </div>
    <div class="grid-item">
        <span class="label">Invoice Number:</span>
        <span>{{ $customerInvoices->InvoiceNumber }}</span>
    </div>
    <div class="grid-item">
        <span class="label">Contract Number:</span>
        <span>{{ $customerInvoices->ContractNumber }}</span>
    </div>
</div>

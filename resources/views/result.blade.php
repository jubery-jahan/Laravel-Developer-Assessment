@extends('layout')

@section('content')
    <div class="container">
        <h1 class="mt-4">VAT Calculation Result</h1>
        <p><strong>Gross Sum:</strong> {{ $gross_sum }}</p>
        <p><strong>Tax Percentage:</strong> {{ $tax_percentage }}%</p>
        <p><strong>VAT Operation:</strong> {{ $operation }}</p>
        <p><strong>VAT Amount:</strong> {{ $vat_amount }}</p>
        <p><strong>Net Amount:</strong> {{ $net_amount }}</p>
    </div>
@endsection

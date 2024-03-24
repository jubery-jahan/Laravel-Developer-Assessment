@extends('layout')

@section('content')
<h1>VAT Calculator</h1>
<form action="/calculate" method="post">
    @csrf
    <label for="gross_sum">Gross Sum:</label>
    <input type="text" id="gross_sum" name="gross_sum"><br><br>

    <label for="operation">VAT Calculation Operation:</label>
    <select id="operation" name="operation">
        <option value="include">Include VAT</option>
        <option value="exclude">Exclude VAT</option>
    </select><br><br>

    <label for="tax_percentage">Tax Percentage:</label>
    <input type="text" id="tax_percentage" name="tax_percentage"><br><br>

    <input type="submit" value="Calculate">
</form>
@endsection

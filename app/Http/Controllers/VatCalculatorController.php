<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VatCalculatorController extends Controller
{

    public function index()
    {
        return view('vat_calculator');
    }

    public function calculate(Request $request)
    {
        $gross_sum = $request->input('gross_sum');
        $tax_percentage = $request->input('tax_percentage');
        $operation = $request->input('operation');

        if ($operation === 'exclude') {
            $vat_amount = round($gross_sum - ($gross_sum / (1 + ($tax_percentage / 100))), 2);
            $net_amount = round($gross_sum / (1 + ($tax_percentage / 100)), 2);
        } else {
            $vat_amount = round($gross_sum * ($tax_percentage / 100), 2);
            $net_amount = round($gross_sum - $vat_amount, 2);
        }

        return view('result', compact('gross_sum', 'tax_percentage', 'operation', 'vat_amount', 'net_amount'));
    }
}

<?php
namespace App\Http\Controllers;

class SupplierController extends Controller
{
    function index()
    {
        return 'SupplierController -> index Method fired';
    }

    function show($supplier)
    {

        return $supplier;

    }
}

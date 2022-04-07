<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use PDF;


class PdfController extends Controller
{
    public function index()
    {
                // $products = Product::where('name', 'asb')->get();
                $products = Product::latest('products.created_at')   //kadangi jungiasi dvi lenteles, abi turi lauka , pagal kuri isrenkami 'Latest', reikia nurodyti, kurios lenteles naudoti
                ->leftJoin('cities', 'products.citiesID', '=', 'cities.id')         
                ->select ('products.id', 'products.name','products.detail', 'cities.city') //nebutina select
                ->where('name', 'Like', '%' . request('term') . '%')
                ->orderBy('name', 'asc')->paginate(3);
           
            $pdf = PDF::loadView('products.pdf',compact('products'));

            return $pdf->download("test" . ".pdf");
    }
}

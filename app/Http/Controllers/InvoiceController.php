<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use Barryvdh\DomPDF\Facade\Pdf;



class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $invoices = Invoice::orderBy('id','desc')->paginate(10);
        return view('frontendd.index',compact('invoices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('frontendd.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data['customer_name'] = $request->customer_name;
        $data['customer_email'] = $request->customer_email;
        $data['customer_mobile'] = $request->customer_mobile;
        $data['company_name'] = $request->company_name;
        $data['invoice_number'] = $request->invoice_number;
        $data['invoice_date'] = $request->invoice_date;
        $data['sub_total'] = $request->sub_total;
        $data['discount_type'] = $request->discount_type;
        $data['discount_value'] = $request->discount_value;
        $data['vat_value'] = $request->vat_value;
        $data['shipping'] = $request->shipping;
        $data['total_due'] = $request->total_due;


        $invoice = Invoice::create($data);

        for ($i = 0; $i < count($request->product_name); $i++) {
            $details_list[$i]['product_name'] = $request->product_name[$i];
            $details_list[$i]['unit'] = $request->unit[$i];
            $details_list[$i]['quantity'] = $request->quantity[$i];
            $details_list[$i]['unit_price'] = $request->unit_price[$i];
            $details_list[$i]['row_sub_total'] = $request->row_sub_total[$i];
        }

        $details = $invoice->details()->createMany($details_list);

        if ($details) {
            return redirect()->back()->withErrors(['message' => 'succefully Send']);
        } else {
            return redirect()->back()->withErrors(['message' => 'mochkil']);
        }
    }
    
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $invoice = Invoice::findOrFail($id);
        return view('frontendd.show',compact('invoice'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $invoice = Invoice::findOrFail($id);
        return view('frontendd.edit',compact('invoice'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function print($id)
    {
        $invoice = Invoice::findOrFail($id);
        return view('frontendd.print', compact('invoice'));
        return back($id);
        return redirect()->route('invoice.show', ['id' => $invoice->id]);


    }

    public function generatePdf($id)
    {
    // Fetch the customer data based on the provided ID


    $customer = Invoice::find($id);


    // Check if the customer exists
    if ($customer) {
        // If the customer exists, load the view with the customer data
        $data = [
            'customer' => $customer,
        ];

        $pdf = PDF::loadView('frontendd.generate-product-pdf', $data);
        return $pdf->download('invoice.pdf');
    } else {
        // If the customer does not exist, return an appropriate response
        return response()->json(['error' => 'Customer not found.'], 404);
    }
}


        
    
}

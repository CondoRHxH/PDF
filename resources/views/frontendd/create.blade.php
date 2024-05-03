@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    create Invoice
                </div>
                @error('message')
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{$message}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                
                @enderror
                <div class="card-body">

                    <form action="{{route('invoice.store')}}" method="post" class="form">
                        @csrf
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="customer_name">Customer name</label>
                                    <input type="text" name="customer_name" class="form-control">
                                    @error('customer_name')<span class="help-block text-danger">{{$message}}</span>@enderror
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group">
                                        <label for="customer_email">Customer email</label>
                                        <input type="text" name="customer_email" class="form-control">
                                        @error('customer_email')<span class="help-block text-danger">{{$message}}</span>@enderror
                                </div>
                            </div>
                            
                            <div class="col-4">
                                <div class="form-group">
                                        <label for="customer_mobile">Customer mobile</label>
                                        <input type="text" name="customer_mobile" class="form-control">
                                        @error('customer_mobile')<span class="help-block text-danger">{{$message}}</span>@enderror
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="company_name">Company name</label>
                                    <input type="text" name="company_name" class="form-control">
                                    @error('company_name')<span class="help-block text-danger">{{$message}}</span>@enderror
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group">
                                        <label for="invoice_number">invoice number</label>
                                        <input type="text" name="invoice_number" class="form-control">
                                        @error('invoice_number')<span class="help-block text-danger">{{$message}}</span>@enderror
                                </div>
                            </div>
                            
                            <div class="col-4">
                                <div class="form-group">
                                        <label for="invoice_date">invoice date</label>
                                        <input type="text" name="invoice_date" class="form-control">
                                        @error('invoice_date')<span class="help-block text-danger">{{$message}}</span>@enderror
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table" id="invoice_details">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Produvt name</th>
                                        <th>unit</th>
                                        <th>qte</th>
                                        <th>unit price</th>
                                        <th>subtotatl</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#</td>
                                        <td>
                                            <input type="text" name="product_name[]" id="product_name" class="product_name form-control">
                                            @error('product_name')<span class="help-block text-danger">{{$message}}</span>@enderror
                                        </td>
                                        <td>
                                            <input type="text" name="unit[]" id="product_name" class="product_name form-control">
                                            @error('product_name')<span class="help-block text-danger">{{$message}}</span>@enderror
                                        </td>

                                        <!-- <td>
                                            <select name="unit[]" id="unit" class="unit form-control">
                                                <option></option>
                                                <option value="piece">Piece</option>
                                                <option value="g">Gram</option>
                                                <option value="kg">kilo</option>
                                            </select>
                                            @error('unit')<span class="help-block text-danger">{{$message}}</span>@enderror
                                        </td> -->

                                        <td>
                                            <input type="text" name="quantity[]" step="0.1" id="quantity" class="quantity form-control">
                                            @error('quantity')<span class="help-block text-danger">{{$message}}</span>@enderror
                                        </td>

                                        <td>
                                            <input type="text" name="unit_price[]" step="0.1" id="unit_price" class="unit_price form-control">
                                            @error('unit_price')<span class="help-block text-danger">{{$message}}</span>@enderror
                                        </td>

                                        <td>
                                            <input type="text" step="0.1" name="row_sub_total[]" id="row_sub_total" class="row_sub_total form-control">
                                            @error('row_sub_total')<span class="help-block text-danger">{{$message}}</span>@enderror
                                        </td>
                                    </tr>
                                </tbody>

                                <!-- Foot -->

                                <tfoot>
                                <tr>
                                    <td colspan="6">
                                        <button type="button" class="btn_add btn btn-primary">add</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="3"></td>
                                    <td colspan="2">Subtotla</td>
                                    <td><input type="text" step="0.01" name="sub_total" id="sub_total" class="sub_total form-control" ></td>
                                </tr>


                                <tr>
                                    <td colspan="3"></td>
                                    <td colspan="2">discount</td>
                                    <td>
                                        <div class="input-group mb-3">
                                            

                                            <div class="input-group-append">
                                                <input type="text" name="discount_value" id="discount_value" class="discount_value form-control" >
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3"></td>
                                    <td colspan="2">vat</td>
                                    <td><input type="text"  name="vat_value" id="vat_value" class="vat_value form-control" ></td>
                                </tr>

                                <tr>
                                    <td colspan="3"></td>
                                    <td colspan="2">shipping</td>
                                    <td><input type="text" name="shipping" id="shipping" class="shipping form-control"></td>
                                </tr>

                                <tr>
                                    <td colspan="3"></td>
                                    <td colspan="2">total_due</td>
                                    <td><input type="text"  name="total_due" id="total_due" class="total_due form-control" ></td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                        <div class="text-right pt-3">
                            <button type="submit" name="save" class="btn btn-primary">save</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    
</body>
</html>

@endsection

@section('script')

    <script>
        $(document).ready(function(){

        });
    </script>
@endsection
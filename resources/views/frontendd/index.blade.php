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
                    Invoices
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>{{ __('Frontend/frontend.customer_name') }}</th>
                                    <th>{{ __('Frontend/frontend.invoice_date') }}</th>
                                    <th>{{ __('Frontend/frontend.total_due') }}</th>
                                    <th>{{ __('Frontend/frontend.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($invoices as $invoice)
                            <tr>
                                <td><a href="{{ route('invoice.show', $invoice->id) }}">{{ $invoice->customer_name }}</a></td>
                                <td>{{ $invoice->invoice_date }}</td>
                                <td>{{ $invoice->total_due }}</td>
                                <td>
                                    <a href="{{ route('invoice.edit', $invoice->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>Modifier</a>
                                    <a href="javascript:void(0)" onclick="if (confirm('{{ __('Frontend/frontend.r_u_sure') }}')) { document.getElementById('delete-{{ $invoice->id }}').submit(); } else { return false; }" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Delete</a>
                                    <form action="{{ route('invoice.destroy', $invoice->id) }}" method="post" id="delete-{{ $invoice->id }}" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="3">
                                    <div class="float-right mt-4">
                                        {!! $invoices->links() !!}
                                    </div>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
</body>
</html>

@endsection
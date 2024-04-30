@extends('layout.app')
@section('content')

<div class="container-xl">
`    <div class="card mt-5 shadow shadow-xl">
        <div class="card-header h3 fw-semibold">
            <h2>ORDER</h2>
        </div>
        <div class="card-body">
            <a href="{{ url('/orders/create') }}" class="btn btn-success btn-sm " title="Add New order">
                <i class="fa fa-plus" aria-hidden="true"></i>Add New
            </a>

            <div class="table-responsive"> <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Mobile</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->mobile }}</td>

                                <td>
                                    <a href="{{ url('/orders/' . $item->id) }}" title="View order"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>View</button></a>
                                    <a href="{{ url('/orders/' . $item->id . '/edit') }}" title="Edit order"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-0" aria-hidden="true"></i>Edit</button></a>
                                    <form method="POST" action="{{ url('/orders/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class='btn btn-danger btn-sm' title="Delete order" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-0" aria-hidden="true"></i>Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>`
</div>

@endsection

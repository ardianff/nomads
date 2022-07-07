@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Transaksi</h1>
    </div>
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Travel</th>
                            <th class="text-center">User</th>
                            <th class="text-center">Visa</th>
                            <th class="text-center">Total Transaction</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1 ?>
                        @forelse ($items as $item )
                        <tr>
                            <td class="text-center">{{ $no }}</td>
                            <td class="text-justify">{{ $item->travel_package->title }}</td>
                            <td class="text-center">{{ $item->user->name }}</td>
                            <td class="text-center">${{ $item->additional_visa }}</td>
                            <td class="text-center">${{ $item->transaction_total }}</td>
                            <td class="text-center">{{ $item->transaction_status }}</td>
                            <td class="text-center">
                                <a href="{{ route('transaction.show',$item->id) }}" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                <a href="{{ route('transaction.edit',$item->id) }}" class="btn btn-info"><i class="fa fa-pencil-alt"></i></a>
                                <form action="{{ route('transaction.destroy',$item->id) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>

                        <?php $no++ ?>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">
                                Data Kosong
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection

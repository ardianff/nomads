@extends('layouts.admin')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Paket Travel {{ $item->title }}</h1>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

    @endif
    <div class="col-lg-6">
        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('transaction.update', $item->id) }}" class="" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="transaction_status" class="">Status</label>
                        <select name="transaction_status" required class="form-control">
                            <option value="IN_CART" @if ($item->transaction_status == "IN_CART") {{ 'selected' }} @endif class="">In Cart</option>
                            <option value="PENDING" @if ($item->transaction_status == "PENDING") {{ 'selected' }} @endif class="">Pending</option>
                            <option value="SUCCESS" @if ($item->transaction_status == "SUCCESS") {{ 'selected' }} @endif class="">Success</option>
                            <option value="CANCEL" @if ($item->transaction_status == "CANCEL") {{ 'selected' }} @endif class="">Cancel</option>
                            <option value="FAILED" @if ($item->transaction_status == "FAILED") {{ 'selected' }} @endif class="">Failed</option>
                        </select>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">Ubah</button>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection

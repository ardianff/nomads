@extends('layouts.admin')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Transaksi {{ $item->user->name }}</h1>
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
    <div class="card shadow">
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <td>{{ $item->id }}</td>
                </tr>
                <tr>
                    <th>Paket Travel</th>
                    <td>{{ $item->travel_package->title }}</td>
                </tr>
                <tr>
                    <th>Pembeli</th>
                    <td>{{ $item->user->name }}</td>
                </tr>
                <tr>
                    <th>Additional Visa</th>
                    <td>${{ $item->additional_visa }}</td>
                </tr>
                <tr>
                    <th>Total Transaksi</th>
                    <td>${{ $item->transaction_total }}</td>
                </tr>
                <tr>
                    <th>Status Transaksi</th>
                    <td>{{ $item->transaction_status }}</td>
                </tr>
                <tr>
                    <th>Pembelian</th>
                    <td>
                        <table class="table table-bordered">
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Nationality</th>
                                <th class="text-center">Visa</th>
                                <th class="text-center">DOE Passport</th>
                            </tr><?php $no=1 ?>
                            @foreach ($item->details as $detail)
                            <tr>
                                <td class="text-center">{{ $no }}</td>
                                <td class="text-center">{{ $detail->username }}</td>
                                <td class="text-center">{{ $detail->nationality }}</td>
                                <td class="text-center">{{ $detail->is_visa ? '30 Days' : 'N/A' }}</td>
                                <td class="text-center">{{ $detail->doe_passport }}</td>
                            </tr>
                            <?php $no++ ?>
                            @endforeach
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection

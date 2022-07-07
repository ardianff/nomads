@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Paket Travel</h1>
        <a href="{{ route('travel-package.create') }}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i>Tambah Paket Travel</a>
    </div>
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Title</th>
                            <th class="text-center">Location</th>
                            <th class="text-center">Featured Event</th>
                            <th class="text-center">Departure Date</th>
                            <th class="text-center">Type</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1 ?>
                        @forelse ($items as $item )
                        <tr>
                            <td class="text-center">{{ $no }}</td>
                            <td class="text-justify">{{ $item->title }}</td>
                            <td class="text-center">{{ $item->location }}</td>
                            <td class="text-center">{{ $item->featured_event }}</td>
                            <td class="text-center">{{ $item->departure_date }}</td>
                            <td class="text-center">{{ $item->type }}</td>
                            <td class="text-center">
                                <a href="{{ route('travel-package.edit',$item->id) }}" class="btn btn-info"><i class="fa fa-pencil-alt"></i></a>
                                <form action="{{ route('travel-package.destroy',$item->id) }}" method="post" class="d-inline">
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

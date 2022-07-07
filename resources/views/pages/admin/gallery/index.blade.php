@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gallery</h1>
        <a href="{{ route('gallery.create') }}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i>Tambah Gallery</a>
    </div>
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Travel</th>
                            <th class="text-center">Gambar</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1 ?>
                        @forelse ($items as $item )
                        <tr>
                            <td class="text-center">{{ $no }}</td>
                            <td class="text-justify">{{ $item->travel_package->title }}</td>
                            <td class="text-center"><img src="{{ Storage::url($item->image) }}" alt="Gambar Wisata" style="width:150px" class="img-thumbnail" data-toggle="modal" data-target="#imgModal{{ $no }}"></td>
                            <td class="text-center">
                                <a href="{{ route('gallery.edit',$item->id) }}" class="btn btn-info"><i class="fa fa-pencil-alt"></i></a>
                                <form action="{{ route('gallery.destroy',$item->id) }}" method="post" class="d-inline">
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
<?php $no=1 ?>
@foreach ($items as $item )
<div class="modal fade" id="imgModal<?php echo $no ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <center>
                    <img src="{{ Storage::url($item->image) }}" alt="Gambar Wisata" class="img-responsive" width="90%" height="auto">
                </center>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php $no++ ?>
@endforeach
<!-- /.container-fluid -->
@endsection

@extends('layouts.admin')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Gallery</h1>
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
            <form action="{{ route('gallery.update', $item->id) }}" class="" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label class="" for="travel_packages_id">Paket Travel</label>
                    <select class="form-control" required name="travel_packages_id">
                        <option value="" class="">Pilih Paket Travel</option>
                        @foreach ($travel_packages as $travel_package)
                        @if($item->travel_packages_id == $travel_package->id )
                        <option value="{{ $travel_package->id }}" selected class="">
                            {{ $travel_package->title }}</option>
                        @else
                        <option value="{{ $travel_package->id }}" class="">
                            {{ $travel_package->title }}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="image" class="">Image</label>
                    <input type="file" class="form-control" name="image" placeholder="Image">
                </div>
                <button class="btn btn-primary btn-block" type="submit">Ubah</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection

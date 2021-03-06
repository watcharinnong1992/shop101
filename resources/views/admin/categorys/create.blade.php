@extends('layouts.app')

@section('content')
<?php
if ($_SERVER["REMOTE_ADDR"] == "192.168.33.17") {
    $url = "http://shop101.advws.org";
} else {
    $url = "http://192.168.0.98:8000";
}
?>
<div class="container">
    <div class="row">
        @include('admin.sidebar')

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Create New Category</div>
                <div class="card-body">
                    <a href="<?= "{$url}/admin/categorys" ?>" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                    <br />
                    <br />

                    @if ($errors->any())
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif

                    <form method="POST" action="<?= "{$url}/admin/categorys" ?>" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        @include ('admin.categorys.form', ['formMode' => 'create'])

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

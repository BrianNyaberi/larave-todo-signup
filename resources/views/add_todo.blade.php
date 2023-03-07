@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Item</div>

                <div class="card-header">
                    <a href="{{ route('todos.index') }}" class="btn btn-sm btn-outline-primary"><i class="fa fa-arrow-left"></i> Back home</a>
                </div>

                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

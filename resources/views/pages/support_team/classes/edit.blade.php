@extends('layouts.master')

@section('page_title', "Edit Class - {$c->name}")

@section('content')

<div class="card">
    <div class="card-header header-elements-inline">
        <h6 class="card-title">Edit Class</h6>
        {!! Qs::getPanelOptions() !!}
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <form class="ajax-update" data-reload="#page-title" method="post" action="{{ route('classes.update', $c->id) }}">
                    @csrf @method('PUT')
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label font-weight-semibold">Name <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input name="name" value="{{ $c->name }}" required type="text" class="form-control" placeholder="Name of Class">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="class_type_id" class="col-lg-3 col-form-label font-weight-semibold">Class Type</label>
                        <div class="col-lg-9">
                            <input class="form-control" disabled="disabled" value="{{ $c->class_type->name }}" title="Class Type" type="text">
                        </div>
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Submit form <i class="material-symbols-rounded ml-2">send</i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{--Class Edit Ends--}}

@endsection

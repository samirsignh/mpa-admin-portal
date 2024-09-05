@extends('layouts.app')
<style>
    a {
        font-size: 15px !important;
        padding: 2px 6px !important;
        padding-right: 15px !important;
    }

    a span {
        padding: 7px 7px !important;
        border-radius: 50% !important;
    }

    a span i {
        color: #ff5314 !important;
    }

    #user_add_btn:hover,
    #user_add_btn_2:hover {
        background-color: #4840aceb;
        border: 1px solid #4840aceb;
        transition: 0.5s ease-in-out;
    }

    .sarod_file {
        color: #eb4646;
        font-size: 18px;
    }
</style>
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Role Details</h4>
                        <a href="{{ route('sarodList') }}" id="user_add_btn" class="btn btn-rounded btn-secondary">
                            <span class="btn-icon-start text-info"><i class="fa-solid fa-arrow-left"></i>
                            </span>
                            <span class="btn-name">Back</span>
                        </a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('updateSarod') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="sarodId" id="sarodId" value="{{ $details->id }}">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <div class="form-group">
                                            <label for="name"><strong>Title</strong></label>
                                            <input type="text" name="title" id="title" class="form-control"
                                                placeholder="Enter Title" required value="{{ $details->title }}">
                                        </div>
                                    </div>
                                    <div class="col-md-9 mt-3">
                                        <div class="form-group">
                                            <label for="name"><strong>Document <span
                                                        style="color: red; font-size:10px;">(Only pdf file
                                                        alowed)</span></strong></label>
                                            <input type="file" name="sarod_document" id="sarod_document"
                                                class="form-control" placeholder="upload file" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-5">
                                        @if (File::exists(public_path($details->sarod_document)))
                                        <a class="sarod_file" href="{{ asset($details->sarod_document) }}" download>
                                            <i class="fa-solid fa-file-pdf"></i>
                                        </a>
                                        <label> Existing File</label>
                                        @endif

                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success form-btns">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

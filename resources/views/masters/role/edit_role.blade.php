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
</style>
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Role Details</h4>
                        <a href="{{ route('roleList') }}" id="user_add_btn" class="btn btn-rounded btn-secondary">
                            <span class="btn-icon-start text-info"><i class="fa-solid fa-arrow-left"></i>
                            </span>
                            <span class="btn-name">Back</span>
                        </a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('updateRole') }}" method="POST">
                            @csrf
                            <input type="hidden" name="roleId" id="roleId" value="{{ $role->id }}">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <div class="form-group">
                                            <label for="name"><strong>User Role</strong></label>
                                            <input type="text" name="userType" id="userType" value="{{ $role->role }}"
                                                class="form-control" placeholder="Enter user type" required>
                                        </div>
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

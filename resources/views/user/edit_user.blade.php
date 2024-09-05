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
                        <h4 class="card-title">Edit User Details</h4>
                        <a href="{{ route('userList') }}" id="user_add_btn" class="btn btn-rounded btn-secondary">
                            <span class="btn-icon-start text-info"><i class="fa-solid fa-arrow-left"></i>
                            </span>
                            <span class="btn-name">Back</span>
                        </a>

                    </div>
                    <div class="card-body">
                        <div class="card-content">
                            <form action="{{ route('updateUser') }}" method="POST">
                                @csrf
                                <input type="hidden" name="userId" id="userId" value="{{ $users->id }}">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6 ">
                                            <div class="form-group">
                                                <label class="form-label"><strong>Full Name</strong></label>
                                                <input type="text" name="name" id="name" value="{{ $users->name }}"
                                                    class="form-control" placeholder="Enter user name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label"><strong>User Type</strong></label>
                                                <select class="form-control wide" name="userType" id="userType"
                                                    required>
                                                    <option value="">--select--</option>
                                                    @foreach ($roles as $role)
                                                    <option value="{{ $role->id }}" {{ $role->id == $users->userType ?
                                                        'selected' : '' }}>
                                                        {{ $role->role }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-2">
                                            <div class="form-group">
                                                <label class="form-label"><strong>Mobile Number</strong></label>
                                                <input type="text" name="mobileNo" id="mobileNo"
                                                    value="{{ $users->mobileNo }}" class="form-control"
                                                    placeholder="Enter conatct number" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-2">
                                            <div class="form-group">
                                                <label class="form-label"><strong>Email</strong></label>
                                                <input type="email" name="emailId" id="emailId"
                                                    value="{{ $users->emailId }}" class="form-control"
                                                    placeholder="Enter email id" required>
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-4 mt-2">
                                            <div class="form-group">
                                                <label class="form-label"><strong>Password</strong></label>
                                                <input type="text" name="password" id="password"
                                                    value="{{ $users->password }}" class="form-control"
                                                    placeholder="**********" required readonly>
                                            </div>
                                        </div> --}}
                                        <div class="btn-area text-center mt-5">
                                            <button type="submit"
                                                class="btn btn-rounded btn-success form-btns">Update</button>
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
</div>
@endsection

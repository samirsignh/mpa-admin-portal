@extends('layouts.app')
<style>
    .card-header {
        padding: 15px 20px !important;
    }

    .card-header a {
        font-size: 1.3rem;
        background-color: #ebe5e5;
        padding: 12px 10px;
        border-radius: 50px;
        transition: all 0.3s ease;
    }

    .btn.btn-primary {
        color: #726b6b !important;
    }

    .btn-primary {
        border-color: white !important;
    }

    .card-header a:hover {
        /* border: 1px solid #4D44B5; */
        transition: all 0.3s ease;
    }

    .form-group label {
        letter-spacing: 0.2px;
        color: #000000d6;
        font-size: 14px;
    }

    .modal-title {
        font-size: 18px;
    }

    table tbody tr td .edit-icon {
        color: #5221a9;
        font-size: 15px;
        padding: 2px;
    }

    table tbody tr td .delete-icon {
        color: #eb1225;
        font-size: 15px;
    }

    .modal-footer {
        justify-content: center !important;
    }

    button {
        font-size: 15px !important;
        padding: 2px 6px !important;
        padding-right: 15px !important;
    }

    button span {
        padding: 7px 7px !important;
        border-radius: 50% !important;
    }

    button span i {
        color: #ff5314 !important;
    }

    #user_add_btn:hover,
    #user_add_btn_2:hover {
        background-color: #4840aceb;
        border: 1px solid #4840aceb;
        transition: 0.5s ease-in-out;
    }

    .btn .dropdown-toggle {
        height: 45px;
        justify-content: center;
        display: flex;
        text-align: center;
    }

    .filter-option-inner-inner {
        margin: 6px;
    }

    .form-btns {
        font-size: 15px !important;
        padding: 8px 20px !important;
    }
</style>
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Role List</h4>
                        <button type="button" id="user_add_btn" data-bs-toggle="modal" data-bs-target=".add-user-type"
                            class="btn btn-rounded btn-secondary">
                            <span class="btn-icon-start text-info"><i class="fa fa-plus color-info"></i>
                            </span>
                            <span class="btn-name">Add</span>
                        </button>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display text-center table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 35px;">#</th>
                                        <th>Role Type</th>
                                        <th style="width: 45px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($roles) > 0)
                                    @foreach ($roles as $key => $role)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $role->role }}</td>
                                        <td>
                                            <a class="edit-icon" href="{{ route('editRole', $role->id) }}"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>
                                            <a class="delete-icon" href="{{ route('deleteRole', $role->id) }}"><i
                                                    class="fa-solid fa-trash-can"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="3"> <span class="text-center"> No record found!</span></td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade add-user-type" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <form action="{{ route('craeteRole') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">User Role Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12 ">
                                    <div class="form-group">
                                        <label for="name"><strong>User Role</strong></label>
                                        <input type="text" name="userType" id="userType" class="form-control"
                                            placeholder="Enter user type" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light form-btns" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success form-btns">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

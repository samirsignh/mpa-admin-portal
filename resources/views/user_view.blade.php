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
</style>
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">User List</h4>
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".user-add">
                            <i class="fa-solid fa-user-plus"></i>
                        </a>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display text-center">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade user-add" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <form action="#">
                <div class="modal-header">
                    <h5 class="modal-title">User Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12 ">
                                    <div class="form-group">
                                        <label for="name"><strong>Full Name</strong></label>
                                        <input type="text" name="name" id="name" class="form-control"
                                            placeholder="Enter user name" required>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <div class="form-group">
                                        <label for="name"><strong>User Type</strong></label>
                                        <select name="userType" id="userType" class="form-control" required>
                                            <option value="">--select--</option>
                                            <option value="2">MPA User</option>
                                            <option value="3">Normal User</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <div class="form-group">
                                        <label for="name"><strong>Mobile Number</strong></label>
                                        <input type="text" name="mobileNo" id="mobileNo" class="form-control"
                                            placeholder="Enter conatct number" required>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <div class="form-group">
                                        <label for="name"><strong>Email</strong></label>
                                        <input type="email" name="emailId" id="emailId" class="form-control"
                                            placeholder="Enter email id" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

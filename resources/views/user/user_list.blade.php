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
                    <div id="user_list_div">
                        <div class="card-header">
                            <h4 class="card-title">User List</h4>
                            <button type="button" id="user_add_btn" onclick="toggleUserDiv('add')"
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
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($users) > 0)
                                        @foreach ($users as $key => $user)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->emailId }}</td>
                                            <td>{{ $user->mobileNo }}</td>
                                            <td>
                                                @if($user->userType == 2)
                                                MPA Admin
                                                @elseif($user->userType == 3)
                                                Normal User
                                                @endif
                                            </td>
                                            <td>
                                                <a class="edit-icon" href="{{ route('editUser', $user->id) }}"><i
                                                        class="fa-solid fa-pen-to-square"></i></a>
                                                <a class="delete-icon" href="{{ route('deleteUser', $user->id) }}"><i
                                                        class="fa-solid fa-trash-can"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                        <tr>
                                            <td colspan="6"> <span class="text-center"> No record found!</span></td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div id="user_add_div" style="display: none;">
                        <div class="card-header">
                            <h4 class="card-title">Add User Details</h4>
                            <button type="button" id="user_add_btn_2" onclick="toggleUserDiv('list')"
                                class="btn btn-rounded btn-secondary">
                                <span class="btn-icon-start text-info"><i class="fa-solid fa-list"></i>
                                </span>
                                <span class="btn-name">List</span>
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="card-content">
                                <form action="{{ route('createUser') }}" method="POST">
                                    @csrf
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6 ">
                                                <div class="form-group">
                                                    <label class="form-label"><strong>Full Name</strong></label>
                                                    <input type="text" name="name" id="name" class="form-control"
                                                        placeholder="Enter user name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label"><strong>User Type</strong></label>
                                                    <select class="form-control wide" name="userType" id="userType"
                                                        required>
                                                        <option value="">--select--</option>
                                                        @foreach ($roles as $role)
                                                        <option value="{{ $role->id }}">{{ $role->role }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-group">
                                                    <label class="form-label"><strong>Mobile Number</strong></label>
                                                    <input type="text" name="mobileNo" id="mobileNo"
                                                        class="form-control" placeholder="Enter conatct number"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-group">
                                                    <label class="form-label"><strong>Email</strong></label>
                                                    <input type="email" name="emailId" id="emailId" class="form-control"
                                                        placeholder="Enter email id" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-group">
                                                    <label class="form-label"><strong>Password</strong></label>
                                                    <input type="text" name="password" id="password"
                                                        class="form-control" placeholder="**********" required>
                                                </div>
                                            </div>
                                            <div class="btn-area text-center mt-5">
                                                <button type="reset"
                                                    class="btn btn-rounded btn-outline-danger form-btns">Clear</button>
                                                <button type="submit"
                                                    class="btn btn-rounded btn-success form-btns">Submit</button>
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
</div>
@endsection

<script>
    const toggleUserDiv = (divName) =>{
        if(divName == "add"){
            $("#user_add_div").show();
            $("#user_list_div").hide();
        }else if(divName == "list"){
            $("#user_add_div").hide();
            $("#user_list_div").show();
        }
    }
</script>

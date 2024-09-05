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
</style>
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    <h4 class="card-title">{{ __('messages.user_list') }}</h4>
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".user-add">
                            <i class="fa-solid fa-user-plus"></i>
                        </a>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display text-center table-bordered">
                                <thead>
                                    <tr>
                                       <th>#</th>
                                        <th>{{ __('messages.name') }}</th>
                                        <th>{{ __('messages.email') }}</th>
                                        <th>{{ __('messages.mobile') }}</th>
                                        <th>{{ __('messages.role') }}</th>
                                        <th>{{ __('messages.action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $k => $user)
                                    <tr>
                                        <td>{{ $k+1 }}</td>
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
                                        {{-- <td>{{ $user->password }}</td> --}}
                                        <td>
                                            <a class="edit-icon" href="{{ route('user.edit', $user->id) }}" data-bs-toggle="modal" data-bs-target="#editUserModal{{ $user->id }}">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>

                                            <a class="delete-icon" href="#" onclick="confirmDelete(event, '{{ $user->id }}')">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </a>

                                            <form id="delete-form-{{ $user->id }}" action="{{ route('user.delete', $user->id) }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                            
                                        </td>
                                    </tr>
                                    @endforeach
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
            <form action="{{ route('user.create') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">{{ __('messages.user_details') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12 ">
                                    <div class="form-group">
                                        <label for="name"><strong>{{ __('messages.full_name') }}</strong></label>
                                        <input type="text" name="name" id="name" class="form-control"
                                            placeholder="{{__('messages.enter_user_name')}}" required>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <div class="form-group">
                                        <label for="name"><strong>{{ __('messages.user_type') }}</strong></label>
                                        <select name="userType" id="userType" class="form-control" required>
                                            <option value="">{{ __('messages.select')}}</option>
                                            <option value="2">{{ __('messages.mpa_admin') }}</option>
                                            <option value="3">{{ __('messages.normal_user') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <div class="form-group">
                                        <label for="name"><strong>{{ __('messages.mobile_number')}}</strong></label>
                                        <input type="text" name="mobileNo" id="mobileNo" class="form-control"
                                            placeholder="{{ __('messages.enter_contact_number')}}" required>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <div class="form-group">
                                        <label for="name"><strong>{{ __('messages.email_id')}}</strong></label>
                                        <input type="email" name="emailId" id="emailId" class="form-control"
                                            placeholder="{{ __('messages.enter_email_id')}}" required>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <div class="form-group">
                                        <label for="name"><strong>{{__('messages.password')}}</strong></label>
                                        <input type="text" name="password" id="password" class="form-control"
                                            placeholder="**********" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">{{ __('messages.close') }}</button>
                    <button type="submit" class="btn btn-success">{{ __('messages.submit') }}</button>
                </div>
            </form>
        </div>
    </div>
    
</div>

<!-- Edit User Modal -->
<div class="modal fade" id="editUserModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel{{ $user->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('user.update', $user->id) }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="editUserModalLabel{{ $user->id }}">{{ __('messages.edit_user') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body">
                <div class="col-md-12 mt-2">
                    <div class="form-group">
                        <label for="name">{{ __('messages.name') }}</label>
                        <input type="text" class="form-control" name="name" value="{{ $user->name }}" required>
                    </div>
                </div>
                <div class="col-md-12 mt-2">
                    <div class="form-group">
                        <label for="emailId">{{ __('messages.email') }}</label>
                        <input type="email" class="form-control" name="emailId" value="{{ $user->emailId }}" required>
                    </div>
                </div>
                <div class="col-md-12 mt-2">
                    <div class="form-group">
                        <label for="mobileNo">{{ __('messages.mobile') }}</label>
                        <input type="text" class="form-control" name="mobileNo" value="{{ $user->mobileNo }}" required>
                    </div>
                </div>
                <div class="col-md-12 mt-2">
                    <div class="form-group">
                        <label for="userType">{{ __('messages.role') }}</label>
                        <select class="form-control" name="userType" required>
                            <option value="2" {{ $user->userType == 2 ? 'selected' : '' }}>MPA Admin</option>
                            <option value="3" {{ $user->userType == 3 ? 'selected' : '' }}>Normal User</option>
                        </select>
                    </div>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">{{ __('messages.close') }}</button>
                    <button type="submit" class="btn btn-success">{{ __('messages.update') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function confirmDelete(event, userId) {
        event.preventDefault();
        if (confirm('Are you sure you want to delete this user?')) {
            document.getElementById('delete-form-' + userId).submit();
        } else {
            location.reload(); 
        }
    }
</script>
@endsection

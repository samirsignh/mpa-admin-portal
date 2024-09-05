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
</style>
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div id="notice_list_div">
                        <div class="card-header">
                            <h4 class="card-title">Notice List</h4>
                            <button type="button" onclick="toglleNoticeDiv('add')" class="btn btn-rounded btn-secondary">
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
                                            <th>Notice Title</th>
                                            <th>Letter No.</th>
                                            <th>Description</th>
                                            <th>Document</th>
                                            <th>Notice Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tbody>
                                    @foreach ($notices as $k => $notice)
                                    <tr>
                                        <td>{{ $k+1 }}</td>
                                        <td>{{ $notice->notice_title }}</td>
                                        <td>{{ $notice->leter_no }}</td>
                                        <td>{{ $notice->description  }}</td>
                                        <td>{{ $notice->notice_date }}</td>
                                        <td>
                                            <a class="edit-icon" href="" data-bs-toggle="modal" data-bs-target="">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>

                                            <a class="delete-icon" href="#" onclick="">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </a>

        
                                            
                                        </td>
                                      
                                    </tr>
                                    @endforeach
                               
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div id="notice_add_div" style="display: none;">
                        <div class="card-header">
                            <h4 class="card-title">Add Notice Circular</h4>
                            <button type="button" onclick="toglleNoticeDiv('list')" class="btn btn-rounded btn-secondary">
                                <span class="btn-icon-start text-info"><i class="fa-solid fa-list"></i>
                                </span>
                                <span class="btn-name">List</span>
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="card-content">
                            <form action="{{ route('create_notice') }}" method="POST">
                            @csrf
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6 ">
                                                <div class="form-group">
                                                    <label for="name"><strong>Notice Title</strong></label>
                                                    <input type="text" name="notice_title" id="notice_title" class="form-control"
                                                        placeholder="Enter notice title" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-group">
                                                    <label for="name"><strong>Letter No</strong></label>
                                                    <input type="text" name="leter_no" id="leter_no" class="form-control"
                                                    placeholder="Enter letter no" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-group">
                                                    <label for="name"><strong>Description</strong></label>
                                                    <textarea name="description" id="description" class="form-control"
                                                     placeholder="Enter description" rows="4" required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-group">
                                                    <label for="name"><strong>Document</strong></label>
                                                    <input type="file" name="document" id="document" class="form-control"
                                                    accept="application/pdf">
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-group">
                                                    <label for="name"><strong>Notice Date</strong></label>
                                                    <input type="date" name="notice_date" id="notice_date"
                                                        class="form-control"  required>
                                                </div>
                                            </div>
                                            
                                            <div class="row mt-4">
                                            <hr>
                                                <div class="col-md-12 mt-2 text-right">
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </div>
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
    const toglleNoticeDiv = (divName) =>{
        if(divName == "add"){
            $("#notice_add_div").show();
            $("#notice_list_div").hide();
        }else if(divName == "list"){
            $("#notice_add_div").hide();
            $("#notice_list_div").show();
        }
    }
</script>
@extends('layouts.app')

@section('styles')
<style>
    .modal-box{
        max-width: 75rem !important;
    }


    input::file-selector-button {
        margin-top:4px;
    }


</style>
@endsection

@section('content')
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="main-container">
                <div class="container-header"><span>Forms</span></div>
                <div class="container-body">
                    <div>
                        <button class="u-btn u-bg-default u-t-dark u-border-1-gray u-box-shadow-default btn-open-add">Generate File</button>
                    </div>
                    <div class="table-responsive">
                        <table class="myTable" >
                            <thead>
                                <tr>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>IP Address</th>
                                    <th>User Agent</th>
                                    <th>Created Date</th>
                                    <th>Updated Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($forms as $form)
                                    <tr>
                                        <td>{{$form->name}}</td>
                                        <td>{{$form->email}}</td>
                                        <td class="text-truncate">{{$form->message}}</td>
                                        <td>{{$form->ip_address}}</td>
                                        <td class="text-truncate">{{$form->user_agent}}</td>
                                        <td>{{date('M d Y h:i a', strtotime($form->created_at))}}</td>
                                        <td>{{date('M d Y h:i a', strtotime($form->updated_at))}}</td>
                                        <td class="d-flex u-gap-10">
                                            <button class="u-action-btn  u-bg-primary">
                                                View
                                            </button>
                                            <button class="u-action-btn u-bg-danger">
                                                Delete
                                            </button>
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
@endsection
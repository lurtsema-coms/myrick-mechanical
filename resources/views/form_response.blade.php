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
                                    <th>Created Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Placement 1</td>
                                    <td>gab.quing29@gmail.com</td>
                                    <td>test test test</td>
                                    <td>158.62.17.160</td>
                                    <td>May 16 2024</td>
                                    <td class="d-flex u-gap-10">
                                        <button class="u-action-btn u-bg-danger">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
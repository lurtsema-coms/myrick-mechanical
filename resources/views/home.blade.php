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


<div class="modal-center generate-add" style="display:none">
    <div class="modal-box">
        <div class="modal-content">
            <form method="POST" action="" enctype="multipart/form-data">
                @csrf
                <table class="custom_normal_table">
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <h3 class="f-weight-bold">Generate Add</h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Image Name:</p>
                                <input class="u-input" name="image_name" type="text" required>
                            </td>
                            <td>
                                <p>Add Placement</p>
                                <select class="u-input" name="add_placement" id="" required>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Upload Add</p>
                                <input class="u-input" id="add_image" name="add_image" type="file" accept=".pdf" required>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="u-flex-space-between u-flex-wrap">
                    <button class="u-t-gray-dark u-fw-b u-btn u-bg-default u-m-10 u-border-1-default btn-close-add" id="btn-close-add" type="button">Close</button>
                    <button class="u-t-white u-fw-b u-btn u-bg-primary u-m-10 u-border-1-default btn-submit-add" id="btn-submit-add" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="main-container">
                <div class="container-header"><span>Upload Adds</span></div>
                <div class="container-body">
                    <div>
                        <button class="u-btn u-bg-default u-t-dark u-border-1-gray u-box-shadow-default btn-open-add">Generate Add</button>
                    </div>
                    <div class="table-responsive">
                        <table class="myTable" >
                            <thead>
                                <tr>
                                    <th>Placement</th>
                                    <th>Image Name</th>
                                    <th>Created By</th>
                                    <th>Created Date</th>
                                    <th>Updated By</th>
                                    <th>Updated Date</th>
                                    <th>Display</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Placement 1</td>
                                    <td>Test</td>
                                    <td>Gabriel Quing</td>
                                    <td>May 16 2024</td>
                                    <td>Gabriel Quing</td>
                                    <td>May 16 2024</td>
                                    <td>dasdsad</td>
                                    <td class="d-flex u-gap-10">
                                        <button class="u-action-btn u-bg-primary">
                                            Edit
                                        </button>
                                        <button class="u-action-btn u-bg-danger">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Placement 1</td>
                                    <td>Test</td>
                                    <td>Gabriel Quing</td>
                                    <td>May 16 2024</td>
                                    <td>Gabriel Quing</td>
                                    <td>May 16 2024</td>
                                    <td>dasdsad</td>
                                    <td class="d-flex u-gap-10">
                                        <button class="u-action-btn u-bg-primary">
                                            Edit
                                        </button>
                                        <button class="u-action-btn u-bg-danger">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Placement 1</td>
                                    <td>Test</td>
                                    <td>Gabriel Quing</td>
                                    <td>May 16 2024</td>
                                    <td>Gabriel Quing</td>
                                    <td>May 16 2024</td>
                                    <td>dasdsad</td>
                                    <td class="d-flex u-gap-10">
                                        <button class="u-action-btn u-bg-primary">
                                            Edit
                                        </button>
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
    @section('script_content')
        <script>
        $(document).ready(function(){
            
            $('.btn-close-add').on('click', function(){
                $('.generate-add').hide();
            });
            $('.btn-open-add').on('click', function(){
                $('.generate-add').show();
                console.log('tyest');
            });
        });
        </script>
    @endsection
@endsection

@extends('layouts.app')
@section('module-name', 'Employee Accounts')

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

<div class="modal-center generate-account" style="display:none">
    <div class="modal-box">
        <div class="modal-content">
            <form action="{{ route('add_user') }}" method="POST" autocomplete="off">
                @csrf
                <table class="custom_normal_table">
                    <tbody>
                        <tr>
                            <td class="custom_table_header" colspan="2">
                                <h3 class="f-weight-bold">Generate Account Form</h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>First Name:</p>
                                <input class="u-input" name="first_name" type="text" required>
                            </td>
                            <td>
                                <p>Last Name:</p>
                                <input class="u-input" name="last_name" type="text" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Email</p>
                                <input class="u-input" name="email" type="text" required>
                            </td>
                            <td>
                                <p>Temporary Password</p>
                                <input class="u-input" type="password" name="password" value="qwerty123" placeholder="qwerty123" readonly>
                                <p style="position: absolute; font-size: 12px; color: rgb(69, 110, 159) !important; "> Temporary password = qwerty123</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <div class="u-flex-space-between u-flex-wrap">
                    <button class="u-t-gray-dark u-fw-b u-btn u-bg-default u-m-10 u-border-1-default btn-close-add" id="btn-close-add" type="button">Close</button>
                    <button class="u-t-white u-fw-b u-btn u-bg-primary u-m-10 u-border-1-default btn-submit-add" id="btn-submit-add" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal-center generate-account" style="display:none">
    <div class="modal-box">
        <div class="modal-content">
            <form action="{{ route('add_user') }}" method="POST" autocomplete="off">
                @csrf
                <table class="custom_normal_table">
                    <tbody>
                        <tr>
                            <td class="custom_table_header" colspan="2">
                                <h3 class="f-weight-bold">Generate Account Form</h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>First Name:</p>
                                <input class="u-input" name="first_name" type="text" required>
                            </td>
                            <td>
                                <p>Last Name:</p>
                                <input class="u-input" name="last_name" type="text" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Email</p>
                                <input class="u-input" name="email" type="text" required>
                            </td>
                            <td>
                                <p>Temporary Password</p>
                                <input class="u-input" type="password" name="password" value="qwerty123" placeholder="qwerty123" readonly>
                                <p style="position: absolute; font-size: 12px; color: rgb(69, 110, 159) !important; "> Temporary password = qwerty123</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <div class="u-flex-space-between u-flex-wrap">
                    <button class="u-t-gray-dark u-fw-b u-btn u-bg-default u-m-10 u-border-1-default btn-close-add" id="btn-close-add" type="button">Close</button>
                    <button class="u-t-white u-fw-b u-btn u-bg-primary u-m-10 u-border-1-default btn-submit-add" id="btn-submit-add" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal-center edit-account" style="display:none">
    <div class="modal-box">
        <div class="modal-content">
            <form method="POST" autocomplete="off">
                @csrf
                <table class="custom_normal_table">
                    <tbody>
                        <tr>
                            <td class="custom_table_header" colspan="2">
                                <h3 class="f-weight-bold">Account Information</h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Name:</p>
                                <input class="u-input" id="view_name" name="edit_name"  type="text" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Email:</p>
                                <input class="u-input" id="view_email" name="edit_email" type="text" required>
                            </td>
                        </tr>
                            <td>
                                <p>New Password:</p>
                                <input class="u-input" id="" type="password" name="password" >
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <div class="u-flex-space-between u-flex-wrap">
                    <button class="u-t-gray-dark u-fw-b u-btn u-bg-default u-m-10 u-border-1-default btn-close-edit" type="button">Close</button>
                    <button class="u-t-white u-fw-b u-btn u-bg-primary u-m-10 u-border-1-default btn-submit-edit" id="btn-submit-add" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="main-container">
                <div class="container-header"><span>Manage Accounts</span></div>
                <div class="container-body">
                    <div class="d-flex">
                        <button class="u-btn u-bg-default u-t-dark u-border-1-gray u-box-shadow-default btn-open-add">Generate Account</button>
                        <br>
                        <div class="u-pl-16">
                            @if (session('errors'))
                            <div class="add_user_success"> 
                                @foreach (session('errors')->getBag('default')->all() as $error)
                                <span style="color: red; display:block;">{{ $error }}</span>
                                @endforeach
                            </div>
                            @endif
                            @if (session('success'))
                                <div class="add_user_success"> 
                                    <span>{{ session('success') }}</span>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="myTable" >
                            <thead>
                                <tr>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Created By</th>
                                    <th>Created Date</th>
                                    <th>Updated By</th>
                                    <th>Updated Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->creator_name}}</td>
                                        <td>{{$user->created_at}}</td>
                                        <td>{{$user->updator_name}}</td>
                                        <td>{{$user->updated_at}}</td>
                                        <td class="d-flex u-gap-10">
                                            <button class="u-action-btn u-bg-primary view-modal" data-entry-id="{{ $user->id }}" data-href="{{ route('viewAccount', $user->id) }}">
                                                Edit
                                            </button>
                                            <button class="u-action-btn u-bg-danger deactivate_btn"data-entry-id="{{ $user->id }}" data-href="{{ route('deleteAccount', $user->id) }}">
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
    @section('script_content')
    <script>
    $(document).ready(function(){
        
        $('.btn-close-add').on('click', function(){
            $('.generate-account').hide();
        });
        $('.btn-open-add').on('click', function(){
            $('.generate-account').show();
            console.log('tyest');
        });
        $('.btn-close-edit').on('click', function(){
            $('.edit-account').hide();
        });


        $('.view-modal').click(function(e){
            const entryId = $(this).data('entry-id');
            const url = $(this).attr('href');
            let editUrl = "{{ route('viewAccount', 'entryId') }}";
            const newUrl = editUrl.replace('entryId', entryId);
            $.ajax({
                url: newUrl,   
                    dataType: 'json',
                    type: 'GET',
                    success: function(response) {
                        console.log(response);
                        let submitUrl = "{{ route('account_update', 'entryId') }}";
                        submitUrl = submitUrl.replace('entryId', response.id);
                        $('#view_name').val(response.name);
                        $('#view_email').val(response.email);
                        $('.edit-account').show();
                        $('form').attr('action', submitUrl);
                    },
                    error: function(error) {
                        console.log(error);
                    }
            });
        });


        $('.deactivate_btn').click(function(e) {
            e.preventDefault();
            const entryId = $(this).data('entry-id');
            console.log(entryId);
            const url = $(this).attr('href');
            let editUrl = "{{ route('deleteAccount', 'entryId') }}";
            const newUrl = editUrl.replace('entryId', entryId);
            console.log(newUrl);
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                reverseButtons: true,
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Remove It!'
            }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: newUrl,   
                    dataType: 'json',
                    type: 'GET',
                        success: function(response) {
                            Swal.fire(
                                'Deleted!',
                                'The account has been deleted.',
                                'success'
                            )
                            .then(() => {
                                location.reload(); // Refresh the browser
                            });
                        },
                        error: function(error) {
                        console.log(error);
                        }
                    });
                }
            });
        });
    });
    </script>
    @endsection
@endsection

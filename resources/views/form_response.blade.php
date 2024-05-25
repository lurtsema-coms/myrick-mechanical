@extends('layouts.app')

@section('styles')
<style>
    /* .modal-box{
        max-width: 75rem !important;
    } */


    input::file-selector-button {
        margin-top:4px;
    }


</style>
@endsection

@section('content')

<div class="modal-center generate-file" style="display:none">
    <div class="modal-box">
        <div class="modal-content">
            <form action="" method="POST" autocomplete="off">
                @csrf
                <table class="custom_normal_table">
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <h3 class="f-weight-bold">Generate Export File</h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>From Date:</p>
                                <input class="u-input" name="from_date" type="date" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>To Date:</p>
                                <input class="u-input" name="to_date" type="date" required>
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

<div class="modal-center view-file" style="display:none">
    <div class="modal-box">
        <div class="modal-content">
            <form action="" method="POST" autocomplete="off">
                @csrf
                <table class="custom_normal_table">
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <h3 class="f-weight-bold">View Details</h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Full Name:</p>
                                <input class="u-input" id="view_name" name="full_name" type="text" readonly>
                            </td>
                            <td>
                                <p>Email:</p>
                                <input class="u-input" id="view_email" name="email" type="text" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Ip Address:</p>
                                <input class="u-input" id="view_ip_address" name="ip_address" type="text" readonly>
                            </td>
                            <td>
                                <p>User Agent:</p>
                                <input class="u-input" id="view_user_agent" name="user_agent" type="text" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p>Message:</p>
                                <textarea class="u-textarea" id="view_message" name="message" type="text" style="height:150px" readonly></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <div class="u-flex-space-between u-flex-wrap">
                    <button class="u-t-gray-dark u-fw-b u-btn u-bg-default u-m-10 u-border-1-default btn-close-view" type="button">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

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
                                            <button class="u-action-btn u-bg-primary view-modal" type="button"  data-entry-id="{{ $form->id }}" data-href="{{ route('viewResponse', $form->id) }}">
                                                View
                                            </button>
                                            <button class="u-action-btn u-bg-danger delete_btn" data-entry-id="{{ $form->id }}" data-href="{{ route('deleteResponse', $form->id) }}">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- Pagination links -->
                    <div class=pagination-container>
                        {{ $forms->links() }}
                    </div>
                    <p>Showing {{ $forms->firstItem() ?? 0 }} to {{ $forms->lastItem() ?? 0 }} of {{ $forms->total() }} items.</p>
                </div>
            </div>
        </div>
    </div>
</div>
    @section('script_content')
        <script>

            $(document).ready(function(){
                $('.s-single').select2({
                    width: '100%',
                });
                
                $('.btn-close-add').on('click', function(){
                    $('.generate-file').hide();
                });
                $('.btn-close-view').on('click', function(){
                    $('.view-file').hide();
                });
                $('.btn-open-add').on('click', function(){
                    $('.generate-file').show();
                    console.log('tyest');
                });

                $('.view-modal').click(function(e){
                    const entryId = $(this).data('entry-id');
                    const url = $(this).attr('href');
                    let editUrl = "{{ route('viewResponse', 'entryId') }}";
                    const newUrl = editUrl.replace('entryId', entryId);
                    $.ajax({
                        url: newUrl,   
                            dataType: 'json',
                            type: 'GET',
                            success: function(response) {
                                console.log(response);
                                $('#view_name').val(response.name);
                                $('#view_email').val(response.email);
                                $('#view_ip_address').val(response.ip_address);
                                $('#view_user_agent').val(response.user_agent);
                                $('#view_message').val(response.message);
                                $('.view-file').show();

                            },
                            error: function(error) {
                                console.log(error);
                            }
                    });
                });

                $('.delete_btn').click(function(e) {
                e.preventDefault();
                const entryId = $(this).data('entry-id');
                console.log(entryId);
                const url = $(this).attr('href');
                let editUrl = "{{ route('deleteResponse', 'entryId') }}";
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
                                    'The form has been deleted.',
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
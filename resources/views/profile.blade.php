@extends('layouts.app')
@section('module-name', 'My Profile')

@section('styles')
<style>
    input::file-selector-button {
        margin-top:4px;
        padding: 0.6rem 1rem;
        border-radius: 5px;
        font-size: 1rem;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        cursor: pointer;
        border: 1px solid #b9b9b9;
        text-transform: none;
        color: #212529;
        background-color: #f4f4f4;
    }

</style>
@endsection

@section('content')

<div class="modal-center change-username" style="display: none;" >
    <div class="modal-box">
        <div class="modal-content">
            <form method="POST" action="{{route('update_username', auth()->user()->id)}}">
                @csrf
                <div style="overflow-x: auto; width: 100%;">
                    <table class="custom_normal_table">
                        <tbody>
                            <tr>
                                <td class="custom_table_header" colspan="2">
                                    <h3 class="f-weight-bold">Change Username</h3>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Change Name:</p>
                                    <input class="u-input" name="name" value="{{ $userInfo->name }}" type="text" required>
                                </td>                                                                             
                            </tr>
                            <tr>
                                <td>
                                    <p>Change Email:</p>
                                    <input class="u-input" name="email" value="{{ $userInfo->email }}" type="text" required>
                                </td>                           
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="u-flex-space-between">
                    <button class="u-t-gray-dark u-fw-b u-btn u-bg-default u-m-10 u-border-1-default" id="btn-close-user" type="button">Close</button>
                    <button class="u-t-white u-fw-b u-btn u-bg-accent u-m-10 u-border-1-default u-bg-primary" id="btn-close" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal-center change-password" style="display: none;" >
    <div class="modal-box">
        <div class="modal-content">
            <form method="POST" action="{{ route('update_password', auth()->user()->id) }}">
                @csrf
                <div style="overflow-x: auto; width: 100%;">
                    <table class="custom_normal_table">
                        <tbody>
                            <tr>
                                <td class="custom_table_header" colspan="2">
                                    <h3 class="f-weight-bold">Change Password</h3>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Current Password:</p>
                                    <input class="u-input" name="current_password" type="password" required>
                                </td>                                                                             
                            </tr>
                            <tr>
                                <td>
                                    <p>New Password:</p>
                                    <input class="u-input" name="new_password" type="password" required>
                                </td>                           
                            </tr>
                            <tr>
                                <td>
                                    <p>Confirm Password:</p>
                                    <input class="u-input" name="confirmation_password" type="password" required>
                                </td>  
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="u-flex-space-between">
                    <button class="u-t-gray-dark u-fw-b u-btn u-bg-default u-m-10 u-border-1-default" id="btn-close-password" type="button">Close</button>
                    <button class="u-t-white u-fw-b u-btn u-bg-accent u-m-10 u-border-1-default u-bg-primary" id="btn-close" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="main-container">
                <div class="container-header"><span>Account Settings</span></div>
                <div class="container-body-profile">
                    <div class="d-flex">
                    </div>
                    <div>
                        <table class="custom_form_table">
                            <tbody>
                                <tr class="">
                                    <td class="custom_form_title">
                                        <span >Profile Picture:</span>
                                    </td>
                                    <td class="custom_form_body change-photo-container">
                                        <div>
                                            <form method="POST" id="photoForm" enctype="multipart/form-data">
                                                @csrf
                                                <div class="user_picture">
                                                    <label for="user_photo" id="photo_label">
                                                    @if (auth()->user()->img == null)
                                                        <img src="{{ asset('profile_picture/img/user.png') }}" alt="" id="img_user_photo" loading="lazy">
                                                    @else
                                                        <img src="{{ asset('profile_picture/img/'.auth()->user()->img ) }}" alt="" id="img_user_photo" loading="lazy">
                                                    @endif
                                                    </label>
                                                    <input type="file" id="user_photo" name="user_photo" style="display:none" accept="image/jpeg,image/png">
                                                </div>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="custom_form_password">
                                    <td class="custom_form_title">
                                        <span>Name:</span>
                                    </td>
                                    <td class="custom_form_body">
                                        <input class="u-input"  value="{{ $userInfo->name }}" type="text" readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="custom_form_title">
                                        <span>Email:</span>
                                    </td>
                                    <td class="custom_form_body">
                                        <input class="u-input"  value="{{ $userInfo->email }}" type="text" readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="custom_form_title">
                                    </td>
                                    <td class=" ">
                                        <button class="u-btn u-bg-default u-t-dark u-border-1-gray u-box-shadow-default btn-open-user">Change Username</button>
                                    </td>
                                </tr>
                                <tr class="custom_form_password">
                                    <td class="custom_form_title">
                                        <span>Password:</span>
                                    </td>
                                    <td class="custom_form_body">
                                        <button class="u-btn u-bg-default u-t-dark u-border-1-gray u-box-shadow-default btn-open-change">Change Password</button>
                                    </td>
                                </tr>
                                <div>
                                    @if (session('error'))
                                        <span style="color: red; display:block;">{{ session('error') }}</span>
                                    @endif
                                    @if (session('success'))
                                        <span style="color: green; display:block;">{{ session('success') }}</span>
                                    @endif
                                    @if (session('successPassword'))
                                        <span style="color: green; display:block;">{{ session('successPassword') }}</span>
                                    @endif
                                    @if (session('successUsername'))
                                        <span style="color: green; display:block;">{{ session('successUsername') }}</span>
                                    @endif
                                    @if (session('successContract'))
                                        <span style="color: green; display:block;">{{ session('successContract') }}</span>
                                    @endif
                                    @if ($errors->has('new_password'))
                                        <span style="color: red; display:block;">{{ $errors->first('new_password') }}</span>
                                    @endif
                                    @if ($errors->has('confirmation_password'))
                                        <span style="color: red; display:block;">{{ $errors->first('confirmation_password') }}</span>
                                    @endif
                                </div>
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
        
        $('#btn-close-password').on('click', function(){
            $('.change-password').hide();
        });
        $('.btn-open-change').on('click', function(){
            $('.change-password').show();
        });
        
        $('#btn-close-user').on('click', function(){
            $('.change-username').hide();
        });
        $('.btn-open-user').on('click', function(){
            $('.change-username').show();
        });

        if ("{{ session('successPassword') }}"){
            setTimeout(function(){
                window.location.href = "{{ route('logout') }}"
            }, 2000);
        }

        $('#photoForm').on('change', function(event){
            event.preventDefault();
            var formData = new FormData();
            formData.append('photo', $('#user_photo')[0].files[0]);
            formData.append('_token', '{{ csrf_token() }}');
            var fileType = $('#user_photo')[0].files[0].type;
            if (fileType != "image/jpeg" && fileType != "image/png") {
                $('#photo_error').show();
            } else {
                $('#photo_error').hide();
                $.ajax({
                    url: '{{ route('upload_img') }}',
                    type: 'POST',
                    data: formData,
                    dataType: 'json',
                    contentType: false,
                    processData: false,
                    success: function(response){
                        var timestamp = new Date().getTime();
                        $('#img_user_photo').attr('src', '{{ asset('profile_picture/img/') }}' + '/' + response.photo_name + '?' + timestamp);
                        let timerInterval;
                        Swal.fire({
                            html: 'Your profile picture has been updated successfully',
                            timer: 1200,
                            timerProgressBar: false,
                            didOpen: () => {
                                Swal.showLoading();
                                const b = Swal.getHtmlContainer().querySelector('b');
                                timerInterval = setInterval(() => {
                                    b.textContent = Swal.getTimerLeft();
                                }, 100);
                            },
                            willClose: () => {
                                clearInterval(timerInterval);
                            }
                        }).then((result) => {
                            if (result.dismiss === Swal.DismissReason.timer) {
                                console.log('I was closed by the timer');
                            }
                        });
                    },
                    error: function(error){
                        console.log(error);
                    }
                });
            }
        });


    });
    </script>
    @endsection
@endsection

@extends('layouts.app')
@section('module-name', 'My Dashboard')

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
            <form method="POST" action="{{route('createAd')}}" enctype="multipart/form-data">
                @csrf
                <table class="custom_normal_table">
                    <tbody>
                        <tr>
                            <td class="custom_table_header" colspan="2">
                                <h3 class="f-weight-bold">Generate Ad</h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Start Date:</p>
                                <input class="u-input" name="start_date" type="date" required>
                            </td>
                            <td>
                                <p>End Date:</p>
                                <input class="u-input" name="end_date" type="date" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Ad Name:</p>
                                <input class="u-input" name="image_name" type="text" required>
                            </td>
                            <td>
                                <p>Ad Placement:</p>
                                <select class="u-input" name="ad_placement" id="ad_placement" required>
                                    <option selected value="Placement 1">Placement 1</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Upload Ad</p>
                                <input class="u-input" type="file" id="ad_image" name="ad_image" accept="image/jpeg,image/png" required>
                            </td>
                            <td>
                                <p>Redirect Link:</p>
                                <input class="u-input" id="re_link" name="re_link" type="text"  required>
                                <p style="position: absolute; font-size: 12px; color: rgb(69, 110, 159) !important; "> Note: Don't forget to include 'https://'</p>
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

<div class="modal-center view-ad" style="display:none">
    <div class="modal-box">
        <div class="modal-content">
            <form method="POST" action="" enctype="multipart/form-data">
                @csrf
                <table class="custom_normal_table">
                    <tbody>
                        <tr>
                            <td class="custom_table_header" colspan="2">
                                <h3 class="f-weight-bold">View Current Ad</h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Start Date:</p>
                                <input class="u-input" name="start_date" id="view_start" type="date" readonly>
                            </td>
                            <td>
                                <p>End Date:</p>
                                <input class="u-input" name="end_date" id="view_end" type="date" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Ad Name:</p>
                                <input class="u-input" name="image_name"  id="view_image_name" type="text" readonly>
                            </td>
                            <td>
                                <p>Ad Placement:</p>
                                <select class="u-input" name="ad_placement" id="view_ad_placement" disabled>
                                    <option  value="Placement 1">Placement 1</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Redirect Link:</p>
                                <input class="u-input" id="view_re_link" name="re_link" type="text"  readonly>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="u-m-10">
                    <div class="u-bg-primary u-fw-b u-t-white" style="padding: 20px 10px">
                        Uploaded Ad
                    </div>
                    <img id="view_current_ad_image" src="" width="100%" >
                </div>
                <div class="u-flex-space-between u-flex-wrap">
                    <button class="u-t-gray-dark u-fw-b u-btn u-bg-default u-m-10 u-border-1-default btn-close-view"  type="button">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal-center edit-ad" style="display:none">
    <div class="modal-box">
        <div class="modal-content">
            <form method="POST" action="" enctype="multipart/form-data">
                @csrf
                <table class="custom_normal_table">
                    <tbody>
                        <tr>
                            <td class="custom_table_header" colspan="2">
                                <h3 class="f-weight-bold">Edit Ad</h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Start Date:</p>
                                <input class="u-input" name="start_date" id="edit_start" type="date" required>
                            </td>
                            <td>
                                <p>End Date:</p>
                                <input class="u-input" name="end_date" id="edit_end" type="date" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Ad Name:</p>
                                <input class="u-input" name="image_name"  id="edit_image_name" type="text" required>
                            </td>
                            <td>
                                <p>Ad Placement:</p>
                                <select class="u-input" name="ad_placement" id="edit_ad_placement" required>
                                    <option  value="Placement 1">Placement 1</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Redirect Link:</p>
                                <input class="u-input" id="edit_re_link" name="re_link" type="text"  required>
                            </td>
                            <td>
                                <p>Re-upload Ad</p>
                                <input class="u-input" type="file" id="edit_ad_image" name="ad_image" accept="image/jpeg,image/png" >
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="u-m-10">
                    <div class="u-bg-primary u-fw-b u-t-white" style="padding: 20px 10px">
                        Uploaded Ad
                    </div>
                    <img id="edit_current_ad_image" src="" width="100%" >
                </div>
                <div class="u-flex-space-between u-flex-wrap">
                    <button class="u-t-gray-dark u-fw-b u-btn u-bg-default u-m-10 u-border-1-default btn-close-edit"  type="button">Close</button>
                    <button class="u-t-white u-fw-b u-btn u-bg-primary u-m-10 u-border-1-default btn-submit-edit"  type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="main-container">
                <div class="container-header"><span>Ads</span></div>
                <div class="container-body">
                    <div class="d-flex align-items-center">
                        <button class="u-btn u-bg-default u-t-dark u-border-1-gray u-box-shadow-default btn-open-add">Generate Ad</button>
                        @if (session('successUpload'))
                            <span style="color: green; display:block; margin-left:5px">{{ session('successUpload') }}</span>
                        @endif
                    </div>
                    <div class="table-responsive">
                        <table class="myTable" >
                            <thead>
                                <tr>
                                    <th>Placement</th>
                                    <th>Image Name</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Created By</th>
                                    <th>Created Date</th>
                                    <th>Updated By</th>
                                    <th>Updated Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ads as $ad)
                                <tr>
                                    <td>{{$ad->ad_placement}}</td>
                                    <td>{{$ad->image_name}}</td>
                                    <td>{{$ad->from_date}}</td>
                                    <td>{{$ad->to_date}}</td>
                                    <td>{{$ad->creator_name}}</td>
                                    <td>{{$ad->created_at}}</td>
                                    <td>{{$ad->updator_name}}</td>
                                    <td>{{$ad->updated_at}}</td>
                                    <td class="d-flex u-gap-10">
                                        <button class="u-action-btn u-bg-card-header-color view-modal" data-entry-id="{{ $ad->id }}" data-href="{{ route('viewAd', $ad->id) }}">
                                            View
                                        </button>
                                        <button class="u-action-btn u-bg-primary edit-modal" data-entry-id="{{ $ad->id }}" data-href="{{ route('viewAd', $ad->id) }}">
                                            Edit
                                        </button>
                                        <button class="u-action-btn u-bg-danger delete_btn" data-entry-id="{{ $ad->id }}" data-href="{{ route('deleteAd', $ad->id) }}">
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
                            {{ $ads->links() }}
                        </div>
                        <p>Showing {{ $ads->firstItem() ?? 0 }} to {{ $ads->lastItem() ?? 0 }} of {{ $ads->total() }} items.</p>
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
            $('.btn-close-edit').on('click', function(){
                $('.edit-ad').hide();
                });
            $('.btn-close-view').on('click', function(){
                $('.view-ad').hide();
                });
            $('.btn-open-add').on('click', function(){
                $('.generate-add').show();
            });

            $('.edit-modal').click(function(e){
                const entryId = $(this).data('entry-id');
                const url = $(this).attr('href');
                let editUrl = "{{ route('viewAd', 'entryId') }}";
                const newUrl = editUrl.replace('entryId', entryId);
                $.ajax({
                    url: newUrl,   
                        dataType: 'json',
                        type: 'GET',
                        success: function(response) {
                            console.log(response);
                            let submitUrl = "{{ route('updateAd', 'entryId') }}";
                            submitUrl = submitUrl.replace('entryId', response.id);
                            $('#edit_start').val(response.from_date);
                            $('#edit_end').val(response.to_date);
                            $('#edit_image_name').val(response.image_name);
                            $('#edit_ad_placement').val(response.ad_placement);
                            $('#edit_re_link').val(response.link);
                            $('#edit_current_ad_image').attr('src', response.file_path);
                            $('.edit-ad').show();
                            $('form').attr('action', submitUrl);
                        },
                        error: function(error) {
                            console.log(error);
                        }
                });
            });

            $('.view-modal').click(function(e){
                const entryId = $(this).data('entry-id');
                const url = $(this).attr('href');
                let editUrl = "{{ route('viewAd', 'entryId') }}";
                const newUrl = editUrl.replace('entryId', entryId);
                $.ajax({
                    url: newUrl,   
                        dataType: 'json',
                        type: 'GET',
                        success: function(response) {
                            console.log(response);
                            $('#view_start').val(response.to_date);
                            $('#view_end').val(response.from_date);
                            $('#view_image_name').val(response.image_name);
                            $('#view_ad_placement').val(response.ad_placement);
                            $('#view_re_link').val(response.link);
                            $('#view_current_ad_image').attr('src', response.file_path);
                            $('.view-ad').show();
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
                let editUrl = "{{ route('deleteAd', 'entryId') }}";
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
                                    'The ad has been deleted.',
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

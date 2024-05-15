@extends('layouts.app')

@section('styles')
<style>
    .main-container{
        box-shadow: 0 5px 10px rgba(109, 109, 109, 0.349) !important;
    }
    .container-header{
        display: flex;
        align-items: center;
        font: bold;
        font-size: 1.3rem;
        padding: 1.0rem;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;    
        background: #eef1f4;
        margin: 0px;
    }
    .container-body{
        height: 600px;
        padding: 20px;
    }
    .myTable{
        border-collapse: collapse;
        width: 100%;
        max-width: 1000px; 
        margin: auto;
        margin-top: 2rem;
        border-radius: 5px 5px 0px 0px;
        overflow: hidden;
    }
    .myTable thead tr{
        font-weight: bold;
        font-size: 14px;
        background: #f7f4f4;
        color: black;
        text-align: left;
        /* box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px; */
        box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;
        }
    .myTable th,
    .myTable td{
        padding: 12px 15px;
    }

    .myTable tbody tr{
        border-bottom: 1px solid rgb(207, 205, 205)
    }
    .myTable tbody tr:nth-of-type(even){
        background: #f7f4f4
    }
    .myTable tbody tr:last-of-type{
        border-bottom: 2px solid #011627;
    }
    .myTable tbody tr .active-row{
        font-weight:bold;
        color: #011627;  
    }

    .table-responsive::-webkit-scrollbar {
    width: 12px;
    height: 5px;
}

.table-responsive::-webkit-scrollbar-track {
    background: #f1f1f1; /* Color of the track */
}

/* Style the scrollbar thumb */
.table-responsive::-webkit-scrollbar-thumb {
    background: #888; /* Color of the thumb */
    border-radius: 10px;
}

/* Style the scrollbar thumb on hover */
.table-responsive::-webkit-scrollbar-thumb:hover {
    background: #555; /* Color of the thumb when hovered */
}

</style>
@endsection

@section('content')
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="main-container">
                <div class="container-header"><span>Upload Adds</span></div>
                <div class="container-body">
                    <div>
                        <button class="u-btn">Generate Add</button>
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
                                    <th>Action</th>
                                    <th>Display</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>asdasd</td>
                                    <td>asdada</td>
                                    <td>dasda</td>
                                    <td>dasdas</td>
                                    <td>asdasd</td>
                                    <td>asdasd</td>
                                    <td>dasdadas</td>
                                    <td>dasdsad</td>
                                </tr>
                                <tr>
                                    <td>asdasd</td>
                                    <td>asdada</td>
                                    <td>dasda</td>
                                    <td>dasdas</td>
                                    <td>asdasd</td>
                                    <td>asdasd</td>
                                    <td>dasdadas</td>
                                    <td>dasdsad</td>
                                </tr>
                                <tr>
                                    <td>asdasd</td>
                                    <td>asdada</td>
                                    <td>dasda</td>
                                    <td>dasdas</td>
                                    <td>asdasd</td>
                                    <td>asdasd</td>
                                    <td>dasdadas</td>
                                    <td>dasdsad</td>
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

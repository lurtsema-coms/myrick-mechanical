@extends('layouts.app')

@section('styles')
<style>
    .container-header {
    }
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
        width: 100%;
        max-width: 600px; 
        margin: auto;

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
                    <table class="myTable" >
                        <thead>
                            <tr>
                                <th>Display</th>
                                <th>Image Name</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><input type="file"></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Display</th>
                                <th>Image Name</th>
                                <th>action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

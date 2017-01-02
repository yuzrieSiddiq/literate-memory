@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            @include('sssc.menu')
        </div>
        <div class="col-md-9">
            <h3>USER MANAGEMENT</h3>
            <hr>

            <div class="table-responsive">
                <table class="table table-striped">
                    <tr>
                        <td>NO</td>
                        <td>USER ID</td>
                        <td>USER NAME</td>
                        <td>ROLE</td>
                        <td></td>
                    </tr>

                    {{-- example --}}
                    {{-- TODO: foreach users as user add here --}}
                    <tr>
                        <td class="text-center">1</td>
                        <td class="col-sm-3">SJLC</td>
                        <td class="col-sm-5">Swinburne Japanese Language Club</td>
                        <td class="col-sm-1 text-uppercase">student</td>
                        <td class="text-right col-sm-3">
                            <button class="btn btn-sm btn-info" data-method="PUT" data-url="">
                                <span class="glyphicon glyphicon-pencil"></span> REVIEW
                            </button>
                            <button class="btn btn-sm btn-danger" data-method="DELETE" data-url="">
                                <span class="glyphicon glyphicon-remove"></span>
                            </button>
                        </td>
                    </tr>

                </table>
            </div> <!-- end .table-responsive -->

        </div>
    </div> <!-- end row -->
</div>
@endsection

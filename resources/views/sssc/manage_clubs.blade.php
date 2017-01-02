@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            @include('sssc.menu')
        </div>
        <div class="col-md-9">
            <h3>CLUB MANAGEMENT</h3>
            <hr>

            <div class="table-responsive">
                <table class="table table-striped">
                    <tr>
                        <td>NO</td>
                        <td>CLUB ID</td>
                        <td>CLUB NAME</td>
                        <td></td>
                    </tr>

                    {{-- example --}}
                    {{-- TODO: foreach clubs as club add here --}}
                    <tr>
                        <td class="text-center">1</td>
                        <td class="col-sm-3">SJLC</td>
                        <td class="col-sm-6">Swinburne Japanese Language Club</td>
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

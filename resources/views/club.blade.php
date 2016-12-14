@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">STUDENT CLUB</div>

                <div class="panel-body">
                    <h4>STUDENT CLUB NAME</h4>

                    <h5>CLUB COMMITTEE MEMBERS</h5>
                    <ul>
                        <li>EXCO 1</li>
                        <li>EXCO 2</li>
                        <li>EXCO 3</li>
                        <li>EXCO 4</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">SUBMITTED PROPOSALS</div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <td></td>
                                <td>Title</td>
                                <td>Date Submitted</td>
                                <td>Status</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Test Proposal</td>
                                <td>19 JAN 2017</td>
                                <td class="text-warning">Pending</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">EXECUTIVE GROUP</div>

                <div class="panel-body">
                    NAME: EXEC NAME
                </div>
            </div>
        </div>

        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">STUDENTS CLUB PROPOSAL</div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <td></td>
                                <td>Club</td>
                                <td>Date Submitted</td>
                                <td>Status</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Swinburne Japanese Language Club</td>
                                <td>19 JAN 2017</td>
                                <td class="text-warning">Pending</td>
                                <td><button class="btn btn-primary" data-toggle="modal" data-target="#proposal1">VIEW</button></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Swinburne Gitokukai Karate-do Club</td>
                                <td>31 JAN 2017</td>
                                <td class="text-warning">Pending</td>
                                <td><button class="btn btn-primary" data-toggle="modal" data-target="#proposal1">VIEW</button></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Swinburne Kendo Club</td>
                                <td>24 JAN 2017</td>
                                <td class="text-warning">Pending</td>
                                <td><button class="btn btn-primary" data-toggle="modal" data-target="#proposal1">VIEW</button></td>
                            </tr>
                        </table>
                    </div>
                </div> <!-- end panel-body -->
            </div> <!-- end panel -->
        </div> <!-- end col -->
    </div> <!-- end row -->

    <!-- MODAL - EXISTING PROPOSAL -->
    <div class="modal fade" id="proposal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">CLUB NAME</h4>
          </div>

          <div class="modal-body">
              <p>TITLE OF PROPOSAL</p>
              <p class="text-success">PART 1/3 EVENT PROPOSAL</p>
              <hr>

              <form class="form-horizontal">
                  <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">Title</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">Title</p>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="objective" class="col-sm-2 control-label">Event Objective</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">Objective<br>Objective<br>Objective</p>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="objective" class="col-sm-2 control-label">Event Description</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">Description<br>Description<br>Description</p>
                      <p class="form-control-static">Description<br>Description<br>Description</p>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">Organising Chairperson</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">Organising Chairperson Name</p>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="objective" class="col-sm-2 control-label">Contact Number</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">Organising Chairperson Number</p>
                    </div>
                  </div>
                <!-- continue form in footer -->
          </div>

          <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Approve</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Disapprove</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- end Modal - Existing Proposal -->
</div>
@endsection

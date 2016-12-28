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
                <div class="panel-heading">PROPOSAL STATUS</div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <td></td>
                                <td>Title</td>
                                <td>Date Submitted</td>
                                <td>Status</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Test Proposal</td>
                                <td>19 JAN 2017</td>
                                <td class="text-success">Approved</td>
                                <td><button class="btn btn-primary" data-toggle="modal" data-target="#proposal1">VIEW</button></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Test Proposal 2</td>
                                <td>31 JAN 2017</td>
                                <td class="text-warning">Pending</td>
                                <td><button class="btn btn-primary" data-toggle="modal" data-target="#proposal1">VIEW</button></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Test Proposal 3</td>
                                <td>24 JAN 2017</td>
                                <td class="text-danger">Disapproved</td>
                                <td><button class="btn btn-primary" data-toggle="modal" data-target="#proposal1">VIEW</button></td>
                            </tr>
                        </table>
                    </div>

                    <!-- MODAL - PROPOSAL -->
                    <div class="modal fade" id="newproposal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">NEW PROPOSAL</h4>
                          </div>

                          <div class="modal-body">
                              <p>LAYOUT OF THE PROPOSAL HERE. ALL THE CLUB NAME WHAT TO FILL IN ETC... HERE'S A SAMPLE FORM FOR IT</p>
                              <p class="text-success">PART 1/3 EVENT PROPOSAL</p>
                              <hr>

                              <form class="form-horizontal">
                                  <div class="form-group">
                                    <label for="title" class="col-sm-2 control-label">Title</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="title" placeholder="Title">
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="objective" class="col-sm-2 control-label">Event Objective</label>
                                    <div class="col-sm-10">
                                      <textarea class="form-control" rows="2"></textarea>
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="objective" class="col-sm-2 control-label">Event Description</label>
                                    <div class="col-sm-10">
                                      <textarea class="form-control" rows="5"></textarea>
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="title" class="col-sm-2 control-label">Organising Chairperson</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="title" placeholder="Name">
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="objective" class="col-sm-2 control-label">Contact Number</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="title" placeholder="012-3456789">
                                    </div>
                                  </div>
                                <!-- continue form in footer -->
                          </div>

                          <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#newresponseplan">Save changes</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- MODAL - RESPONSE PLAN -->
                    <div class="modal fade" id="newresponseplan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">NEW EVENT RESPONSE PLAN</h4>
                          </div>

                          <div class="modal-body">
                              <p>LAYOUT OF THE RESPONSE PLAN HERE. ALL THE CLUB NAME WHAT TO FILL IN ETC... HERE'S A SAMPLE FORM FOR IT</p>
                              <p class="text-success">PART 2/3 EMERGENCY RESPONSE PLAN</p>
                              <hr>

                              <form class="form-horizontal">
                                  <div class="form-group">
                                    <label for="title" class="col-sm-2 control-label">Title</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="title" placeholder="Title">
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="objective" class="col-sm-2 control-label">Event Objective</label>
                                    <div class="col-sm-10">
                                      <textarea class="form-control" rows="2"></textarea>
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="objective" class="col-sm-2 control-label">Event Description</label>
                                    <div class="col-sm-10">
                                      <textarea class="form-control" rows="5"></textarea>
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="title" class="col-sm-2 control-label">Chief Warden</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="title" placeholder="Name">
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="objective" class="col-sm-2 control-label">Chief Warden Contact</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="title" placeholder="012-3456789">
                                    </div>
                                  </div>
                                <!-- continue form in footer -->
                          </div>

                          <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target="#newproposal">Previous</button>
                                <button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#newassessmentplan">Save changes</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>


                    <!-- MODAL - ASSESSMENT PLAN -->
                    <div class="modal fade" id="newassessmentplan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">NEW ASSESSMENT PLAN</h4>
                          </div>

                          <div class="modal-body">
                              <p>LAYOUT OF THE ASSESSMENT PLAN HERE. ALL THE CLUB NAME WHAT TO FILL IN ETC... HERE'S A SAMPLE FORM FOR IT</p>
                              <p class="text-success">PART 3/3 EVENT ASSESSMENT PLAN</p>
                              <hr>

                              <form class="form-horizontal">
                                  <div class="form-group">
                                    <label for="title" class="col-sm-2 control-label">Title</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="title" placeholder="Title">
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="objective" class="col-sm-2 control-label">Event Objective</label>
                                    <div class="col-sm-10">
                                      <textarea class="form-control" rows="2"></textarea>
                                    </div>
                                  </div>

                                  <h3>VENUE CHECK</h3>
                                  <div class="table-responsive">
                                      <table class="table">
                                          <tr>
                                              <td>Is this firehydrant working?</td>
                                              <td>
                                                <label class="checkbox-inline">
                                                  <input type="checkbox" id="checked_firehydrant" value="YES"> YES
                                                </label>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>Is this elevator working?</td>
                                              <td>
                                                <label class="checkbox-inline">
                                                  <input type="checkbox" id="checked_elevator" value="YES"> YES
                                                </label>
                                              </td>
                                          </tr>
                                      </table>
                                  </div>
                                <!-- continue form in footer -->
                          </div>

                          <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target="#newresponseplan">Previous</button>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-dismiss="modal">Submit</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>

                </div>

                <div class="panel-footer">
                    <a class="btn btn-success" href="{{ route('club.create') }}">NEW PROPOSAL</a>
                    {{-- <button class="btn btn-success" data-toggle="modal" data-target="#newproposal">NEW PROPOSAL</button> --}}
                </div>
            </div>
            {{-- end panel --}}

            <!-- MODAL - EXISTING PROPOSAL -->
            <div class="modal fade" id="proposal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">NEW PROPOSAL</h4>
                  </div>

                  <div class="modal-body">
                      <p>LAYOUT OF THE PROPOSAL HERE. ALL THE CLUB NAME WHAT TO FILL IN ETC... HERE'S A SAMPLE FORM FOR IT</p>
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
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#newresponseplan">Save changes</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection

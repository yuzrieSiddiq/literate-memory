@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>NEW PROPOSAL <small>#proposalID</small></h3>
                </div>
                <div class="panel-body">
                    <h4>PART 1/3: PROPOSAL</h4>
                    <hr>
                    <div class="form-horizontal">
                        {{-- Static : For showing only --}}
                        <div class="form-group">
                            <label class="col-sm-2 control-label">TO</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="THE REGISTRAR" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">CC</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="PRESIDENT, SSSC" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">FROM</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="STUDENT CLUB" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">RE</label>
                            <div class="col-sm-10">
                                <input type="title" class="form-control" id="eventTitle">
                            </div>
                        </div>

                        {{-- EventDescription table --}}
                        <hr>
                        <div class="form-group">
                            <h4 class="col-sm-12 text-center">EVENT DESCRIPTION</h4>
                        </div>

                        <div class="form-group">
                            <label for="objective" class="col-sm-2 control-label">OBJECTIVE</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="eventObjective">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description" class="col-sm-2 control-label">DESCRIPTION</label>
                            <div class="col-sm-10">
                                <textarea name="text" class="form-control" id="eventDescription" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="date" class="col-sm-2 control-label">DATE</label>
                            <div class="col-sm-10">
                              <input type="date" class="form-control datepicker" id="eventDate">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="date" class="col-sm-2 control-label">TIME</label>
                            <div class="col-sm-10">
                              <input type="time" class="form-control datepicker" id="eventTime">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="date" class="col-sm-2 control-label">VENUE</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control datepicker" id="eventVenue">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="date" class="col-sm-2 control-label">ATTENDANCE*</label>
                            <div class="col-sm-10">
                              <input type="number" class="form-control datepicker" id="eventEstimatedAttendance">
                            </div>
                        </div>

                        <hr>
                        <div class="form-group">
                            <h4 class="col-sm-12 text-center">EVENT WORKING COMMITTEE</h4>
                        </div>

                        <div class="form-group">
                            <label for="objective" class="col-sm-2 control-label">ADVISOR</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" disabled placeholder="ADVISOR">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="objective" class="col-sm-2 control-label">SECRETARY</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" disabled placeholder="SECRETARY">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="objective" class="col-sm-2 control-label">TREASURER</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" disabled placeholder="TREASURER">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="objective" class="col-sm-2 control-label">OC NAME</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="organisername">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="objective" class="col-sm-2 control-label">OC CONTACT</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="organisercontact">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="objective" class="col-sm-2 control-label">COMMITTEE</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="committeename">
                            </div>
                        </div>

                        {{-- Button to next part --}}
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" class="btn btn-default">Next</button>
                            </div>
                        </div>
                    </div> {{-- end .form-horizontal --}}
                </div> {{-- end .panel-body --}}
            </div> {{-- end .panel --}}
        </div> {{-- end .col --}}
    </div> {{-- end .row --}}
</div> {{-- end .container --}}
@endsection

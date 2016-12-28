@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#event-description" aria-controls="event-description" role="tab" data-toggle="tab">Event Description</a></li>

                <li role="presentation"><a href="#event-programme" aria-controls="event-programme" role="tab" data-toggle="tab">Event Programme</a></li>

                <li role="presentation"><a href="#event-equipment" aria-controls="event-equipment" role="tab" data-toggle="tab">Event Equipment</a></li>

                <li role="presentation"><a href="#event-budget" aria-controls="event-budget" role="tab" data-toggle="tab">Event Budget</a></li>
            </ul>

              <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="event-description">
                    <div class="form-horizontal" id="form-event-description">
                        <div class="form-group">
                            <h4 class="col-sm-12 text-center">EVENT PARTICULARS</h4>
                        </div>
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
                            <label for="date" class="col-sm-2 control-label">ATTENDANCE <small><a data-toggle="tooltip" data-placement="top" title="Rough estimate numbers of event attendees">?</a></small></label>
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
                            <label for="objective" class="col-sm-2 control-label">OC NAME <small><a data-toggle="tooltip" data-placement="top" title="Event Organiser / Organising Chairperson">?</a></small></label></label>
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
                              <a class="btn btn-primary" href="#event-programme" aria-controls="home" role="tab" data-toggle="tab">Next</a>
                            </div>
                        </div>
                    </div> {{-- end .form-horizontal --}}
                </div> {{-- end tab: 1. Event Description --}}

                <div role="tabpanel" class="tab-pane fade" id="event-programme">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <h4 class="col-sm-12 text-center">EVENT PROGRAMME</h4>
                        </div>

                    </div> {{-- end .form-horizontal --}}
                </div> {{-- end tab: 2. Event Programme --}}

                <div role="tabpanel" class="tab-pane fade" id="event-equipment">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <h4 class="col-sm-12 text-center">BORROW EQUIPMENT FROM FACILITIES/ITS</h4>
                        </div>

                    </div> {{-- end .form-horizontal --}}
                </div> {{-- end tab: 3. Event Equipment --}}

                <div role="tabpanel" class="tab-pane fade" id="event-budget">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <h4 class="col-sm-12 text-center">CASH FLOW</h4>
                        </div>

                    </div> {{-- end .form-horizontal --}}
                </div> {{-- end tab: 4. Event Budget --}}

            </div>
        </div> {{-- end .col --}}
    </div> {{-- end .row --}}
</div> {{-- end .container --}}
@endsection

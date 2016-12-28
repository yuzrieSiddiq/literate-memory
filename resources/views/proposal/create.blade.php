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
            <h4 class="pull-right text-muted">PROPOSAL ID</h4>
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
                            <label for="date" class="col-sm-2 control-label">ATTENDANCE <span><a class="help-hover" data-toggle="tooltip" data-placement="top" title="Rough estimate numbers of event attendees">?</a></span></label>
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
                            <label for="objective" class="col-sm-2 control-label">OC NAME <small><a class="help-hover" data-toggle="tooltip" data-placement="top" title="Event Organiser / Organising Chairperson">?</a></small></label></label>
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

                        <hr>
                        <div class="form-group">
                            <h4 class="col-sm-12 text-center">REQUESTS</h4>
                            <p class="text-center text-danger">Leave the checkboxes unchecked if not needed</p>
                        </div>

                        <div class="form-group">
                            <label for="objective" class="col-sm-offset-2 col-sm-6">Would you like to request for <strong>equipments from Facilities/ITS?</strong></label>
                            <div class="col-sm-4">
                                <label class="checkbox">
                                    <input type="checkbox" id="isEquipmentRequested" value="yes"> YES
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="objective" class="col-sm-offset-2 col-sm-6">Would you like to request for <strong>funds from SSSC?</strong></label>
                            <div class="col-sm-4">
                                <label class="checkbox">
                                    <input type="checkbox" id="isEquipmentRequested" value="yes"> YES
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="objective" class="col-sm-offset-2 col-sm-6">Does the event involves third party? <strong>(Executive Group Involvement)</strong></label>
                            <div class="col-sm-4">
                                <label class="checkbox">
                                    <input type="checkbox" id="isEquipmentRequested" value="yes"> YES
                                </label>
                            </div>
                        </div>

                        {{-- Button to next part --}}
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <a class="btn btn-primary" href="#event-programme" aria-controls="event-programme" role="tab" data-toggle="tab">Next <span class="glyphicon glyphicon-chevron-right"></span></a>
                            </div>
                        </div>

                    </div> {{-- end .form-horizontal --}}
                </div> {{-- end tab: 1. Event Description --}}

                <div role="tabpanel" class="tab-pane fade" id="event-programme">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <h4 class="col-sm-12 text-center">EVENT PROGRAMME</h4>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped table-condensed" id="event_programme_table">
                                <tr>
                                    <td class="text-center">Date/Time</td>
                                    <td class="text-center">Schedule</td>
                                    <td class="text-center">Venue</td>
                                    <td></td>
                                </tr>
                                <tr class="hidden tr_template">
                                    <td class="datetime">
                                        <input type="text" class="form-control">
                                    </td>
                                    <td class="schedule">
                                        <input type="text" class="form-control">
                                    </td>
                                    <td class="venue">
                                        <input type="text" class="form-control">
                                    </td>
                                    <td class="remove">
                                        <button class="btn btn-danger pull-right"><span class="glyphicon glyphicon-remove"></span></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        <button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> ADD TIMESLOT</button>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        {{-- Button to next part --}}
                        <a class="btn btn-default" href="#event-description" aria-controls="event-description" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-chevron-left"></span> Previous</a>

                        <a class="btn btn-primary" href="#event-equipment" aria-controls="event-equipment" role="tab" data-toggle="tab">Next <span class="glyphicon glyphicon-chevron-right"></span></a>

                    </div> {{-- end .form-horizontal --}}
                </div> {{-- end tab: 2. Event Programme --}}

                <div role="tabpanel" class="tab-pane fade" id="event-equipment">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <h4 class="col-sm-12 text-center">BORROW EQUIPMENT FROM FACILITIES/ITS</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped" id="borrow_equipments_table">
                                <tr>
                                    <td class="text-center col-md-9">Item <a class="help-hover" data-toggle="tooltip" data-placement="top" title="e.g: Microphones, Signage stands, extension wires, etc...">?</a>
                                    </td>
                                    <td class="text-center col-md-2">Amount</td>
                                    <td class="col-md-1"></td>
                                </tr>
                                <tr class="hidden tr_template">
                                    <td class="item">
                                        <select class="form-control item_select">
                                            <option value="item001">Microphone</option>
                                            <option value="item002">Signage stand</option>
                                            <option value="item003">Extension wire (5M)</option>
                                            <option value="item004">Extension wire (15M)</option>
                                        </select>
                                    </td>
                                    <td class="amount">
                                        <input type="number" class="form-control">
                                    </td>
                                    <td class="remove">
                                        <button class="btn btn-danger pull-right"><span class="glyphicon glyphicon-remove"></span></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> ADD ITEM</button>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        {{-- Button to next part --}}
                        <a class="btn btn-default" href="#event-programme" aria-controls="event-programme" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-chevron-left"></span> Previous</a>

                        <a class="btn btn-primary" href="#event-budget" aria-controls="event-budget" role="tab" data-toggle="tab">Next <span class="glyphicon glyphicon-chevron-right"></span></a>

                    </div> {{-- end .form-horizontal --}}
                </div> {{-- end tab: 3. Event Equipment --}}

                <div role="tabpanel" class="tab-pane fade" id="event-budget">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <h4 class="col-sm-12 text-center">CASH FLOW</h4>
                        </div>

                        <div class="form-group">
                            <h5 class="col-sm-12">EXPECTED EXPENDITURE</h5>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="budget_expenditure_table">
                                <tr>
                                    <td class="text-center col-md-9">Description</td>
                                    <td class="text-center col-md-2">Cost</td>
                                    <td class="col-md-1"></td>
                                </tr>
                                <tr class="hidden tr_template">
                                    <td class="description">
                                        <input type="text" class="form-control">
                                    </td>
                                    <td class="cost">
                                        <div class="input-group">
                                            <div class="input-group-addon">RM</div>
                                            <input type="number" class="form-control">
                                        </div>
                                    </td>
                                    <td class="remove">
                                        <button class="btn btn-danger pull-right"><span class="glyphicon glyphicon-remove"></span></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> ADD ITEM</button>
                                    </td>
                                </tr>
                            </table>
                        </div> {{-- end .table-responsive --}}
                        <div class="form-group">
                            <label class="col-sm-8 control-label">TOTAL EXPENDITURE</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" value="0" disabled>
                            </div>
                        </div> {{-- end total expenditure --}}
                        {{-- end #budget_expenditure_table --}}

                        <div class="form-group">
                            <h5 class="col-sm-12">EXPECTED INCOME</h5>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="budget_income_table">
                                <tr>
                                    <td class="text-center col-md-9">Description</td>
                                    <td class="text-center col-md-2">Cost</td>
                                    <td class="col-md-1"></td>
                                </tr>
                                <tr class="hidden tr_template">
                                    <td class="description">
                                        <input type="text" class="form-control">
                                    </td>
                                    <td class="cost">
                                        <div class="input-group">
                                            <div class="input-group-addon">RM</div>
                                            <input type="number" class="form-control">
                                        </div>
                                    </td>
                                    <td class="remove">
                                        <button class="btn btn-danger pull-right"><span class="glyphicon glyphicon-remove"></span></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> ADD ITEM</button>
                                    </td>
                                </tr>
                            </table>
                        </div> {{-- end .table-responsive --}}
                        <div class="form-group">
                            <label class="col-sm-8 control-label">TOTAL INCOME</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" value="0" disabled>
                            </div>
                        </div> {{-- end total income --}}
                        {{-- end #budget_expenditure_table --}}

                        <div class="form-group">
                            <h5 class="col-sm-12">FUNDS REQUESTED FROM SSSC</h5>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="budget_expenditure_table">
                                <tr>
                                    <td class="text-center col-md-9">Description</td>
                                    <td class="text-center col-md-2">Cost</td>
                                    <td class="col-md-1"></td>
                                </tr>
                                <tr class="hidden tr_template">
                                    <td class="description">
                                        <input type="text" class="form-control">
                                    </td>
                                    <td class="cost">
                                        <div class="input-group">
                                            <div class="input-group-addon">RM</div>
                                            <input type="number" class="form-control">
                                        </div>
                                    </td>
                                    <td class="remove">
                                        <button class="btn btn-danger pull-right"><span class="glyphicon glyphicon-remove"></span></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> ADD ITEM</button>
                                    </td>
                                </tr>
                            </table>
                        </div> {{-- end .table-responsive --}}
                        <div class="form-group">
                            <label class="col-sm-8 control-label">APPROVED BY SSSC</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" value="0" disabled>
                            </div>
                        </div> {{-- end total cost --}}
                        {{-- end #budget_expenditure_table --}}

                        {{-- Button to next part --}}
                        <a class="btn btn-default" href="#event-equipment" aria-controls="event-equipmenet" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-chevron-left"></span> Previous</a>

                        <a class="btn btn-primary" href="#event-responseplan" aria-controls="event-responseplan" role="tab" data-toggle="tab">Next <span class="glyphicon glyphicon-chevron-right"></span></a>

                        <button type="submit" class="btn btn-success submit" data-method="POST" data-url="{{ route('club.store') }}">Submit</button>

                    </div> {{-- end .form-horizontal --}}
                </div> {{-- end tab: 4. Event Budget --}}

            </div>
        </div> {{-- end .col --}}
    </div> {{-- end .row --}}
</div> {{-- end .container --}}
@endsection

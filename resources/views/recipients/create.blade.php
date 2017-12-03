@foreach($items0 as $item0)
<div class="modal fade modalMolder" id="create0{{$item0->id}}" donorid="" role="dialog">
    <div class="modal-dialog">
        <div class="panel panel-default">
            <div class="panel-heading">
                Request Blood
            </div>
            <form class="form-horizontal" method="POST" action="/brequest">
            {{ csrf_field() }}
                <div class="panel-body">
                    <input type="hidden" value="{{$item0->id}}" id="modal-recipient-id" name="recipient_id">
                    <input type="hidden" id="modal-donor_type" name="donor_type" value="Blood Bank">

                    <div class="form-group">
                        <label for="contact" class="col-md-4 control-label">Blood Bank: </label>
                        <div class="col-md-7">
                            <input type="text" rows=10 cols="10" id="modal_donor_name" class="form-control" name="donor" readonly value="{{$item0->name}}"> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="contact" class="col-md-4 control-label">Blood Bank: </label>
                        <div class="col-md-7">
                            <input type="text" rows=10 cols="10" id="modal_email" class="form-control" name="email" readonly value="{{$item0->email}}"> 
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="contact" class="col-md-4 control-label">Location: </label>
                        <div class="col-md-7">
                            <input type="text" rows=10 cols="10" id="modal-location" class="form-control" name="location" readonly value="{{$item0->location}}"> 
                        </div>
                    </div>                    

                    <div class="form-group">
                        <label for="contact" class="col-md-4 control-label">Type : </label>
                        <div class="col-md-7">
                            <select class="form-control" name="blood_type" id="modal-blood_type">
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>   
                                <option value="O-">O-</option>                                
                            </select>
                        </div>
                    </div>    

                    <div class="form-group">
                        <label for="contact" class="col-md-4 control-label">Message : </label>
                        <div class="col-md-7">
                            <textarea type="text" rows=10 cols="10" class="form-control" name="message"></textarea> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="contact" class="col-md-4 control-label">Size : </label>
                        <div class="col-md-7">
                            <input type="number" class="form-control" name="size">
                        </div>
                    </div>


                </div>
                <div class="panel-footer clearfix">
                    <button type="submit" class="btn btn-danger pull-right" style="margin-right: 10px;">
                        <i class="fa fa-check-circle" aria-hidden="true"></i> Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

@foreach($items as $item)
<div class="modal fade modalMolder" id="create{{$item->id}}" donorid="" role="dialog">
    <div class="modal-dialog">
        <div class="panel panel-default">
            <div class="panel-heading">
                Request Blood
            </div>
            <form class="form-horizontal" method="POST" action="/brequest">
            {{ csrf_field() }}
                <div class="panel-body">
                    <input type="hidden" value="{{$item->id}}" id="modal-recipient-id" name="recipient_id">
                    <input type="hidden" id="modal-donor_type" name="donor_type" value="Person Donor">

                    <div class="form-group">
                        <label for="contact" class="col-md-4 control-label">Donor Name : </label>
                        <div class="col-md-7">
                            <input type="text" rows=10 cols="10" id="modal_donor_name" class="form-control" name="donor" readonly value="{{$item->first_name . ' ' . $item->last_name }}"> 
                        </div>
                    </div>


                  <div class="form-group">
                        <label for="contact" class="col-md-4 control-label">Blood Bank: </label>
                        <div class="col-md-7">
                            <input type="text" rows=10 cols="10" id="modal_email" class="form-control" name="email" readonly value="{{$item->email}}"> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="contact" class="col-md-4 control-label">Location: </label>
                        <div class="col-md-7">
                            <input type="text" rows=10 cols="10" id="modal-location" class="form-control" name="location" readonly value="{{$item->location}}"> 
                        </div>
                    </div>                    

                    <div class="form-group">
                        <label for="contact" class="col-md-4 control-label">Type : </label>
                        <div class="col-md-7">
                            <select class="form-control" name="blood_type" id="modal-blood_type">
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="AB">AB</option>
                                <option value="O">O</option>                                
                            </select>
                        </div>
                    </div>    

                    <div class="form-group">
                        <label for="contact" class="col-md-4 control-label">Message : </label>
                        <div class="col-md-7">
                            <textarea type="text" rows=10 cols="10" class="form-control" name="message"></textarea> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="contact" class="col-md-4 control-label">Size : </label>
                        <div class="col-md-7">
                            <input type="number" class="form-control" name="size">
                        </div>
                    </div>


                </div>
                <div class="panel-footer clearfix">
                    <button type="submit" class="btn btn-danger pull-right" style="margin-right: 10px;">
                        <i class="fa fa-check-circle" aria-hidden="true"></i> Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
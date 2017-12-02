
<div class="modal fade modalMolder" id="create" donorid="" role="dialog">
    <div class="modal-dialog">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color: #bf5329; border-top-color: #bf5329; color: #fff" >
                I want to donate blood!
            </div>
            <form class="form-horizontal" method="POST" action="/donorsched">
            {{ csrf_field() }}
                <div class="panel-body">
                    <input type="hidden" id="modal-donor-id" name="donor_id">

                    <div class="form-group">
                        <label for="contact" class="col-md-4 control-label">Desired Date : </label>
                        <div class="col-md-7">
                            <input type="date" class="form-control" name="desired_schedule">
                        </div>
                    </div>   

                    <div class="form-group">
                        <label for="contact" class="col-md-4 control-label">Message : </label>
                        <div class="col-md-7">
                            <textarea type="text" rows=10 cols="10" class="form-control" name="message"></textarea> 
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
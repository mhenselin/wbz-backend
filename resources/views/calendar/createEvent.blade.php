<div class="modal fade" id="NewEventModalCenter" tabindex="-1" role="dialog" aria-labelledby="NewEventModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="NewEventModalCenterTitle">Neuer Kalendereintrag</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ route('event_create') }}">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Titel</label>
                        <input id="title" name="title" type="text" class="form-control">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="start">beginnt</label>
                                    <div class="input-group date" id="datetimepickerStart" data-target-input="nearest">
                                        <input id="start" name="start" type="text" class="form-control">
                                        <div class="input-group-append" data-target="#datetimepickerStart" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="end">endet</label>
                                    <div class="input-group date" id="datetimepickerEnd" data-target-input="nearest">
                                        <input id="end" name="end" type="text" class="form-control">
                                        <div class="input-group-append" data-target="#datetimepickerEnd" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="allDay" value="allDay"> ganzer Tag
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Zurück</button>
                    <input type="submit" name="submit" value="Erstellen" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
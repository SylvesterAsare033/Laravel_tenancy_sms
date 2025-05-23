<div class="card">
    <div class="card-header header-elements-inline">
        <h6 class="card-title"><i class="material-symbols-rounded mr-2">file_save</i> Batch Template </h6>
        {!! Qs::getPanelOptions() !!}
    </div>

    <div class="card-body">
        <form method="get" action="{{ route('marks.batch_template') }}">
            <div class="row">
                <div class="col-md-9">
                    <fieldset>

                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="exam_id" class="col-form-label font-weight-bold">Exam: <span class="text-danger">*</span></label>
                                    <select required id="exam_id" name="exam_id" data-placeholder="Select Exam" class="form-control select-search">
                                        <option selected disabled value="">Select exam</option>
                                        @foreach($exams as $ex)
                                        <option value="{{ $ex->id }}">{{ $ex->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="my_class_id" class="col-form-label font-weight-bold">Class: <span class="text-danger">*</span></label>
                                    <select required data-placeholder="Select Class" onchange="getClassSections(this.value)" id="my_class_id" name="my_class_id" class="form-control select">
                                        <option selected disabled value="">Select Class</option>
                                        @foreach($my_classes as $c)
                                        <option value="{{ $c->id }}">{{ $c->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="delete-old-section-exam-recs" class="col-form-label font-weight-semibold">Delete old section record</label>
                                <div class="form-group text-center">
                                    <select class="form-control select" name="delete_old_section_record" id="delete-old-section-exam-recs">
                                        <option value="1">Yes</option>
                                        <option selected value="0">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </fieldset>
                </div>

                <div class="col-md-3 mt-4">
                    <div class="text-right mt-1">
                        <button type="submit" class="btn btn-sm btn-primary">Download Spreadsheet Template <i class="material-symbols-rounded ml-2">download</i></button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

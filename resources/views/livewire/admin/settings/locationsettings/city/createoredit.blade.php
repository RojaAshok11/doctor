<div wire:ignore.self class="modal fade" id="createoreditModal" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="createoreditModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form wire:submit.prevent="store" enctype="multipart/form-data">
                <div class="modal-header text-white theme_bg_color px-3 py-2">
                    <h5 class="modal-title" id="createoreditModalLabel">
                        {{ isset($this->model_id) ? 'UPDATE' : 'CREATE' }}
                        CITY </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body bg-white">
                    <div class="row g-3">
                        @include('helper.formhelper.form', [
                            'type' => 'text',
                            'fieldname' => 'form.name',
                            'labelname' => 'CITY NAME',
                            'labelidname' => 'nameid',
                            'required' => true,
                            'readonly' => false,
                            'col' => 'col-md-4',
                        ])


                        @include('helper.formhelper.form', [
                            'type' => 'select',
                            'fieldname' => 'form.state_id',
                            'labelname' => 'SELECT STATE',
                            'labelidname' => 'state_id',
                            'option' => $this->state,
                            'default_option' => 'Select a State',
                            'required' => true,
                            'readonly' => false,
                            'col' => 'col-md-4',
                        ])
                        @include('helper.formhelper.form', [
                            'type' => 'formswitch',
                            'fieldname' => 'form.active',
                            'labelname' => 'ACTIVE',
                            'labelidname' => 'activeid',
                            'required' => false,
                            'readonly' => false,
                            'col' => 'col-md-4',
                        ])
                        @include('helper.formhelper.form', [
                            'type' => 'textarea',
                            'fieldname' => 'form.note',
                            'labelname' => 'NOTE',
                            'labelidname' => 'noteid',
                            'required' => false,
                            'readonly' => false,
                            'col' => 'col-md-8',
                        ])


                    </div>
                </div>
                <div class="modal-footer bg-light px-2 py-1">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">
                        {{ isset($this->model_id) ? 'Update' : 'Create' }}
                        <span wire:loading.delay class="spinner-border spinner-border-sm" role="status"
                            aria-hidden="true">
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

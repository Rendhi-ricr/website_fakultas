<?= $this->extend('layouts/backend/base_layouts') ?>
<?= $this->section('title') ?>Message<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <!-- Tabs for All, Draft, Trash -->
        <ul class="nav nav-tabs" id="agendaTabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="inbox-tab" data-toggle="tab" href="#inbox" role="tab" aria-controls="inbox" aria-selected="true">Inbox</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="send-tab" data-toggle="tab" href="#send" role="tab" aria-controls="send" aria-selected="false">Send</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="draft-tab" data-toggle="tab" href="#draft" role="tab" aria-controls="draft" aria-selected="false">Draft</a>
            </li>
        </ul>
        <div class="tab-content" id="agendaTabsContent">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Compose
            </button>
            <!-- All Tab Content -->
            <div class="tab-pane fade show active" id="inbox" role="tabpanel" aria-labelledby="inbox-tab">

                <div class="card-datatable table-responsive pt-0">

                    <table class="datatables-basic table">
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th>id</th>
                                <th>Name</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- All Data -->
                        </tbody>
                    </table>
                </div>
            </div>




            <!-- Trash Tab Content -->
            <div class="tab-pane fade" id="send" role="tabpanel" aria-labelledby="send-tab">
                <div class="card-datatable table-responsive pt-0">
                    <table class="datatables-basic table">
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th>id</th>
                                <th>Name</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Trash Data -->
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Draft Tab Content -->
            <div class="tab-pane fade" id="draft" role="tabpanel" aria-labelledby="draft-tab">
                <div class="card-datatable table-responsive pt-0">
                    <table class="datatables-basic table">
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th>id</th>
                                <th>Name</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Draft Data -->
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Compose</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="row mb-3">
                                        <div class="col-md-3">
                                            <label class="form-label" for="to">To</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control mb-3" id="to" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-3">
                                            <label class="form-label" for="subject">Subject</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control mb-3" id="subject" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-3">
                                            <label class="form-label" for="editor">Message</label>
                                        </div>
                                        <div class="col-md-9 mb-3">
                                            <textarea id="editor"></textarea>
                                        </div>
                                    </div>



                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Draft</button>
                        <button type="button" class="btn btn-primary">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->extend('layouts/backend/base_layouts') ?>
<?= $this->section('title') ?>Agenda<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <!-- Tabs for All, Draft, Trash -->
        <ul class="nav nav-tabs" id="agendaTabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">All</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="draft-tab" data-toggle="tab" href="#draft" role="tab" aria-controls="draft" aria-selected="false">Draft</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="trash-tab" data-toggle="tab" href="#trash" role="tab" aria-controls="trash" aria-selected="false">Trash</a>
            </li>
        </ul>
        <div class="tab-content" id="agendaTabsContent">
            <!-- All Tab Content -->
            <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                <div class="card-datatable table-responsive pt-0">
                    <table class="datatables-basic table">
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th>id</th>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Date Post</th>
                                <th>User</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- All Data -->
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
                                <th>No</th>
                                <th>Judul</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Date Post</th>
                                <th>User</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Draft Data -->
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Trash Tab Content -->
            <div class="tab-pane fade" id="trash" role="tabpanel" aria-labelledby="trash-tab">
                <div class="card-datatable table-responsive pt-0">
                    <table class="datatables-basic table">
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th>id</th>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Date Post</th>
                                <th>User</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Trash Data -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
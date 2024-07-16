<?= $this->extend('layouts/backend/base_layouts') ?>
<?= $this->section('title') ?>Gallery<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-datatable table-responsive pt-0">
            <table class="datatables-basic table">
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>id</th>
                        <th>No</th>
                        <th>Album Name</th>
                        <th>Album Cover</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Count File</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
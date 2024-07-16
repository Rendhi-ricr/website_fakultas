<?= $this->extend('layouts/backend/base_layouts') ?>
<?= $this->section('title') ?>Page<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-body">
            <form>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="wn" class="form-label">Website Name</label>
                        <input type="text" class="form-control mb-3" id="wn" placeholder="Website Name">
                        <div class="col-md-6">
                            <label for="favicon" class="form-label">Favicon</label>
                            <input type="file" class="form-control" id="favicon">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3>Page Admin</h3>
                        <label for="la" class="form-label">Logo Admin</label>
                        <input type="file" class="form-control mb-3" id="la">
                        <label for="ta" class="form-label">Title Admin</label>
                        <input type="text" class="form-control mb-3" id="ta" placeholder="Title Admin">
                        <label for="ha" class="form-label">Header Admin</label>
                        <input type="text" class="form-control" id="ha" placeholder="Header Admin">
                    </div>
                </div>
                <hr>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <h3>Page Login</h3>
                        <label for="ll" class="form-label">Logo Login</label>
                        <input type="file" class="form-control mb-3" id="ll">
                        <label for="tl" class="form-label">Title Login</label>
                        <input type="text" class="form-control" id="tl" placeholder="Title Login">
                    </div>
                    <div class="col-md-6">
                        <h3>Page Public</h3>
                        <label for="lpub" class="form-label">Logo Public</label>
                        <input type="file" class="form-control mb-3" id="lpub">
                        <label for="tpub" class="form-label">Title Public</label>
                        <input type="text" class="form-control" id="tpub" placeholder="Title Public">
                        <label for="hpub" class="form-label">Header Public</label>
                        <input type="text" class="form-control" id="hpub" placeholder="Header Public">
                    </div>
                </div>
                <hr>
                <h3>Page Portal</h3>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="lp" class="form-label">Logo Portal</label>
                        <input type="file" class="form-control mb-3" id="lp">
                        <label for="tp" class="form-label">Title Portal</label>
                        <input type="text" class="form-control mb-3" id="tp" placeholder="Title Portal">
                        <label for="hp" class="form-label">Header Portal</label>
                        <input type="text" class="form-control mb-3" id="hp" placeholder="Header Portal">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
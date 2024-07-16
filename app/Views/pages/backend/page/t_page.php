<?= $this->extend('layouts/backend/base_layouts') ?>
<?= $this->section('title') ?>Tambah Berita<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="col-12">
        <div class="card">
            <h5 class="card-header">Form Tambah Berita</h5>
            <div class="card-body">
                <form class="form-repeater">
                    <div class="row">
                        <div class="mb-6 col-lg-6 col-xl-8 col-12 mb-0">
                            <label class="form-label" for="form-repeater-1-1-4">Judul</label>
                            <input type="text" id="form-repeater-1-1" class="form-control" />
                        </div>
                        <div class="mb-6 col-lg-6 col-xl-4 col-12 mb-0">
                            <label class="form-label" for="form-repeater-1-4">Kategori</label>
                            <select id="form-repeater-1-4" class="form-control">
                                <option value="kategori1">Kategori 1</option>
                                <option value="kategori2">Kategori 2</option>
                                <option value="kategori3">Kategori 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-6 col-lg-6 col-xl-8 col-12 mb-0">
                            <label class="form-label" for="editor">Deskripsi</label>
                            <div id="editor"></div>
                        </div>
                        <div class="mb-6 col-lg-6 col-xl-2 col-12 mb-0">
                            <label class="form-label">Status</label>
                            <div class="form-check">
                                <input type="radio" id="status-publish" name="status" value="publis" class="form-check-input" />
                                <label class="form-check-label" for="status-publish">Publish</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="status-draft" name="status" value="draft" class="form-check-input" />
                                <label class="form-check-label" for="status-draft">Draft</label>
                            </div>
                            <div class="mb-6 col-lg-12 col-xl-12 col-12 mb-0 mt-3">
                                <label class="form-label" for="form-repeater-1-1-4-1">Date Post</label>
                                <input type="date" id="form-repeater-1-1-4-1" class="form-control" />
                            </div>
                            <div class="mb-6 col-lg-12 col-xl-12 col-12 mb-0 mt-3">
                                <label class="form-label" for="form-repeater-1-1-4-1">Time Post</label>
                                <input type="time" id="form-repeater-1-1-4-1" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="mb-0">
                        <button class="btn btn-primary" data-repeater-create>
                            <i class="ti ti-plus ti-xs me-2"></i>
                            <span class="align-middle">Add</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
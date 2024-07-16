<?= $this->extend('layouts/backend/base_layouts') ?>
<?= $this->section('title') ?>Tambah Staff<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-body">
            <form>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label class="form-label" for="name">Name</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control mb-3" id="name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label class="form-label" for="position">Position</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control mb-3" id="position   ">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label class="form-label" for="status">Status</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-check">
                                    <input type="radio" id="status-publish" name="status" value="publis" class="form-check-input" />
                                    <label class="form-check-label" for="status-publish">Publish</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" id="status-draft" name="status" value="draft" class="form-check-input" />
                                    <label class="form-check-label" for="status-draft">Draft</label>
                                </div>
                            </div>
                        </div>


                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label class="form-label" for="foto">Foto</label>
                            </div>
                            <div class="col-md-8">
                                <input type="file" class="form-control mb-3" id="foto" onchange="previewImage(event)">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <div class="col-md-6">
                        <img id="preview" src="" alt="Image Preview" style="max-width: 100%; display: none;">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function previewImage(event) {
        const input = event.target;
        const reader = new FileReader();
        reader.onload = function() {
            const preview = document.getElementById('preview');
            preview.src = reader.result;
            preview.style.display = 'block';
        };
        reader.readAsDataURL(input.files[0]);
    }
</script>
<?= $this->endSection() ?>
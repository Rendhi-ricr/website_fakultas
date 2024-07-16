<?= $this->extend('layouts/backend/base_layouts') ?>
<?= $this->section('title') ?>Tambah Gallery<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-body">
            <form>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label class="form-label" for="an">Album Name</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control mb-3" id="an">
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
                                <label class="form-label" for="form-repeater-1-1-4-1">Date Post</label>
                            </div>
                            <div class="col-md-8">
                                <input type="date" id="form-repeater-1-1-4-1" class="form-control " />
                            </div>

                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label class="form-label" for="form-repeater-1-1-4-1">Time Post</label>

                            </div>
                            <div class="col-md-8">
                                <input type="time" id="form-repeater-1-1-4-1" class="form-control" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label class="form-label" for="ac">Album Cover</label>
                            </div>
                            <div class="col-md-8">
                                <input type="file" class="form-control mb-3" id="ac" onchange="previewImage(event)">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label class="form-label" for="ad">Album Description</label>
                            </div>
                            <div class="col-md-8">
                                <textarea id="ad" class="form-control mb-3"></textarea>

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
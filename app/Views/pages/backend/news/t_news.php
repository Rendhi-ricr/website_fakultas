<?= $this->extend('layouts/backend/base_layouts') ?>
<?= $this->section('title') ?>Tambah Berita<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header">Form Tambah Berita</h5>
        <div class="card-body">
            <form>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label class="form-label" for="judul">Judul</label>
                                <input type="text" id="judul" class="form-control mb-3" />
                                <label class="form-label" for="editor">Description</label>
                                <textarea id="editor"></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label" for="form-repeater-1-4">Kategori</label>
                                <select id="form-repeater-1-4" class="form-control mb-3">
                                    <option value="kategori1">Kategori 1</option>
                                    <option value="kategori2">Kategori 2</option>
                                    <option value="kategori3">Kategori 3</option>
                                </select>
                                <label class="form-label">Status</label>
                                <div class="form-check">
                                    <input type="radio" id="status-publish" name="status" value="publis" class="form-check-input" />
                                    <label class="form-check-label mb-3" for="status-publish">Publish</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" id="status-draft" name="status" value="draft" class="form-check-input" />
                                    <label class="form-check-label mb-3" for="status-draft">Draft</label>
                                </div>
                                <label class="form-label" for="dp">Date Post</label>
                                <input type="date" id="dp" class="form-control mb-3" />
                                <label class="form-label" for="tp">Time Post</label>
                                <input type="time" id="tp" class="form-control mb-3" />
                                <label class="form-label" for="foto">Foto</label>
                                <input type="file" class="form-control mb-3" id="foto" onchange="previewImage(event)">
                                <img id="preview" src="#" alt="Preview Image" class="img-thumbnail mb-3" style="display: none; max-width: 100%; height: auto;">

                                <label class="form-label" for="pd">Photo Description</label>
                                <textarea id="pd"></textarea>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
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
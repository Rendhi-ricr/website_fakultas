<?= $this->extend('layouts/backend/base_layouts') ?>
<?= $this->section('title') ?>Contact<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-body">
            <form>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <h5>Setting Address</h5>
                        <div class="row mb-3">

                            <div class="col-md-12">
                                <label class="form-label" for="caption">Caption 1</label>
                                <input type="text" class="form-control mb-3" id="caption">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label class="form-label" for="address">Address 1</label>
                                <input type="text" class="form-control mb-3" id="address">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label class="form-label" for="phone">Phone 1</label>
                                <input type="text" class="form-control mb-3" id="phone">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label class="form-label" for="email">Email</label>
                                <input type="text" class="form-control mb-3" id="email">
                            </div>
                        </div>

                        <hr>
                        <h5>Link Social Media</h5>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label class="form-label" for="fb">Facebook</label>
                                <input type="text" class="form-control mb-3" id="fb">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label class="form-label" for="twitter">Twitter</label>
                                <input type="text" class="form-control mb-3" id="twitter">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label class="form-label" for="ig">Instagram</label>
                                <input type="text" class="form-control mb-3" id="ig">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label class="form-label" for="google">Google +</label>
                                <input type="text" class="form-control mb-3" id="google">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label class="form-label" for="yt">Youtube</label>
                                <input type="text" class="form-control mb-3" id="yt">
                            </div>
                        </div>


                    </div>
                    <div class="col-md-6">
                        <h5>Setting Maps</h5>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label class="form-label" for="latitude">Latitude</label>
                                <input type="text" class="form-control mb-3" id="latitude">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label class="form-label" for="longitude">Longitude</label>
                                <input type="text" class="form-control mb-3" id="longitude">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label class="form-label" for="zoom">Zoom</label>
                                <input type="text" class="form-control mb-3" id="zoom">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.5558976675597!2d107.780354075003!3d-6.577592664299362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e693b4130dcd33f%3A0xb8f2d91a2faaa0fe!2sUniversitas%20Subang!5e0!3m2!1sid!2sid!4v1721114897362!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
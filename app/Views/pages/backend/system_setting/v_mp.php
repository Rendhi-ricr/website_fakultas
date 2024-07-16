<?= $this->extend('layouts/backend/base_layouts') ?>
<?= $this->section('title') ?>Menu Public<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-body">
            <form>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label class="form-label" for="level">Level</label>
                            </div>
                            <div class="col-md-8">
                                <select id="level" class="form-control mb-3">
                                    <option value="mainmenu">Mainmenu</option>
                                    <option value="submenu">Submenu</option>
                                    <option value="threemenu">Threemenu</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label class="form-label" for="mm">Main Menu</label>
                            </div>
                            <div class="col-md-8">
                                <input type="file" class="form-control mb-3" id="mm">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label class="form-label" for="direct">Direct</label>
                            </div>
                            <div class="col-md-3">
                                <select id="direct" class="form-control mb-3">
                                    <option value="site">site://</option>
                                    <option value="http">http://</option>
                                    <option value="https">https://</option>
                                    <option value="https">none</option>
                                </select>
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control mb-3" id="direct">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label class="form-label" for="target">Target</label>
                            </div>
                            <div class="col-md-8">
                                <select id="target" class="form-control mb-3">
                                    <option value="pageini">Page Ini</option>
                                    <option value="pagebaru">Page Baru</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label class="form-label" for="status">Status</label>
                            </div>
                            <div class="col-md-8">
                                <select id="status" class="form-control mb-3">
                                    <option value="aktif">Aktif</option>
                                    <option value="ta">Tidak Aktif</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <div class="col-md-6">
                        <div class="table-buttons">
                            <button id="deleteSelected" class="btn btn-danger">Hapus Terpilih</button>
                        </div>
                        <table id="myTable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" id="checkAll"></th>
                                    <th>Menu</th>
                                    <th>Direct</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="checkbox" class="checkItem"></td>
                                    <td>1</td>
                                    <td>John Doe</td>
                                    <td>123 Main St</td>
                                    <td>555-1234</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="checkItem"></td>
                                    <td>2</td>
                                    <td>Jane Smith</td>
                                    <td>456 Elm St</td>
                                    <td>555-5678</td>
                                </tr>
                                <!-- Tambahkan lebih banyak baris sesuai kebutuhan -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
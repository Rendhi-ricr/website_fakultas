<!doctype html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template-no-customizer" data-style="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title><?= $this->renderSection('title') ?></title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= base_url() ?>assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap" rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->

    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/css/rtl/core.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/css/rtl/theme-default.css" />

    <link rel="stylesheet" href="<?= base_url() ?>assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/libs/swiper/swiper.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/css/pages/cards-advance.css" />

    <!-- Helpers -->
    <script src="<?= base_url() ?>assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?= base_url() ?>assets/js/config.js"></script>

    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/libs/quill/typography.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/libs/quill/katex.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/libs/quill/editor.css" />

    <!-- dropzone -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/libs/dropzone/dropzone.css" />

</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <?= $this->include('layouts/backend/includes/aside') ?>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <?= $this->include('layouts/backend/includes/navbar') ?>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <?= $this->renderSection('content') ?>
                    <!-- / Content -->

                    <!-- Footer -->
                    <?= $this->include('layouts/backend/includes/footer') ?>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="<?= base_url() ?>assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?= base_url() ?>assets/vendor/libs/popper/popper.js"></script>
    <script src="<?= base_url() ?>assets/vendor/js/bootstrap.js"></script>
    <script src="<?= base_url() ?>assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="<?= base_url() ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?= base_url() ?>assets/vendor/libs/hammer/hammer.js"></script>
    <script src="<?= base_url() ?>assets/vendor/libs/i18n/i18n.js"></script>
    <script src="<?= base_url() ?>assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="<?= base_url() ?>assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="<?= base_url() ?>assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="<?= base_url() ?>assets/vendor/libs/swiper/swiper.js"></script>
    <script src="<?= base_url() ?>assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>

    <!-- Flat Picker -->
    <script src="<?= base_url() ?>assets/vendor/libs/moment/moment.js"></script>
    <script src="<?= base_url() ?>assets/vendor/libs/flatpickr/flatpickr.js"></script>

    <!-- Form Validation -->
    <script src="<?= base_url() ?>assets/vendor/libs/@form-validation/popular.js"></script>
    <script src="<?= base_url() ?>assets/vendor/libs/@form-validation/bootstrap5.js"></script>
    <script src="<?= base_url() ?>assets/vendor/libs/@form-validation/auto-focus.js"></script>

    <!-- Main JS -->
    <script src="<?= base_url() ?>assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="<?= base_url() ?>assets/js/tables-datatables-basic.js"></script>
    <script src="<?= base_url() ?>assets/js/dashboards-analytics.js"></script>

    <!-- summernote -->
    <script src="<?= base_url() ?>assets/vendor/libs/quill/katex.js"></script>
    <script src="<?= base_url() ?>assets/vendor/libs/quill/quill.js"></script>
    <!-- dropzone -->
    <script src="<?= base_url() ?>assets/vendor/libs/dropzone/dropzone.js"></script>
    <script>
        const quill = new Quill('#editor', {
            theme: 'snow'
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#agendaTabs a').on('click', function(e) {
                e.preventDefault();
                $(this).tab('show');
                var target = $(this).attr('href');
                loadTabData(target);
            });

            // Load data for the default active tab
            loadTabData('#all');

            function loadTabData(target) {
                // Here you can make an AJAX call to load the data based on the target
                // For example:
                $.ajax({
                    url: '/your-data-endpoint', // Your endpoint to fetch data
                    method: 'GET',
                    data: {
                        tab: target.replace('#', '')
                    }, // Sending the tab information
                    success: function(data) {
                        $(target + ' tbody').html(data); // Replace the table body content with the fetched data
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });


            }
        });
    </script>

    <!-- Datatables Main Public -->
    <script>
        $(document).ready(function() {
            // Inisialisasi DataTable
            var table = $('#myTable').DataTable();

            // Tambahkan input pencarian di kanan
            $('.dataTables_filter input').attr('placeholder', 'Cari...');

            // Handle checkbox pilih/deselect semua
            $('#checkAll').click(function() {
                $('.checkItem').prop('checked', this.checked);
            });

            // Handle penghapusan baris terpilih
            $('#deleteSelected').click(function() {
                var selectedRows = table.$('.checkItem:checked');
                if (selectedRows.length > 0) {
                    if (confirm('Apakah Anda yakin ingin menghapus baris yang dipilih?')) {
                        selectedRows.each(function() {
                            var row = $(this).closest('tr');
                            table.row(row).remove().draw(false);
                        });
                    }
                } else {
                    alert('Silakan pilih baris untuk dihapus.');
                }
            });
        });
    </script>

</body>

</html>
<x-app-layout>

    @push('styles')
    <style>
        .custom-file-label {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            /* padding: 10px 20px; */
            /* background-color: #007bff;
            color: #fff; */
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        /*
        .custom-file-label:hover {
            background-color: #0056b3;
        } */

        .custom-file-label i {
            margin-right: 8px;
        }

        .custom-file-input {
            display: none;
        }
    </style>
    @endpush



    <x-slot:title>
        Pengaturan
    </x-slot:title>


    <x-slot:headingTitle>
        Pengaturan
    </x-slot:headingTitle>

    <x-slot:headingSubTitle>

    </x-slot:headingSubTitle>

    <x-slot:breadcrumb>
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Pengaturan</li>
    </x-slot:breadcrumb>

    <section class="section">
        <div class="card">
            {{-- <div class="card-header">
                <h4 class="card-title">Javascript Behavior</h4>
            </div> --}}
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-header-tab" data-bs-toggle="pill"
                                href="#v-pills-header" role="tab" aria-controls="v-pills-header"
                                aria-selected="true">Header</a>
                            <a class="nav-link" id="v-pills-footer-tab" data-bs-toggle="pill" href="#v-pills-footer"
                                role="tab" aria-controls="v-pills-footer" aria-selected="false">Footer</a>
                            <a class="nav-link" id="v-pills-api-key-tab" data-bs-toggle="pill" href="#v-pills-api-key"
                                role="tab" aria-controls="v-pills-api-key" aria-selected="false">Api Key</a>
                            <a class="nav-link" id="v-pills-send-location-tab" data-bs-toggle="pill"
                                href="#v-pills-send-location" role="tab" aria-controls="v-pills-send-location"
                                aria-selected="false">Lokasi Pengiriman</a>
                            <a class="nav-link" id="v-pills-payment-method-tab" data-bs-toggle="pill"
                                href="#v-pills-payment-method" role="tab" aria-controls="v-pills-payment-method"
                                aria-selected="false">Metode Pembayaran</a>
                            <a class="nav-link" id="v-pills-email-smtp-tab" data-bs-toggle="pill"
                                href="#v-pills-email-smtp" role="tab" aria-controls="v-pills-email-smtp"
                                aria-selected="false">Email SMTP</a>
                            <a class="nav-link" id="v-pills-feature-setting-tab" data-bs-toggle="pill"
                                href="#v-pills-feature-setting" role="tab" aria-controls="v-pills-feature-setting"
                                aria-selected="false">Fitur Setting</a>
                            <a class="nav-link" id="v-pills-sending-courir-tab" data-bs-toggle="pill"
                                href="#v-pills-sending-courir" role="tab" aria-controls="v-pills-sending-courir"
                                aria-selected="false">Kurir Pengiriman</a>
                            <a class="nav-link" id="v-pills-about-page-tab" data-bs-toggle="pill"
                                href="#v-pills-about-page" role="tab" aria-controls="v-pills-about-page"
                                aria-selected="false">Halaman About</a>



                        </div>
                    </div>
                    <div class="col-9">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-header" role="tabpanel"
                                aria-labelledby="v-pills-header-tab">
                                {{-- card --}}
                                @include('admin.setting.includes.header-form')
                            </div>
                            <div class="tab-pane fade" id="v-pills-footer" role="tabpanel"
                                aria-labelledby="v-pills-footer-tab">

                                {{-- card --}}
                                @include('admin.setting.includes.footer-form')

                            </div>
                            <div class="tab-pane fade" id="v-pills-api-key" role="tabpanel"
                                aria-labelledby="v-pills-api-key-tab">

                                {{-- card --}}
                                @include('admin.setting.includes.apikey-form')
                            </div>

                            <div class="tab-pane fade" id="v-pills-send-location" role="tabpanel"
                                aria-labelledby="v-pills-send-location-tab">

                                {{-- card --}}
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title
                                            ">Lokasi Pengiriman</h4>
                                        <div class="card-body">
                                            Lokasi Pengiriman
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-payment-method" role="tabpanel"
                                aria-labelledby="v-pills-payment-method-tab">

                                {{-- card --}}
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title ">Metode Pembayaran</h4>
                                        <div class="card-body">
                                            Metode Pembayaran
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="v-pills-email-smtp" role="tabpanel"
                                aria-labelledby="v-pills-email-smtp-tab">

                                {{-- card --}}
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title
                                            ">Email SMTP</h4>
                                        <div class="card-body">
                                            Email SMTP
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="v-pills-feature-setting" role="tabpanel"
                                aria-labelledby="v-pills-feature-setting-tab">

                                {{-- card --}}
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title
                                            ">Fitur Setting</h4>
                                        <div class="card-body">
                                            Fitur Setting
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="v-pills-sending-courir" role="tabpanel"
                                aria-labelledby="v-pills-sending-courir-tab">

                                {{-- card --}}
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title
                                            ">Kurir Pengiriman</h4>
                                        <div class="card-body">
                                            Kurir Pengiriman
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="v-pills-about-page" role="tabpanel"
                                aria-labelledby="v-pills-about-page-tab">

                                {{-- card --}}
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title
                                            ">Halaman About</h4>
                                        <div class="card-body">
                                            Halaman About
                                        </div>
                                    </div>
                                </div>
                            </div>




                            {{-- <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ut
                                nulla neque.
                                Ut hendrerit nulla a euismod pretium.
                                Fusce venenatis sagittis ex efficitur suscipit. In tempor mattis
                                fringilla. Sed
                                id tincidunt orci, et volutpat ligula.
                                Aliquam sollicitudin sagittis ex, a rhoncus nisl feugiat quis. Lorem
                                ipsum dolor
                                sit amet, consectetur adipiscing elit.
                                Nunc ultricies ligula a tempor vulputate. Suspendisse pretium mollis
                                ultrices
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">
                                Integer interdum diam eleifend metus lacinia, quis gravida eros
                                mollis. Fusce
                                non sapien sit amet magna dapibus
                                ultrices. Morbi tincidunt magna ex, eget faucibus sapien bibendum
                                non. Duis a
                                mauris ex. Ut finibus risus sed massa
                                mattis porta. Aliquam sagittis massa et purus efficitur ultricies.
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab">
                                Integer pretium dolor at sapien laoreet ultricies. Fusce congue et
                                lorem id
                                convallis. Nulla volutpat tellus nec
                                molestie finibus. In nec odio tincidunt eros finibus ullamcorper. Ut
                                sodales,
                                dui nec posuere finibus, nisl sem aliquam
                                metus, eu accumsan lacus felis at odio.
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab">
                                Sed lacus quam, convallis quis condimentum ut, accumsan congue
                                massa.
                                Pellentesque et quam vel massa pretium ullamcorper
                                vitae eu tortor.
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @push('scripts')
    <script>
        function showFileNameAndPreview() {
                const fileInput = document.getElementById('customFileInput');
                const fileNameDiv = document.getElementById('fileName');
                const logoPreview = document.getElementById('logoPreview');

                if (fileInput.files.length > 0) {
                    const file = fileInput.files[0];
                    fileNameDiv.textContent = `Selected file: ${file.name}`;

                    // Preview file
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        logoPreview.src = e.target.result;
                    };
                    reader.readAsDataURL(file);
                } else {
                    fileNameDiv.textContent = '';
                    logoPreview.src = 'logo-placeholder.png'; // Reset to placeholder
                }
            }
    </script>
    @endpush
</x-app-layout>

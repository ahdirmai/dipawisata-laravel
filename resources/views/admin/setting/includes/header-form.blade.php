<div class="card">
    <div class="card-header bg-white">
        <h4 class="card-title mb-0">Header</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.setting.header-store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-4 row">
                <div class="col-lg-2">
                    <!-- Preview Logo -->
                    <img id="logoPreview" src="{{ asset('assets/images/image-placeholder.jpg') }}" alt="Logo"
                        class="img-fluid" style="max-width: 100px; object-fit: contain;">
                </div>
                <div class="col-lg-10">
                    <label for="customFileInput" class="custom-file-label gap-2">
                        Ubah Logo <i class="bi bi-pencil"></i>
                    </label>
                    <input type="file" class="custom-file-input" name="logo" id="customFileInput"
                        accept="image/png, image/svg+xml" onchange="showFileNameAndPreview()">
                    <div id="fileName" class="mt-2"></div>
                    <p class="text-muted">Pastikan logo berformat svg atau png dan aspect
                        ratio 1:1</p>
                </div>
            </div>
            <div class="mb-3">
                <label for="website_name" class="form-label">Nama Website</label>
                <input type="text" class="form-control" id="website_name" name="website_name"
                    value="{{ $header->website_name ??'' }}" required>
            </div>
            <div class="mb-3">
                <label for="search_placeholder" class="form-label">Placeholder
                    Search</label>
                <input type="text" class="form-control" id="search_placeholder" name="search_placeholder"
                    value="{{ $header->search_placeholder ??'' }}" required>
            </div>
            <button type="submit" class="btn btn-success w-100">Simpan</button>
        </form>
    </div>
</div>
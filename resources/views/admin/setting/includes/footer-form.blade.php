<div class="card">
    <div class="card-header">
        <h4 class="card-title">Footer</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.setting.footer-store') }}" method="POST">
            @csrf
            @method('put')
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">
                        <i class="bi bi-facebook"></i> Facebook Link
                    </label>
                    <input type="url" name="facebook_url" class="form-control"
                        value="{{ $footer->facebook_url ?? 'https://facebook.com' }}" />
                </div>
                <div class="col-md-6">
                    <label class="form-label">
                        <i class="bi bi-instagram"></i> Instagram Link
                    </label>
                    <input type="url" class="form-control" name="instagram_url" value="{{ $footer->instagram_url??
                    'https://instagram.com' }}" />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">
                        <i class="bi bi-whatsapp"></i> Whatsapp Link
                    </label>
                    <input type="url" class="form-control" name="whatsapp_url" value="{{ $footer->whatsapp_url
                    ?? 'https://web.whatsapp.com/'}}" />
                </div>
                <div class="col-md-6">
                    <label class="form-label">
                        <i class="bi bi-twitter"></i> Twitter Link
                    </label>
                    <input type="url" class="form-control" name="twitter_url"
                        value="{{ $footer->twitter_url??'https://twitter.com/' }}" />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">
                        <i class="bi bi-youtube"></i> YouTube Link
                    </label>
                    <input type="url" class="form-control" name="youtube_url"
                        value="{{ $footer->youtube_url??'https://www.youtube.com/' }}" />
                </div>
                <div class="col-md-6">
                    <label class="form-label">
                        <i class="bi bi-linkedin"></i> LinkedIn Link
                    </label>
                    <input type="url" class="form-control" name="linkedin_url"
                        value="{{ $footer->linkedin_url??'https://www.linkedin.com/' }}" />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12">
                    <label class="form-label">Footer Copyright</label>
                    <input type="text" class="form-control" name="copyright_footer"
                        value="{{ $footer->copy_right ?? 'Dipawisata 2024' }}" />
                </div>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
</div>

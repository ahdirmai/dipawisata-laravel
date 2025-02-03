<div class="card">
    <div class="card-header">
        <h4 class="card-title">Footer</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.setting.api-key-store') }}" method="POST">
            @csrf
            @method('put')

            {{-- 'google_client_id' => 'required',
            'google_client_secret' => 'required',
            'midtrans_client_key' => 'required',
            'midtrans_server_key' => 'required' --}}
            <div class="row mb-3">
                <div class="col-md-12">
                    <label class="form-label">
                        Google Client ID Key
                    </label>
                    <input type="url" name="google_client_id" class="form-control"
                        value="{{ $api_key->google_client_id??'-' }}" />
                </div>



            </div>

            <div class="row mb-3">
                <div class="col-md-12">
                    <label class="form-label">
                        Google Client Secret Key
                    </label>
                    <input type="url" name="google_client_secret" class="form-control"
                        value="{{ $api_key->google_client_secret??'-' }}" />
                </div>


            </div>

            <div class="row mb-3">
                <div class="col-md-12">
                    <label class="form-label">
                        Midtrans Client Key
                    </label>
                    <input type="url" name="midtrans_client_key" class="form-control"
                        value="{{ $api_key->midtrans_client_key??'-' }}" />
                </div>


            </div>

            <div class="row mb-3">
                <div class="col-md-12">
                    <label class="form-label">
                        Midtrans Server ID Key
                    </label>
                    <input type="url" name="midtrans_server_key" class="form-control"
                        value="{{ $api_key->midtrans_server_key??'-' }}" />
                </div>
            </div>


            <div class="d-grid">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
</div>

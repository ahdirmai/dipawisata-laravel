<x-app-layout>

    @push('styles')
    <link href="{{ asset('assets/vendors/summernote/summernote.min.css') }}" rel=" stylesheet">
    @endpush



    <x-slot:title>
        Syarat Ketentuan Pembayaran
    </x-slot:title>


    <x-slot:headingTitle>
        Syarat Ketentuan Pembayaran
    </x-slot:headingTitle>

    <x-slot:headingSubTitle>

    </x-slot:headingSubTitle>

    <x-slot:breadcrumb>
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Syarat Ketentuan Pembayaran</li>
    </x-slot:breadcrumb>

    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Syarat Ketentuan Pembayaran</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.term-and-condition.store') }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <textarea name="content" id="summernote" class="form-control d-none">
                            {{ $termAndCondition->content ?? 'Tulis Syarat Ketentuan Pembayaran Disini' }}
                        </textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </section>
    @push('before-scripts')
    <script src="{{ asset('assets/vendors/summernote/summernote.min.js') }}"></script>


    <script>
        // load when document is ready
        $(document).ready(function() {

            $('#summernote').removeClass('d-none');

            $('#summernote').summernote({
                height: 400,
            });
        });

        // $('#summernote').summernote({
        //         height: 400,
        //       });
    </script>
    @endpush
</x-app-layout>
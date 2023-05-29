<div>
    {{-- Be like water. --}}

    <div class="card mx-auto" style="width: 800px">
        <div class="card-header">
            Profile Information
        </div>
        <div class="card-body">

            <div class="row layout-top-spacing mx-auto">

                <div class="col-md-4 mt-3">

                    <style>
                        .dropify-wrapper {
                            width: 200px;
                            height: 200px;
                        }

                        .dropify-wrapper .dropify-preview .dropify-render img {
                            object-fit: cover !important;
                            /* Existing CSS properties */
                        }
                    </style>

                    <div class="profile-photo" style="width: 400px; height: 400px" wire:ignore>

                        <input wire:model="photo" type="file" id="photoInput" class="dropify"
                            data-default-file="{{ (Auth::user()->profile_photo_path) ? asset('storage/'.Auth::user()->profile_photo_path) : '' }}"
                            data-allowed-file-extensions="jpg png gif">
                        <!-- Show uploading message when photo is being uploaded -->
                        <div wire:loading wire:target="photo" class="text-muted">Uploading...</div>
                    </div>

                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <!-- First Name Field -->
                            <div class="form-group">
                                <input type="text" class="form-control" wire:model="firstName">
                                @error('firstName') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">

                                <!-- Last Name Field -->
                                <input type="text" class="form-control" wire:model="lastName">
                                @error('lastName') <span class="error">{{ $message }}</span> @enderror

                            </div>

                            <div class="form-group">
                                <!-- Other Name Field -->
                                <input type="text" class="form-control" wire:model="otherName">
                                @error('otherName') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">

                                <!-- Email Field -->
                                <input type="email" class="form-control" wire:model="email" disabled>
                                @error('email') <span class="error">{{ $message }}</span> @enderror

                            </div>

                            <!-- Success Message -->
                            @if (session()->has('success'))
                                <div class="success">{{ session('success') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="pt-3 float-right">
                        <!-- Disable the Save button during the upload -->
                        <button class="btn btn-primary" wire:click="saveProfile" wire:loading.attr="disabled">
                            Save
                        </button>
                    </div>

                </div>

            </div>

        </div>

    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('livewire:load', function () {
        Livewire.on('profileUpdated', function () {
            location.reload();
        });
    });
</script>
@endpush

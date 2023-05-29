<div>
    {{-- Be like water. --}}

    <div class="card mx-auto" style="width: 800px">
        <div class="card-header">
            Profile Information
        </div>
        <div class="card-body">

            <div class="row layout-top-spacing mx-auto">

                <div class="col-md-4">

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

                    <div class="profile-photo text-center"  wire:ignore>
                        
                        <input wire:model="photo" type="file" id="photoInput" class="dropify"
                            data-default-file="{{ (Auth::user()->profile_photo_path) ? asset('storage/'.Auth::user()->profile_photo_path) : '' }}"
                            data-allowed-file-extensions="jpg png gif">
                        <!-- Show uploading message when photo is being uploaded -->
                        <div wire:loading wire:target="photo" class="text-muted">Uploading...</div>
                    </div>

                    {{-- <div class="text-center mt-3">
                        <label for="profile-photo">Profile Photo</label>
                    </div> --}}
                   <div class="col-md-12 mt-3">
                        {{-- <hr> --}}
                        Role: {{ ucfirst(Auth::user()->role) }}
                        <br />
                        Affiliate ID: {{ ucfirst(Auth::user()->affiliate_id) }}
                        <div class="text-center">
                            <a class="btn btn-primary mt-3" id="copyButton" wire:click="copyRefLink('{{ Auth::user()->getReferralLink() }}')">Copy Referral Link</a>
                        @if($successMessage!='')
                        <div class="alert alert-success mt-3" role="alert" wire:loading.remove>
                            {{ $successMessage }}
                        </div>
                        @endif
                        </div>
                   </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <!-- First Name Field -->
                            <div class="form-group">
                                <label for="firstname">First Name</label>
                                <input type="text" class="form-control" wire:model="firstName">

                                @error('firstName') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">

                                <!-- Last Name Field -->
                                <label for="firstname">Last Name</label>
                                <input type="text" class="form-control" wire:model="lastName">
                                @error('lastName') <span class="error">{{ $message }}</span> @enderror

                            </div>

                            <div class="form-group">
                                <!-- Other Name Field -->
                                <label for="firstname">Other Name(s)</label>
                                <input type="text" class="form-control" wire:model="otherName">
                                @error('otherName') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">

                                <!-- Email Field -->
                                <label for="email">Email</label>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>

<script>
    document.addEventListener('livewire:load', function () {
        // Reload After Updating Profile
        Livewire.on('profileUpdated', function () {
            location.reload();
        });

        //Copy Link to Clipboard
        new ClipboardJS('#copyButton', {
                text: function () {
                    return @this.link;
                }
            }).on('success', function () {
                // Success message or any additional logic after copying
                @this.successMessage = 'Referral Link Copied!';

                // Hide the success message after 3 seconds
                setTimeout(function () {
                    @this.successMessage = '';
                }, 3000);
            });
    });
</script>
@endpush

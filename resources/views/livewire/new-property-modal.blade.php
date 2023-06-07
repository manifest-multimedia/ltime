<div>
    {{-- Do your work, then step back. --}}
    <style>
        .dropify-filename{
            display:none !important;
        }
        .dropify-wrapper {
            width: 200px;
            height: 200px;
        }

        .dropify-wrapper .dropify-preview .dropify-render img {
            object-fit: cover !important;
            /* Existing CSS properties */
        }
    </style>    

    <!-- Modal -->
    <div class="modal fade .modal-dialog-centered" id="newProperty" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newPropertyModalLabel">New Property</h5>
                    {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg> ... </svg>
                    </button> --}}
                </div>
                <div class="modal-body">
                    <p class="modal-text">Add New Property Listing </p>
                    <div>
                        <div class="form-group">
                            <label for="property_type">Property Type</label>
                            <select name="property_type" id="property_type" class="custom-select" wire:model="property_type">
                                <option value="">Select Property Type</option>
                                <option value="land">Land</option>
                                <option value="property">Real Estate</option>
                            </select>
                            @error('property_type')
                                <div class="alert alert-danger mt-3"> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="title">Property Title</label>
                            <input type="text" placeholder="Property Title" class="form-control">
                            @error('property_title')
                            <div class="alert alert-danger mt-3"> {{ $message }} </div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control"
                            name="description" id="description" cols="30" rows="3" placeholder="Description"></textarea>
                            @error('property_description')
                            <div class="alert alert-danger mt-3"> {{ $message }} </div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="featured_image">Featured Image</label>
                           
        
                            <div class="featured-photo text-center"  wire:ignore>
                                
                                <input wire:model="photo" type="file" id="photoInput" class="dropify"
                                    data-default-file="" data-allowed-file-extensions="jpg JPG JPEG jpeg png gif">
                                <!-- Show uploading message when photo is being uploaded -->
                                <div wire:loading wire:target="photo" class="text-muted mt-3">Uploading...</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cover_image">Cover Image</label>
                        </div>
                        <div class="form-group">
                            <label for="location">Location</label>
                            <select name="location" id="location" class="custom-select">
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="featured">Featured?</label>
                            <input type="checkbox" name="featured" id="featured" class="">

                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" placeholder="Property Price" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                    <button type="button" class="btn btn-primary" wire:click="save">Save</button>
                </div>
            </div>
        </div>
    </div>


</div>

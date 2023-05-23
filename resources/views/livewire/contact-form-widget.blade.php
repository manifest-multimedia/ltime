<div>
    {{-- The whole world belongs to you. --}}
    <div class="form-inner">
        <form method="post" action="" id="contact-form"> 
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                    <input type="text" name="name" placeholder="Your Name" required="" wire:model="contactName">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                    <input type="email" name="email" placeholder="Email address" required="" wire:model="contactEmail">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                    <input type="text" name="phone" placeholder="Phone" required="" wire:model="contactPhone">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                    <input type="text" name="subject" placeholder="Subject" required="" wire:model="contactSubject">
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                    <textarea name="message" placeholder="Message" wire:model="contactMessage"></textarea>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                    <button class="theme-btn btn-one" type="submit" name="submit-form">Send Message</button>
                </div>
            </div>
        </form>
    </div>
</div>

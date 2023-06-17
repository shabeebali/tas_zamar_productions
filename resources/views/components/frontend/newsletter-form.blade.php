<form class="jet-subscribe-form__form" action="{{route('newsletter')}}" method="post" enctype="multipart/form-data"accept-charset="UTF-8">
    @csrf
    <div><span class="error"></span></div>
    <div class="jet-subscribe-form__input-group">
        <div class="jet-subscribe-form__fields">
            <input class="jet-subscribe-form__input jet-subscribe-form__mail-field" type="email" name="email" placeholder="Your Email" autocomplete="off">
        </div>
        <input type="submit" class="elementor-button elementor-size-md" value="Sign Up!"> </div>
    <div class="g-recaptcha" data-sitekey="{{env('RECAPTCHA_SITE_KEY')}}"></div>
    <div class="jet-subscribe-form__message">
        <div class="jet-subscribe-form__message-inner"><span></span></div>
    </div>
</form>

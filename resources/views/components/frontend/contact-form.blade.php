<form class="rd-form" action="{{route('contact')}}" method='post' enctype="multipart/form-data" name="contactus"
      id='contactus' accept-charset='UTF-8'>
    @csrf
    <div>
        <span class="error">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            @endif
        </span>
    </div>
    <div class="fieldouter">
        <div class="text">First Name :</div>
        <div>
            <input name="first_name"
                   type="text"
                   class="form-control requiredInput required validate-alpha"
                   id="first_name"
                   size="34"></div>
        <p class="clear"></p>
    </div>

    <div class="fieldouter">
        <div class="text">Last Name :</div>
        <div>
            <input name="last_name"
                   type="text"
                   class="form-control requiredInput required validate-alpha"
                   id="last_name"
                   size="34"></div>
        <p class="clear"></p>
    </div>

    <div class="fieldouter">
        <div class="text">Email :</div>
        <div>
            <input name="email"
                   type="text"
                   class="form-control requiredInput required validate-email"
                   id="email"
                   size="34"></div>
        <p class="clear"></p>
    </div>

    <div class="fieldouter">
        <div>Telephone (optional) :</div>
        <div class="row">
            <div class="col-md-3">
                <select class="form-control" name="phone_type">
                    <option value="Mobile">Mobile</option>
                    <option value="Home">Home</option>
                </select>
            </div>
            <div class="col-md-9">
                <input
                    name="phone"
                    type="text"
                    class="form-control requiredInput"
                    placeholder="Phone"
                    size="34">
            </div>
            <p class="clear"></p>
        </div>
        <p class="clear"></p>
    </div>

    <div class="fieldouter">
        <div class="text">Comments :</div>
        <div>
            <textarea rows="6"
                      cols="60"
                      name="comment"
                      class="form-control"
                      id="comment"> </textarea>
        </div>
        <p class="clear"></p>
    </div>

    <div class="fieldouter">
        <div class="g-recaptcha" data-sitekey="{{env('RECAPTCHA_SITE_KEY')}}"></div>
        <br>
        <input name="submit" type="submit" class="btn-form" value="Submit">
    </div>
</form>

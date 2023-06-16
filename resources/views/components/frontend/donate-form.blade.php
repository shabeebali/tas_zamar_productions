<form method="post" action="{{route('donate')}}" name="contactus" id="contactus" accept-charset="UTF-8">
    @csrf
    <div>
        <span class='error'>
             @if ($errors->any())
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            @endif
        </span>
    </div>
    <br>
    <div class="fieldouter row">
        <div class="col-md-6">
            <div class="text">Name :</div>
            <div>
                <input
                    id="txtName"
                    name="name"
                    type="text"
                    class="form-control requiredInput required"
                    placeholder="Name"
                    size="34"></div>
            <p class="clear"></p>
        </div>
        <div class="col-md-6">
            <div class="text">E-mail :</div>
            <div>
                <input
                    id="txtEmail"
                    name="email"
                    type="email"
                    class="form-control requiredInput required"
                    placeholder="E-mail"
                    size="34"></div>
            <p class="clear"></p>
        </div>
    </div>
    <div class="fieldouter row">
        <div class="col-md-6">
            <div class="text">Donation Amount $</div>
            <div>
                <input
                    id="txtAmount"
                    name="amount"
                    type="number"
                    min="10"
                    class="form-control requiredInput required"
                    placeholder="Donation Amount"
                    size="34"></div>
            <p class="clear"></p>
        </div>
        <div class="col-md-6">
            <div class="text">Location :</div>
            <div>
                <input
                    id="txtLocation"
                    name="location"
                    type="text"
                    class="form-control requiredInput required"
                    placeholder="Location"
                    size="34"></div>
            <p class="clear"></p>
        </div>
    </div>
    <div class="fieldouter">
        <div class="text">Designation :</div>
        <div>
            <select
                name="designation"
                aria-label="Fund. A fund is created by a charity to raise awareness and support for a specific programme or campaign. You can designate your donation to a fund that you support."
                id="designation">
                <option value="">General Donation</option>
                <option value="">Operating Budget</option>
                <option value="">Charitable Programs</option>
            </select>
        </div>
        <p class="clear"></p>
    </div>
    <div class="fieldouter">
        <div class="text">Address :</div>
        <div>
            <input
                id="txtAddress"
                name="address"
                type="text"
                class="form-control requiredInput required"
                placeholder="Address"
                size="34"></div>
        <p class="clear"></p>
    </div>
    <div class="fieldouter">
        <div class="text">Comments (optional) :</div>
        <div>
            <textarea
                rows="6"
                cols="60"
                name="comment"
                class="form-control"
                id="comment"> </textarea>
        </div>
        <p class="clear"></p>
    </div>

    <div class="fieldouter">
        <h4>Disclaimer: </h4>
        <strong>General Information:</strong><br>

        <input type="checkbox" required=""> Zamar Music Productions Inc. is a registered not-for-profit charitable
        organisation, Charitable Registration No. 749998290 RR 0001. By clicking submit, the donor understands that no
        goods or services were provided to them by Zamar Music Productions Inc. for their contribution. Donor hereby
        warrants that the donation is free from any and all encumbrances and that the donor has full legal right to make
        the donation.<br>
        <br>

        <strong>No Revocation:</strong><br>

        <input type="checkbox" required=""> Donors may not revoke the donation and Donor understands that all donations
        made are final.<br>
        <br>

        <strong>Expenses:</strong><br>

        <input type="checkbox" required=""> Any and all expenses associated with the execution of this donation, such as
        but not limited to expenses incurred during the transfer of this donation are the sole responsibility of the
        Donor
        <p class="clear"></p>
    </div>
    <div class="fieldouter">
        <div class="g-recaptcha" data-sitekey="{{env('RECAPTCHA_SITE_KEY')}}"></div>
    </div>
    <br>
    <div class="fieldouter">
        <center>
            <!-- <input name="submit" type="submit" class="btn-form" value="Donate"> -->
            <button type="submit" class="btn btn-form">Continue</button>
        </center>
    </div>
</form>

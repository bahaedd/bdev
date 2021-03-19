@extends('master')

@section('content')
<section>
    <div class="container contact-form">
        <form method="post">
            <h3>Drop Me a Message</h3>
           <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                    </div>
                    <div class="form-group text-center ">
                        <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                    </div>
                </div>
            </div>
        </form>
</div>
</section>


@endsection

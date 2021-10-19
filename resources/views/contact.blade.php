@include('header')

<section id="contact_us">
    <div class="container">
        <h1 class="text-center">Contact us</h1>
        <div class="row">
            <div class="col-md-12">
                <form>
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputfname" aria-describedby="emailHelp" placeholder="First name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputlname" aria-describedby="emailHelp" placeholder="Last name">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email address">
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option>Select city...</option>
                          <option>Varna</option>
                          <option>Burgas</option>
                          <option>Sofia</option>
                          <option>Plovdiv</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Message..."></textarea>
                      </div>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>


@include('footer')
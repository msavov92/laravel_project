
@include('header')

    <div class="view_table">
        <div class="container">
            <h2 class="text-center">DataBase View Users</h2>
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <tbody>
                          <tr>
                            <th><i class="fas fa-user"></i> First Name</th>
                            @foreach ($customers as $customer)
                                <th>{{$customer->first_name}}</th>
                             @endforeach
                          </tr>
                          <tr>
                            <th><i class="fas fa-user"></i> Last Name</th>
                            @foreach ($customers as $customer)
                                <th>{{$customer->last_name}}</th>
                            @endforeach
                          </tr>
                          <tr>
                            <th><i class="fas fa-phone-alt"></i> Phone Number</th>
                            @foreach ($customers as $customer)
                                <th>{{$customer->phone_number}}</th>
                            @endforeach
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>

@include('footer')





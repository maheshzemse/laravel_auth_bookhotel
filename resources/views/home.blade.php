@extends('layouts.app')

@section('content')
<div class="container">

    <form method="POST" action="list" >
        @csrf
        <div class="form-group">
            <div class="col-lg-6 col-md-4 col-12 mt-5">
            <select name="place" class="browser-default custom-select">
                <option selected>Select Place</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Goa">Goa</option>
                <option value="Banglore">Banglore </option>
                <option value="Rajasthan">Rajasthan </option>
            </select>  
        </div>
    </div>

        <div class="form-group">
            <div class="col-lg-6 col-md-4 col-12">
            <label>Check-In Date</label>
                <input type="Date"name="checkin" class="form-control" placeholder="Enter Check-In Date">
        </div>
    </div>

        <div class="form-group">
            <div class="col-lg-6 col-md-4 col-12">
            <label>Check-Out Date</label>
                <input type="Date"name="checkout" class="form-control" placeholder="Enter Check-Out Date">
        </div>
    </div>

        <div class="form-group">
            <div class="col-lg-6 col-md-4 col-12">
            <select name="adult" class="browser-default custom-select">
                <option selected>Adult</option>
                <option value="Adult-1">Adult-1</option>
                <option value="Adult-2">Adult-2</option>
                <option value="Adult-3">Adult-3 </option>
                <option value="Adult-4">Adult-4</option>
                <option value="Adult-5">Adult-5</option>
                <option value="Adult-6">Adult-6</option>
                <option value="Adult-7">Adult-7</option>
                <option value="Adult-8">Adult-8</option>
                <option value="Adult-9">Adult-9</option>
                <option value="Adult-10">Adult-10</option>
            </select>  
        </div>
            </div>

        <div class="row">
            <div class="col-lg-3 col-md-4 col-12 ml-3">
                <div class="form-group">
                <select name="child" class="browser-default custom-select">
                <option selected>Child</option>
                <option value="Child-1">Child-1</option>
                <option value="Child-2">Child-2</option>
                <option value="Child-3">Child-3 </option>
                <option value="Child-4">Child-4</option>
                <option value="Child-5">Child-5</option>
                <option value="Child-6">Child-6</option>
                <option value="Child-7">Child-7</option>
                <option value="Child-8">Child-8</option>
                <option value="Child-9">Child-9</option>
                <option value="Child-10">Child-10</option>
                </select>  
                </div>
            </div>

                <div class="col-lg-3 col-md-4 col-12">

                <div class="form-group">
                <select name="room" class="browser-default custom-select">
                <option selected>Room</option>
                <option value="Room-1">Room-1</option>
                <option value="Room-2">Room-2</option>
                <option value="Room-3">Room-3 </option>
                <option value="Room-4">Room-4</option>
                <option value="Room-5">Room-5</option>
                <option value="Room-6">Room-6</option>
                <option value="Room-7">Room-7</option>
                <option value="Room-8">Room-8</option>
                <option value="Room-9">Room-9</option>
                <option value="Room-10">Room-10</option>
                </select>  
                </div>
            </div>
        </div>

        <button type="submit" name="submit" class="btn btn-info ml-3">Book Hotel</button>
        <a href="/list" class="btn btn-info">View Booking</a>


</form>


    
</div>
@endsection

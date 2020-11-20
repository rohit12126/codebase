<div class="row">
    <div class="col-lg-6">
        <div class="card mb-3 mb-lg-0">
            <div class="card-header">
            
                <h3>Billing Address</h3>
            </div>
            <div class="card-body">
            @foreach($shippingAddress as $sAddress)
            <address>
            <?php echo(str_replace(',','</br>',$sAddress->address))?></br>
            @isset($sAddress->city){{$sAddress->city}}</br>@endisset
            @isset($sAddress->state){{$sAddress->state}}</br>@endisset
            @isset($sAddress->zipcode){{$sAddress->zipcode}}</br>@endisset
            @isset($sAddress->country){{$sAddress->country}}@endisset
            </address>
                <!-- <p>New York</p> -->
                <!-- <a href="#" class="btn btn-fill-out">Edit</a> -->
            @endforeach
            </div><hr>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3>Shipping Address</h3>
            </div>
            <div class="card-body">
               
            @foreach($billingAddress as $bAddress)
            
            <address>
            @php echo(str_replace(',','</br>',$bAddress->address))@endphp</br>
            @isset($bAddress->city){{$bAddress->city}}</br>@endisset
                @isset($bAddress->state){{$bAddress->state}}</br>@endisset
                @isset($bAddress->zipcode){{$bAddress->zipcode}}</br>@endisset
                @isset($bAddress->country){{$bAddress->country}}@endisset
            </address><hr>
                <!-- <p>New York</p> -->
                <!-- <a href="#" class="btn btn-fill-out">Edit</a> -->
            @endforeach
            </div>
        </div>
    </div>
</div>
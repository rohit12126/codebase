<div class="row">
    <div class="col-lg-6">
        <div class="card mb-3 mb-lg-0">
            <div class="card-header">
            
                <h3>Billing Address</h3>
            </div>
            <div class="card-body">
            @foreach($shippingAddress as $sAddress)
            <address>
            <?php echo(str_replace(',','</br>',$sAddress->address))?>
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
            @php echo(str_replace(',','</br>',$bAddress->address))@endphp
            </address><hr>
                <!-- <p>New York</p> -->
                <!-- <a href="#" class="btn btn-fill-out">Edit</a> -->
            @endforeach
            </div>
        </div>
    </div>
</div>
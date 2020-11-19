<div class="row">
    <div class="col-lg-6">
        <div class="card mb-3 mb-lg-0">
            <div class="card-header">
            
                <h3>Billing Address</h3>
            </div>
            <div class="card-body">
            @foreach($orders as $order)
            <address>@php echo(str_replace(',','</br>', $order->getBillingAddress->address))@endphp
            </address>
                <!-- <p>New York</p> -->
                <a href="#" class="btn btn-fill-out">Edit</a>
            @endforeach
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3>Shipping Address</h3>
            </div>
            <div class="card-body">
            @foreach($orders as $order)
            <address>@php echo(str_replace(',','</br>', $order->getShippingAddress->address))@endphp
            </address>
                <!-- <p>New York</p> -->
                <a href="#" class="btn btn-fill-out">Edit</a>
            @endforeach
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="address-billing-wrapper">
        <h4 class="pb-3 pt-2">Billing List Detials</h4>
        <div class="custom-card-block mb-4">
            <div class="custom-card-body">
                <div class="row align-items-center">
                    @foreach ($billingAddress as $address)
                    <div class="col-md-4 mb-3">
                        <div class="card">                        
                            <div class="card-body">
                            <h4 class="card-title">{{$address->name}}</h4>
                            <h6 class="card-subtitle mb-2 text-muted">{{$address->mobile}}</h6>
                            <p class="card-text">{{$address->address}}</p>
                            <p class="card-text">{{$address->city.", ".$address->state.", ".$address->country }} ({{$address->zipcode}})</p> 
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="#" class="card-link" data-toggle="modal" data-target="#exampleModal11">Edit</a>
                                <a href="#" class="card-link">Delete</a>
                            </div>                        
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    
    <div class="address-billing-wrapper">
        <h4 class="pb-3 pt-2">Shipping List Detials</h4>
        <div class="custom-card-block mb-4">
            <div class="custom-card-body">
                <div class="row align-items-center">
                    @foreach ($shippingAddress as $address)
                    <div class="col-md-4 mb-3">
                        <div class="card">                        
                            <div class="card-body">
                            <h4 class="card-title">{{$address->name}}</h4>
                            <h6 class="card-subtitle mb-2 text-muted">{{$address->mobile}}</h6>
                            <p class="card-text">{{$address->address}}</p>
                            <p class="card-text">{{$address->city.", ".$address->state.", ".$address->country }} ({{$address->zipcode}})</p> 
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="#" class="card-link">Edit</a>
                                <a href="#" class="card-link">Delete</a>
                            </div>                        
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
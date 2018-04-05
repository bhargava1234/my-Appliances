<div class="panel panel-default">
    <div class="panel-heading">
        <h4>{{ $appliance->pro_title }}</h4>
    </div><!--panel-heading-->

    <div class="panel-body">
        <div class="row">
            <div class="col-xs-4 col-sm-4">
                <img class="img-responsive"
                     src="{{ $appliance->pro_image }}"
                     alt="{{ $appliance->pro_title }}">
            </div>
            <div class="col-xs-8 col-sm-8">
                <h3>{{ $appliance->pro_price_currency == 'EUR' ? '&euro;' : '' }}
                    &nbsp;{{ $appliance->pro_price_amount/100 }}</h3>
                {!! $appliance->pro_description !!}<br/>
               <div class="btn-group" role="group" aria-label="...">
                    @if (Auth::check())
                      <form action="{{route('wishlist.store')}}" method="post" id="contact_form" class="contact-form" accept-charset="UTF-8">
                            {{ csrf_field() }}   
							<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="product_id" value="{{ $appliance->id }}">
                            <button type="submit" class="btn btn-primary">Add to wish list</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div><!--panel-body-->
</div><!--panel-->
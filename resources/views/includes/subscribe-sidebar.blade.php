<div class="col-xs-12">
    <!-- Subscribe Widget -->
    <div class="widget subscribe-widget panel pt-20 prl-20">
        <h3 class="widget-title h-title">Subscribe to mail</h3>
        <div class="widget-content ptb-30">

            <p class="color-mid mb-20">Get our Daily email newsletter with Special Services, Updates, Offers and more!</p>
            @if (session('success'))
                <div style="color: #9c03fe " class="mb-20 pb-4">
                    {{ session('success') }}
                </div>
            @endif
            <form method="get" action="{{route('subscribe.add')}}">
                <div class="input-group">
                    <input type="email" class="form-control" placeholder="Your Email Address" required="required" name="email">
                    <span class="input-group-btn">
    		        	<button class="btn" type="submit">Sign Up</button>
    		    	</span>
                </div>
            </form>
        </div>
    </div>
    <!-- End Subscribe Widget -->
</div>
            
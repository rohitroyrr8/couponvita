        <section class="section subscribe-area ptb-40 t-center">
            <div class="newsletter-form">
                <h4 class="mb-20"><i class="fa fa-envelope-o color-green mr-10"></i>Sign up for our weekly email newsletter</h4>
                <p class="mb-20 color-mid">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi animi magni accusantium architecto possimus.</p>
                <form method="get" action="{{route('subscribe.add')}}">
                    <div class="input-group mb-10">
                        <input type="email" class="form-control bg-white" placeholder="Email Address" required="required" name="email">
                        <span class="input-group-btn">
                            <button class="btn" type="submit">Subscribe</button>
                        </span>
                    </div>
                </form>
                <p class="color-muted"><small>We’ll never share your email address with a third-party.</small> </p>
            </div>
        </section>
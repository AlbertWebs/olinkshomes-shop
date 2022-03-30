<div class="header-right">
    <a href="login.html" class="header-icon header-icon-user"><i class="icon-user-2"></i></a>
    <a href="#" class="header-icon"><i class="icon-wishlist-2"></i></a>
    <div class="header-search header-search-popup header-search-category d-none d-sm-block">
        <a href="#" class="search-toggle" role="button"><i class="icon-magnifier"></i></a>
        <form action="#" method="get">
            <div class="header-search-wrapper">
                <input type="search" class="form-control" name="q" id="q" placeholder="I'm searching for..." required="">
                <div class="select-custom">
                    <select id="cat" name="cat">
                        <option value="">All Categories</option>
                        <?php $Categories = DB::table('categories')->where('identifier','shop')->get(); ?>
                        @foreach ($Categories as $item)
                        <option value="{{$item->id}}">{{$item->title}}</option>
                        @endforeach
                    </select>
                </div>
                <!-- End .select-custom -->
                <button class="btn icon-search-3" type="submit"></button>
            </div>
            <!-- End .header-search-wrapper -->
        </form>
    </div>

    <div class="dropdown cart-dropdown">
        <a href="#" title="Cart" class="dropdown-toggle dropdown-arrow cart-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
            <i class="minicart-icon"></i>
            <span class="cart-count badge-circle">3</span>
        </a>

        <div class="cart-overlay"></div>

        <div class="dropdown-menu mobile-cart">
            <a href="#" title="Close (Esc)" class="btn-close">×</a>
            @include('front.cart')
        </div>
        <!-- End .dropdown-menu -->
    </div>
</div>

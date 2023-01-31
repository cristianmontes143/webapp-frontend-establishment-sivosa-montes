    <!--====== Header Style 1 Part Start ======-->
    <section class="header-style-1 container-fluid">
        <div class="header-big border border-warning border-3">
            <div class="header-items-active">

                @foreach($announcements as $announcement)
                    <div class="single-header-item bg_cover h-50 d-block w-20">
                        <img src="{{ asset('images/'. $announcement->image) }}" alt="Gwapo">

                        <div class="header-item-content col">
                            <h3 class="title">{{ $announcement->header }}</h3>
                            <p class="description">{{ $announcement->description }}</p>
                            <button type="button" class="btn btn-outline-danger">Learn More</button>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>

        <div class="header-min">
            <div class="header-min-item product-style-25 bg-cover"
                style="background-image: url(landing-page-asset/Announcement-Pics/Shop-1.png);">
                <div class="product-content">
                    <h4 class="title"><a href="product-details-page.html">Shopee</a></h4>
                    <a href="javascript:void(0)" class="main-btn primary-btn-border">
                        <i class="bi bi-cart3">GO TO SHOP</i>
                    </a>
                </div>
            </div>
            <div class="header-min-item product-style-25 bg-cover"
                style="background-image: url(landing-page-asset/Announcement-Pics/Shop-2.png);">
                <div class="product-content">
                    <h4 class="title"><a href="product-details-page.html">Lazada</a></h4>
                    <a href="javascript:void(0)" class="main-btn primary-btn-border"> 
                        <i class="bi bi-cart3">GO TO SHOP</i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--====== Header Style 1 Part Ends ======-->
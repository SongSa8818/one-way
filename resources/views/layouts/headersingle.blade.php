<!-- Home -->
<div class="home">
    <!-- ImageProperty by: https://unsplash.com/@jbriscoe -->
    <div class="home_background" style="background-image:url(../images/listings.jpg)"></div>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="home_content">
                    <div class="home_title">
                        <h2>{{ explode(".", Route::currentRouteName())[0] }}</h2>
                    </div>
                    <div class="breadcrumbs">
                        <span><a href="{{ route("home") }}">Home</a></span>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
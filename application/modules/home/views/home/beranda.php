    <!-- Page Header -->
    <header class="masthead mt-0" style="background-image: url('<?= base_url('assets/uploads/' . $data->banner) ?>">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h2><?php
                            $uri  = $this->uri->segment(2);
                            if ($uri) {
                                echo strtoupper($uri);
                            } else {
                                echo "SELAMA DATANG <br> DI PERPUSTAKAAN";
                            } ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </header>
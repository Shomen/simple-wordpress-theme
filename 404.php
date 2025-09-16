<?php get_header(); ?>

<!-- 404 Error Page -->
<div class="container-fluid p-0">
    <div class="row g-0 min-vh-100">
        <!-- Image Section -->
        <div class="col-lg-6 d-flex align-items-center justify-content-center p-5" style="background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://fastly.picsum.photos/id/41/1280/805.jpg?hmac=W9CWeYdlZisqEfhjuODl83T3lCXAqjUZrOe9iMFPYmI'); background-size: cover; background-position: center;">
            <div class="text-center text-white">
                <h1 class="display-1 fw-bold mb-3">404</h1>
                <h2 class="h3 mb-4">Page Not Found</h2>
                <p class="lead mb-4">The page you're looking for seems to have wandered off into the digital wilderness.</p>
            </div>
        </div>
        
        <!-- Content Section -->
        <div class="col-lg-6 d-flex align-items-center justify-content-center p-5 bg-light">
            <div class="text-center">
                <div class="mb-5">
                    <i class="fas fa-search fa-3x text-primary mb-4"></i>
                    <h3 class="h2 mb-3">Oops! Something went wrong</h3>
                    <p class="text-muted mb-4">Don't worry, it happens to the best of us. Let's get you back on track.</p>
                </div>
                
                <!-- Action Buttons -->
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center mb-4">
                    <a href="<?php echo home_url(); ?>" class="btn btn-primary btn-lg px-4 py-3 rounded-pill">
                        <i class="fas fa-home me-2"></i>Go Home
                    </a>
                    <a href="javascript:history.back()" class="btn btn-outline-primary btn-lg px-4 py-3 rounded-pill">
                        <i class="fas fa-arrow-left me-2"></i>Go Back
                    </a>
                </div>
                
                <!-- Search Form -->
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <h5 class="mb-3">Or search for what you need:</h5>
                        <form role="search" method="get" action="<?php echo home_url('/'); ?>" class="d-flex">
                            <input type="search" class="form-control form-control-lg rounded-pill-start" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s" />
                            <button type="submit" class="btn btn-primary rounded-pill-end px-4">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
                
                <!-- Helpful Links -->
                <div class="mt-5">
                    <h6 class="text-muted mb-3">Popular Pages:</h6>
                    <div class="d-flex flex-wrap justify-content-center gap-2">
                        <a href="<?php echo home_url('/about'); ?>" class="btn btn-sm btn-outline-secondary rounded-pill">About Us</a>
                        <a href="<?php echo home_url('/contact'); ?>" class="btn btn-sm btn-outline-secondary rounded-pill">Contact</a>
                        <a href="<?php echo home_url('/blog'); ?>" class="btn btn-sm btn-outline-secondary rounded-pill">Blog</a>
                        <a href="<?php echo home_url('/services'); ?>" class="btn btn-sm btn-outline-secondary rounded-pill">Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>
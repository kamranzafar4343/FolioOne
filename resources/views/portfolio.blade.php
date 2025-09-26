@extends('layouts.app')

@section('title', 'portfolio')

@section('content')

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="200">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-strategy">Strategy</li>
            <li data-filter=".filter-finance">Finance</li>
            <li data-filter=".filter-operations">Operations</li>
            <li data-filter=".filter-technology">Technology</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="300">
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-strategy">
              <div class="portfolio-card">
                <div class="portfolio-img">
                  <img src="assets/img/portfolio/portfolio-1.webp" alt="Portfolio Item" class="img-fluid">
                  <div class="portfolio-overlay">
                    <a href="assets/img/portfolio/portfolio-1.webp" class="glightbox portfolio-lightbox"><i class="bi bi-plus"></i></a>
                    <a href="#" class="portfolio-details-link"><i class="bi bi-link"></i></a>
                  </div>
                </div>
                <div class="portfolio-info">
                  <h4>Business Growth Strategy</h4>
                  <p>Strategic Planning</p>
                  <div class="portfolio-tags">
                    <span>Strategy</span>
                    <span>Consulting</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-finance">
              <div class="portfolio-card">
                <div class="portfolio-img">
                  <img src="assets/img/portfolio/portfolio-2.webp" alt="Portfolio Item" class="img-fluid">
                  <div class="portfolio-overlay">
                    <a href="assets/img/portfolio/portfolio-2.webp" class="glightbox portfolio-lightbox"><i class="bi bi-plus"></i></a>
                    <a href="#" class="portfolio-details-link"><i class="bi bi-link"></i></a>
                  </div>
                </div>
                <div class="portfolio-info">
                  <h4>Financial Restructuring</h4>
                  <p>Financial Advisory</p>
                  <div class="portfolio-tags">
                    <span>Finance</span>
                    <span>Investment</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-operations">
              <div class="portfolio-card">
                <div class="portfolio-img">
                  <img src="assets/img/portfolio/portfolio-3.webp" alt="Portfolio Item" class="img-fluid">
                  <div class="portfolio-overlay">
                    <a href="assets/img/portfolio/portfolio-3.webp" class="glightbox portfolio-lightbox"><i class="bi bi-plus"></i></a>
                    <a href="#" class="portfolio-details-link"><i class="bi bi-link"></i></a>
                  </div>
                </div>
                <div class="portfolio-info">
                  <h4>Supply Chain Optimization</h4>
                  <p>Operations Management</p>
                  <div class="portfolio-tags">
                    <span>Operations</span>
                    <span>Logistics</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-technology">
              <div class="portfolio-card">
                <div class="portfolio-img">
                  <img src="assets/img/portfolio/portfolio-4.webp" alt="Portfolio Item" class="img-fluid">
                  <div class="portfolio-overlay">
                    <a href="assets/img/portfolio/portfolio-4.webp" class="glightbox portfolio-lightbox"><i class="bi bi-plus"></i></a>
                    <a href="#" class="portfolio-details-link"><i class="bi bi-link"></i></a>
                  </div>
                </div>
                <div class="portfolio-info">
                  <h4>Digital Transformation</h4>
                  <p>Technology Consulting</p>
                  <div class="portfolio-tags">
                    <span>Technology</span>
                    <span>Innovation</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-strategy">
              <div class="portfolio-card">
                <div class="portfolio-img">
                  <img src="assets/img/portfolio/portfolio-5.webp" alt="Portfolio Item" class="img-fluid">
                  <div class="portfolio-overlay">
                    <a href="assets/img/portfolio/portfolio-5.webp" class="glightbox portfolio-lightbox"><i class="bi bi-plus"></i></a>
                    <a href="#" class="portfolio-details-link"><i class="bi bi-link"></i></a>
                  </div>
                </div>
                <div class="portfolio-info">
                  <h4>Market Expansion</h4>
                  <p>Strategic Planning</p>
                  <div class="portfolio-tags">
                    <span>Strategy</span>
                    <span>Growth</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-finance">
              <div class="portfolio-card">
                <div class="portfolio-img">
                  <img src="assets/img/portfolio/portfolio-6.webp" alt="Portfolio Item" class="img-fluid">
                  <div class="portfolio-overlay">
                    <a href="assets/img/portfolio/portfolio-6.webp" class="glightbox portfolio-lightbox"><i class="bi bi-plus"></i></a>
                    <a href="#" class="portfolio-details-link"><i class="bi bi-link"></i></a>
                  </div>
                </div>
                <div class="portfolio-info">
                  <h4>Investment Strategy</h4>
                  <p>Financial Advisory</p>
                  <div class="portfolio-tags">
                    <span>Finance</span>
                    <span>Investment</span>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Portfolio Items Container -->

        </div>

        <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="400">
          <a href="#portfolio" class="btn btn-primary">View All Case Studies</a>
        </div>

      </div>

    </section><!-- /Portfolio Section -->


@endsection
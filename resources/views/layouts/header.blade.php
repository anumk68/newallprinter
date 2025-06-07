<div class="top_header">
    <div class="container">
        <div class="content_top">
            <div class="left_facing_issue">
                <p>FACING ISSUE WITH YOUR PRINTER ? </p>
            </div>
            <div class="btn_top_popup">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    BOOK FREE CONSULTATION
                </button>
            </div>
        </div>
    </div>
</div>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <!-- Mobile Right Side: Search + Button -->
            <div class="right-header d-lg-none">
                <input class="form-control custom-search form-control-sm" type="search" placeholder="Search blogs" />
                <a href="tel:8888752997" class="call-btn btn-sm">Call Now</a>
            </div>

            <!-- Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Nav Links -->
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">ABOUT US</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button">
                            PRINTER SUPPORT
                        </a>
                        <ul class="dropdown-menu">
                            <div class="container-fluid py-4">
                                <div class="row">
                                    <!-- Left Side (Brands) -->
                                    <div class="col-lg-4 brand-box">
                                        <div class="row" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <div class="row mb-2">
                                                @foreach ($brands as $index => $brand)
                                                    <div class="col-6 mb-2">
                                                        <button
                                                            class="nav-link brand-btn w-100 {{ $loop->first ? 'active' : '' }}"
                                                            id="brand-tab-{{ $brand->id }}" data-bs-toggle="pill"
                                                            data-bs-target="#brand-{{ $brand->id }}" type="button"
                                                            role="tab" aria-controls="brand-{{ $brand->id }}"
                                                            aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                                                            {{ strtoupper($brand->brand_name) }}
                                                        </button>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Right Side (Services) -->
                                    <div class="col-lg-8 issue-box">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            @foreach ($brands as $index => $brand)
                                                <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}"
                                                    id="brand-{{ $brand->id }}" role="tabpanel"
                                                    aria-labelledby="brand-tab-{{ $brand->id }}">
                                                    <div class="issue-title">
                                                        <a
                                                            href="{{ route('printer', ['brand_slug' => strtolower($brand->slug)]) }}">
                                                            {{ strtoupper($brand->brand_name) }} PRINTER
                                                        </a>

                                                    </div>
                                                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
                                                        @forelse($brand->services as $service)
                                                            <div class="col">
                                                                <div class="issue-card">
                                                                    <a
                                                                        href="{{ route('service_detail', ['brand_slug' => $brand->slug, 'service_slug' => $service->slug]) }}">
                                                                        {{ $service->service_name }}
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        @empty
                                                            <div class="col">
                                                                <div class="issue-card">No Services Available</div>
                                                            </div>
                                                        @endforelse
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="{{ route('blogs') }}">BLOGS</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">CONTACT US</a></li>
                </ul>

                <!-- Desktop Right Side -->
                <div class="d-none d-lg-flex align-items-center gap-2 position-relative">
                    <input id="searchInput" class="form-control custom-search" type="search"
                        placeholder="Search blogs, printers, services">

                    <!-- Suggestion Dropdown -->
                    <div id="searchDropdown" class="dropdown-menu show w-100 mt-2"
                        style="max-height: 250px; overflow-y: auto; display: none;">
                    </div>

                    <a href="tel:8888752997" class="call-btn">Call Now</a>
                </div>

            </div>
        </div>
    </nav>
</header>
<!-- mobile_header -->

<div class="mobile_header">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <!-- Mobile Right Side: Search + Button -->
            <div class="right-header d-lg-none">
                <input class="form-control custom-search form-control-sm" type="search" placeholder="Search blogs" />
                <a href="tel:8888752997" class="call-btn">Call Now</a>
            </div>

            <!-- Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Nav Links -->
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">ABOUT US</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button">
                            SERVICES
                        </a>
                        <ul class="dropdown-menu">
                            @foreach ($brands as $brand)
                                <li>
                                    <a href="{{ route('printer', ['brand_slug' => strtolower($brand->slug)]) }}">
                                        {{ strtoupper($brand->brand_name) }}
                                    </a>
                                </li>
                            @endforeach
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a href="{{ route('installation') }}">
                                    Installation and Troubleshooting
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="{{ route('blogs') }}">BLOGS</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">CONTACT US</a></li>
                </ul>

                <!-- Desktop Right Side -->
                <div class="d-none d-lg-flex align-items-center gap-2">
                    <input class="form-control custom-search" type="search" placeholder="Search blogs">
                    <<a href="tel:8888752997" class="call-btn">Call Now</a>
                </div>
            </div>
        </div>
    </nav>
</div>

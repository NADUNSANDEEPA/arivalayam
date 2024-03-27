@extends('app')

@section('content')
    <div style="padding-top: 10%; padding-bottom:10%; background-color:#F7F7F7;">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 mb-3 mb-sm-0">
                    <div class="text-left">
                        <h2 class="sub_header text-uppercase">ARIVALAYAM FOUNDATION</h2>
                        <h2 class="sub_header text-black">Helping Today. Helping Tomorrow</h2>
                        <p class="default_p pt-4" style="line-height: 2; font-size:18px;">
                            We nurture underprivileged girl child section of the society, help needy child, work upon women empowerment for a strong nation building, get the right medical aid, outreach to outskirts and make education available for literacy & organize special need based program’s…we at Shiksha Seva Foundation want to seek all round development and well being of a girl child, regardless of circumstances they belong too.
                        </p>
                        <div class="align-default-btn">
                            <button type="submit" class="btn default_btn ps-3 pe-3 me-4 mt-3">Read More</button>
                            <button type="submit" class="btn default_btn ps-3 pe-3 mt-3">Donate for better Future&nbsp;&nbsp;<i class="bi bi-heart-fill"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5 mb-3 mb-sm-0">
                    <div class="text-center">
                        <img src="https://shikshaseva.org/wp-content/uploads/2021/09/Helping-Today-Helping-tomorrow-.jpg" style="width: 100%; border-radius:15px; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5);" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="padding-top: 10%; padding-bottom:10%;" class="bg-report-container">
        <div class="container">
            <div class="text-center">
                <h2 class="sub_header">Impact Report</h2>
            </div>
            <div style="padding-top: 5%;">
                <div class="row">
                    <div class="col-sm-3 mb-3 mb-sm-0">
                        <div class="card border-0 report_card" >
                            <div class="card-body text-center " >
                                <h1 class="pt-4 card_number">11 <sup  style="font-size:30px;">+</sup></h1>
                                <h5 class="report_card_title default_text_red pb-3">YEARS OF FOUNDATION</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <div class="card border-0 report_card">
                            <div class="card-body text-center">
                                <h1 class="pt-4 card_number">100 <sup  style="font-size:30px;">+</sup></h1>
                                <h5 class="report_card_title default_text_red pb-3">MONTHLY DONORS</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <div class="card border-0 report_card">
                            <div class="card-body text-center">
                                <h1 class="pt-4 card_number">1,650 <sup  style="font-size:30px;">+</sup></h1>
                                <h5 class="report_card_title default_text_red pb-3">INCREDIBLE VOLUNTEERS</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <div class="card border-0 report_card">
                            <div class=" card-body text-center">
                                <h1 class="pt-4 card_number">5 <sup  style="font-size:30px;">+</sup></h1>
                                <h5 class="report_card_title default_text_red pb-3">SUCCESSFUL CAMPAIGNS</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row pt-2">
                    <div class="col-sm-3 mb-3 mb-sm-0">
                        <div class="card border-0 report_card">
                            <div class="card-body text-center">
                                <h1 class="pt-4 card_number">16,101 <sup  style="font-size:30px;">+</sup></h1>
                                <h5 class="report_card_title default_text_red pb-3">EDUCATION SUPPORT</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 mb-3 mb-sm-0">
                        <div class="card border-0 report_card">
                            <div class="card-body text-center">
                                <h1 class="pt-4 card_number">15,250 <sup  style="font-size:30px;">+</sup></h1>
                                <h5 class="report_card_title default_text_red pb-3">HEALTHCARE SUPPORT</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 mb-3 mb-sm-0">
                        <div class="card border-0 report_card">
                            <div class="card-body text-center">
                                <h1 class="pt-4 card_number">17,113 <sup  style="font-size:30px;">+</sup></h1>
                                <h5 class="report_card_title default_text_red pb-3">RATIONS KITS</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 mb-3 mb-sm-0">
                        <div class="card border-0 report_card">
                            <div class="card-body text-center">
                                <h1 class="pt-4 card_number">2,120 <sup  style="font-size:30px;">+</sup></h1>
                                <h5 class="report_card_title default_text_red pb-3">WOMEN EMPOWERED</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="padding-top: 10%; padding-bottom:10%;">
        <div class="container">
            <div class="text-center">
                <h2 class="sub_header">Cause you can Support</h2>
            </div>
            <div style="padding-top: 5%;">
                <div class="row row-cols-1 row-cols-md-5 g-4">
                   
                    <div class="col text-center p-4 support_card">
                        <img src="./img/1/1.png"  class="support-img-zoom"/>
                        <h5 class="pt-4 product_title">Education</h5>
                    </div>
                    <div class="col text-center p-4 support_card">
                        <img src="./img/1/2.png" class="support-img-zoom"/>
                        <h5 class="pt-4 product_title">Health Care</h5>
                    </div>
                    <div class="col text-center p-4 support_card">
                        <img src="./img/1/3.png"  class="support-img-zoom"/>
                        <h5 class="pt-4 product_title">Women Empowerment</h5>
                    </div>
                    <div class="col text-center p-4 support_card">
                        <img src="./img/1/4.png"  class="support-img-zoom"/>
                        <h5 class="pt-4 product_title">Nutrition</h5>
                    </div>
                    <div class="col text-center p-4 support_card">
                        <img src="./img/1/5.png"  class="support-img-zoom"/>
                        <h5 class="pt-4 product_title">Disaster Management</h5>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    <div style="padding-top: 10%; padding-bottom:10%;   background-color:black;">
        <div class="text-center">
            <h1 style="color: #FFFFFF;font-family: 'Rubik', Sans-serif; font-size: 42px; font-weight: 600;">Here you can get to know more about</h1>
            <button type="submit" class="btn profile_btn ps-3 pe-3 mt-5">Arivalayam Foundation Profile&nbsp;&nbsp;<i class="bi bi-heart-fill"></i></button>
        </div>
    </div>

    <div style="padding-top: 10%; padding-bottom:10%;">
        <div class="container-fluid">
            <div class="text-center">
                <h2 class="sub_header">Stories & Updates</h2>
            </div>
            <div style="padding-top: 5%;">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row row-cols-1 row-cols-md-4 g-4">
                                <div class="col text-center p-3 support_card">
                                    <img src="https://shikshaseva.org/wp-content/uploads/2021/10/1.jpg" class="default_boder_radius"  style="width: 100%; "/>
                                </div>
                                <div class="col text-center p-3 support_card">
                                    <img src="https://shikshaseva.org/wp-content/uploads/2021/10/2.jpg" class="default_boder_radius" style="width: 100%;"/>
                                </div>
                                <div class="col text-center p-3 support_card">
                                    <img src="https://shikshaseva.org/wp-content/uploads/2021/10/3.jpg" class="default_boder_radius"  style="width: 100%;"/>
                                </div>
                                <div class="col text-center p-3 support_card">
                                    <img src="https://shikshaseva.org/wp-content/uploads/2021/10/3.jpg" class="default_boder_radius"  style="width: 100%;"/>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row row-cols-1 row-cols-md-4 g-4">
                                <div class="col text-center p-3 support_card">
                                    <img src="https://shikshaseva.org/wp-content/uploads/2021/10/1.jpg" class="default_boder_radius"  style="width: 100%; "/>
                                </div>
                                <div class="col text-center p-3 support_card">
                                    <img src="https://shikshaseva.org/wp-content/uploads/2021/10/2.jpg" class="default_boder_radius" style="width: 100%;"/>
                                </div>
                                <div class="col text-center p-3 support_card">
                                    <img src="https://shikshaseva.org/wp-content/uploads/2021/10/3.jpg" class="default_boder_radius"  style="width: 100%;"/>
                                </div>
                                <div class="col text-center p-3 support_card">
                                    <img src="https://shikshaseva.org/wp-content/uploads/2021/10/3.jpg" class="default_boder_radius"  style="width: 100%;"/>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row row-cols-1 row-cols-md-4 g-4">
                                <div class="col text-center p-3 support_card">
                                    <img src="https://shikshaseva.org/wp-content/uploads/2021/10/1.jpg" class="default_boder_radius"  style="width: 100%; "/>
                                </div>
                                <div class="col text-center p-3 support_card">
                                    <img src="https://shikshaseva.org/wp-content/uploads/2021/10/2.jpg" class="default_boder_radius" style="width: 100%;"/>
                                </div>
                                <div class="col text-center p-3 support_card">
                                    <img src="https://shikshaseva.org/wp-content/uploads/2021/10/3.jpg" class="default_boder_radius"  style="width: 100%;"/>
                                </div>
                                <div class="col text-center p-3 support_card">
                                    <img src="https://shikshaseva.org/wp-content/uploads/2021/10/3.jpg" class="default_boder_radius"  style="width: 100%;"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" style="padding-right: 9%;" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon  bg-danger rounded" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" style="padding-left: 9%;" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-danger rounded" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="p-5 text-center">
                <button type="submit" class="btn view_more_btn ps-3 pe-3">View More</button>
            </div>
        </div>
    </div>

    <div style="padding-top: 10%; padding-bottom:10%;">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="text-left">
                        <h2 class="sub_header">Accreditations</h2>
                        <p class="default_p pt-3">We adhere to strict standards at all our facilities, as accredited by independent organisations. We are audited regularly by the following accreditation bodies, as well as some of the world’s biggest brands, multiple times a year.</p>
                    </div>
                </div>
                <div class="col-6">
                    
                </div>
            </div>
        </div>
    </div>

    <div style="padding-top: 10%; padding-bottom:10%; background-color:#F7F7F7;">
        <div class="container">
            <div class="text-center">
                <h2 class="sub_header">Corporate Partners</h2>
            </div>
            <div>
            <div id="partnerCarousel" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row row-cols-1 row-cols-md-4 g-4">
                                <div class="col text-center p-3 ">
                                    <img src="https://shikshaseva.org/wp-content/uploads/2021/07/alkem-logo.jpg" class="default_boder_radius coparate-image-zoom" />
                                </div>
                                <div class="col text-center p-3 ">
                                    <img src="https://shikshaseva.org/wp-content/uploads/2021/07/alkem-logo.jpg" class="default_boder_radius coparate-image-zoom"/>
                                </div>
                                <div class="col text-center p-3 ">
                                    <img src="https://shikshaseva.org/wp-content/uploads/2021/07/alkem-logo.jpg" class="default_boder_radius coparate-image-zoom"/>
                                </div>
                                <div class="col text-center p-3 ">
                                    <img src="https://shikshaseva.org/wp-content/uploads/2021/07/alkem-logo.jpg" class="default_boder_radius coparate-image-zoom"/>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row row-cols-1 row-cols-md-4 g-4">
                                <div class="col text-center p-3 ">
                                    <img src="https://shikshaseva.org/wp-content/uploads/2022/05/Untitled-design-7.png" class="default_boder_radius  coparate-image-zoom"/>
                                </div>
                                <div class="col text-center p-3 ">
                                    <img src="https://shikshaseva.org/wp-content/uploads/2022/05/Untitled-design-7.png" class="default_boder_radius coparate-image-zoom"/>
                                </div>
                                <div class="col text-center p-3 ">
                                    <img src="https://shikshaseva.org/wp-content/uploads/2022/05/Untitled-design-7.png" class="default_boder_radius coparate-image-zoom"/>
                                </div>
                                <div class="col text-center p-3 ">
                                    <img src="https://shikshaseva.org/wp-content/uploads/2022/05/Untitled-design-7.png" class="default_boder_radius coparate-image-zoom"/>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row row-cols-1 row-cols-md-4 g-4">
                                <div class="col text-center p-3 ">
                                    <img src="https://shikshaseva.org/wp-content/uploads/2021/07/alkem-logo.jpg" class="default_boder_radius coparate-image-zoom"/>
                                </div>
                                <div class="col text-center p-3 ">
                                    <img src="https://shikshaseva.org/wp-content/uploads/2021/07/alkem-logo.jpg" class="default_boder_radius coparate-image-zoom"/>
                                </div>
                                <div class="col text-center p-3 ">
                                    <img src="https://shikshaseva.org/wp-content/uploads/2021/07/alkem-logo.jpg" class="default_boder_radius coparate-image-zoom"/>
                                </div>
                                <div class="col text-center p-3 ">
                                    <img src="https://shikshaseva.org/wp-content/uploads/2021/07/alkem-logo.jpg" class="default_boder_radius coparate-image-zoom"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" style="padding-right: 15%;" type="button" data-bs-target="#partnerCarousel" data-bs-slide="prev">
                        <i class="bi bi-caret-left-fill text-black" style="font-size: 30px;"></i>
                    </button>
                    <button class="carousel-control-next" style="padding-left: 15%;" type="button" data-bs-target="#partnerCarousel" data-bs-slide="next">
                        <i class="bi bi-caret-right-fill text-black" style="font-size: 30px;"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

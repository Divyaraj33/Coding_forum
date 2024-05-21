<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Welcome to iDiscuss - Coding Forums</title>
    <style>
    h1, h2, h3, h4, h5, h6 {
    color: #2c3145;
}
a, a:hover, a:focus, a:active {
    text-decoration: none;
    outline: none;
}
ul {
    margin: 0;
    padding: 0;
    list-style: none;
}

.section_all {
    position: relative;
    padding-top: 70px;
    padding-bottom: 80px;
    min-height: 100vh;
}
.section-title {
    font-weight: 700;
    text-transform: capitalize;
    letter-spacing: 1px;
}

.section-subtitle {
    letter-spacing: 0.4px;
    line-height: 28px;
    max-width: 550px;
}

.section-title-border {
    background-color: #000;
    height: 1 3px;
    width: 44px;
}

.section-title-border-white {
    background-color: #fff;
    height: 2px;
    width: 100px;
}
.text_custom {
    color: #00bd2a;
}

.about_icon i {
    font-size: 22px;
    height: 65px;
    width: 65px;
    line-height: 65px;
    display: inline-block;
    background: #fff;
    border-radius: 35px;
    color: #00bd2a;
    box-shadow: 0 8px 20px -2px rgba(158, 152, 153, 0.5);
}

.about_header_main .about_heading {
    max-width: 450px;
    font-size: 24px;
}

.about_icon span {
    position: relative;
    top: -10px;
}

.about_content_box_all {
    padding: 28px;
}

    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/contacts/contact-1/assets/css/contact-1.css">
    </style>
  </head>
  <body>
    
  <?php include 'partials/_dbconnect.php';?>
  <?php include 'partials/_header.php';?>
    <div class="container">
    <section class="section_all bg-light" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title_all text-center">
                            <h3 class="font-weight-bold">Welcome To <span class="text-custom">About Page</span></h3>
                            <p class="section_subtitle mx-auto text-muted">With 3 years of knowledge, We have <br/>a proven trace recordnof success and are constantly ourselves to stay ahead of the curve.</p>
                            <div class="">
                                <i class=""></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row vertical_content_manage mt-5">
                    <div class="col-lg-6">
                        <div class="about_header_main mt-3">
                            <div class="about_icon_box">
                                <p class="text_custom font-weight-bold">How -- and Why -- We Create this page </p>
                            </div>
                            <h4 class="about_heading text-capitalize font-weight-bold mt-4">Who We Are?</h4>
                            <p class="text-muted mt-3">We help people to build incredible brands and superior products. Our perspective is to furnish outstanding captivating services.</p>

                            <p class="text-muted mt-3">We are a fast-growing company, but we have never lost sight of our core values. We believe in collaboration, innovation, and customer satisfaction. We are always looking for new ways to improve our products and services.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="img_about mt-3">
                            <img src="https://i.ibb.co/qpz1hvM/About-us.jpg" alt="" class="img-fluid mx-auto d-block">
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-lg-4">
                        <div class="about_content_box_all mt-3">
                            <div class="about_detail text-center">
                                <div class="about_icon">
                                <i class="fa fa-chrome" style="font-size:36px"></i>
                                </div>
                                <h5 class="text-dark text-capitalize mt-3 font-weight-bold">Digital Agency</h5>
                                <p class="edu_desc mt-3 mb-0 text-muted">We are crafting a digital method that subsists life across all mediums. </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="about_content_box_all mt-3">
                            <div class="about_detail text-center">
                                <div class="about_icon">
                                <i class="fa fa-angellist" style="font-size:36px"></i>
                                </div>
                                <h5 class="text-dark text-capitalize mt-3 font-weight-bold">We make Best Result</h5>
                                <p class="edu_desc mb-0 mt-3 text-muted">We believe in innovation by merging primary with elaborate ideas.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="about_content_box_all mt-3">
                            <div class="about_detail text-center">
                                <div class="about_icon">
                                <i class="fa fa-expeditedssl" style="font-size:36px"></i>
                                </div>
                                <h5 class="text-dark text-capitalize mt-3 font-weight-bold">best platform </h5>
                                <p class="edu_desc mb-0 mt-3 text-muted">We provided you to ask questions from strangers. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
  <?php include 'partials/_footer.php';?> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
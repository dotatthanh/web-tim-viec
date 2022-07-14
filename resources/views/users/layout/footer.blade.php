  <!-- Footer Section Start -->
  <footer>
    <!-- Footer Area Start -->
    <section class="footer-Content">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="widget">
              <h3 class="block-title">
                <img src="user_assets/img/logo.png" class="img-responsive" alt="Footer Logo">
              </h3>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="widget">
              <h3 class="block-title">Nhà phát triển</h3>
              <ul class="menu">
                <li>
                  <a href="https://www.facebook.com/profile.php?id=100030011672272" target="_blank">Đào Đức Thiện</a>
                </li>
                <li>
                  <a href="tel:0343288856">Liên hệ: 0343288856</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="widget">
              <h3 class="block-title">Nghề nghiệp hot</h3>
              <ul class="menu">
                <li>
                  <a href="#">Android Developer</a>
                </li>
                <li>
                  <a href="#">Senior Accountant</a>
                </li>
                <li>
                  <a href="#">Frontend Developer</a>
                </li>
                <li>
                  <a href="#">Junior Tester</a>
                </li>
                <li>
                  <a href="#">Project Manager</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="widget">
              <h3 class="block-title">Mạng xã hội</h3>
              <div class="bottom-social-icons social-icon">
                <a class="twitter" href="https://twitter.com" target="_blank">
                  <i class="ti-twitter-alt"></i>
                </a>
                <a class="facebook" href="https://web.facebook.com/" target="_blank">
                  <i class="ti-facebook"></i>
                </a>
                <a class="youtube" href="https://youtube.com" target="_blank">
                  <i class="ti-youtube"></i>
                </a>
                <a class="dribble" href="https://dribbble.com/" target="_blank">
                  <i class="ti-dribbble"></i>
                </a>
                <a class="linkedin" href="https://www.linkedin.com/GrayGrids" target="_blank">
                  <i class="ti-linkedin"></i>
                </a>
              </div>
              <p>Mạng xã hội của mọi nhà !</p>
              <form action="{{route('setEmail')}}" class="subscribe-box" method="POST">
                {!! csrf_field() !!}
                <input type="text" name="guestEmail" placeholder="Email ">
                <input type="submit" class="btn-system" value="Search">
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Footer area End -->

    <!-- Copyright Start  -->
    <div id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="site-info text-center">
              Developer
              <i class="fa fa-love"></i>
              <a href="javascript:void(0)">HEDSPI – K62</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Copyright End -->

  </footer>
  <!-- Footer Section End -->

  <!-- Go To Top Link -->
  <a href="#" class="back-to-top">
    <i class="ti-arrow-up"></i>
  </a>
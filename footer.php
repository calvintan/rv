<div class="footer">
  <div class="footer__top">
    <img class="footer__top--icon" src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/icon-bolt.svg" alt="">
    <img class="footer__top--logo" src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/logo.svg" alt="">
  </div>
  <ul class="footer__contact">
    <li>
      <h3>Email</h3>
      <a href="mailto:info@relay.video">info@relay.video</a>
    </li>
    <li>
      <h3>WeChat</h3>
      <a data-bs-toggle="modal" data-bs-target="#wechat">XFSP1989 <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/icon-external.svg" alt="open in pop-up"></a>
    </li>
    <li>
      <h3>WhatsApp</h3>
      <a data-bs-toggle="modal" data-bs-target="#whatsapp">Abe <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/icon-external.svg" alt="open in pop-up"></a>
    </li>
  </ul>
  <div class="footer__bottom">
    <ul>
      <li><a href="<?php echo esc_url(site_url('/privacy-policy/')); ?>">Privacy</a></li>
    </ul>
    <p class="text-center m-0">© 2024 Relay.com. All Rights Reserved.</p>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="wechat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add us on WeChat</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img style="width: 100%; height: auto;" src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/wechat.jpg" alt="QR code">
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="whatsapp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add us on WhatsApp</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img style="width: 100%; height: auto;" src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/qr-code.jpg" alt="QR code">
      </div>
    </div>
  </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
<?php
/**
 * Default Footer Template
 *
 */
?>


<footer class="site-footer" role="contentinfo" style="background-image:linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url(<?php echo $backgroundImg[0]; ?>);>">
    <nav class="nav-footer-wrap" role="navigation">
        <div class="three-column-footer-contact-form-container">
              <footer class="three-column-footer-contact-form" data-equalizer data-equalize-by-row="true">
                <div class="footer-left" data-equalizer-watch>
                  <div class="baseline">
                    <div class="contact-details">
                      <h4>CONTACT US</h4>
                      <p><a href="tel:1-555-867-5309"><i class="fa fa-phone fa-lg" aria-hidden="true"></i> 1-555-867-5309</a></p>
                      <p>
                          <a href="https://www.google.com/maps/d/embed?mid=1icVbvRIdh54VJIfsQ1NgFXHlpAg" target="_blank">
                            <i class="fa fa-map-marker fa-lg" aria-hidden="true"></i> 
                            120  Middleville Road<br/>Arcadia, California 91006
                          </a>
                      </p>
                    </div>
                  </div>
                 </div>
                <div class="footer-center" data-equalizer-watch>
                  <div class="baseline">
                    <div class="newsletter">
                      <h4>GET IN TOUCH</h4>
                      <div class="input-group">
                        <input class="input-group-field" type="text" placeholder="Name">
                        <input class="input-group-field" type="email" placeholder="Email address">
                        <textarea placeholder="Message"></textarea>
                      </div>
                      <btn class="button expanded" href="#">Submit</btn>
                    </div>
                  </div>
                </div>
                <div class="footer-right" data-equalizer-watch>
                  <div class="baseline">
                    <h4>OPENING TIMES</h4>
                    <p class="logo"><a href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'name' ); ?></a></p>
                    <p>Mon - Fri 9:00am - 5:00pm</p>
                    <p>Sat 9:00am - 8:00pm</p>
                    <p>Sun 9:00am - 4:00pm</p>
                  </div>
                </div>
              </footer>
            </div>
    </nav>

</footer>

<?php wp_footer(); ?>

<?php
// don't track admins or editors and google analytics option is filled in
if ( ! current_user_can( 'edit_pages' ) && get_option( 'client_google_analytics' ) ) :
    $analytics_id = get_option( 'client_google_analytics' ); ?>

    <!-- Google Universal Analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', '<?php echo $analytics_id; ?>', 'auto');ga('send', 'pageview');
    </script>
<?php endif; ?>

</body>
</html>

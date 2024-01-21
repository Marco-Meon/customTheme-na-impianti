</div>
<footer class="footer mt-4">

  <?php
    $impianti_slug = 'impianti-civili-domotica';
    $videosorveglianza_slug = 'videosorveglianza';
    $antiintrusione_slug = 'anti-intrusione';
    $illuminazione_slug = 'illuminazione';
    $fotovoltaico_slug = 'fotovoltaico';
    $automazione_slug = 'automazione';
    $galleria_slug = 'galleria';
    $contatti_slug = 'contatti';

    $impianti_url = get_permalink(get_page_by_path($impianti_slug));
    $videosorveglianza_url = get_permalink(get_page_by_path($videosorveglianza_slug));
    $antiintrusione_url = get_permalink(get_page_by_path($antiintrusione_slug));
    $illuminazione_url = get_permalink(get_page_by_path($illuminazione_slug));
    $fotovoltaico_url = get_permalink(get_page_by_path($fotovoltaico_slug));
    $automazione_url = get_permalink(get_page_by_path($automazione_slug));
    $galleria_url = get_permalink(get_page_by_path($galleria_slug));
    $contatti_url = get_permalink(get_page_by_path($contatti_slug));
  ?>


  <div class="grid pt-3 pb-3 footer-container">
    <div class="col-50 footer-contact">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/Na-Impianti-elettrici-fotovoltaico-videosorveglianza-logo-bianco-varese.svg" alt="<?php bloginfo('title');?>">
      <a href="mailto:info@naimpianti.it" target="_blank" class="mt-2"><?php esc_html_e( 'Contatti: info@naimpianti.it', 'nextframe'); ?></a>
      <a href="https://maps.app.goo.gl/dgZjfjzdc3UkpTUT7" target="_blank"><?php esc_html_e( 'Ci trovi: Viale Belforte, 162, 21100 Varese VA', 'nextframe'); ?></a>
    </div>
    <div class="col-25 footer-servizi">
      <h3><?php esc_html_e( 'Servizi', 'nextframe'); ?></h3>
      <a href="<?php echo $impianti_url; ?>"><?php esc_html_e( '- Impianti civili/domotica', 'nextframe'); ?></a>
      <a href="<?php echo $illuminazione_url; ?>"><?php esc_html_e( '- Illuminazione', 'nextframe'); ?></a>
      <a href="<?php echo $fotovoltaico_url; ?>"><?php esc_html_e( '- Fotovoltaico', 'nextframe'); ?></a>
      <a href="<?php echo $antiintrusione_url; ?>"><?php esc_html_e( '- Anti-Intrusione', 'nextframe'); ?></a>
      <a href="<?php echo $videosorveglianza_url; ?>"><?php esc_html_e( '- Video Sorveglianza', 'nextframe'); ?></a>
    </div>
    <div class="col-25 footer-pagine">
      <h3><?php esc_html_e( 'Azienda', 'nextframe'); ?></h3>
      <a href="<?php echo $illuminazione_url; ?>"><?php esc_html_e( '- Home', 'nextframe'); ?></a>
      <a href="<?php echo $galleria_url; ?>"><?php esc_html_e( '- Lavori svolti', 'nextframe'); ?></a>
      <a href="<?php echo $contatti_url; ?>"><?php esc_html_e( '- Contatti', 'nextframe'); ?></a>
    </div>
    <div class="footer-line"></div>
    <div class="col-50">
      <?php esc_html_e( '© Copyright ', 'nextframe'); ?> <?php echo date("Y"); //display current year ?>
      <?php bloginfo('title'); // display wp blog title ?> -
      <?php esc_html_e( 'Viale Belforte 162, 21100, Varese, P.Iva 03461030128 -', 'nextframe'); ?>
    </div>
    <div class="col-50 text-right">
      <a target="_blank" href="https://www.iubenda.com/privacy-policy/50518916"><?php esc_html_e( ' Privacy Policy', 'nextframe'); ?></a> - <a target="_blank" href="https://www.iubenda.com/privacy-policy/50518916/cookie-policy"><?php esc_html_e( ' Cookie Policy', 'nextframe'); ?></a>
    </div>
  </div>

</footer>

<?php wp_footer(); // insert scripts by WordPress at at end of the page ?>

</body>
</html>

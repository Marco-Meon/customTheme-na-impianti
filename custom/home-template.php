<?php /* Template Name: Home Template */ ?>

<?php get_header();?>

<?php if (have_posts()) :?><?php while(have_posts()) : the_post();?>

<?php 
  $image_attributes =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
?>


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


<div class="cover text-white" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/custom/img/Na-Impianti-elettrici-fotovoltaico-videosorveglianza-domotica-anti-intrusione-casa-varese-cover.webp) center center; background-size: cover;">
  <div class="cover__content">
    <h1><?php esc_html_e( 'Elettricista varese, impianto fotovoltaico varese e provincia, impianti elettrici civili', 'nextframe'); ?></h1>
    <h2 class="cover__title text-reveal"><?php the_title(); ?></h2>
    <h2 class="cover__subtitle text-reveal"><?php bloginfo('description'); ?></h2>
  </div>
</div>


<div class="spacer"></div>


<section class="section-1 grid grid--center">

  <div class="col-100">
    <div class="section-1__top-text">
      <h3 class="section-1__top-text-left"><?php esc_html_e( 'Più di un decennio', 'nextframe'); ?></br><?php esc_html_e( 'di esperienza', 'nextframe'); ?></h3>
      <h3 class="section-1__top-text-right"><?php esc_html_e( 'Impianti elettrici a Varese', 'nextframe'); ?></h3>
    </div>
    <div class="section-1__line"></div>
    <p class="section-1__content">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php esc_html_e( "Na Impianti è la risposta completa per impianti elettrici civili prfessionali,
       impianti fotovoltaici efficienti, illuminazione all'avanguardia e soluzioni di sicurezza che garantiscono la vostra
        protezione in tutta Varese. Scoprite come possiamo migliorare la vostra vita quotidiana.", 'nextframe'); ?>
    </p>
  </div>

</section>


<div class="spacer"></div>
<div class="spacer-sma"></div>


<section class="section-7 grid grid--center">

  <h2><?php esc_html_e( 'I Nostri', 'nextframe'); ?> <span class="text-green"><?php esc_html_e( 'Servizi', 'nextframe'); ?></span></h2>

  <div class="options col-100">

    <div class="option active" style="--optionBackground:url(<?php echo get_stylesheet_directory_uri(); ?>/custom/img/Na-Impianti-elettrici-fotovoltaico-videosorveglianza-domotica-anti-intrusione-casa-varese-impianti-elettrici.webp);">
      <div class="shadow"></div>
      <div class="label">
        <div class="icon icon-1">
          <i class="fas fa-walking"></i>
        </div>
        <div class="info">
          <div class="main"><?php esc_html_e( 'Impianti elettrici/Domotica', 'nextframe'); ?></div>
          <a href="<?php echo $impianti_url; ?>" class="sub"><?php esc_html_e( 'Scopri di più', 'nextframe'); ?></a>
        </div>
      </div>
    </div>

    <div class="option" style="--optionBackground:url(<?php echo get_stylesheet_directory_uri(); ?>/custom/img/Na-Impianti-elettrici-fotovoltaico-videosorveglianza-domotica-anti-intrusione-casa-varese-illuminazione.webp);">
      <div class="shadow"></div>
      <div class="label">
        <div class="icon icon-2">
          <i class="fas fa-snowflake"></i>
        </div>
        <div class="info">
          <div class="main"><?php esc_html_e( 'Illuminazione', 'nextframe'); ?></div>
          <a href="<?php echo $illuminazione_url; ?>" class="sub"><?php esc_html_e( 'Scopri di più', 'nextframe'); ?></a>
        </div>
      </div>
    </div>
   
   <div class="option" style="--optionBackground:url(<?php echo get_stylesheet_directory_uri(); ?>/custom/img/Na-Impianti-elettrici-fotovoltaico-videosorveglianza-domotica-anti-intrusione-casa-varese-pannelli-solari-2.webp);">
      <div class="shadow"></div>
      <div class="label">
         <div class="icon icon-3">
            <i class="fas fa-tree"></i>
         </div>
         <div class="info">
            <div class="main"><?php esc_html_e( 'Fotovoltaico', 'nextframe'); ?></div>
            <a href="<?php echo $fotovoltaico_url; ?>" class="sub"><?php esc_html_e( 'Scopri di più', 'nextframe'); ?></a>
         </div>
      </div>
   </div>

   <div class="option" style="--optionBackground:url(<?php echo get_stylesheet_directory_uri(); ?>/custom/img/Na-Impianti-elettrici-fotovoltaico-videosorveglianza-domotica-anti-intrusione-casa-varese-anti-intrusione.webp);">
      <div class="shadow"></div>
      <div class="label">
         <div class="icon icon-4">
            <i class="fas fa-tint"></i>
         </div>
         <div class="info">
            <div class="main"><?php esc_html_e( 'Anti intrusione', 'nextframe'); ?></div>
            <a href="<?php echo $antiintrusione_url; ?>" class="sub"><?php esc_html_e( 'Scopri di più', 'nextframe'); ?></a>
         </div>
      </div>
   </div>

    <div class="option" style="--optionBackground:url(<?php echo get_stylesheet_directory_uri(); ?>/custom/img/Na-Impianti-elettrici-fotovoltaico-videosorveglianza-domotica-anti-intrusione-casa-varese32.webp);">
      <div class="shadow"></div>
      <div class="label">
        <div class="icon icon-5">
          <i class="fas fa-sun"></i>
        </div>
        <div class="info">
          <div class="main"><?php esc_html_e( 'Video sorveglianza', 'nextframe'); ?></div>
          <a href="<?php echo $videosorveglianza_url; ?>" class="sub"><?php esc_html_e( 'Scopri di più', 'nextframe'); ?></a>
        </div>
      </div>
    </div>

    <div class="option" style="--optionBackground:url(<?php echo get_stylesheet_directory_uri(); ?>/custom/img/Na-Impianti-elettrici-fotovoltaico-videosorveglianza-domotica-anti-intrusione-casa-varese31.webp);">
      <div class="shadow"></div>
      <div class="label">
        <div class="icon icon-6">
          <i class="fas fa-sun"></i>
        </div>
        <div class="info">
          <div class="main"><?php esc_html_e( 'Automazioni', 'nextframe'); ?></div>
          <a href="<?php echo $automazione_url; ?>" class="sub"><?php esc_html_e( 'Scopri di più', 'nextframe'); ?></a>
        </div>
      </div>
    </div>
    
  </div>

</section>


<div class="spacer"></div>
<div class="spacer-sma"></div>


<section class="section-2 grid grid--center">

  <div class="section-2__container">

    <div class="col-40 section-2__content-img">
      <img class="section-2__img" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/Na-Impianti-elettrici-fotovoltaico-videosorveglianza-domotica-anti-intrusione-casa-varese33.webp" alt="Na Impianti elettrici fotovoltaico videosorveglianza domotica anti intrusione casa varese 33">
    </div>

    <div class="col-60 section-2__content-text">
      <div class="section-2__content">
        <h2><?php esc_html_e( 'Da Elettricità a Domotica', 'nextframe'); ?></h2>
        <p>
        <?php esc_html_e( 'Na Impianti vi offre soluzioni su misura per impianti elettrici civili, 
        garantendovi efficienza impeccabile e completa assistenza, compresi ampliamenti 
        e un focus sulla sostenibilità. ', 'nextframe'); ?>
        </br>
        <?php esc_html_e( 'Inoltre, forniamo impianti domotici per una 
        vita connessa, sicura e intuitiva, consentendo il controllo da remoto per un comfort eccezionale.', 'nextframe'); ?>
        </p>
        <div class="section-2__line"></div>
        <a class="section-2__cta" href="<?php echo $contatti_url; ?>"><?php esc_html_e( 'Contattaci', 'nextframe'); ?></a>
      </div>
    </div>

  </div>

</section>


<div class="spacer"></div>
<div class="spacer-sma"></div>


<section class="section-3">

  <div class="grid grid--center">
    <div class="col-90">
      <h2><?php esc_html_e( 'Soluzioni Complete e Personalizzate', 'nextframe'); ?></h2>
      <p>
        <?php esc_html_e( "Scegliere Na impianti significa scegliere l'eccellenza nel campo dell'impiantistica a Varese.", 'nextframe'); ?>
        </br>
        <?php esc_html_e( "Il nostro servizio completo offre impianti fotovoltaici su misura, illuminazione all'avanguardia e impianti elettrici di qualità, 
        garantendovi assistenza personalizzata e qualità superiore per trasformare il vostro spazio in qualcosa di straordinario.", 'nextframe'); ?>
      </p>
    </div>
  </div>

</section>


<div class="spacer"></div>
<div class="spacer-sma"></div>


<section class="section-4 grid grid--center">

  <div class="section-4__container">

    <div class="col-60 section-4__content-text">
      <div class="section-4__content">
        <h2><?php esc_html_e( "L'Eccellenza a Casa Tua", 'nextframe'); ?></h2>
        <p>
          <?php esc_html_e( "Na Impianti porta l'eccellenza nell'illuminotecnica a Varese, 
          offrendo un servizio completo. Dalla progettazione all'installazione, 
          curiamo ogni dettaglio per garantirti l'atmosfera ideale per il tuo 
          spazio. Scopri l'evoluzione con l'illuminazione a LED, un'opzione che 
          coniuga comfort e sostenibilità. ", 'nextframe'); ?>
          </br>
          <?php esc_html_e( 'La tua luce ideale, realizzata su misura.', 'nextframe'); ?>
        </p>
        <div class="section-4__line"></div>
        <a class="section-4__cta" href="<?php echo $contatti_url; ?>"><?php esc_html_e( 'Contattaci', 'nextframe'); ?></a>
      </div>
    </div>

    <div class="col-40 section-4__content-img">
      <img class="section-4__img" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/Na Impianti elettrici fotovoltaico videosorveglianza domotica anti intrusione casa varese.webp" alt="Na Impianti elettrici fotovoltaico videosorveglianza domotica anti intrusione casa varese">
    </div>  

  </div>

</section>


<div class="spacer"></div>
<div class="spacer-sma"></div>


<section class="section-5 grid grid--center">

  <div class="section-5__container-1">
    <div class="col-60">
      <img class="section-5__img" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/Na Impianti elettrici fotovoltaico videosorveglianza domotica anti intrusione casa varese pannelli.webp" alt="Na Impianti elettrici fotovoltaico videosorveglianza domotica anti intrusione casa varese">
    </div>
    <div class="col-40">
      <h2><?php esc_html_e( 'Impianti Fotovoltaici', 'nextframe'); ?></h2>
      <p> 
        <?php esc_html_e( "I nostri impianti fotovoltaici offrono benefici ecologici e finanziari, 
        riducendo le spese energetiche grazie all'energia pulita. Con la tecnologia 
        all'avanguardia, garantiamo massima efficienza e un servizio completo 
        disponibile in tutta Varese, dalla progettazione all'installazione fino alla manutenzione. 
        Inoltre, con gli impianti ad accumulo, potrai conservare l'energia per un utilizzo sostenibile.", 'nextframe'); ?>
      </p>
    </div>
  </div>

  <div class="section-5__container-2">
    <div class="col-40">
      <h2><?php esc_html_e( 'Protezione Avanzata', 'nextframe'); ?></h2>
      <p>
        <?php esc_html_e( "I nostri servizi di video sorveglianza e antintrusione offrono una sicurezza 
        di livello superiore grazie alla tecnologia all'avanguardia a nostra disposizione. 
        Con semplici interazioni del tuo smartphone, avrai inoltre la possibilità di 
        controllare il tutto da remoto, garantendo un controllo totale sulla tua sicurezza. ", 'nextframe'); ?>
        </br>
        <?php esc_html_e( 'La vostra tranquillità è la nostra massima priorità.', 'nextframe'); ?>
      </p>
    </div>
    <div class="col-60">
      <img class="section-5__img" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/Na-Impianti-elettrici-fotovoltaico-videosorveglianza-domotica-anti-intrusione-casa-varese34.webp" alt="Na Impianti elettrici fotovoltaico videosorveglianza domotica anti intrusione casa varese 34">
    </div>
  </div>

</section>


<div class="spacer"></div>
<div class="spacer-sma"></div>


<section class="section-6 grid grid--center">
  
  <div class="col-100 section-6__text">
    <h2><?php esc_html_e( 'I Nostri ', 'nextframe'); ?> <span class="text-green"><?php esc_html_e( 'Lavori', 'nextframe'); ?></span></h2>
    <a href="<?php echo $galleria_url; ?>"><?php esc_html_e( 'Scopri di più', 'nextframe'); ?></a>
  </div>

  <div class="col-100 section-6__image">
    <img class="section-6__img" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/Na-Impianti-elettrici-fotovoltaico-videosorveglianza-domotica-anti-intrusione-casa-varese-lavoro-2.webp" alt="Na Impianti elettrici fotovoltaico videosorveglianza domotica anti intrusione casa varese">
    <img class="section-6__img" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/Na-Impianti-elettrici-fotovoltaico-videosorveglianza-domotica-anti-intrusione-casa-varese-lavoro-1.webp" alt="Na Impianti elettrici fotovoltaico videosorveglianza domotica anti intrusione casa varese">
    <img class="section-6__img" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/Na-Impianti-elettrici-fotovoltaico-videosorveglianza-domotica-anti-intrusione-casa-varese-pannelli-solari.webp" alt="Na Impianti elettrici fotovoltaico videosorveglianza domotica anti intrusione casa varese pannelli solari">
  </div>

  <div class="section-6__hidden">
    <a href="<?php echo $galleria_url; ?>"><?php esc_html_e( 'Scopri di più', 'nextframe'); ?></a>
  </div>

</section>


<div class="spacer"></div>
<div class="spacer-sma"></div>


<main class="grid grid--center">

  <div class="col-100">

    <?php the_content(); ?>

  </div>

</main>

<?php endwhile; else :?>

<p><?php esc_html_e('Sorry, no posts matched your criteria.', 'nextframe');?></p>

<?php endif; ?>

<?php get_footer();?>
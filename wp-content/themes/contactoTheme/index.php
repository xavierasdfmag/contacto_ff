<?php get_header(); ?>

<script>
  $(document).ready(function(){
    $('.facebook-share-button').on('click', function(e){
      e.preventDefault();
      FB.ui(
       {
        method: 'share',
        href: 'http://futbolfemenino.pe/contacto/',
        display: 'popup'
      }, function(response){});
    });
  });
</script> 

  <div class="row">
    <div class="small-12 columns frase">
      <span>"No queremos ser enciclopedias que se conocen hasta el segundo apellido de cada jugador de liga turca. Queremos jugar fútbol. Hablar de él. Compartir la alegría de un golazo"</span>
      <br>
      <a href="http://104.236.14.59/contacto/?page_id=5">Ver manifiesto</a>
    </div>
  </div>
  <div class="row">
    <div class="small-12 medium-8 columns">
      <iframe height="400" src="//www.youtube.com/embed/HJqEaxwlvLM?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>

      <div class="row share">
        <div class="small-6 columns no-padding-right text-center">
          <div class="facebook-share-button"><span class="icon-facebook"></span>Compártelo en tu facebook</div>
        </div>
        <div class="small-6 columns no-padding-left text-center">
        <a target="_blank" href="https://twitter.com/share?url=https%3A%2F%2Fdev.twitter.com%2Fweb%2Ftweet-button&via=twitterdev&related=twitterapi%2Ctwitter&hashtags=example%2Cdemo&text=custom%20share%20text">
          <div class="twitter-share-button">
            <span class="icon-twitter"></span>
            Compártelo por twitter
          </div>       
        </a> 
        </div>
        <span>Al compartir nos ayudas a difundir el fútbol femenino. Gracias</span>
      </div>


    </div>
    <div class="small-12 medium-4 columns formulario">
      <?php echo do_shortcode('[contact-form-7 id="8" title="subscription"]'); ?>
    </div>
  </div>
  <div class="row">
    <div class="small-12 columns footer-contacto">
      <strong>UNA IDEA DE ASDFNETWORK</strong>
    </div>
  </div>

  <div id="modalDifundir" class="reveal-modal" data-reveal>
    <h4>Ayúdanos a difundir</h4>
    <div class="row text">
      <div class="small-9 columns">
        <p>Al compartir nos ayudas a hacer más grande el fútbol femenino. Gracias.</p>
      </div>
      <div class="small-3 columns">
        <img src="<?php echo get_stylesheet_directory_uri() ; ?>/img/logo_escudo.png">
      </div>
    </div>
    
    <div class="row share">
      <div class="small-6 columns no-padding-right text-center">
        <div class="facebook-share-button"><span class="icon-facebook modal"></span></div>
      </div>
      <div class="small-6 columns no-padding-left text-center">
      <!-- <a target="_blank" href="https://twitter.com/share?url=https%3A%2F%2Fdev.twitter.com%2Fweb%2Ftweet-button&via=twitterdev&related=twitterapi%2Ctwitter&hashtags=example%2Cdemo&text=custom%20share%20text"> -->

<a target="_blank" href="https://twitter.com/share?url=https%3A%2F%2Ffutbolfemenino.pe%2Fcontacto&text=Pre%20suscribete%20a%20la%20primera%20revista%20de%20fútbol%20femenino%20de%20Peru%20y%20recibe%20la%20primera%20edicion%20gratis">
</a>


        <div class="twitter-share-button">
          <span class="icon-twitter modal"></span>
        </div>       
      </a> 
      </div>
    </div>  
    <a class="close-reveal-modal">&#215;</a>
  </div>

<?php get_footer(); ?>

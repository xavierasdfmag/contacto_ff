<?php get_header(); ?>

<script>
  $(document).ready(function(){
    $('#share_button').on('click', function(e){
      e.preventDefault();
      FB.ui(
       {
        method: 'share',
        name: 'HyperArts Blog',
        link: 'http://hyperarts.com/blog',
        picture: 'http://www.hyperarts.com/_img/TabPress-LOGO-Home.png',
        caption: 'I love HyperArts tutorials',
        description: 'The HyperArts Blog provides tutorials for all things Facebook',
        message: ''
      }, function(response){});
    });
  });
</script> 

  <div class="row">
    <div class="small-12 columns frase">
      <span>"No queremos ser enciclopedias que se conocen hasta el segundo apellido de cada jugador de liga turca. Queremos jugar fútbol. Hablar de él. Compartir la alegría de un golazo"</span>
      <br>
      <a href="">Ver manifiesto</a>
    </div>
  </div>
  <div class="row">
    <div class="small-12 medium-8 columns">
      <iframe height="400" src="//www.youtube.com/embed/HJqEaxwlvLM?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
      <div id="share_button">comparte!!!</div>
    </div>
    <div class="small-12 medium-4 columns formulario">
      <?php echo do_shortcode('[contact-form-7 id="8" title="subscription"]'); ?>
    </div>
  </div>

<div id="modalDifundir" class="reveal-modal" data-reveal>
  <h2>Te registraste correctamente.</h2>
  <p class="lead">Te registraste correctamente.</p>
  <p>Te registraste correctamente.</p>
  <a class="close-reveal-modal">&#215;</a>
</div>

<?php get_footer(); ?>

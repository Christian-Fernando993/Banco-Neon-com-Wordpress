<?php //Template name: Pagina nao encontrada ?>

<?php get_header(); ?>

<section class="s-page-not-found">
    <div class="container">
        <h1>Ops.. Você se perdeu?</h1>
        <p>Clique no botão abaixo para voltar para home.</p>
        <a href="<?php echo get_home_url();?>" class="btn btn-primary">Voltar para home</a>
    </div>
</section>

<?php get_footer(); ?>
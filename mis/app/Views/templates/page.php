<div class="container my-5 py-5 text-center">
    <h1 class="display-5 text-primary fw-bold mt-5"><?php echo $title ?></h1>
    <p class="text-secondary mb-5"><?php echo $subtitle ?></p>

    <div class="card p-3 p-md-4 p-lg-5 rounded-4 text-start">
        <?php echo $wp_page->post_content; ?>
    </div>

</div>
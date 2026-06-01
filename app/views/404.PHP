<section>
    <h1>Page not found</h1>

    <?php if (!empty($message)): ?>
        <p><?= escape($message) ?></p>
    <?php endif; ?>

    <p>
        <a href="/">Back to home</a>
    </p>
</section>
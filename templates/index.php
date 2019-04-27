<div class="images">
    <?php for ($i=0; $i < count($images); $i++) : ?>
        <a href="image.php?photo=<?=$images[$i] ?>">
            <img src="<?=PHOTO_SMALL.$images[$i] ?>">
        </a>
    <?php endfor; ?>
</div>
<div class="info-panel">
    <h2>GeoChron</h2>
    <div>
        <?php if (!$locations): ?>
        <p>This item has no relations.</p>
        <?php else: ?>
        <ul>
            <?php foreach ($locationss as $location): ?>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
    </div>
</div>

<div>
<table style="width:100%" class="table">
    <thead>
        <tr>
            <td><h2><small>Reviews</small></h2></td>
        </tr>
        </thead>
    <tr>
        <?php foreach ($reviewspositions as $reviewsposition): ?>
            <tr>
                <td>Comments: <?= $reviewsposition["review"] ?></td>
                <td>Outlets: <?= $reviewsposition["outlet"] ?></td>
            </tr>
        <?php endforeach ?>  
    </tr>
</table>
<p>
</div>

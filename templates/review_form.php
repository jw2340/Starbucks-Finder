<?php $store_id = $_GET['store_id'] ?>

<form action="review.php" method="post">
    <fieldset>
        Store ID:
        <div class="form-group">
            <input autofocus class="form-control" name="store_id" type="text" value="<?php echo htmlspecialchars($store_id); ?>"/>
        </div>
        Review:
        <div class="form-group">
            <textarea autofocus class="form-control" name="review" placeholder="Type your review here." type="text" COLS="40" ROWS="6"></textarea>
        </div>
        Outlets available:
        <div class="form-group">
        <label class="radio-inline"><input type="radio" name="outlet" value="yes">Yes</label>
        <label class="radio-inline"><input type="radio" name="outlet" value="no">No</label>
        </div>
        <p>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
       
    </fieldset>
</form>


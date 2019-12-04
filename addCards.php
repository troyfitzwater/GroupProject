<?php include('heading.php');?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 header-login">
            <div class="row h-100 m-0 p-0">                
                <h1 class="my-auto">Add Cards</h1>
            </div>
        </div>
        <div class="col-sm-8 col-md-6 mt-5 mx-auto">
            <form action: method="post">

            <div class="col-md-12 px-2">
            <label for="" class="input-label">Front of Card</label>
            <textarea type="text" class="textarea-field" name="front-card"></textarea>
            </div>

            <div class="col-md-12 px-2">
            <label for="" class="input-label">Back of Card</label>
            <textarea type="text" class="textarea-field" name="back-card"></textarea>
            </div>

            <input type="submit" id="" class="secondary-btn" value="Add Card">
            <a href="Deckpage.php" class="action-btn">Complete Deck</a>
          </form>
        </div>
    </div>
</div>
<?php include('footer.php');?>
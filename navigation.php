<?php include('heading.php');?>
<div class="container-fluid container-img">
    <div class="row text-center">
        <div class="col-12 my-2 p-0">
            <div class="row m-0 p-0">
                <div class="col-6 text-left p-3">
                    <form action="">
                        <input type="submit" id="" class="logout-btn" value="Logout">
                    </form>
                </div>
                <div class="col-6 text-right p-3">
                    <button class="close-btn" id="close-btn">X</button>
                </div>
            </div>
        </div>
        <div class="col-12 my-3">
            <img src="images/alfred-state-a.png" class="img-fluid alfred-logo" alt="Alfred State Logo">
            <h1>Flashcard Application Menu</h1>            
        </div>
        <div class="col-sm-8 col-md-6 col-lg-4 mt-5 mx-auto">
            <a href="categories.php" class="primary-btn">Continue Learning</a>
            <a href="newDeck.php" class="primary-btn">Create a New Deck</a>
            <a href="mydecks.php" class="primary-btn">My Decks</a>
            <a href="random.php" class="primary-btn">Random Flashcard</a>
        </div>
    </div>
</div>
<?php include('footer.php');?>
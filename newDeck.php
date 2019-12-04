
<?php include('heading.php');?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 header-login">
            <div class="row h-100 m-0 p-0">                
                <h1 class="my-auto">New Deck</h1>
            </div>
        </div>
        <div class="col-sm-8 col-md-6 mt-5 mx-auto">
          <form action="" method="post">
            <div class="row">
                <div class="col-md-6 px-2">
                    <label for="" class="input-label">Deck Name</label>
                    <input type="text" class="input-field" name="deck-name" />
                </div>

                <div class="col-md-6 px-2">
                    <label for="" class="input-label">Category</label>
                    <select name="categories" class="input-field">
                        <option value="">option one</option>
                    </select>
                </div>

                <div class="col-12 px-2">
                    <label for="" class="input-label">Description</label>
                    <textarea type="text" class="textarea-field" name="description"></textarea>
                </div>

                <Label for="" >Want to make this deck public?</label>
                <input type="checkbox" name="if-public" />

                <input type="submit" id="" class="secondary-btn" value="Add Cards">
            </div>
          </form>
        </div>
    </div>
</div>
<?php include('footer.php');?>
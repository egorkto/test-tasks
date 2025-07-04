<?php 
require_once 'src/getComments.php'; //get comments array
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Task3</title>
        
        <!-- bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-4 w-25">
            <form action="src/addComment.php" method='post'>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="author_name" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="comment">Comment</label>
                    <textarea name="comment" class="form-control" id="comment"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <br/>
        
        <div class="container">
            <h3>Comments:</h3>
        </div>
        <hr/>
        <br/>
        <div class="container">
            <? foreach ($comments as $key => $comment) { ?>
                <div class="card w-100 mb-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $comment['author_name'] ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?= date('d-m-Y', strtotime($comment['created_at'])) ?></h6> <!-- convert sql timestamp to day-month-year format -->
                        <p class="card-text"><?= $comment['comment'] ?></p>
                    </div>
                </div>
            <? } ?>
        </div>
        
        <!-- bootstrap -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
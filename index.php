<?php

include 'includes/db.php';
include 'includes/header.php';
include 'includes/nav.php';

?>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="page-header">
                Page Heading
                <small>Secondary Text</small>
            </h1>

            <?php

            $query = 'SELECT * FROM posts';
            $selectAllPostsQuery = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_assoc($selectAllPostsQuery)) {
                $postTitle = $row['post_title'];
                echo "<h2 class='page-header'><a href='#'>{$postTitle}</a></h2>";
            }

            ?>



            <!-- First Blog Post -->
            <p class="lead">
                by <a href="index.php">Start Bootstrap</a>
            </p>
            <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:00 PM</p>
            <hr>
            <img class="img-responsive" src="https://via.placeholder.com/900x300" alt="">
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>
            <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

            <hr>

        </div>

        <!-- Blog Sidebar Widgets Column -->
        <?php include 'includes/sidebar.php'; ?>

    </div>
    <!-- /.row -->

    <hr>

    <?php include 'includes/footer.php'; ?>
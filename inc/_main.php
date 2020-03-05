<main class="min-100 container py-5">
    <div class="row">
    <?php foreach ($results as $result) {?>
        <div class="col-lg-4">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title"><?php echo $result->title;?></h4>
                <p class="card-text"><?php echo $result->content;?></p>
            </div>
            </div>
        </div>
    <?php } ?>
    
    
    </div>
</main>
<?php
/* Template Name: User Page
*/
?>
<?php get_header();?>
    <div class="container mt-3">
        <h1><?php the_title();?></h1>

        <div class="row">
            <div class="col-6">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Emailcím</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="peldaelek1@pelda.com">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Jelszó</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="******">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Emlékezz rám!</label>
                </div>
                <button type="submit" class="btn btn-danger">Belépek</button>
                </form>
            </div>
        </div>
        
        
        <?php get_template_part('includes/section', 'content');?>
    </div>




<?php get_footer();?>

<?php include('partials-front/menu.php'); ?>



    <!-- CAtegorias -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explorar articulos</h2>

            <?php 

                //activas
                //Sql Query
                $sql = "SELECT * FROM tbl_category WHERE active='Yes'";

                $res = mysqli_query($conn, $sql);

                $count = mysqli_num_rows($res);

                //checar disponibles o no
                if($count>0)
                {
                    //disponibles
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //consigue valores
                        $id = $row['id'];
                        $title = $row['title'];
                        $image_name = $row['image_name'];
                        ?>
                        
                        <a href="<?php echo SITEURL; ?>category-foods.php?category_id=<?php echo $id; ?>">
                            <div class="box-3 float-container">
                                <?php 
                                    if($image_name=="")
                                    {
                                        //no disponible
                                        echo "<div class='error'>Image not found.</div>";
                                    }
                                    else
                                    {
                                        //disponible
                                        ?>
                                        <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" alt="Pizza" class="img-responsive img-curve">
                                        <?php
                                    }
                                ?>
                                

                                <h3 class="float-text text-white"><?php echo $title; ?></h3>
                            </div>
                        </a>

                        <?php
                    }
                }
                else
                {
                    //no disponibles
                    echo "<div class='error'>Category not found.</div>";
                }
            
            ?>
            

            <div class="clearfix"></div>
        </div>
    </section>


    <?php include('partials-front/footer.php'); ?>
<div class="col-lg-12">
    <div class="sidebar-item categories">
    <div class="sidebar-heading">
        <h2>Categories</h2>
    </div>
    <div class="content">
        <ul>

        <?php 
        
        $get_cat = $cat->show_category();
        if (mysqli_num_rows($get_cat)>0) {
          foreach ($get_cat as $value) {?>
            <li>
              <a href="#">- <?php echo $value['categoryName'];?></a>
            </li>
        <?php
          }
        }
        
        
        ?>
        </ul>
    </div>
    </div>
</div>
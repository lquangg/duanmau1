</div><!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
  <link rel="stylesheet" href="./content/css/indext.css">
  
</head>
<body>
<section class="d-flex justify-content-between" >
 <div class="" >
 <!-- img -->
        <div class="text-center">
        <d iv class="img-thumbnail">
            <div class="row mb">
                <?php
                extract($onesp);
                ?>
            </div>
            <div class="h3"><?=$name?></div>
            <div class="p-2 h3">
                <?php
                $img=$img_path.$img;
                echo '<div class=""><img width="750" height="536" src="'.$img.'"></div>';
                echo $mota;

                ?>
            </div>
        </div>
<!--BL  -->
            <div class="">
            <form action="">
                <div class="mb-5 mt-5">
                <label class="h3" for="comment">Binh luan:</label>
                <div class="border border-secondary p-3" style="height: 200px;">
                <?php
                $img=$img_path.$img;
                
                echo $mota;

                ?>
                </div>
            <div class="form-floating mt-3 d-flex justify-content-between">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
            <button type="submit" class="btn btn-primary text-center">Submit</button>
            </div>
                </div>
                
            </form>
            </div>

<!--SPCL  -->
        <div class="mt-5 text-center mb-5">
        <div class="boxtitle h3">San pham cung loai</div>
        <div class="border mt-2" height="236"> 
                <?php
                foreach ($sp_cung_loai as $sp_cung_loai){
                    extract($sp_cung_loai);
                    $linksp="indext.php?act=sanphamct&idsp=".$id;
                    echo'<li><a href="'.$linksp.'">'.$name.'</a></li>';
                }

                ?>
            </div>
        </div>
 </div>
 <article class="boxright">
    <?php
    include "boxright.php";
    ?>
    </article>
        
    </section>
    </body>
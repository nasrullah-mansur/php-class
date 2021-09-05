<?php
    include '../config.php';
    include 'includes/header.php';

    $theme_info = DB::table('theme_infos')->first();
    echo '<pre>';
    print_r( $theme_info);
    echo '</pre>';
?>

<!-- Main Content -->

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Dashboard</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                    <li class="breadcrumb-item">Dashboard 1</li>
                </ul>
                <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <form action="php/theme_info/theme_info.php" method="POST" enctype="multipart/form-data">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="body">
                            <h2 class="card-inside-title">Theme info</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">                                    
                                        <input type="text" class="form-control" name="name" placeholder="Theme name" value="<?php echo $theme_info ? $theme_info['name'] : '' ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">                                    
                                        <input type="file" class="form-control" name="logo" placeholder="Theme logo">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">                                    
                                        <input type="file" class="form-control" name="favicon" placeholder="Theme favicon">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">                                    
                                        <input type="email" class="form-control" name="email" placeholder="Theme email" value="<?php echo $theme_info ? $theme_info['email'] : '' ?>">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">                                    
                                        <input type="text" class="form-control" name="phone" placeholder="Theme phone" value="<?php echo $theme_info ? $theme_info['phone'] : '' ?>">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">                                    
                                        <input type="text" class="form-control" name="address" placeholder="Theme address" value="<?php echo $theme_info ? $theme_info['address'] : '' ?>">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">                                    
                                        <input type="text" class="form-control" name="hours" placeholder="Theme hours" value="<?php echo $theme_info ? $theme_info['hours'] : '' ?>">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">                                    
                                        <input type="text" class="form-control" name="map" placeholder="Theme map" value="<?php echo $theme_info ? $theme_info['map'] : '' ?>">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">                                    
                                        <input type="text" class="form-control" name="copyright" placeholder="Theme copyright" value="<?php echo $theme_info ? $theme_info['copyright'] : '' ?>">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <!-- <input type="hidden" name="type" value="insert"> -->
                                    <button name="type" value="insert"  type="submit" class="btn btn-raised btn-primary waves-effect">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<?php
    include 'includes/footer.php';
?>


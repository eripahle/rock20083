<p>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- load bootstrap css file -->
    <link href="<?php echo base_url("assets/bootstrap/css/bootstrap.css"); ?>" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 well">

        <?php echo form_open_multipart('dasbor/upload');?>

        
            <div class="form-group" align ="center">
                <div class="row">
                    <div class="col-md-12">
                        <label for="filename" class="control-label">Choose your file </label><BR>
                    </div>
                </div>
            </div>

            <div class="form-group"align ="center">
                <div class="row">
                    <div class="col-md-12">
                        <input type="file" name="filename" size="20" />
                        <span class="text-danger"><?php if (isset($error)) { echo $error; } ?></span>
                    </div>
                </div>
            </div>
            <br>
            <div class="form-group"align ="center">
                <div class="row">
                    <div class="col-md-12">
                        <input type="submit" value="Submit" class="btn btn-primary"/>
                    </div>
                </div>
            </div>
        <?php echo form_close(); ?>
        <?php if (isset($success_msg)) { echo $success_msg; } ?>
        </div>
    </div>
</div>
</body>
</html>
</p>
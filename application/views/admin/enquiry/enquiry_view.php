<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
 <link rel="stylesheet" type="text/css" id="theme" href="<?= $this->config->item('adminassets'); ?>css/theme-default.css"/>
 <script type="text/javascript" src="<?= $this->config->item('adminassets'); ?>js/plugins/jquery/jquery.min.js"></script>
 <script type="text/javascript" src="<?= $this->config->item('adminassets'); ?>js/plugins/jquery/jquery-ui.min.js"></script>
 <script type="text/javascript" src="<?= $this->config->item('adminassets'); ?>js/plugins/bootstrap/bootstrap.min.js"></script>    
</head>
<body>
  <div class="page-content-wrap">
    <div class="row">
        <div class="col-md-6">
            <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="panel panel-default">
                    <div class="panel-heading">                       
                        <h3 class="panel-title">Enquiry View</h3>                       
                    </div>
                  
                    <div class="panel-body form-group-separated">
                      
                        <div class="form-group">
                            <label class="col-md-1 col-xs-3">Name</label>
                            <div class="col-md-1 col-xs-9">                                                
                                <div class="input-group">
                                    <?= $view_data['full_name']?>
                                </div>
                            </div>
                        </div>                     
                        <div class="form-group">
                            <label class="col-md-1 col-xs-3">Email</label>
                            <div class="col-md-1 col-xs-9">                                                
                                <div class="input-group">
                                    <?= $view_data['email_id']?>
                                </div>
                            </div>
                        </div>                     
                        <div class="form-group">
                            <label class="col-md-1 col-xs-3">Company name</label>
                            <div class="col-md-1 col-xs-9">                                                
                                <div class="input-group">
                                    <?= $view_data['company_name']?>
                                </div>
                            </div>
                        </div>                     
                        <div class="form-group">
                            <label class="col-md-1 col-xs-3">Message</label>
                            <div class="col-md-1 col-xs-9">                                                
                                <div class="input-group">
                                    <?= $view_data['message']?>
                                </div>
                            </div>
                        </div>                     
                        <div class="form-group">
                            <label class="col-md-1 col-xs-3">Read Status</label>
                            <div class="col-md-1 col-xs-9">                                                
                                <div class="input-group">
                                    <?= $view_data['read_status']?>
                                </div>
                            </div>
                        </div>                     
                        <div class="form-group">
                            <label class="col-md-1 col-xs-3">Status</label>
                            <div class="col-md-1 col-xs-9">                                                
                                <div class="input-group">
                                    <?= $view_data['status']?>
                                </div>
                            </div>
                        </div>                     
                      
                        
                    </div>
                    
                </div>
            </form>

        </div>
    </div> 
</div>
</body>

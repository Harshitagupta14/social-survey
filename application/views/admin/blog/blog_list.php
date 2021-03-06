<ul class="breadcrumb">
    <li><a href="<?= site_url('admin/dashboard') ?>">Home</a></li>
    <li class="active"><?php echo $breadcum ?></li> 
</ul>
<div class="page-content-wrap">                
                  <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                    <?php if ($this->session->flashdata('BlogSuccess')) { ?>  
                                    <div class="alert alert-success"> <?= $this->session->flashdata('BlogSuccess') ?></div>
                                <?php } ?>
                                <div class="panel-heading">
                                    <h3 class="panel-title">Manage Blog</h3>
                                      <a href="<?= base_url()?>admin/blog-add" class="btn btn-primary pull-right">Add New</a>   
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-actions datatable">
                                            <thead>
                                                <tr>
                                                    <th>Blog Title</th>         
                                                    <th>Slug</th>     
                                                    <th>Blog Category</th> 
                                                    <th>Blog Image</th>   
                                                    <th>Show Image</th>
                                                    <th>Status</th>
                                                    <th>Action</th>   
                                                </tr>
                                            </thead>
                                            <tbody>   
                                                <?php
                                                if (!empty($blog_data)) {
                                                    foreach ($blog_data as $blog) {
                                                        ?>
                                                <tr id="trow_<?= $key ?>">
                                                   
                                                    <td><strong><?php echo (isset($blog['blog_title'])) ? $blog['blog_title'] : '-'; ?></strong></td>
                                                    <td><strong><?php echo (isset($blog['slug'])) ? $blog['slug'] : '-'; ?></strong></td>
                                                     <td><strong><?php echo (isset($blog['bg_category_title'])) ? $blog['bg_category_title'] : '-'; ?></strong></td>
                                                     <td>
                                                           <?php
                                               $file_path = FCPATH . "assets/uploads/blog_images/" . $blog['blog_image'];
                                               if ($blog['blog_image'] != '' && file_exists($file_path)) {
                                                   ?>
                                                   <a class="fancybox fancybox.iframe" href="<?= $this->config->item('uploads') ?>blog_images/<?= $blog['blog_image'] ?>">
                                                       <img class="media-object" width="50px" height="50px"  src="<?= $this->config->item('uploads') ?>blog_images/<?= $blog['blog_image'] ?>" alt="<?= $blog['blog_title'] ?>" >
                                                   </a>
                                               <?php } else { ?>
                                                   <img width="50px" height="50px" src="<?=  $this->config->item('uploads') ?>blog_images/image_not_available.jpg ">
                                               <?php } ?>       
                                                     </td>
                                                     <td><?php echo (isset($blog['show_image'])) ? $blog['show_image'] : '-'; ?></strong></td>
                                                         
                                                         <td><?php echo (isset($blog['status'])) && $blog['status'] == 'active' ? "<span class='label label-success'>Active" : "<span class='label label-danger'>Inactive"; ?></td>
                                                    <td>
                                            <?php echo anchor(base_url() . 'admin/blog-edit/' . $blog['blog_id'], '<span class="fa fa-pencil" title="Edit"></span>', 'class="btn btn-default btn-rounded btn-condensed btn-sm"'); ?>                                                       
                                            <?php                                         
                                        echo anchor(base_url().'admin/blog-comment/'.$blog['blog_id'],'<span class="fa fa-comment" title="View Comment"></span>','class="btn btn-default btn-rounded btn-condensed btn-sm"');?>                                                                                 
                                        
                                                <?php if ($blog['status'] == 'active') { ?>
                                                        <a href="javascript:" data-href="<?= base_url() . 'admin/blog-status/' . $blog['blog_id'] . '/inactive' ?>" class="btn btn-default btn-rounded btn-condensed btn-sm changestatus"><span class="fa fa-ban" title="Inactive"></span></a>
                                                <?php } else { ?>    
                                                    <a href="javascript:" data-href="<?= base_url() . 'admin/blog-status/' . $blog['blog_id'] . '/active' ?>" class="btn btn-default btn-rounded btn-condensed btn-sm changestatus"><span class="fa fa-check-circle-o" title="Active"></span></a>
                                                <?php } ?>
                                                <a href="javascript:" data-href="<?= base_url() . 'admin/blog-delete/' . $blog['blog_id'] ?>" class="btn btn-danger btn-rounded btn-condensed btn-sm delete" data-id="<?= $key ?>"><span class="fa fa-times" title="delete"></span></a>
                                              

                                        </td> 

                                                </tr>    
                                                  <?php }
                            } else {
                                ?>  
                                <tr><td colspan="6" style="color: black; padding-top: 10%; padding-bottom: 10%; text-align: center;"><h2>No Record Found</h2></td></tr>
<?php } ?>   
                                            </tbody>
                                        </table>
                                    </div>                                

                                </div>
                            </div>                                                

                        </div>
                    </div>
</div>
<script>   
     $('body').delegate('.delete', 'click', function(evt) {
        var hrefUrl = $(this).attr('data-href');
       var box = $("#mb-remove-row");
        box.addClass("open");
        box.find(".mb-control-yes").on("click",function(){
            box.removeClass("open");
            window.location.href = hrefUrl;
        });
    });   
    
     $('body').delegate('.changestatus', 'click', function(evt) {   
	  var hrefUrl = $(this).attr('data-href'); 
       var box = $("#mb-status-row");
        box.addClass("open");
        box.find(".mb-control-yes").on("click",function(){
            box.removeClass("open");
             window.location.href = hrefUrl;
        });
    });   
    
</script>           
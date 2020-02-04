<!-- <?php print_r($this->session->userdata('username'))?> -->
<!-- <?php print_r($newsletters) ;?> -->
<!-- <?php print_r($comments); ?>  -->
<?php $l = $this->session->userdata('lname');
			  $s=" ";
			  $f = $this->session->userdata('username');
        //    print_r($f.$s.$l);
         ?>
<div class="container-fluid"  ">
<br>
  <h1  align="center"><u>NEWSLETTER </u></h1>
  <br>
  <div align="center">  
		<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">ADD NEWSLETTER</button>
	</div>



  <div class="container">
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Newsletter</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <form method="POST" action="<?=base_url()?>admin/addNewsletters">
          <div class="row"> 
            <div class="col-md-6"> 
              <label>Title</label>
            </div>
            <div class="col-md-6">
              <input name="title">   
            </div>
          </div> 
          <div class="row"> 
            <div class="col-md-6"> 
              <label>Content</label>
            </div>
            <div class="col-md-6">
              <input name="content">   
            </div>
            <input type="hidden" name="name" value="<?php print_r($f.$s.$l) ?>">
          </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger" >Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>



<?php foreach ($newsletters as $key => $data) {?>

 <div class="container mt-3">
  <div class="media " style="border-style: solid; padding:10px;">
    <img src="<?=base_url()?>assets/img/officer1.jpg"  class="mr-3 mt-3 rounded-circle" style="width:70px;">
    <div class="media-body">
      <h4><?=$data->name?> <small><i>Posted on <?=$data->date?></i></small></h4>
      <p><b> <?=$data->title?></b></p>
      <p><?=$data->content?></p>
     
      <?php foreach ($comments as $key => $cata) {?>
      <?php if($cata->post_id==$data->post_id) {?>
      <div class="media p-3">
         <img src="<?=base_url()?>assets/img/officer.jpg"  class="mr-3 mt-3 rounded-circle" style="width:35px;">
        <div class="media-body">
          <h4><?=$cata->name?><small><i> Posted on <?=$cata->date?></i></small></h4>
          <p><?=$cata->content?></p>
          
        </div>
      </div>
      <?php } }?>
     
     <!-- comment box -->
     <div>
        <h5>Add Comment</h5>
        <form method="POST" action="<?=base_url()?>admin/addComments">
        <input style="
                     border-color: cornflowerblue;
                     border-radius: 30px;
                     border-width: 3px;
                     width: 250px;"
        name="content"
        >

        <input type="hidden" name="post_id" value="<?php print_r($data->post_id) ?>">
        


        <input type="hidden" name="name" value="<?php print_r($f.$s.$l) ?>">
        <button type="submit" style="border-radius: 20px; width: 70px; border: 37px;color: white; background-color: #406099"> Post</button>
        </form>
     </div>

    </div>
  </div>
</div>
<?php } ?>



</html>

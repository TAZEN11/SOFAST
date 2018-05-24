
 		     <div class="panel-heading text-center">  
          <h3 ><a>Pendaftaran Akun</a><b > SOFAST</b></h3>  
         </div>
 	<div class="panel-body">
 	  <div class="row">
 	  	<div class="col-sm-12">
	<?php echo form_open('profil/create');?>
	<!-- <?php echo $this->session->flashdata('msg'); ?> -->
	    </div>
	  </div>
	<form action="<?php echo base_url(); ?>" method="post">
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group">
			<label class="control-label" for="pekerjaan">Pekerjaan</label>:
				<div>
				
				<input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="pekerjaan" value="<?php echo set_value('pekerjaan'); ?>" required="">
                           
                <span class="text-danger"><?php echo form_error('pekerjaan'); ?></span>  
				</div>					
				</div>
			</div>
		</div>
 		<div class="form-group">  
            <label class="control-label" for="jurusan">jurusan</label>  
              <div>  
             <input type="jurusan" class="form-control" id="jurusan" name="jurusan" placeholder="Enter jurusan" value="<?php echo set_value('jurusan'); ?>" required="" />
                       
             <span class="text-danger"><?php echo form_error('jurusan'); ?></span>  
              </div>            
        </div>       
		<div class="form-group">  
            <label class="control-label" for="alamat">alamat</label>  
             <div>  
              <input type="alamat" class="form-control" id="alamat" name="alamat" placeholder="Enter alamat" value="<?php echo set_value('alamat'); ?>" required="" />
              <span class="text-danger"><?php echo form_error('alamat'); ?></span>  
             </div>  
        </div>
    <div class="form-group">  
            <label class="control-label" for="skill">skill</label>  
             <div>  
              <input type="skill" class="form-control" id="skill" name="skill" placeholder="Enter skill" value="<?php echo set_value('skill'); ?>" required="" />
              <span class="text-danger"><?php echo form_error('skill'); ?></span>  
             </div>  
        </div>
         <div class="form-group">  
            <label class="control-label" for="angkatan">angkatan</label>  
             <div>  
              <input type="angkatan" class="form-control" id="angkatan" name="angkatan" placeholder="Enter angkatan" value="<?php echo set_value('angkatan'); ?>" required="" />
              <span class="text-danger"><?php echo form_error('angkatan'); ?></span>  
             </div>  
        </div>
	
                 <div class="form-group">   
                   <div class="row">  
                     <div class="col-sm-offset-5 col-sm-3 btn-submit">  <button type="submit" class="btn btn-success">Submit</button>  
                     </div>  
                     <div class="col-sm-offset-1 col-sm-3 ">
                    <?php echo anchor(site_url().'/beranda','Beranda'); ?>
                     </div>
                   </div>  
                 </div>
	
 	</form>
 	</div>		
 
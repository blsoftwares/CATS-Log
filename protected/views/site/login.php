<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a href="<?php echo Yii::app()->baseUrl;?>" class="logo pull-left">
					<img src="<?php echo Yii::app()->baseUrl;?>/assets/images/logo.png" height="54" alt="Porto Admin" />
				</a>

				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-weight-bold m-none">CA|TS Log Sign In</h2>
					</div>
					
                    <div class="panel-body">
                     <?php if($msg!=""){?>
                         <div class="alert alert-warning">
                        
							<p class="text-weight-semibold"><?php echo $msg;?></p>
						</div>
                        <?php } ?>
                     <div class="alert alert-info">
                        
							<p class="m-none text-weight-semibold h6">Login to your CA|TS Log Profile</p>
						</div>
                    
						<form action="" method="post">
                        
							<div class="form-group mb-lg">
								<label>UserId</label>
								<div class="input-group input-group-icon">
									<input name="username" type="text" class="form-control input-lg" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="form-group mb-lg">
								<div class="clearfix">
									<label class="pull-left">Password</label>
									
								</div>
								<div class="input-group input-group-icon">
									<input name="password" type="password" class="form-control input-lg" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
								</div>
							</div>
                            
                            <div class="form-group mb-lg">
<label class="pull-left">Profile Type</label>
                            <select class="form-control  input-lg" name="usertype">
                            <option value="">--Select Profile--</option>
														<option value="cats">Site Manager</option>																												<option value="committee">Reviewer</option>
														<option value="committee">National Committee</option>														<option value="committee">International Committee</option>
                                                      <option value="committee">CATS Admin</option>
                                                        
													</select>
                                                    
                                              </div>

							<div class="row">
								
								<div class="form-group">
									<center>
                                    
                                    <button type="submit" class="btn btn-primary" >Sign In</button>
									</center>
								</div>
							</div>

							<span class="mt-lg mb-lg line-thru text-center text-uppercase">
								<span>or</span>
							</span>


							<p class="text-center">Don't have a CA|TS Log Profile? <a href="<?php echo Yii::app()->createUrl('site/register');?>">Registration</a> your Site to CA|TS Log.

						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-md mb-md">&copy; Copyright <?php echo date('Y')?>. All Rights Reserved.</p>
			</div>
		</section>
		<!-- end: page -->

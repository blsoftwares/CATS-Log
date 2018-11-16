<center><h2 class="mt-none text-primary">CA|TS Log Assesment Summary of SiteName <?php echo $j;?></h2></center>
 <hr>
<?php 
$st=CatsStandard::model()->findAll();
foreach($st as $stlist){?>
<center><h4 class="mt-none"><?php echo $stlist['standard_name'];?></h4></center>

<div class="row">
							<div class="col-md-12">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
											<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
										</div>
						
										<h2 class="panel-title">Bars Chart</h2>
										<p class="panel-subtitle">With the categories plugin you can plot categories/textual data easily.</p>
									</header>
									<div class="panel-body">
						
										<!-- Flot: Bars -->
										<div class="chart chart-md" id="flotBars"></div>
										<script type="text/javascript">
						
											var flotBarsData = [
												["Jan", 28],
												["Feb", 42],
												["Mar", 25],
												["Apr", 23],
												["May", 37],
												["Jun", 33],
												["Jul", 18],
												["Aug", 14],
												["Sep", 18],
												["Oct", 15],
												["Nov", 4],
												["Dec", 7]
											];
						
											// See: assets/javascripts/ui-elements/examples.charts.js for more settings.
						
										</script>
						
									</div>
								</section>
							</div>
							
						</div>


<div class="row">

<?php for($i=1;$i<=4;$i++){?>
<div class="col-md-6 ui-sortable" data-plugin-portlet="" id="portlet-1" >
							
							
							<section class="panel panel-tertiary" id="panel-3" data-portlet-item="">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a>
										
									</div>

									<h2 class="panel-title"><i class="fa fa-dot-circle-o"></i> Criteria  <?php echo $stlist['standard_name'];?>.<?php echo $i;?> (Rating : 4 <i class="fa fa-star"></i>) </h2>
								</header>
                                <div style="height: 150px; overflow:auto">
								<div class="panel-body col-md-8">
                                <b>Site Comment</b><br>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non imperdiet nisi. Quisque cursus leo et lacus tempus porttitor. Sed egestas laoreet justo non feugiat.
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non imperdiet nisi. Quisque cursus leo et lacus tempus porttitor. Sed egestas laoreet justo non feugiat.
								</div>
                                <div class="panel-body col-md-4">
                                <b>Dcouments List</b><br>
									<p>Document 1 : <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
</p>
<p>Document 2 : <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
</p>
<p>Document 3 : <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
</p>	
								</div>       
                                </div>                         
                                
							</section>
                            
						</div>
                        
                        <?php }?>
                       
							                           
                            
						</div>
                        <hr>
                        <?php } ?>
                        
                        
                        <!-- auditor comment and review -->
                        <div class="row">
							<div class="col-lg-12">
								<section class="panel">
									<header class="panel-heading">
												
										<h2 class="panel-title">Reviewer Profile and Review Details</h2>
									</header>
									<div class="panel-body">
										<form class="form-horizontal form-bordered" method="post">
                                        
                                        <div class="form-group">
												<label class="col-md-3 control-label" for="inputDisabled">Need Reverification ?</label>
												<div class="col-md-6">
													<select class="form-control mb-md">
                                                     <option>No...Verified</option>
														<option>Yes</option>
                                                       
														
													</select>
												</div>
											</div>
                                        
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Site Final Comment</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="inputDefault">
												</div>
											</div>
						
											
											<div class="form-group">
												
												<div class="col-md-6">
													<button type="button" class="mb-xs mt-xs mr-xs btn btn-primary">Submit </button>
												</div>
											</div>
											
										
										</form>
									</div>
								</section>
						
								
								
						
								
						
							</div>
						</div>
						
                       <!-- final cooment after see all critreia -->
                       
                       <div class="row">
							<div class="col-lg-12">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a>
											<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss=""></a>
										</div>
						
										<h2 class="panel-title">Form Elements</h2>
									</header>
									<div class="panel-body">
										<form class="form-horizontal form-bordered" method="post">
                                        
                                        <div class="form-group">
												<label class="col-md-3 control-label" for="inputDisabled">Need Reverification ?</label>
												<div class="col-md-6">
													<select class="form-control mb-md">
                                                     <option>No...Verified</option>
														<option>Yes</option>
                                                       
														
													</select>
												</div>
											</div>
                                        
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Site Final Comment</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="inputDefault">
												</div>
											</div>
						
											
											<div class="form-group">
												
												<div class="col-md-6">
													<button type="button" class="mb-xs mt-xs mr-xs btn btn-primary">Submit </button>
												</div>
											</div>
											
										
										</form>
									</div>
								</section>
						
								
								
						
								
						
							</div>
						</div>
                        
            

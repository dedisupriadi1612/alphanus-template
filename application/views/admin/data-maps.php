<?php $this->load->view('admin/template/header')?>

    <?php $this->load->view('admin/template/menu')?>
	<!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
						<div class="data-map-area mg-tb-15">
									<div class="container-fluid">
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<div class="sparkline8-list responsive-mg-b-30">
													<div class="sparkline8-hd">
														<div class="main-sparkline8-hd">
															<h1>Data Map Style 1</h1>
														</div>
													</div>
													<div class="sparkline8-graph">
														<div class="data-map-single">
															<div id="basic_map"></div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<div class="sparkline9-list">
													<div class="sparkline9-hd">
														<div class="main-sparkline9-hd">
															<h1>Data Map Style 2</h1>
														</div>
													</div>
													<div class="sparkline9-graph">
														<div class="data-map-single">
															<div id="selected_map"></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<div class="sparkline7-list mg-tb-30">
													<div class="sparkline7-hd">
														<div class="main-spark7-hd">
															<h1>Data Map Style 3</h1>
														</div>
													</div>
													<div class="sparkline7-graph">
														<div class="data-map-single">
															<div id="usa_map"></div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<div class="sparkline10-list mg-tb-30">
													<div class="sparkline10-hd">
														<div class="main-sparkline10-hd">
															<h1>Data Map Style 4</h1>
														</div>
													</div>
													<div class="sparkline10-graph">
														<div class="data-map-single">
															<div id="arc_map"></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<div class="sparkline11-list">
													<div class="sparkline11-hd">
														<div class="main-spark7-hd">
															<h1>Data Map Style 5</h1>
														</div>
													</div>
													<div class="sparkline11-graph">
														<div class="data-map-single basic-choropleth">
															<div id="basic_choropleth" style="position: relative; width: 100%; height: 100%;"></div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<div class="sparkline12-list res-mg-t-30">
													<div class="sparkline12-hd">
														<div class="main-sparkline12-hd">
															<h1>Data Map Style 6</h1>
														</div>
													</div>
													<div class="sparkline12-graph">
														<div class="data-map-single">
															<div id="projection_map" style="position: relative; width: 100%; height: 400px;"></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
<?php $this->load->view('admin/template/footer')?>
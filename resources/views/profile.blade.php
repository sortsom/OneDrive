@extends('layouts.default')
@section('content')
<div class="container-fluid p-0">
					<h1 class="h3 mb-3">Profile</h1>
					<div class="row">
						<div class="col-md-4 col-xl-3">
							<div class="card mb-3">

								<div class="card-body text-center">
									<img src="img/avatars/avatar-4.jpg" alt="Christina Mason" class="img-fluid rounded-circle mb-2" width="128" height="128"/>
									<h5 class="card-title mb-0">Sort Som</h5>
									<div>
                                        <a class="btn btn-warning btn-sm" href="#"> <span data-feather="edit"></span>EDIT</a>
										<a class="btn btn-success btn-sm" href="#"><span data-feather="upload"></span> Upload</a>
									</div>
								</div>
								<hr class="my-0" />
								<div class="card-body">
									<h5 class="h6 card-title">Skills</h5>
									<a href="#" class="badge badge-primary mr-1 my-1">HTML</a>
									<a href="#" class="badge badge-primary mr-1 my-1">JavaScript</a>
									<a href="#" class="badge badge-primary mr-1 my-1">Sass</a>
									<a href="#" class="badge badge-primary mr-1 my-1">Angular</a>
									<a href="#" class="badge badge-primary mr-1 my-1">Vue</a>
									<a href="#" class="badge badge-primary mr-1 my-1">React</a>
									<a href="#" class="badge badge-primary mr-1 my-1">Redux</a>
									<a href="#" class="badge badge-primary mr-1 my-1">UI</a>
									<a href="#" class="badge badge-primary mr-1 my-1">UX</a>
								</div>
								<hr class="my-0" />
								<div class="card-body">
									<h5 class="h6 card-title">About</h5>
									<ul class="list-unstyled mb-0">
										<li class="mb-1"><span data-feather="home" class="feather-sm mr-1"></span> Lives in <a href="#">San Francisco, SA</a></li>

										<li class="mb-1"><span data-feather="briefcase" class="feather-sm mr-1"></span> Works at <a href="#">GitHub</a></li>
										<li class="mb-1"><span data-feather="map-pin" class="feather-sm mr-1"></span> From <a href="#">Boston</a></li>
									</ul>
								</div>
								<hr class="my-0" />
								<div class="card-body">
									<h5 class="h6 card-title">Elsewhere</h5>
									<ul class="list-unstyled mb-0">
										<li class="mb-1"><span class="fas fa-globe fa-fw mr-1"></span> <a href="#">staciehall.co</a></li>
										<li class="mb-1"><span class="fab fa-twitter fa-fw mr-1"></span> <a href="#">Twitter</a></li>
										<li class="mb-1"><span class="fab fa-facebook fa-fw mr-1"></span> <a href="#">Facebook</a></li>
										<li class="mb-1"><span class="fab fa-instagram fa-fw mr-1"></span> <a href="#">Instagram</a></li>
										<li class="mb-1"><span class="fab fa-linkedin fa-fw mr-1"></span> <a href="#">LinkedIn</a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-md-8 col-xl-9">
							<div class="card">
								<div class="card-header">

									<h5 class="card-title mb-0">Activities</h5>
								</div>
								<div class="card-body h-100">

								</div>
							</div>
						</div>
					</div>

				</div>
                @stop

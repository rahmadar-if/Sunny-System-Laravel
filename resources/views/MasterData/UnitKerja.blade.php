{{-- Begin::Extend Header --}}
@extends('template.main')
{{-- End::Extend Header --}}

{{-- Begin::Title --}}
@section('title', 'Unit Kerja')
{{-- End::Title --}}

<!--begin::Main-->
@section('content')


		<!--begin::Root-->
		<div class="d-flex flex-column flex-root" >
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				@extends('template.aside')
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header"  class="header align-items-stretch">
						<!--begin::Container-->
						<div class="container-fluid d-flex align-items-stretch justify-content-between">
							
							
							<!--begin::Wrapper-->
							<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
								<!--begin::Navbar-->
								<div class="d-flex align-items-stretch" id="kt_header_nav">
									<!--begin::Menu wrapper-->
									<div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
										
									</div>
									<!--end::Menu wrapper-->
								</div>
								<!--end::Navbar-->
								<!--begin::Topbar-->
								<div class="d-flex align-items-stretch flex-shrink-0">
									<!--begin::Toolbar wrapper-->
									<div class="d-flex align-items-stretch flex-shrink-0">
									
										<!--begin::Notifications-->
										<div class="d-flex align-items-center ms-1 ms-lg-3">
											<!--begin::Menu- wrapper-->
											<div class="btn btn-icon btn-active-light-primary position-relative w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
												<!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z" fill="black" />
														<path d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z" fill="black" />
														<path opacity="0.3" d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z" fill="black" />
														<path opacity="0.3" d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--begin::Menu-->
											<div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true">
												<!--begin::Heading-->
												<div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('/media/misc/pattern-1.jpg')">
													<!--begin::Title-->
													<h3 class="text-white fw-bold px-9 mt-10 mb-6">Notifications
													<span class="fs-8 opacity-75 ps-3">0 reports</span></h3>
													<!--end::Title-->
													<!--begin::Tabs-->
													<ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-bold px-9">
														<li class="nav-item">
															<a class="nav-link text-white opacity-75 opacity-state-100 pb-4 " data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
														</li>
														
													</ul>
													<!--end::Tabs-->
												</div>
												<!--end::Heading-->
												<!--begin::Tab content-->
												<div class="tab-content">
													<!--begin::Tab panel-->
													<div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
														<!--begin::Items-->
														<div class="scroll-y mh-325px my-5 px-8">
															<!--begin::Item-->
															<div class="d-flex flex-stack py-4">
																<!--begin::Section-->
																<div class="d-flex align-items-center">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-35px me-4">
																		<span class="symbol-label bg-light-primary">
																			<!--begin::Svg Icon | path: icons/duotune/technology/teh008.svg-->
																			<span class="svg-icon svg-icon-2 svg-icon-primary">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path opacity="0.3" d="M11 6.5C11 9 9 11 6.5 11C4 11 2 9 2 6.5C2 4 4 2 6.5 2C9 2 11 4 11 6.5ZM17.5 2C15 2 13 4 13 6.5C13 9 15 11 17.5 11C20 11 22 9 22 6.5C22 4 20 2 17.5 2ZM6.5 13C4 13 2 15 2 17.5C2 20 4 22 6.5 22C9 22 11 20 11 17.5C11 15 9 13 6.5 13ZM17.5 13C15 13 13 15 13 17.5C13 20 15 22 17.5 22C20 22 22 20 22 17.5C22 15 20 13 17.5 13Z" fill="black" />
																					<path d="M17.5 16C17.5 16 17.4 16 17.5 16L16.7 15.3C16.1 14.7 15.7 13.9 15.6 13.1C15.5 12.4 15.5 11.6 15.6 10.8C15.7 9.99999 16.1 9.19998 16.7 8.59998L17.4 7.90002H17.5C18.3 7.90002 19 7.20002 19 6.40002C19 5.60002 18.3 4.90002 17.5 4.90002C16.7 4.90002 16 5.60002 16 6.40002V6.5L15.3 7.20001C14.7 7.80001 13.9 8.19999 13.1 8.29999C12.4 8.39999 11.6 8.39999 10.8 8.29999C9.99999 8.19999 9.20001 7.80001 8.60001 7.20001L7.89999 6.5V6.40002C7.89999 5.60002 7.19999 4.90002 6.39999 4.90002C5.59999 4.90002 4.89999 5.60002 4.89999 6.40002C4.89999 7.20002 5.59999 7.90002 6.39999 7.90002H6.5L7.20001 8.59998C7.80001 9.19998 8.19999 9.99999 8.29999 10.8C8.39999 11.5 8.39999 12.3 8.29999 13.1C8.19999 13.9 7.80001 14.7 7.20001 15.3L6.5 16H6.39999C5.59999 16 4.89999 16.7 4.89999 17.5C4.89999 18.3 5.59999 19 6.39999 19C7.19999 19 7.89999 18.3 7.89999 17.5V17.4L8.60001 16.7C9.20001 16.1 9.99999 15.7 10.8 15.6C11.5 15.5 12.3 15.5 13.1 15.6C13.9 15.7 14.7 16.1 15.3 16.7L16 17.4V17.5C16 18.3 16.7 19 17.5 19C18.3 19 19 18.3 19 17.5C19 16.7 18.3 16 17.5 16Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="mb-0 me-2">
																		<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Project Alice</a>
																		<div class="text-gray-400 fs-7">Phase 1 development</div>
																	</div>
																	<!--end::Title-->
																</div>
																<!--end::Section-->
																<!--begin::Label-->
																<span class="badge badge-light fs-8">1 hr</span>
																<!--end::Label-->
															</div>
															<!--end::Item-->
														</div>
														<!--end::Items-->
														
													</div>
													<!--end::Tab panel-->
													
													
												</div>
												<!--end::Tab content-->
											</div>
											<!--end::Menu-->
											<!--end::Menu wrapper-->
										</div>
										<!--end::Notifications-->
										
									
									<!--begin::User-->
									<div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
										<!--begin::Menu wrapper-->
										<div class="cursor-pointer symbol symbol-30px symbol-md-40px"
											data-kt-menu-trigger="click" data-kt-menu-attach="parent"
											data-kt-menu-placement="bottom-end">
											Hi,<strong>Indar Wiguna</strong>
											<img src="/media/avatars/User-Icon.png" alt="user" />
										</div>

										<!--end::Menu wrapper-->
									</div>
									<!--end::User -->

									

									</div>
									<!--end::Toolbar wrapper-->
								</div>
								<!--end::Topbar-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
						
						
					<!--begin::Delete Alert -->
					{{-- <div class="alert alert-success" role="alert">
						Delete Success !
					</div> --}}
					<!--end::Delete Alert -->
					
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Toolbar-->
						<div class="toolbar" id="kt_toolbar">
							<!--begin::Container-->
							<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
								<!--begin::Page title-->
								<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
									<!--begin::Title-->
									<h1 class="d-flex align-items-center fs-3 my-1">Unit kerja
									</h1>
									<!--end::Title-->
								</div>
								<!--end::Page title-->
								<!--begin::Actions-->
								<div class="d-flex align-items-center py-1">

									<!--begin::Button-->
									<a href="#" class="btn btn-sm btn-primary"
									data-bs-toggle="modal" 
									data-bs-target="#kt_modal_create" 
									id="kt_toolbar_primary_button"
									style="background-color:#ffa62b; padding: 7px 30px 7px 30px">
									New</a>

								<!--begin::Wrapper-->
								<div class="me-4" style="margin-left:10px;">
										<!--begin::Menu-->
										<a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
										<!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
										<span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->Action</a>
										<!--begin::Menu 1-->
										<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6155ac804a1c2">
											<!--begin::Header-->
											<div class="px-7 py-5">
												<div class="fs-5 text-dark fw-bolder">Choose actions:</div>
											</div>
											<!--end::Header-->
											<!--begin::Menu separator-->
											<div class="separator border-gray-200"></div>
											<!--end::Menu separator-->
											<!--begin::Form-->
											<div class="px-7 py-5">
												<!--begin::Input group-->
												<div class="mb-10">
													<!--begin::Label-->
													
													<i class="fas fa-file-excel"></i>
													<label class="form-label" style="margin-left:5px;">
														Export Excel</label><br>
													<i class="fas fa-file"></i>
													<label class="form-label" style="margin-left:5px;">
														Import Excel</label><br>
													<!--end::Label-->
												</div>
											</div>
											<!--end::Form-->
										</div>
										<!--end::Menu 1-->
										<!--end::Menu-->
									</div>
									<!--end::Wrapper-->
									
									
								</div>
								<!--end::Actions-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Toolbar-->
						

						<!--begin::Post-->
								<!--begin::Container-->
									<!--begin::Card "style edited"-->
									<div class="card" Id="List-vv" style="position: relative; overflow: hidden;">


										<!--begin::Card header-->
										<div class="card-header border-0 pt-">
											<!--begin::Card title-->
											<div class="card-title">
												<!--begin::Search-->
												<div class="d-flex align-items-center position-relative my-1">
													<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
													<span class="svg-icon svg-icon-1 position-absolute ms-6">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
															<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Proyek" />
												</div>
												<!--end::Search-->
											</div>
											<!--begin::Card title-->

										</div>
										<!--end::Card header-->

										
										<!--begin::Card body-->
										<div class="card-body pt-0 ">


											<!--begin::Table-->
											<table class="table align-middle table-row-dashed fs-6 gy-2" id="kt_customers_table">
												<!--begin::Table head-->
												<thead>
													<!--begin::Table row-->
													<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
														<th class="min-w-auto">Nomer ID</th>
														<th class="min-w-auto">Nama Unit</th>
														<th class="min-w-auto">Divcode</th>
														<th class="min-w-auto">DOP</th>
														<th class="min-w-auto">Company</th>
														<th class="min-w-auto">PIC</th>
														{{-- <th class=""><center>Action</center></th> --}}
													</tr>
													<!--end::Table row-->
												</thead>
												<!--end::Table head-->
												<!--begin::Table body-->
												{{-- @php
												$proyeks = $proyeks->reverse();
												@endphp --}}
												@foreach ($unitkerja as $unitkerja)
												
												<tbody class="fw-bold text-gray-600">
													<tr>
														<!--begin::Name=-->
														<td>
															<a href="/unit-kerja" id="click-name" class="text-gray-800 text-hover-primary mb-1">{{ $unitkerja->nomor_unit }}</a>
														</td>
														<!--end::Name=-->
														<!--begin::Coloumn=-->
														<td>
															{{ $unitkerja->unit_kerja }}
														</td>
														<!--end::Coloumn=-->
														<!--begin::Coloumn=-->
														<td>
															{{ $unitkerja->divcode }}
														</td>
														<!--end::Coloumn=-->
														<!--begin::Coloumn=-->
														<td>
															{{ $unitkerja->dop }}
														</td>
														<!--end::Coloumn=-->
														<!--begin::Coloumn=-->
														<td>
															{{ $unitkerja->company }}
														</td>
														<!--end::Coloumn=-->
														<!--begin::Coloumn=-->
														<td>
															{{ $unitkerja->pic }}
														</td>
														<!--end::Coloumn=-->

														{{-- <!--begin::Action=-->
														<td>
														<!--begin::Button-->
														<center>
															<form action="#" method="post" class="d-inline" >
																@method('delete')
																@csrf
																<button class="btn btn-sm btn-light btn-active-primary" onclick="return confirm('Deleted file can not be undo. Are You Sure ?')">Delete</button>
															</form>
														</center>
														<!--end::Button-->
														</td>
														<!--end::Action=--> --}}
													</tr>

												@endforeach
												</tbody>
												<!--end::Table body-->
											</table>
											<!--end::Table-->

											

										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card-->
									<!--end::Container-->
									<!--end::Post-->
									
									
								</div>
								<!--end::Content-->
								<!--begin::Footer-->
								
								<!--end::Footer-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Page-->
					</div>
					<!--end::Root-->


		<!--begin::Modal-->

			<form action="/unit-kerja/save" method="post" enctype="multipart/form-data"> 
				@csrf
				
				<!--begin::Modal - Create App-->
				{{-- <input type="hidden" name="id-customer" value="{{ $customer->id_customer }}" id="id-customer"> --}}
				
				
				
				<!--begin::Modal - Create Proyek-->
				<div class="modal fade" id="kt_modal_create" tabindex="-1" aria-hidden="true">
				<!--begin::Modal dialog-->
				<div class="modal-dialog modal-dialog-centered mw-900px">
					<!--begin::Modal content-->
					<div class="modal-content">
						<!--begin::Modal header-->
						<div class="modal-header">
							<!--begin::Modal title-->
							<h2>Unit Kerja</h2>
							<!--end::Modal title-->
							<!--begin::Close-->
							<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
								<span class="svg-icon svg-icon-1">
									<i class="bi bi-x-circle-fill ts-8"></i>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Close-->
						</div>
						<!--end::Modal header-->

							<!--begin::Modal body-->
							<div class="modal-body py-lg-6 px-lg-6">

							
								<!--begin::Row Kanan+Kiri-->
								<div class="row fv-row">
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Input group Website-->
										<div class="fv-row mb-7">
											<!--begin::Label-->
											<label class="fs-6 fw-bold form-label mt-3">
												<span class="required">Nomer ID</span>
											</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="text" class="form-control form-control-solid" 
											id="nomor-unit" name="nomor-unit" value="" placeholder="Nomer ID" />
											<!--end::Input-->
										</div>
										<!--end::Input group-->
									</div>
									<!--End begin::Col-->
									<div class="col-6">
										<!--begin::Input group Website-->
										<div class="fv-row mb-7">
											<!--begin::Label-->
											<label class="fs-6 fw-bold form-label mt-3">
												<span class="required">Unit Kerja</span>
											</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="text" class="form-control form-control-solid" 
											id="unit-kerja" name="unit-kerja" value="" placeholder="Unit Kerja" />
											<!--end::Input-->
										</div>
										<!--end::Input group-->
									</div>
									<!--End::Col-->
								</div>
								<!--End::Row Kanan+Kiri-->

								<!--begin::Row Kanan+Kiri-->
								<div class="row fv-row">
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Input group Website-->
										<div class="fv-row mb-7">
											<!--begin::Label-->
											<label class="fs-6 fw-bold form-label mt-3">
												<span class="required">Div Code</span>
											</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="text" class="form-control form-control-solid" 
											id="divcode" name="divcode" value="" placeholder="Div Code" />
											<!--end::Input-->
										</div>
										<!--end::Input group-->
									</div>
									<!--End begin::Col-->
									<div class="col-6">
										<!--begin::Input group Website-->
										<div class="fv-row mb-7">
											<!--begin::Label-->
											<label class="fs-6 fw-bold form-label mt-3">
												<span>DOP</span>
											</label>
											<!--end::Label-->
											<!--begin::Input-->
											<select id="dop" name="dop" class="form-select form-select-solid" data-control="select2" data-hide-search="true" 
												data-placeholder="DOP">
												<option></option>
												@foreach ($dops as $dop)
												@if ($dop->dop == null)
													<option value="{{ $dop->dop }}" selected>{{$dop->dop }}</option>
												@else
													<option value="{{ $dop->dop }}">{{$dop->dop }}</option>
												@endif
												@endforeach
											</select>
											<!--end::Input-->
										</div>
										<!--end::Input group-->
									</div>
									<!--End::Col-->
								</div>
								<!--End::Row Kanan+Kiri-->
								
								<!--begin::Row Kanan+Kiri-->
								<div class="row fv-row">
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Input group Website-->
										<div class="fv-row mb-7">
											<!--begin::Label-->
											<label class="fs-6 fw-bold form-label mt-3">
												<span>Company</span>
											</label>
											<!--end::Label-->
											<!--begin::Input-->
											<select id="company" name="company" class="form-select form-select-solid" data-control="select2" data-hide-search="true" 
												data-placeholder="Company">
												<option></option>
												@foreach ($companies as $company)
												@if ($company->nama_company == null)
													<option value="{{ $company->nama_company }}" selected>{{$company->nama_company }}</option>
												@else
													<option value="{{ $company->nama_company }}">{{$company->nama_company }}</option>
												@endif
												@endforeach
											</select>
										</div>
										<!--end::Input group-->
									</div>
									<!--End begin::Col-->
									<div class="col-6">
										<!--begin::Input group Website-->
										<div class="fv-row mb-7">
											<!--begin::Label-->
											<label class="fs-6 fw-bold form-label mt-3">
												<span>PIC</span>
											</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="text" class="form-control form-control-solid" 
											id="pic" name="pic" value="" placeholder="PIC" />
											<!--end::Input-->
										</div>
										<!--end::Input group-->
									</div>
									<!--End::Col-->
								</div>
								<!--End::Row Kanan+Kiri-->
								
								
								
								<button type="submit" class="btn btn-sm btn-primary" id="proyek_new_save">Save</button>
									
								</div>
								<!--end::Modal body-->
							</div>
							<!--end::Modal content-->
						</div>
						<!--end::Modal dialog-->
					</div>
					<!--end::Modal - Create App-->
				</form>    

				<script>
					// <input id="nilaiok-performance" class="reformat">
				
					function reformat() {
					this.value = Intl.NumberFormat("en-US").format(this.value.replace(/[^0-9]/gi, ""));
					}
					document.querySelectorAll('.reformat').forEach(inp => {
						inp.addEventListener('input', reformat);
					});
				</script>
		<!--end::Modals-->

					
		
			<!--begin::Scrolltop-->
			<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
				<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
				<span class="svg-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
						<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
					</svg>
				</span>
				<!--end::Svg Icon-->
			</div>
			@endsection

			<!--end::Scrolltop-->
		<!--end::Main-->

		
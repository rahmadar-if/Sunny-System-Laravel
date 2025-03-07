@extends('template.main')
@section('content')
    <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
        <!--begin::Header-->
        <div id="kt_header" class="header align-items-stretch">
            <!--begin::Container-->
            <div class="container-fluid d-flex align-items-stretch justify-content-between">
                <!--begin::Wrapper-->
                <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
                    <!--begin::Navbar-->
                    <div class="d-flex align-items-stretch" id="kt_header_nav">
                        <!--begin::Menu wrapper-->
                        <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu"
                            data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                            data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end"
                            data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true"
                            data-kt-swapper-mode="prepend"
                            data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
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
                                <div class="btn btn-icon btn-active-light-primary position-relative w-30px h-30px w-md-40px h-md-40px"
                                    data-kt-menu-trigger="click" data-kt-menu-attach="parent"
                                    data-kt-menu-placement="bottom-end">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none">
                                            <path
                                                d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z"
                                                fill="black"></path>
                                            <path
                                                d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z"
                                                fill="black"></path>
                                            <path opacity="0.3"
                                                d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z"
                                                fill="black"></path>
                                            <path opacity="0.3"
                                                d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z"
                                                fill="black"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px"
                                    data-kt-menu="true">
                                    <!--begin::Heading-->
                                    <div class="d-flex flex-column bgi-no-repeat rounded-top"
                                        style="background-image:url('{{ asset('/media/misc/pattern-1.jpg') }}')">
                                        <!--begin::Title-->
                                        <h3 class="text-white fw-bold px-9 mt-10 mb-6">Notifications
                                            <span class="fs-8 opacity-75 ps-3">0 reports</span>
                                        </h3>
                                        <!--end::Title-->
                                        <!--begin::Tabs-->
                                        <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-bold px-9">
                                            <li class="nav-item">
                                                <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 "
                                                    data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
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
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3"
                                                                            d="M11 6.5C11 9 9 11 6.5 11C4 11 2 9 2 6.5C2 4 4 2 6.5 2C9 2 11 4 11 6.5ZM17.5 2C15 2 13 4 13 6.5C13 9 15 11 17.5 11C20 11 22 9 22 6.5C22 4 20 2 17.5 2ZM6.5 13C4 13 2 15 2 17.5C2 20 4 22 6.5 22C9 22 11 20 11 17.5C11 15 9 13 6.5 13ZM17.5 13C15 13 13 15 13 17.5C13 20 15 22 17.5 22C20 22 22 20 22 17.5C22 15 20 13 17.5 13Z"
                                                                            fill="black"></path>
                                                                        <path
                                                                            d="M17.5 16C17.5 16 17.4 16 17.5 16L16.7 15.3C16.1 14.7 15.7 13.9 15.6 13.1C15.5 12.4 15.5 11.6 15.6 10.8C15.7 9.99999 16.1 9.19998 16.7 8.59998L17.4 7.90002H17.5C18.3 7.90002 19 7.20002 19 6.40002C19 5.60002 18.3 4.90002 17.5 4.90002C16.7 4.90002 16 5.60002 16 6.40002V6.5L15.3 7.20001C14.7 7.80001 13.9 8.19999 13.1 8.29999C12.4 8.39999 11.6 8.39999 10.8 8.29999C9.99999 8.19999 9.20001 7.80001 8.60001 7.20001L7.89999 6.5V6.40002C7.89999 5.60002 7.19999 4.90002 6.39999 4.90002C5.59999 4.90002 4.89999 5.60002 4.89999 6.40002C4.89999 7.20002 5.59999 7.90002 6.39999 7.90002H6.5L7.20001 8.59998C7.80001 9.19998 8.19999 9.99999 8.29999 10.8C8.39999 11.5 8.39999 12.3 8.29999 13.1C8.19999 13.9 7.80001 14.7 7.20001 15.3L6.5 16H6.39999C5.59999 16 4.89999 16.7 4.89999 17.5C4.89999 18.3 5.59999 19 6.39999 19C7.19999 19 7.89999 18.3 7.89999 17.5V17.4L8.60001 16.7C9.20001 16.1 9.99999 15.7 10.8 15.6C11.5 15.5 12.3 15.5 13.1 15.6C13.9 15.7 14.7 16.1 15.3 16.7L16 17.4V17.5C16 18.3 16.7 19 17.5 19C18.3 19 19 18.3 19 17.5C19 16.7 18.3 16 17.5 16Z"
                                                                            fill="black"></path>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div class="mb-0 me-2">
                                                            <a href="#"
                                                                class="fs-6 text-gray-800 text-hover-primary fw-bolder">Project
                                                                Alice</a>
                                                            <div class="text-gray-400 fs-7">Phase 1 development
                                                            </div>
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
                                <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click"
                                    data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                    Hi,<strong>Indar Wiguna</strong>
                                    <img src="{{ asset('/media/avatars/User-Icon.png') }}" alt="user">
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

        <!--begin::Content-->
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
            @isset($addendumDraft)
                @section('title', 'Update Addendum Contract')
                <form action="/addendum-contract/draft/update" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id-addendum" value="{{ $addendumDraft->id_addendum }}">
                    <input type="hidden" name="id-addendum-draft" value="{{ $addendumDraft->id_addendum_draft }}">
                    <input type="hidden" name="id-contract" value="{{ $id_contract }}">
                    <!--begin::Toolbar-->
                    <div class="toolbar" id="kt_toolbar">
                        <!--begin::Container-->
                        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                            <!--begin::Page title-->
                            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                                <!--begin::Title-->
                                <h1 class="d-flex align-items-center fs-3 my-1">Update Addendum
                                </h1>
                                <!--end::Title-->
                            </div>
                            <!--end::Page title-->
                            <!--begin::Actions-->
                            <div class="d-flex align-items-center py-1">

                                <!--begin::Button-->
                                <button type="submit" class="btn btn-sm btn-primary" id="kt_toolbar_primary_button"
                                    style="background-color:#ffa62b;">
                                    Save</button>
                                <!--end::Button-->

                                <!--begin::Button-->
                                <a href="/contract-management" class="btn btn-sm btn-primary" id="cloedButton"
                                    style="background-color:#f3f6f9;margin-left:10px;color: black;">
                                    Close</a>
                                <!--end::Button-->


                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Toolbar-->

                    <!--begin::Post-->
                    <div class="post d-flex flex-column-fluid" id="kt_post">
                        <!--begin::Container-->
                        <div id="kt_content_container" class="container-fluid">
                            <!--begin::Contacts App- Edit Contact-->
                            <div class="row g-7">
                                @if (Session::has('error'))
                                    <h1>{{ Session::get('error') }}</h1>
                                @endif
                                <!--begin::Header Contract-->
                                <div class="col-xl-15">

                                    <div class="card card-flush h-lg-100" id="kt_contacts_main">

                                        <div class="card-body pt-5">
                                            <div class="card-title m-0">
                                                <!--begin::Input group Website-->
                                                <div class="fv-row mb-5">
                                                    <!--begin::Label-->
                                                    <label class="fs-6 form-label mt-3">
                                                        <span style="font-weight: normal">Attachment</span>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->

                                                    <input type="file" style="font-weight: normal"
                                                        class="form-control form-control-solid" name="attach-file-addendum"
                                                        id="attach-file-addendum"
                                                        value="{{ $addendumDraft->document_name_addendum ?? '' }}"
                                                        accept=".docx" placeholder="Name terima">
                                                    @error('attach-file-addendum')
                                                        <h6>
                                                            <b style="color: rgb(209, 38, 38)">{{ $message }}</b>
                                                        </h6>
                                                    @enderror
                                                    <!--end::Input-->

                                                    <!--begin::Label-->
                                                    <label class="fs-6 fw-bold form-label mt-3">
                                                        <span style="font-weight: normal">Nama
                                                            Dokumen</span>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-solid"
                                                        name="document-name-addendum" id="document-name-addendum"
                                                        value="{{ old('document-name-addendum') ?? ($addendumDraft->document_name_addendum ?? '') }}"
                                                        style="font-weight: normal" placeholder="Nama Document" />
                                                    @error('document-name-addendum')
                                                        <h6>
                                                            <b style="color: rgb(209, 38, 38)">{{ $message }}</b>
                                                        </h6>
                                                    @enderror
                                                    <!--end::Input-->

                                                    <!--begin::Label-->
                                                    <label class="fs-6 fw-bold form-label mt-3">
                                                        <span style="font-weight: normal">Catatan</span>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" style="font-weight: normal"
                                                        class="form-control form-control-solid" name="note-addendum"
                                                        id="note-addendum"
                                                        value="{{ old('note-addendum') ?? ($addendumDraft->note_addendum ?? '') }}"
                                                        placeholder="Catatan" />
                                                    @error('note-addendum')
                                                        <h6>
                                                            <b style="color: rgb(209, 38, 38)">{{ $message }}</b>
                                                        </h6>
                                                    @enderror
                                                    <!--end::Input-->
                                                    <small id="file-error-msg"
                                                        style="color: rgb(199, 42, 42); display:none"></small>


                                                    {{-- begin::Froala Editor --}}
                                                    <div class="my-3">
                                                        <div id="froala-editor-addendum">
                                                            <h1>Attach file with <b>.DOCX</b> format
                                                                only</h1>
                                                        </div>
                                                    </div>

                                                    {{-- end::Froala Editor --}}
                                                    {{-- begin::Read File --}}
                                                    {{-- Begin::input textarea --}}
                                                    <textarea hidden name="content-word-attachment" class="form-control form-control-solid"
                                                        id="content-word-attachment"></textarea>
                                                    {{-- Begin::input textarea --}}
                                                    {{-- end::Read File --}}
                                                </div>
                                                <!--end::Input group-->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Header Contract-->
                </form>
            @else
            @section('title', 'New Addendum Contract')

            <form action="/addendum-contract/draft/upload" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id-addendum" value="{{ $addendumContract->id_addendum }}">
                <input type="hidden" name="id-contract" value="{{ $id_contract }}">
                <!--begin::Toolbar-->
                <div class="toolbar" id="kt_toolbar">
                    <!--begin::Container-->
                    <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                        <!--begin::Page title-->
                        <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                            data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                            class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                            <!--begin::Title-->
                            <h1 class="d-flex align-items-center fs-3 my-1">New Addendum Contract
                            </h1>
                            <!--end::Title-->
                        </div>
                        <!--end::Page title-->
                        <!--begin::Actions-->
                        <div class="d-flex align-items-center py-1">

                            <!--begin::Button-->
                            <button type="submit" class="btn btn-sm btn-primary" id="kt_toolbar_primary_button"
                                style="background-color:#ffa62b;">
                                Save</button>
                            <!--end::Button-->

                            <!--begin::Button-->
                            <a href="/contract-management" class="btn btn-sm btn-primary" id="cloedButton"
                                style="background-color:#f3f6f9;margin-left:10px;color: black;">
                                Close</a>
                            <!--end::Button-->


                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Toolbar-->

                <!--begin::Post-->
                <div class="post d-flex flex-column-fluid" id="kt_post">
                    <!--begin::Container-->
                    <div id="kt_content_container" class="container-fluid">
                        <!--begin::Contacts App- Edit Contact-->
                        <div class="row g-7">
                            @if (Session::has('error'))
                                <h1>{{ Session::get('error') }}</h1>
                            @endif
                            <!--begin::Header Contract-->
                            <div class="col-xl-15">

                                <div class="card card-flush h-lg-100" id="kt_contacts_main">

                                    <div class="card-body pt-5">
                                        <div class="card-title m-0">
                                            <!--begin::Input group Website-->
                                            <div class="fv-row mb-5">
                                                <!--begin::Label-->
                                                <label class="fs-6 form-label mt-3">
                                                    <span style="font-weight: normal">Attachment</span>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->

                                                <input type="file" style="font-weight: normal"
                                                    class="form-control form-control-solid" name="attach-file-addendum"
                                                    id="attach-file-addendum"
                                                    value="{{ $addendumDraft->document_name_addendum ?? '' }}"
                                                    accept=".docx" placeholder="Name terima">
                                                @error('attach-file-addendum')
                                                    <h6>
                                                        <b style="color: rgb(209, 38, 38)">{{ $message }}</b>
                                                    </h6>
                                                @enderror
                                                <!--end::Input-->

                                                <!--begin::Label-->
                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span style="font-weight: normal">Nama
                                                        Dokumen</span>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid"
                                                    name="document-name-addendum" id="document-name-addendum"
                                                    value="{{ old('document-name-addendum') ?? ($addendumDraft->document_name ?? '') }}"
                                                    style="font-weight: normal" placeholder="Nama Document" />
                                                @error('document-name-addendum')
                                                    <h6>
                                                        <b style="color: rgb(209, 38, 38)">{{ $message }}</b>
                                                    </h6>
                                                @enderror
                                                <!--end::Input-->

                                                <!--begin::Label-->
                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span style="font-weight: normal">Catatan</span>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" style="font-weight: normal"
                                                    class="form-control form-control-solid" name="note-addendum"
                                                    id="note-addendum"
                                                    value="{{ old('note-addendum') ?? ($addendumDraft->draft_note ?? '') }}"
                                                    placeholder="Catatan" />
                                                @error('note-addendum')
                                                    <h6>
                                                        <b style="color: rgb(209, 38, 38)">{{ $message }}</b>
                                                    </h6>
                                                @enderror
                                                <!--end::Input-->
                                                <small id="file-error-msg"
                                                    style="color: rgb(199, 42, 42); display:none"></small>


                                                {{-- begin::Froala Editor --}}
                                                <div class="my-3">
                                                    <div id="froala-editor-addendum">
                                                        <h1>Attach file with <b>.DOCX</b> format
                                                            only</h1>
                                                    </div>
                                                </div>

                                                {{-- end::Froala Editor --}}
                                                {{-- begin::Read File --}}
                                                {{-- Begin::input textarea --}}
                                                <textarea hidden name="content-word-attachment" class="form-control form-control-solid"
                                                    id="content-word-attachment"></textarea>
                                                {{-- Begin::input textarea --}}
                                                {{-- end::Read File --}}
                                            </div>
                                            <!--end::Input group-->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Header Contract-->
            </form>
        @endisset
    </div>
    <!--end::Contacts App- Edit Contact-->
</div>

@endsection

@include('template.aside')

@section('js-script')
<script>
    const froalaEditorAddendum = new FroalaEditor("#froala-editor-addendum", {
        documentReady: true,
    });

    const fileAttachmentAddendumElt = document.querySelector("#attach-file-addendum");
    fileAttachmentAddendumElt.addEventListener("change", async e => {
        await readFile(e.target.files[0], "#froala-editor-addendum");
    });



    async function readFile(file, elt) {
        const docx2html = require("docx2html");
        const html = await docx2html(file);
        document.querySelector(` ${elt} .fr-wrapper .fr-view`).innerHTML = html;
        return html;
    };
</script>
@endsection

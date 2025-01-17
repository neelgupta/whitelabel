@extends('company.layouts.master')
@section('title', 'Company Setting')
@section('main-content')
<div class="main-content">
    @include('company.includes.message')
    <div class="page-header">
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="{{ route('company.dashboard') }}" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                <span class="breadcrumb-item active">Setting</span>
            </nav>
        </div>
    </div>
    <!-- Page Container START -->
    <div class="card">
        <div class="card-body">
            <h4>Setting</h4>
            <div class="m-t-50">
                <form id="settings" method="POST" action="{{ route('company.setting.store')}}" enctype="multipart/form-data">
                    @csrf
                    <!-- <input type="hidden" name="user_id" value="{{Auth::user()->id}}"> -->
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="cname">Company Name</label>
                            <input type="text" class="form-control mb-2" name="title" id="cname" placeholder="Company Name" value="{{ !empty($setting) ? $setting->title : env('APP_NAME') }}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="cdomainname">Company Domain</label>
                            <input type="text" class="form-control mb-2" name="" id="" value="my.whitelabel.com" readonly>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="cemail">Company Email</label>
                            <input type="cemail" class="form-control mb-2" name="email" id="cemail" placeholder="Company Email" value="{{ !empty($setting) ? $setting->email : '' }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="contact">Contact Number</label>
                            <input type="text" min="0" maxlength="10" minlength="10" class="form-control mb-2" name="contact_number" id="contact" placeholder="Contact Number" value="{{ !empty($setting) ? $setting->contact_number : '' }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="flink">Facebook Link</label>
                            <input type="url" class="form-control mb-2" name="facebook_link" id="flink" placeholder="Facebook Link" value="{{ !empty($setting) ? $setting->facebook_link : '' }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="t_link">Twitter Link</label>
                            <input type="url" class="form-control mb-2" name="twitter_link" id="t_link" placeholder="Twitter Link" value="{{ !empty($setting) ? $setting->twitter_link : '' }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="l_link">Linkedin Link</label>
                            <input type="url" class="form-control mb-2" name="linkedin_link" id="l_link" placeholder="Linkedin Link" value="{{ !empty($setting) ? $setting->linkedin_link : '' }}">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="descriptions">Description <span class="error">*</span></label>
                            <textarea type="text" class="form-control" id="descriptions" name="description" placeholder="description"> {{ !empty($setting->description) ? $setting->description : '' }} </textarea>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="leader_image">Logo</label>
                            <input type="file" class="form-control" name="logo" id="logofiles" accept=".png, .jpg, .jpeg">
                            <div class="form-row">
                                <div class="form-group col-md-3  mt-2">
                                    <img id="logoimagePreviews" src="{{ !empty($setting) && $setting->logo ? asset('uploads/setting/' . $setting->logo) : '' }}" alt="Logo Preview" class="img-reposive w-100">
                                    <!-- <button type="button" id="logodeleteImageButtons" class="btn btn-sm btn-danger mt-2"><i class="fa fa-trash"></i></button> -->
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="leader_image">Favicon</label>
                            <input type="file" class="form-control" name="favicon" id="files" accept=".png, .jpg, .jpeg">
                            <div class="form-row">
                                <div class="form-group col-md-1 mt-2">
                                    <img id="imagePreviews" src="{{ !empty($setting) && $setting->favicon ? asset('uploads/setting/' . $setting->favicon) : '' }}" alt="Favicon Icon Preview" class="img-reposive w-100">
                                    <!-- <button type="button" id="deleteImageButtons" class="btn btn-sm btn-danger mt-2"><i class="fa fa-trash"></i></button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit" id="btnSubmit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    $('#settings').validate({
        rules: {
            title: {
                required: true
            }
        },
        messages: {
            title: {
                required: "Please enter site title"
            }
        }
    });
    $(document).ready(function() {
        if (!$("#imagePreviews").attr("src")) {
            $("#imagePreviews, #logodeleteImageButtons").hide();
        }
        if (!$("#logoimagePreviews").attr("src")) {
            $("#logoimagePreviews, #deleteImageButtons").hide();
        }
        // Function to preview image
        $("#files").change(function() {
            var input = this;
            var imagePreview = $("#imagePreviews")[0];
            var deleteButton = $("#deleteImageButtons");
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $(imagePreview).attr("src", e.target.result);
                    $(imagePreview).show();
                    $(deleteButton).show();
                };
                reader.readAsDataURL(input.files[0]);
            }
        });
        // Function to delete image
        $("#deleteImageButtons").click(function() {
            var confirmation = confirm("Are you sure you want to delete the image?");
            if (confirmation) {
                $("#files").val(""); // Clear the file input
                $("#imagePreviews").attr("src", "").hide(); // Clear the image preview and hide it
                $(this).hide(); // Hide the delete button
            }
        });
        // Function to preview image
        $("#logofiles").change(function() {
            var input = this;
            var imagePreview = $("#logoimagePreviews")[0];
            var deleteButton = $("#logodeleteImageButtons");
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $(imagePreview).attr("src", e.target.result);
                    $(imagePreview).show();
                    $(deleteButton).show();
                };
                reader.readAsDataURL(input.files[0]);
            }
        });
        // Function to delete image
        $("#logodeleteImageButtons").click(function() {
            var confirmation = confirm("Are you sure you want to delete the image?");
            if (confirmation) {
                $("#logofiles").val(""); // Clear the file input
                $("#logoimagePreviews").attr("src", "").hide(); // Clear the image preview and hide it
                $(this).hide(); // Hide the delete button
            }
        });
    });
    $(document).ready(function() {
        window.onload = () => {
            CKEDITOR.replace("description");
        };
    });
</script>
@endsection
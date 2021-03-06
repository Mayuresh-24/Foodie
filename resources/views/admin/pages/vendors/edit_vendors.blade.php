@extends('admin.layout.app')
@section('content')
    <div class="container-fluid">
                    <h2 class="mt-30 page-title">Vendor</h2>
                    <ol class="breadcrumb mb-30">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="shops.html">Shops</a></li>
                        <li class="breadcrumb-item active">Edit Vendors</li>
                    </ol>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card card-static-2 mb-30">
                                <div class="card-title-1">
                                    <h4>Edit Vendors</h4>
                                </div>
                                <div class="card-body-table">
                                    <div class="news-content-right pd-20">
                                        <h3 style="text-decoration: underline;">Vendors Basic Details</h3>
                                        <div class="row" style="margin-bottom:1%">

                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Shop Name</b></label>
                                                    <input type="text" class="form-control" placeholder="First Name" name="shop_name">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Owner Name</b></label>
                                                    <input type="text" class="form-control" placeholder="Last Name" name="owner_name">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b> Address Proof 1</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter Employee Address" name="address1">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b> Address Proof 2</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter Employee Address" name="address2">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlFile1" class="form-label"><b>Put
                                                            Image</b></label>
                                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="put_image">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Mobile Number</b></label>
                                                    <div class="input-group mb-6">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-mobile"></i></span>
                                                        </div>
                                                        <input type="tel" class="form-control" placeholder="Enter Mobile Number" name="number">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-12">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Shop Address</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter Employee Address" name="shop_address">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <button class="save-btn hover-btn " type="submit ">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    </div>
@endsection

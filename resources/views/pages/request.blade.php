@extends('master')
@section('title','Request')
@section('content')

    <div class="listings">

        <div class="container">
            <div class="row mb-5">
                <div class="col">
                    <div class="section_title text-center">
                        <h3>Request To Company</h3>
                        <span class="section_subtitle">You Can Buy Sale Or Rent Property Here</span>
                    </div>
                </div>
            </div>
            <div class="estate_contact_form">
                <div class="content">
                    <form >
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">*Service Tpe</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Service Type">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">*Property Type</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Enter Proprty Type">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">*Business Purpose</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="Enter Business Porpose">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">*Location</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Location">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">*Zone</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Enter Zone">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">*min Size Area</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Emter Min Size Area">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Max Size Area</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Enter Max Size Area">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">*Min Budget</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Min Budget">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">*Max Budget</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Enter Max Budget">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Bank Loan Service</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Your Bank Loan Service">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Bank Statement</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Enter Your Bank Statement">
                            </div>
                        </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
                <button type="button" class="btn btn-primary btn-sm">Submit</button>
                <button type="button" class="btn btn-secondary btn-sm">Cancel</button>
                </form>
            </div>
        </div>
    </div>
    </div>

@endsection
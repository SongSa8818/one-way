@extends('admin.backend')
@section('title','Form add new property')
@section('content')

<section class="section">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            <form method="post" class="needs-validation" novalidate="">
                <div class="card">
                    <div class="card-header">
                        <h4>Add property</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="frist_name">Title</label>
                                <input id="frist_name" type="text" class="form-control" name="frist_name" autofocus>
                            </div>
                            <div class="form-group col-6">
                                <label for="last_name">Property ID</label>
                                <input id="last_name" type="text" class="form-control" name="last_name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label>Province</label>
                                <select class="form-control select2-hidden-accessible" id="id_address_subdivision" name="address_subdivision" tabindex="-1" aria-hidden="true">
                                    <option value="">Please select...</option>
                                    <option value="Banteay Meanchey">Banteay Meanchey</option>
                                    <option value="Battambang">Battambang</option>
                                    <option value="Kampong Cham">Kampong Cham</option>
                                    <option value="Kampong Chhnang">Kampong Chhnang</option>
                                    <option value="Kampong Speu">Kampong Speu</option>
                                    <option value="Kampong Thom">Kampong Thom</option>
                                    <option value="Kampot">Kampot</option>
                                    <option value="Kandal">Kandal</option>
                                    <option value="Kep">Kep</option>
                                    <option value="Koh Kong">Koh Kong</option>
                                    <option value="Kratie">Kratie</option>
                                    <option value="Mondulkiri">Mondulkiri</option>
                                    <option value="Oddar Meanchey">Oddar Meanchey</option>
                                    <option value="Pailin">Pailin</option>
                                    <option value="Phnom Penh">Phnom Penh</option>
                                    <option value="Preah Vihear">Preah Vihear</option>
                                    <option value="Prey Veng">Prey Veng</option>
                                    <option value="Pursat">Pursat</option>
                                    <option value="Ratanakiri">Ratanakiri</option>
                                    <option value="Siem Reap">Siem Reap</option>
                                    <option value="Sihanoukville">Sihanoukville</option>
                                    <option value="Stung Treng">Stung Treng</option>
                                    <option value="Svay Rieng">Svay Rieng</option>
                                    <option value="Takeo">Takeo</option>
                                    <option value="Tboung Khmum">Tboung Khmum</option>
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <label>District</label>
                                <select id="id_address_locality" name="address_locality" tabindex="-1" class="form-control select2-hidden-accessible" aria-hidden="true">
                                    <option value="">Please select...</option>
                                    <option value="Batheay">Batheay</option>
                                    <option value="Chamkar Leu">Chamkar Leu</option>
                                    <option value="Cheung Prey">Cheung Prey</option>
                                    <option value="Kampong Cham">Kampong Cham</option>
                                    <option value="Kampong Siem">Kampong Siem</option>
                                    <option value="Kang Meas">Kang Meas</option>
                                    <option value="Kaoh Soutin">Kaoh Soutin</option>
                                    <option value="Prey Chhor">Prey Chhor</option>
                                    <option value="Srei Santhor">Srei Santhor</option>
                                    <option value="Stueng Trang">Stueng Trang</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <textarea class="summernote-simple" style="display: none;"></textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary">Save Draft</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
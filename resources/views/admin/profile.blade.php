@extends('admin.layout.master')

@section('title', 'Editar Perfil')

@section('content')

<div class="dash-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="db-add-list-wrap">
                    <div class="act-title">
                        <h5>Editar Perfil :</h5>
                    </div>
                    <div class="db-add-listing">
                        <div class="row">
                            <div class="col-md-4 offset-md-4">
                                <!-- Avatar -->
                                <div class="edit-profile-photo">
                                    <img src="{{ asset('admin/images/agents/agent_1.jpg')}}" width="50%" alt="">
                                    <div class="change-photo-btn">
                                        <div class="contact-form__upload-btn xs-left">
                                            <input class="contact-form__input-file" type="file" name="photo-upload" id="photo-upload">
                                            <span>
                                                Upload Photo
                                            </span>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nome</label>
                                            <input type="text" class="form-control filter-input" placeholder="Tony">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Last name</label>
                                            <input type="text" class="form-control filter-input" placeholder="Stark">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Company name</label>
                                            <input type="text" class="form-control filter-input" placeholder=" Zillion Properties">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Your Title</label>
                                            <input type="text" class="form-control filter-input" placeholder="Real estate Agent">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email </label>
                                            <input type="email" class="form-control filter-input" placeholder="steve@mail.com">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Telefone</label>
                                            <input type="text" class="form-control filter-input" placeholder="+880 252 333">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Celular</label>
                                            <input type="text" class="form-control filter-input" placeholder="+880 252 333">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Whatsapp</label>
                                            <input type="text" class="form-control filter-input" placeholder="Tony99">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Sobre Mim</label>
                                            <textarea class="form-control chat-msg" name="message" rows="4" placeholder="Write About Yourself ..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="#" class="btn v3">Save Changes</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="db-add-list-wrap">
                    <div class="act-title">
                        <h5>Change Password :</h5>
                    </div>
                    <div class="db-add-listing">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Old Password</label>
                                    <input type="password" class="form-control filter-input">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>New Password</label>
                                    <input type="password" class="form-control filter-input">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Confirm new Password</label>
                                    <input type="password" class="form-control filter-input">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <a href="#" class="btn v3">Change Password</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="db-add-list-wrap">
                    <div class="act-title">
                        <h5>Social Networks</h5>
                    </div>
                    <div class="db-add-listing">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Facebook url</label>
                                    <input type="password" class="form-control filter-input">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Twitter url</label>
                                    <input type="password" class="form-control filter-input">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Instagram url</label>
                                    <input type="password" class="form-control filter-input">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <a href="#" class="btn v3">Salvar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

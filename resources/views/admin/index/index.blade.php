@extends('templates.admin.master')
@section('main')
    @section('title', 'index')
    <div class="col-md-10">
                <div class="row">
                <div class="col-md-12 panel-warning">
                    <div class="content-box-header panel-heading">
                        <div class="panel-title ">Dashboard</div>
                    </div>
                    <div class="content-box-large box-with-header">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="panel panel-back noti-box">
                                    <span class="icon-box bg-color-green set-icon">
                                    <span class="glyphicon glyphicon-th-list"></span>
                                </span>
                                    <div class="text-box">
                                        <p class="main-text"><a class="fs-14" href="{{route('admin.cat.index')}}" title="">Quản lý danh mục</a></p>
                                        <p class="text-muted">Có {{$countCat}} danh mục</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="panel panel-back noti-box">
                                    <span class="icon-box bg-color-blue set-icon">
                                    <span class="glyphicon glyphicon-book"></span>
                                </span>
                                    <div class="text-box">
                                        <p class="main-text"><a class="fs-14" href="{{route('admin.news.index')}}" title="">Quản lý tin tức</a></p>
                                        <p class="text-muted">Có {{$countNews}} tin tức</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="panel panel-back noti-box">
                                    <span class="icon-box bg-color-brown set-icon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                    <div class="text-box">
                                        <p class="main-text"><a class="fs-14" href="{{route('admin.user.index')}}" title="">Quản lý người dùng</a></p>
                                        <p class="text-muted">Có {{$countUser}} người dùng</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="panel panel-back noti-box">
                                    <span class="icon-box bg-color-green set-icon">
                                    <span class="glyphicon glyphicon-list"></span>
                                </span>
                                    <div class="text-box">
                                        <p class="main-text"><a class="fs-14" href="{{route('admin.contact.index')}}" title="">Quản lý liên hệ</a></p>
                                        <p class="text-muted">Có {{$countContact}} liên hệ</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="panel panel-back noti-box">
                                    <span class="icon-box bg-color-blue set-icon">
                                    <span class="glyphicon glyphicon-book"></span>
                                </span>
                                    <div class="text-box">
                                        <p class="main-text"><a class="fs-14" href="{{route('admin.aboutme.index')}}" title="">Quản lý Aboutme</a></p>
                                        <p class="text-muted">Có {{$countAboutme}} Aboutme</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="panel panel-back noti-box">
                                    <span class="icon-box bg-color-brown set-icon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                    <div class="text-box">
                                        <p class="main-text"><a class="fs-14" href="{{route('admin.saying.index')}}" title="">Quản lý Saying</a></p>
                                        <p class="text-muted">Có {{$countSaying}} Saying</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="panel panel-back noti-box">
                                    <span class="icon-box bg-color-green set-icon">
                                    <span class="glyphicon glyphicon-list"></span>
                                </span>
                                    <div class="text-box">
                                        <p class="main-text"><a class="fs-14" href="{{route('admin.advs.index')}}" title="">Quản lý Advs</a></p>
                                        <p class="text-muted">Có {{$countAdvs}} Advs</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="panel panel-back noti-box">
                                    <span class="icon-box bg-color-blue set-icon">
                                    <span class="glyphicon glyphicon-book"></span>
                                </span>
                                    <div class="text-box">
                                        <p class="main-text"><a class="fs-14" href="{{route('admin.projects.index')}}" title="">Quản lý Projects</a></p>
                                        <p class="text-muted">Có {{$countProjects}} Projects</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="panel panel-back noti-box">
                                    <span class="icon-box bg-color-brown set-icon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                    <div class="text-box">
                                        <p class="main-text"><a class="fs-14" href="{{route('admin.projects.index')}}" title="">Quản lý Skill</a></p>
                                        <p class="text-muted">Có {{$countSkill}} Skill</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>             
          </div>
@stop

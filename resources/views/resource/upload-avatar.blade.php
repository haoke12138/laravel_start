@extends('layouts.app')





@section('content')
    <form id="create-form" class="form-horizontal" method="post" action="{{ route('uploadAvatar')}}" enctype="multipart/form-data">

        <div style="width: 60%; margin: auto;
 /*background-color: #758fa0*/
">
            <div class="row form-group">
                <div class="col-md-2 control-label">
                    <label for="title">标题</label>
                </div>
                <div class="col-md-2 controls">
                    <input type="text" id="title" name="title" class="form-control">
                </div>
            </div>


            <div class="row form-group">
                <input class="btn btn-default btn-sm"
                       type="file" name="file" value="上传"
{{--                       通过这个来起到筛选的作用--}}
                       accept="audio/mp4,audio/mpeg,audio/basic,audio/ac3,audio/ogg,audio/3gpp,video/mp4"
                       style="display:inline-block;">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

            </div>
            <div class="row form-group">
                <input type="submit" class="btn btn-primary btn-default btn-sm" value="提交"/>
            </div>
        </div>



    </form>
@endsection



<!--




        {{--<form action="upload" method="POST" enctype="multipart/form-data" >--}}
{{--        <input type="text" size="50" name="art_thumb">--}}
{{--        <input id="file_upload" name="file_upload" type="file" multiple="false">--}}
{{--        {{ csrf_field() }}--}}
{{--        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>--}}
{{--        <script src="{{asset('uploadify/jquery.uploadify.min.js')}}" type="text/javascript"></script>--}}
{{--        --}}{{--    <link rel="stylesheet" type="text/css" href="{{asset('uploadify/uploadify.css')}}">--}}
{{--        <script type="text/javascript">--}}
{{--            <?php $timestamp = time();?>--}}
{{--            $(function() {--}}
{{--                $('#file_upload').uploadify({--}}
{{--                    'buttonText' : '12图片上传',--}}
{{--                    'formData'     : {--}}
{{--                        'timestamp' : '<?php echo $timestamp;?>',--}}
{{--                        '_token'     : "{{csrf_token()}}"--}}
{{--                    },--}}
{{--                    'swf'      : "{{asset('uploadify/uploadify.swf')}}",--}}
{{--                    'uploader' : "{{url('/addpic')}}",   //这个是提交图片处理的地址--}}
{{--                    'onUploadSuccess' : function(file, data, response) {--}}
{{--                        $('input[name=art_thumb]').val(data);--}}
{{--                        $('#art_thumb_img').attr('src',data);--}}
{{--                        //                                    alert(data);--}}
{{--                    }--}}
{{--                });--}}
{{--            });--}}
{{--        </script>--}}
{{--        <style>--}}
{{--            .uploadify{display:inline-block;}--}}
{{--            .uploadify-button{border:none; border-radius:5px; margin-top:8px;}--}}
{{--            table.add_tab tr td span.uploadify-button-text{color: #FFF; margin:0;}--}}
{{--        </style>--}}
{{--        <button>ok</button>--}}
{{--        --}}{{--</form>--}}
{{--        <img src="" alt="" id="art_thumb_img" style="max-width: 350px; max-height:100px;">--}}


{{--    <div class="row form-group">--}}
{{--        <div class="col-md-2 control-label">--}}
{{--            <label for="nickname">{{'user.fields.username_label'|trans}}</label>--}}
{{--        </div>--}}
{{--        <div class="col-md-7 controls">--}}
{{--            <input type="text" id="nickname" name="nickname" data-url="{{path('admin_v2_user_create_nickname_check')}}" class="form-control" >--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="row form-group">--}}
{{--        <div class="col-md-2 control-label">--}}
{{--            <label for="password">{{'admin.user.fields.password_label'|trans}}</label>--}}
{{--        </div>--}}
{{--        <div class="col-md-7 controls">--}}
{{--            <input type="password" id="password" name="password" class="form-control">--}}
{{--            <p class="help-block">{{('admin.user.fields.password_hint.'~setting('auth.password_level')|default('low'))|trans}}</p>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="row form-group">--}}
{{--        <div class="col-md-2 control-label">--}}
{{--            <label for="confirmPassword">{{'admin.user.fields.confirm_password_label'|trans}}</label>--}}
{{--        </div>--}}
{{--        <div class="col-md-7 controls">--}}
{{--            <input type="password" id="confirmPassword" name="confirmPassword" class="form-control">--}}
{{--            <p class="help-block">{{'admin.user.fields.confirm_password_hint'|trans}}</p>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    {% include 'org/org-tree-select.html.twig' with {colmd:7,modal: 'modal'} %}--}}

{{--    {% if 'ROLE_TEACHER' in app.user.roles|default(null) %}--}}
{{--    <div class="row form-group">--}}
{{--        <div class="col-md-2 control-label">--}}
{{--            <label for="roles">{{'admin.user.fields.role_label'|trans}}</label>--}}
{{--        </div>--}}
{{--        <div class="col-md-7 controls">--}}
{{--            <input type="checkbox" value="ROLE_TEACHER" name="roles[]"> {{'role.teacher'|trans}}--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    {% endif %}--}}

{{--    <input type="hidden" id="password_level" value="{{ setting('auth.password_level')|default('low') }}">--}}
{{--    <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">--}}

    -->







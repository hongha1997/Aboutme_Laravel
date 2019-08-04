<ul class="nav">
    <!-- Main menu -->
    <li class="current"><a id="{{ (request()->is('admin/index*')) ? 'active' : ''}}" href="{{route('admin.index.index')}}"><i class="glyphicon glyphicon-home"></i> Trang chủ</a></li>
    <li class="submenu">
         <a id="{{ (request()->is('admin/cat*')) ? 'active' : ''}}{{ (request()->is('admin/news*')) ? 'active' : ''}}{{ (request()->is('admin/comment*')) ? 'active' : ''}}" href="#">
            <i class="glyphicon glyphicon-list"></i>QL bài viết
            <span class="caret pull-right"></span>
         </a>
         <!-- Sub menu -->
         <ul>
            <li><a id="{{ (request()->is('admin/cat*')) ? 'active' : ''}}" href="{{route('admin.cat.index')}}">Danh mục</a></li>
            <li><a id="{{ (request()->is('admin/news*')) ? 'active' : ''}}" href="{{route('admin.news.index')}}">Tin tức</a></li>
            <li><a id="{{ (request()->is('admin/comment*')) ? 'active' : ''}}" href="{{route('admin.comment.index')}}">Bình luật</a></li>
        </ul>
    </li>
    <li><a id="{{ (request()->is('admin/user*')) ? 'active' : '' }}" href="{{route('admin.user.index')}}"><i class="glyphicon glyphicon-book"></i>QL người dùng</a></li>
    <li><a id="{{ (request()->is('admin/contact*')) ? 'active' : '' }}" href="{{route('admin.contact.index')}}"><i class="glyphicon glyphicon-book"></i>QL Liên hệ</a></li>
    <li class="submenu">
         <a id="{{ (request()->is('admin/aboutme*')) ? 'active' : ''}}{{ (request()->is('admin/saying*')) ? 'active' : ''}}{{ (request()->is('admin/advs*')) ? 'active' : ''}}{{ (request()->is('admin/projects*')) ? 'active' : ''}}{{ (request()->is('admin/skill*')) ? 'active' : ''}}" href="#">
            <i class="glyphicon glyphicon-list"></i>QL Thông tin
            <span class="caret pull-right"></span>
         </a>
         <!-- Sub menu -->
         <ul>
            <li><a id="{{ (request()->is('admin/aboutme*')) ? 'active' : ''}}" href="{{route('admin.aboutme.index')}}">Aboutme</a></li>
            <li><a id="{{ (request()->is('admin/saying*')) ? 'active' : ''}}" href="{{route('admin.saying.index')}}">Saying</a></li>
            <li><a id="{{ (request()->is('admin/advs*')) ? 'active' : ''}}" href="{{route('admin.advs.index')}}">Advs</a></li>
            <li><a id="{{ (request()->is('admin/projects*')) ? 'active' : ''}}" href="{{route('admin.projects.index')}}">Project</a></li>
            <li><a id="{{ (request()->is('admin/skill*')) ? 'active' : ''}}" href="{{route('admin.skill.index')}}">Skill</a></li>
        </ul>
    </li>
</ul>
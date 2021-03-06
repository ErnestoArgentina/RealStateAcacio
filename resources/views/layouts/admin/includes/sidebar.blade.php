<aside id="leftsidebar" class="sidebar">
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <?php
                        if (\Illuminate\Support\Str::startsWith(Auth::user()->avatar, 'http://') || \Illuminate\Support\Str::startsWith(Auth::user()->avatar, 'https://')) {
                            $user_avatar = Auth::user()->avatar;
                        } else {
                            $user_avatar = Voyager::image(Auth::user()->avatar);
                        }
                    ?>
                    <div class="image"><a href="/profile"><img style="border-radius: 5px !important;" src="{{ $user_avatar }}" alt="User"></a></div>
                    {{--                    <div class="image"><a href="profile.html"><img src="{{asset('tema/images/profile_av.jpg')}}" alt="User"></a></div>--}}
                    <div class="detail">
                        <h4>{{ Auth::user()->name }}</h4>
                        <small>({{ Auth::user()->role->name }})</small>
                    </div>
                    <a href="#" title="Eventos"><i class="zmdi zmdi-calendar"></i></a>
                    <a href="#" title="Inbox"><i class="zmdi zmdi-email"></i></a>
                    <a href="#" title="Contact List"><i class="zmdi zmdi-account-box-phone"></i></a>
                    <a href="#" title="Chat"><i class="zmdi zmdi-comments"></i></a>
                    <a href="#" title="Sair"><i class="zmdi zmdi-power"></i></a>
                </div>
            </li>
            {{--            <li class="header">MAIN</li>--}}
            <li class="active open"><a href="index.html">
                    <i class="zmdi zmdi-home"></i>
                    <span>Dashboard</span></a>
            </li>

            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="zmdi zmdi-account-add"></i>
                    <span>Agendamentos</span>
                </a>
                <ul class="ml-menu">
                    <li><a href="{{route("admin.agendamentos.index")}}">Todos</a></li>
                    <li><a href="{{route('admin.agendamentos.create')}}">Adicionar</a></li>
                </ul>
            </li>
{{--            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-add"></i><span>Docentes</span> </a>--}}
{{--                <ul class="ml-menu">--}}
{{--                    <li><a href="{{route('admin.docentes.index')}}">Todos</a></li>--}}
{{--                    <li><a href="{{route('admin.docentes.create')}}">Adicionar</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-balance-wallet"></i><span>Pagamentos</span> </a>--}}
{{--                <ul class="ml-menu">--}}
{{--                    <li><a href="{{route('admin.docentes.index')}}">Todos</a></li>--}}
{{--                    <li><a href="{{route('admin.docentes.create')}}">Novo</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>Igrejas</span> </a>
                <ul class="ml-menu">
                    <li><a href="{{route('admin.igrejas.index')}}">Todos</a></li>
                    <li><a href="{{route('admin.igrejas.create')}}">Adicionar</a></li>
                </ul>
            </li>
{{--            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>Disciplinas</span> </a>--}}
{{--                <ul class="ml-menu">--}}
{{--                    <li><a href="{{route('admin.disciplinas.index')}}">Todas</a></li>--}}
{{--                    <li><a href="{{route('admin.disciplinas.create')}}">Adicionar</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>Turmas</span> </a>--}}
{{--                <ul class="ml-menu">--}}
{{--                    <li><a href="{{route('admin.turmas.index')}}">Todas</a></li>--}}
{{--                    <li><a href="{{route('admin.turmas.create')}}">Adicionar</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}

{{--            <li class="header"></li>--}}
{{--            <li>--}}
{{--                <div class="progress-container progress-primary m-t-10">--}}
{{--                    <span class="progress-badge">Cadeiras concluidas</span>--}}
{{--                    <div class="progress">--}}
{{--                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width: 67%;">--}}
{{--                            <span class="progress-value">67%</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="progress-container progress-info">--}}
{{--                    <span class="progress-badge">Server Load</span>--}}
{{--                    <div class="progress">--}}
{{--                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">--}}
{{--                            <span class="progress-value">86%</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </li>--}}
        </ul>
    </div>
</aside>

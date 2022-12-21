<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-home"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bxs-eraser"></i>
                        <span>@lang('translation.Fichas')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('admin.ficha.subir_ficha')}}"><i class="bx bx-upload"></i> Cargar Ficha</a></li>
                        <li><a href="{{route('admin.ficha.crear_ficha')}}"><i class="bx bx-add-to-queue"></i> Agregar Ficha</a></li>
                        <li><a href="{{route('admin.ficha.listado')}}"><i class="bx bx-edit"></i> Listado Fichas</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-folder-open"></i>
                        <span>Glosario</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.glosario.listado') }}"><i class="fas fa-list"></i> Listado</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class='bx bx-user'></i>
                        <span>Usuarios</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.usuarios.listado') }}"><i class='bx bx-user-circle' ></i> Listado</a></li>
                        <li><a href="{{ route('admin.usuarios.crear') }}"><i class='bx bx-user-plus'></i> Crear Usuarios</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-conversation"></i>
                        <span>Contenidos</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.contenido.catalogo') }}"><i class="bx bx-question-mark"></i>¿Cómo utilizar el catálogo?</a></li>
                        <li><a href="{{ route('admin.contenido.talleres') }}"><i class="bx bx-walk"></i> Talleres Virtuales</a></li>
                        <li><a href="{{ route('admin.contenido.noticias') }}"><i class="bx bx-news"></i> Noticias</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>
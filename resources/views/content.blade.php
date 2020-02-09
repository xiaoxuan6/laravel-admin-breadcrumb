@extends('admin::index', ['header' => strip_tags($header)])

@section('content')
    <section class="content-header">
        <h1>
            {!! $header ?: trans('admin.title') !!}
            <small>{!! $description ?: trans('admin.description') !!}</small>
        </h1>

        <!-- breadcrumb start -->
        @if ($breadcrumb)
            <ol class="breadcrumb" style="margin-right: 30px;">
                <li><a href="{{ admin_url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                @foreach($breadcrumb as $item)
                    @if($loop->last)
                        <li class="active">
                            @if (\Illuminate\Support\Arr::has($item, 'icon'))
                                <i class="fa fa-{{ $item['icon'] }}"></i>
                            @endif
                            {{ $item['text'] }}
                        </li>
                    @else
                        <li>
                            <a href="{{ admin_url(\Illuminate\Support\Arr::get($item, 'url')) }}">
                                @if (\Illuminate\Support\Arr::has($item, 'icon'))
                                    <i class="fa fa-{{ $item['icon'] }}"></i>
                                @endif
                                {{ $item['text'] }}
                            </a>
                        </li>
                    @endif
                @endforeach
            </ol>
        @elseif(config('admin.enable_default_breadcrumb'))
            <ol class="breadcrumb" style="margin-right: 30px;">
                @if(config('admin.extensions.breadcrumb.enable'))
                    <li><a href="{{ admin_url('/') }}"><i class="fa fa-dashboard"></i> 首页</a></li>
                    @for($i = 2; $i <= count(Request::segments()); $i++)
                        <li>
                            @if(is_numeric(Request::segment($i)))
                                {{ Request::segment($i) }}
                            @else
                                {{ isset($breadcurmb_menu) && $breadcurmb_menu ? ( $breadcurmb_menu[Request::segment($i)] ?? ucfirst(Request::segment($i)) ) : ucfirst(Request::segment($i)) }}
                            @endif
                        </li>
                    @endfor
                @else
                    <li><a href="{{ admin_url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                    @for($i = 2; $i <= count(Request::segments()); $i++)
                        <li>
                            {{ucfirst(Request::segment($i))}}
                        </li>
                    @endfor
                @endif
            </ol>
    @endif

    <!-- breadcrumb end -->

    </section>

    <section class="content">

        @include('admin::partials.alerts')
        @include('admin::partials.exception')
        @include('admin::partials.toastr')

        @if($_view_)
            @include($_view_['view'], $_view_['data'])
        @else
            {!! $_content_ !!}
        @endif

    </section>
@endsection
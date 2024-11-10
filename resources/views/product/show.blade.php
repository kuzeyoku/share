@extends('layout.main')
@section('content')
    {!! $product->description !!}
    @if($product->feature)
        <a class="btn download-button" data-bs-toggle="modal"
           data-bs-target="#exampleModal">
            @svg("fas-download") @lang("front/product.download")
        </a>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">@lang("front/product.downloadable_files")</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @foreach($product->feature as $title => $links)
                            <a class="btn btn-danger mb-2" onclick="return!window.open(this.href)"
                               href="{{ $links }}">{{$title}}</a>
                        @endforeach
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                                data-bs-dismiss="modal">@lang("front/product.close")</button>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection

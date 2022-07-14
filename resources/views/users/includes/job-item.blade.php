<div class="row">
    <div class="col-md-12">
        <div class="job-list">
            <div class="thumb">
                <a href="job-detail/{{ $value->job_detail_id }}">
                    <img src="{{ $value->company->logo }}" alt="" class="image-100-100">
                </a>
            </div>
            <div class="job-list-content">
                <h4>
                    <a href="job-detail/{{ $value->job_detail_id }}">{{ $value->title }}</a>
                </h4>
                <p>{{ $value->description }}</p>
                <div class="job-tag">
                    <div class="pull-left">
                        <div class="meta-tag">
                            <span>
                                <a href="{{ $value->company->link }}" target="_blank">
                                    <i class="ti-briefcase"></i>{{ $value->company->name }}</a>
                            </span>
                            <span>
                                <i class="ti-location-pin"></i>{{ $value->address->name }}</span>
                            <span>
                                <i class="ti-user"></i>{{ $value->user->name }}</span>
                        </div>
                    </div>
                    <div class="pull-right">
                        <div class="icon" id="{{ $value->id }}" @if (Auth::check()) @foreach (Auth::user()->
                            jobFavorite as $favorite)
                            @if ($favorite->id == $value->id)
                            style="background-color:red;color:white"
                            @endif
                            @endforeach
                            @endif
                            >
                            <i class="ti-heart"></i>
                        </div>
                        <a href="job-detail/{{ $value->id }}" class="btn btn-common btn-rm">Xem chi tiết</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
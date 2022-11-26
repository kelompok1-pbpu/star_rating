<section style="background-color: #fdfff7;">
    <div class="container my-5 py-5">
        <div class="row d-flex justify-content-center" style="width: 100%">
            <div class="col-md-12 col-lg-10">
                <div class="card text-dark">
                    <div class="card-body p-4">
                        <h4 class="mb-0">Recent comments</h4>
                        <p class="fw-light mb-4 pb-2">Latest Comments section by users</p>
                    </div>

                    <hr class="my-0"/>
                    @foreach($comment as $comments)

                        <div class="card-body p-4" style="text-align: left">
                            <div class="d-flex flex-start">
                                <div>
                                    <h6 class="fw-bold mb-1">{{$comments->nama}}
                                    </h6>
                                    <div class="d-flex align-items-center mb-3">
                                        <p class="mb-0">
                                            {{$comments->created_at}}

                                        </p>
                                    </div>
                                    <p class="mb-0">
                                        {{$comments->comment}}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <hr class="my-0" style="height: 1px;"/>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>


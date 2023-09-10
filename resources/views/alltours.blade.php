@extends('layout.master')
@section('page')
<section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-5">
                <div class="search-wrap-1 search-wrap-notop ftco-animate p-4">
                    <form action="search" method="post" class="search-property-1">
                        @csrf
                        <div class="row">
                            <div class="col-lg align-items-end">
                                <div class="form-group">
                                    <label for="#">Destination</label>
                                    <div class="form-field">
                                        <div class="icon"><span class="ion-ios-search"></span></div>
                                        <input type="text" class="form-control" placeholder="Search place" name="search">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg align-items-end">

                            </div>


                            <div class="col-lg align-self-end">
                                <div class="form-group">
                                    <div class="form-field">
                                        <input type="submit" value="Search" class="form-control btn btn-primary">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
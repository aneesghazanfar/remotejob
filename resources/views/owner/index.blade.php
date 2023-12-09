<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="{{ asset('/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/mediaqueries.css') }}">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body>
    <div class="d-flex w-100">
        @include('owner.slidebar')

        <div class="rightbar">
            <section class="wrapper pe-lg-4 pe-md-0 pe-sm-0">
                <div class="wrapper-inner p-3">
                    <div class="row">
                        <div class="col-lg-4 px-0 boxshadowftColumn">
                            <div class="p-2">
                                <!-- <h3 class="mb-0 dash-heading bold">Dashboard</h3> -->
                                <div class="row">
                                    <div class="col mb-lg-0 mb-sm-4 mb-md-4 mb-4">
                                        <div class="admin-dash-admin1 h-100">
                                            <div class="d-flex align-items-center justify-content-between">

                                                <div class="ps-3">
                                                    <h1 class="Poppinsmedium users mb-0 fiftyoff">
                                                        Users
                                                    </h1>
                                                    <h5 class="Poppinsmedium numbers mb-0 pt-1 fiftyoff-sub">
                                                        {{ $users_count }}
                                                    </h5>
                                                </div>
                                                <div class=" d-flex align-items-center justify-content-center">
                                                    <!-- <img class="img-fluid"
                                                        src="{{ asset('/images/Center Section/Food Image.png') }}"
                                                        alt="" srcset=""> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4 px-0 boxshadowftColumn">
                            <div class="p-2">
                                <!-- <h3 class="mb-0 dash-heading bold">Dashboard</h3> -->
                                <div class="row">
                                    <div class="col mb-lg-0 mb-sm-4 mb-md-4 mb-4">
                                        <div class="admin-dash-admin1 h-100">
                                            <div class="d-flex align-items-center justify-content-between">

                                                <div class="ps-3">
                                                    <h1 class="Poppinsmedium users mb-0 fiftyoff">
                                                        Branches
                                                    </h1>
                                                    <h5 class="Poppinsmedium numbers mb-0 pt-1 fiftyoff-sub">
                                                        {{ $branches_count}}
                                                    </h5>
                                                </div>
                                                <div class=" d-flex align-items-center justify-content-center">
                                                    <!-- <img class="img-fluid"
                                                        src="{{ asset('/images/Center Section/Food Image.png') }}"
                                                        alt="" srcset=""> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </section>
        </div>
    </div>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".mySwiper", {
        pagination: {
            el: ".swiper-pagination",
        },
    });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script>
    const toooglerMenu = (whichMenu) => {
        if (whichMenu == 'close')
            sidebar.style.left = '-150%';
        else {
            sidebar.style.left = '0';
        }
    }
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>eCommerce</title>
    <link href="/template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/template/css/shop-item.css" rel="stylesheet">

</head>

<body>
    <div id="store">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">E-Commerce</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cart @{{ cart }} </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://github.com/Ali-Abbas-Jumaa/CodeLab_Project">Github</a>
                        </li>
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>




        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <ul class="list-group">
                            <li v-for="item in cart_items" class="list-group-item">
                                <div class="row justify-content-between">
                                    <div class="col-auto"> @{{ item.name }}</div>
                                    <div class="col-auto">
                                        <div class="btn-group btn-group-sm">
                                            <div class="btn-group btn-group-sm">
                                                <button @click="removeItemFromCart(item)" type="button"
                                                    class="btn btn-danger">Remove</button>
                                                <button @click="orderItems(item)" type="button"
                                                    class="btn btn-info">order</button>
                                            </div>
                                        </div>
                                    </div>
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button @click="removeAllItemsFromCart()" type="button" class="btn btn-danger">Remove
                            All</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page Content -->
        <div class="container">

            <div class="row justify-content-center align-items-lg-start">

                <div class="col-lg-3 ">
                    <h1 class="my-4">E-Commerce</h1>
                    <div class="list-group">
                        <div v-for="group in groups">
                            <a @click="getItems(`/items/${group.id}`)"
                                class="list-group-item active my-1">@{{ group.name }}</a>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-3 -->

                <div class="col-lg-9">
                    <div class="row mt-5 justify-content-end">

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            check cart
                        </button>
                    </div>
                    

                    <div v-for="item in items" class="card mt-4">
                        <img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt="">
                        <div class="card-body">
                            <h3 class="card-title">@{{ item.name }}</h3>
                            <h4>$@{{ item.price }}</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente
                                dicta fugit fugiat hic aliquam itaque facere, soluta. Totam id dolores, sint aperiam
                                sequi pariatur praesentium animi perspiciatis molestias iure, ducimus!</p>
                            <button @click="addToCart(item)" class="btn btn-primary">Add To Cart</button>



                        </div>
                    </div>


                </div>
                <!-- /.col-lg-9 -->

            </div>

        </div>
        <!-- /.container -->

        <!-- Footer -->
        <footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
            </div>
            <!-- /.container -->
        </footer>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="/template/vendor/jquery/jquery.min.js"></script>
    <script src="/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    @yield("scripts")
    <script>
    let vue = new Vue({
        el: "#store",
        data: {
            first: '',
            cart: 0,
            cart_items: [],
            groups: [],
            items: [],
        },
        methods: {

            getItems(path) {
                axios.get(path).then(response => {
                    this.items = response.data.items;

                }).catch(error => {
                    console.log(error);
                });
            },

            getGroups() {
                axios.get("/groups").then(response => {
                    this.groups = response.data.groups;
                    this.first = `/items/${this.groups[0].id}`
                    this.getItems(this.first);
                }).catch(error => {
                    console.log(error);
                });
            },
            addToCart(item) {
                this.cart_items.push(item);
                this.cart = this.cart + 1;
            },
            removeItemFromCart(item) {
                var index = this.cart_items.indexOf(item);
                if (index > -1) {
                    this.cart_items.splice(index, 1);
                    this.cart = this.cart - 1;
                }
            },
            showModal() {
                $('#myModal').modal('show');
            },
            removeAllItemsFromCart() {
                if (cart = !0) {
                    this.cart = 0;
                    this.cart_items = [];
                }


            },
            orderItems(item) {

                axios.post(`/orderItem/${item.id}`).then(response => {
                    alert('item have been added successfully');
                    this.removeItemFromCart(item)
                }).catch(function(error) {
                    if (error.response) {
                        if (error.response.status == 401) {
                            alert("login please to do this action");
                        }


                    }
                });
            }

        },

        mounted() {
            this.getGroups();
        }
    })
    </script>
</body>

</html>
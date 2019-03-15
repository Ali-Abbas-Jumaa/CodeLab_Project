@extends('site.layouts.master')
@section('content')
    <div class="row justify-content-center">
        <h1>
            the store page
        </h1>
    </div>
    <div id="groups" class="row mt-5 test2 w-100 justify-content-center">


        <div class="col-md-8 test3">
            {{--Groups--}}
            <div  class="row justify-content-center mt-5 test4">
                <div v-for="group in groups" class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h1>
                                @{{group.name}}
                                @{{group.name}}
                                @{{group.name}}
                            </h1>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection

@section("scripts")
    <script>
        let vue = new Vue({
            el: "#groups",
            data: {
                groups: [],
                response: []
            },
            methods: {


                getGroups() {
                    axios.get("/groups").then(response => {
                        this.groups = response.data.groups;
                        this.response = response.data;
                    }).catch(error => {
                        console.log(error);
                    });
                }
            },
            mounted() {
                this.getGroups();
            }
        })
    </script>
@endsection

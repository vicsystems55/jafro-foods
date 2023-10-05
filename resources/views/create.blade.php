<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Create</title>
</head>

<body>


    <div class="main-content">

        <h2>Manage Immigration Services</h2>

        <div class="container pt-3">


            @if(Session::has('des_msg'))
            <p class="alert alert-info">{{ Session::get('des_msg') }}</p>
            @endif

            <form action="/update-description" method="post">
                @csrf
                <h4>Update Description: </h4>

                <div class="form-group">
                    <textarea name="description" id=""  rows="10" class="form-control" placeholder="Place your text here."></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary float-right btn-lg">Submit</button>
                </div>


            </form>




            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Update Content</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">




                            <form action="/update-immigration-services" enctype="multipart/form-data" method="POST">
                                @csrf
                            <div class="form-group mx-auto text-center">
                                <img id="previewImg" style="height: 270px; width: 270px; object-fit: cover; border-radius: 20px;" class="shadow" src="http://app.localhost/featured_images/2.jpg">

                            </div>

                            <div class="custom-file mb-5 mt-3 text-center ">
                                <input onchange="previewFile4(this.id);" type="file" name="update_cover_image" class="custom-file-input col-md-6" id="customFile">
                                <label class="custom-file-label" for="customFile">Cover Image</label>
                            </div>

                            <input type="hidden" id="service_id" name="service_id" value="">


                            <div class="form-group">
                                <lable for="update_title">Title:</lable>
                                <input id="update_title" name="update_title" value="dfg" class="form-control" type="text" placeholder="Enter title">
                            </div>

                            <div class="form-group">
                                <lable for="update_external_url">Enter external url:</lable>
                                <input id="update_external_url" name="update_external_url" value="" class="form-control" type="text" placeholder="Enter url">
                            </div>

                            <div class="d-none">
                                <button id="updateButton" type="submit">submit</button>
                            </div>

                        </form>
                        </div>
                        <div class="modal-footer">
                            <form action="/activate" method="post">
                                @csrf
                                <input type="hidden" id="service_id_id" name="service_id_id" >
                                <button id="enableBtn" type="submit" class="btn btn-danger" >Disable</button>
                                <button id="disableBtn" type="submit" class="btn btn-success" >Enable</button>

                            </form>

                            <button onclick="document.getElementById('updateButton').click()" type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>


            @if(Session::has('update_msg'))
            <p class="alert alert-info">{{ Session::get('update_msg') }}</p>
            @endif


            <div class="row">




                @forelse ($services as $service)
                    <div class="col-lg-3 col-md-4">

                        <div class=" card border-0 shadow-sm">
                            <img style="height: 150px; width: auto;" src="/imms_covers/{{$service->cover_image}}" style="object-fit: cover;" class="card-img-top" alt="...">
                            <div class="card-body bg-white text-black">
                                <p class="card-text">
                                   {{$service->title}}
                                </p>
                            </div>
                            <div class="card-footer">
                                <button data-toggle="modal" data-target="#exampleModal"
                                onclick="updateService('{{$service->title}}', '{{$service->id}}', '{{$service->external_url}}', '{{$service->cover_image}}', '{{$service->status}}')"
                                class="btn btn-secondary btn-sm">Update</button>
                            </div>

                        </div>


                    </div>


                @empty

                <div class="container">

                    <h6 class="text-center py-5">no items yet.</h6>
                </div>

                @endforelse


            </div>

        </div>

        <div class="col-md-6 mt-3">
            <div class="card card-body">

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <p class="alert alert-warning">{{$error}}</p>
                    @endforeach
                @endif


                <form action="/store-immigration-services"  enctype="multipart/form-data" method="post">
                    @csrf
                <div class="form-group mx-auto text-center">
                    <img id="previewImg" style="height: 270px; width: 270px; object-fit: cover; border-radius: 20px;" class="shadow" src="http://app.localhost/featured_images/2.jpg">

                </div>

                <div class="custom-file mb-5 mt-3 text-center ">
                    <input onchange="previewFile4(this.id);" type="file" name="cover_image" class="custom-file-input col-md-6" id="customFile">
                    <label class="custom-file-label" for="customFile">Cover Image</label>
                </div>



                <div class="form-group">
                    <lable for="title">Title:</lable>
                    <input id="title" class="form-control" type="text" name="title" placeholder="Enter title">
                </div>

                <div class="form-group">
                    <lable for="title">Enter external url:</lable>
                    <input id="title" class="form-control" type="text"  name="external_url" placeholder="Enter url">
                </div>

                <div class="form-group">

                    <button type="submit" class="btn btn-primary btn-block">Create</button>
                </div>

            </form>
            </div>
        </div>



    </div>

    <script>
        function previewFile4(chooser) {
            console.log('hello');


            var file = $('#' + chooser).get(0).files[0];

            if (file) {
                var reader = new FileReader();

                reader.onload = function() {
                    var previewer = chooser + '_preview';

                    // $('#' + previewer).css('background-image', 'url("' + reader.result + '")');
                    $("#previewImg").attr("src", reader.result);

                    // $("#bg-img").css("background-image", "url(" + reader.result + ")");
                }

                reader.readAsDataURL(file);
            }
        }


        function updateService(title, id, external_url, cover_image, status){

            alert(id);
            // console.log(document.getElementById("update_title").value)

            document.getElementById('previewImg').src='/imms_covers/'+cover_image
            document.getElementById('update_title').value= title
            document.getElementById('service_id').value= id
            document.getElementById('service_id_id').value= id

            document.getElementById('update_external_url').value= external_url


            if(status == 'enabled'){
                document.getElementById('enableBtn').style.display ='none';
                document.getElementById('disableBtn').style.display ='block';


            }else{
                document.getElementById('enableBtn').style.display ='block';
                document.getElementById('disableBtn').style.display ='none';



            }


        }
    </script>



    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>

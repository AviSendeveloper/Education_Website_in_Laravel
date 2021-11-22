<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Add Subject</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}
</head>

<body class="animsition">
    <div class="page-wrapper">
       @include('layouts.header')

            <!-- MAIN CONTENT-->
            <div class="main-content">
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/subject-form-submit" method="post" enctype="multipart/form-data">
                            @csrf
                            <h4>Category</h4><br>
                            
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="category" value="pre school" id="category1">
                            <label class="form-check-label" for="category1">
                                preschool
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="category" value="kinder garten" id="category2" checked>
                            <label class="form-check-label" for="category2">
                                kinder garten
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="category" value="1st grade" id="category1">
                            <label class="form-check-label" for="category1">
                                1st grade
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="category" value="2nd grade" id="category2" >
                            <label class="form-check-label" for="category2">
                                2nd grade
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="category" value="3rd grade" id="category1">
                            <label class="form-check-label" for="category1">
                                3rd grade
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="category" value="4th grade" id="category2" >
                            <label class="form-check-label" for="category2">
                               4th grade
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="category" value="5th grade" id="category1">
                            <label class="form-check-label" for="category1">
                                5th grade
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="category" value="6th grade" id="category2" >
                            <label class="form-check-label" for="category2">
                                6th grade
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="category" value="7th grade" id="category1">
                            <label class="form-check-label" for="category1">
                                7th grade
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="category" value="8th grade" id="category2" >
                            <label class="form-check-label" for="category2">
                                8th grade
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="category" value="high school" id="category2" >
                            <label class="form-check-label" for="category2">
                            high school
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="category" value="miscellaneous" id="category2" >
                            <label class="form-check-label" for="category2">
                           miscellaneous
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="category" value="cogat" id="category2" >
                            <label class="form-check-label" for="category2">
                          cogat
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="category" value="competitive math" id="category2" >
                            <label class="form-check-label" for="category2">
                            competitive math
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="category" value="activities" id="category2" >
                            <label class="form-check-label" for="category2">
                            activities
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="category" value="STEM" id="category2" >
                            <label class="form-check-label" for="category2">
                           STEM
                            </label>
                            </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Name:</label>
                            <input type="text" class="form-control" name="name" id="recipient-name" required="">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="form-label">Description:</label>
                            <textarea name="description" id="" cols="30" rows="5" style="border: 1px solid orange;" required=""></textarea>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Meta Title:</label>
                            <input type="text" class="form-control" name="meta_title" id="recipient-name" required="">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Meta Description:</label>
                            <input type="text" class="form-control" name="meta_description" id="recipient-name" required="">
                        </div>

                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Meta Keywords:</label>
                            <input type="text" class="form-control" name="meta_keyword" id="recipient-name" required="">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Slug:</label>
                            <input type="text" class="form-control" name="slug" id="recipient-name" required="">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Image:</label>
                            <input type="file" class="form-control" name="image" id="recipient-name" required="">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Answer File Upload:</label>
                            <input type="file" class="form-control" name="file" id="recipient-name" required="">
                        </div>
                     
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                    </form>
                    </div>
                </div>
                </div>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                   
                        <div class="row m-t-30">
                            <div class="col-md-12">
                            <button type="button" class="btn btn-danger float-right" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" style="margin-bottom: 20px;">Add Subject</button>
                                <!-- DATA TABLE-->
                              
                                <div class="table-responsive m-b-40">
                                @if(Session::has('success'))
                                <div class="alert alert-success" role="alert" style="color: black;font-size: 16;">
                                    {{Session::get('success')}}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            @if(Session::has('error'))
                                <div class="alert alert-danger" role="alert" style="color: black;font-size: 16;">
                                    {{Session::get('error')}}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif  
                                @if ($errors->any())
                                  <div class="alert alert-danger">
                                     <ul>
                                        @foreach ($errors->all() as $error)
                                           <li>{{ $error }}</li>
                                        @endforeach
                                     </ul>
                                    
                                  </div>
                                @endif
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Category</th>
                                                <th>Name</th>
                                                <th>description</th>
                                                <th>Image</th>
                                                <th>File Upload</th>
                                                <th>Slug</th>
                                                <th>Meta Title</th>
                                                <th>Meta Description</th>
                                                <th>Meta Keyword</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $item)
                                            <tr>
                                                <td>{{$item['id']}}</td>
                                                <td class="process">{{$item['category']}}</td>
                                                <td>{{$item['name']}}</td>
                                                <td>{{$item['description']}}</td>
                                                <td> <img src="{{asset('public/uploads/image')}}/{{$item['image']}}" alt=""> </td>
                                                <td>{{$item['file']}}</td>
                                                <td>{{$item['slug']}}</td>
                                                <td>{{$item['meta_title']}}</td>
                                                <td>{{$item['meta_description']}}</td>
                                                <td>{{$item['meta_keyword']}}</td>
                                                <td>
                                                    <a href="/delete-subject/{{$item['id']}}"><i class="fas fa-trash"></i></a>&nbsp;&nbsp;
                                                    <a href="/edit-subject/{{$item['id']}}"><i class="fas fa-edit"></i></a>&nbsp;&nbsp;
                                                    <a title="clone" href="/clone-subject/{{$item['id']}}"><i class="fas fa-clone"></i></a>
                                                </td>
                                            </tr>
                                           @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        @include('layouts.footer')

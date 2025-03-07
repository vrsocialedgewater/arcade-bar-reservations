@extends('admin.layouts.app')

@section('styles')
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/datatables.css">
@endsection

@section('container')
    <div class="container-fluid">
        <div class="row">
            <!-- Row Selection And Deletion (Single Row) Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0 card-no-border">
                        <button class="btn btn-secondary mb-3" id="single-row-delete-btn" data-bs-toggle="modal" data-bs-target="#add_modal"><i class="fa fa-plus"></i> Add Location</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive custom-scrollbar">
                            <table class="display" id="row-select-delete">
                                <thead>
                                <tr>
                                    <th>Sl#</th>
                                    <th>Title</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Venue</td>
                                    <td>5505 W 20th Ave suite 200, Edgewater, CO 80214</td>
                                    <td>
                                        <ul class="action">
                                            <li class="edit"><a href="#"><i class="icon-pencil-alt"></i></a></li>
                                            <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                        </ul>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row Selection And Deletion (Single Row) Ends-->
        </div>
    </div>
    <div class="modal fade" id="add_modal" tabindex="-1" role="dialog" aria-labelledby="add_modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-secondary-subtle ">
                    <h4 class="p-1">Add Location</h4>
                    <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="theme-form">
                        <div class="form-group">
                            <label class="col-form-label">Location Title</label>
                            <input class="form-control" type="text" name="title" required="" placeholder="Enter title">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Address</label>
                            <textarea class="form-control" name="description"placeholder="Enter address"></textarea>
                        </div>
                        <div class="form-group mb-0">
                            <div class="text-end mt-3">
                                <button class="btn btn-primary btn-block w-100" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>>
    <script>
        (function ($) {
            $(document).ready(function () {
                var deleterow = $("#row-select-delete").DataTable();
                $("#row-select-delete tbody").on("click", "tr", function () {
                    if ($(this).hasClass("selected")) {
                        $(this).removeClass("selected");
                    } else {
                        deleterow.$("tr.selected").removeClass("selected");
                        $(this).addClass("selected");
                    }
                });
            });

        })(jQuery);
    </script>
@endsection
